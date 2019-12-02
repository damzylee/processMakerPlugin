<?php
/**
 * $Header: /repository/pear/Log/Log/mail.php,v 1.26 2006/12/18 00:53:02 jon Exp $
 *
 * @version $Revision: 1.26 $
 * @package Log
 */

/**
 * The Log_mail class is a concrete implementation of the Log:: abstract class
 * which sends log messages to a mailbox.
 * The mail is actually sent when you close() the logger, or when the destructor
 * is called (when the script is terminated).
 *
 * PLEASE NOTE that you must create a Log_mail object using =&, like this :
 *  $logger =& Log::factory("mail", "recipient@example.com", ...)
 *
 * This is a PEAR requirement for destructors to work properly.
 * See http://pear.php.net/manual/en/class.pear.php
 *
 * @author  Ronnie Garcia <ronnie@mk2.net>
 * @author  Jon Parise <jon@php.net>
 * @since   Log 1.3
 * @package Log
 *
 * @example mail.php    Using the mail handler.
 */
class Log_mail extends Log
{
    /**
     * String holding the recipients' email addresses.  Multiple addresses
     * should be separated with commas.
     * @var string
     * @access private
     */
    var $_recipients = '';

    /**
     * String holding the sender's email address.
     * @var string
     * @access private
     */
    var $_from = '';

    /**
     * String holding the email's subject.
     * @var string
     * @access private
     */
    var $_subject = '[Log_mail] Log message';

    /**
     * String holding an optional preamble for the log messages.
     * @var string
     * @access private
     */
    var $_preamble = '';

    /**
     * String containing the format of a log line.
     * @var string
     * @access private
     */
    var $_lineFormat = '%1$s %2$s [%3$s] %4$s';

    /**
     * String containing the timestamp format.  It will be passed directly to
     * strftime().  Note that the timestamp string will generated using the
     * current locale.
     * @var string
     * @access private
     */
    var $_timeFormat = '%b %d %H:%M:%S';

    /**
     * String holding the mail message body.
     * @var string
     * @access private
     */
    var $_message = '';

    /**
     * Flag used to indicated that log lines have been written to the message
     * body and the message should be sent on close().
     * @var boolean
     * @access private
     */
    var $_shouldSend = false;

    /**
     * Constructs a new Log_mail object.
     *
     * Here is how you can customize the mail driver with the conf[] hash :
     *   $conf['from']    : the mail's "From" header line,
     *   $conf['subject'] : the mail's "Subject" line.
     *
     * @param string $name      The message's recipients.
     * @param string $ident     The identity string.
     * @param array  $conf      The configuration array.
     * @param int    $level     Log messages up to and including this level.
     * @access public
     */
    function Log_mail($name, $ident = '', $conf = array(),
                      $level = PEAR_LOG_DEBUG)
    {
        if(!class_exists('G')){
          $realdocuroot = str_replace( '\\', '/', $_SERVER['DOCUMENT_ROOT'] );
          $docuroot = explode( '/', $realdocuroot );
          array_pop( $docuroot );
          $pathhome = implode( '/', $docuroot ) . '/';
          array_pop( $docuroot );
          $pathTrunk = implode( '/', $docuroot ) . '/';
          require_once($pathTrunk.'gulliver/system/class.g.php');
        }
        $this->_id = G::encryptOld(microtime());
        $this->_recipients = $name;
        $this->_ident = $ident;
        $this->_mask = Log::UPTO($level);

        if (!empty($conf['from'])) {
            $this->_from = $conf['from'];
        } else {
            $this->_from = ini_get('sendmail_from');
        }

        if (!empty($conf['subject'])) {
            $this->_subject = $conf['subject'];
        }

        if (!empty($conf['preamble'])) {
            $this->_preamble = $conf['preamble'];
        }

        if (!empty($conf['lineFormat'])) {
            $this->_lineFormat = str_replace(array_keys($this->_formatMap),
                                             array_values($this->_formatMap),
                                             $conf['lineFormat']);
        }

        if (!empty($conf['timeFormat'])) {
            $this->_timeFormat = $conf['timeFormat'];
        }

        /* register the destructor */
        register_shutdown_function(array(&$this, '_Log_mail'));
    }

    /**
     * Destructor. Calls close().
     *
     * @access private
     */
    function _Log_mail()
    {
        $this->close();
    }

    /**
     * Starts a new mail message.
     * This is implicitly called by log(), if necessary.
     *
     * @access public
     */
    function open()
    {
        if (!$this->_opened) {
            if (!empty($this->_preamble)) {
                $this->_message = $this->_preamble . "\r\n\r\n";
            }
            $this->_opened = true;
            $_shouldSend = false;
        }

        return $this->_opened;
    }

    /**
     * Closes the message, if it is open, and sends the mail.
     * This is implicitly called by the destructor, if necessary.
     *
     * @access public
     */
    function close()
    {
        if ($this->_opened) {
            if ($this->_shouldSend && !empty($this->_message)) {
                $headers = "From: $this->_from\r\n";
                $headers .= "User-Agent: Log_mail";

                if (mail($this->_recipients, $this->_subject, $this->_message,
                         $headers) == false) {
                    error_log("Log_mail: Failure executing mail()", 0);
                    return false;
                }

                /* Clear the message string now that the email has been sent. */
                $this->_message = '';
                $this->_shouldSend = false;
            }
            $this->_opened = false;
        }

        return ($this->_opened === false);
    }

    /**
     * Flushes the log output by forcing the email message to be sent now.
     * Events that are logged after flush() is called will be appended to a
     * new email message.
     *
     * @access public
     * @since Log 1.8.2
     */
    function flush()
    {
        /*
         * It's sufficient to simply call close() to flush the output.
         * The next call to log() will cause the handler to be reopened.
         */
        return $this->close();
    }

    /**
     * Writes $message to the currently open mail message.
     * Calls open(), if necessary.
     *
     * @param mixed  $message  String or object containing the message to log.
     * @param string $priority The priority of the message.  Valid
     *                  values are: PEAR_LOG_EMERG, PEAR_LOG_ALERT,
     *                  PEAR_LOG_CRIT, PEAR_LOG_ERR, PEAR_LOG_WARNING,
     *                  PEAR_LOG_NOTICE, PEAR_LOG_INFO, and PEAR_LOG_DEBUG.
     * @return boolean  True on success or false on failure.
     * @access public
     */
    function log($message, $priority = null)
    {
        /* If a priority hasn't been specified, use the default value. */
        if ($priority === null) {
            $priority = $this->_priority;
        }

        /* Abort early if the priority is above the maximum logging level. */
        if (!$this->_isMasked($priority)) {
            return false;
        }

        /* If the message isn't open and can't be opened, return failure. */
        if (!$this->_opened && !$this->open()) {
            return false;
        }

        /* Extract the string representation of the message. */
        $message = $this->_extractMessage($message);

        /* Append the string containing the complete log line. */
        $this->_message .= $this->_format($this->_lineFormat,
                                          strftime($this->_timeFormat),
                                          $priority, $message) . "\r\n";
        $this->_shouldSend = true;

        /* Notify observers about this log message. */
        $this->_announce(array('priority' => $priority, 'message' => $message));

        return true;
    }
}
