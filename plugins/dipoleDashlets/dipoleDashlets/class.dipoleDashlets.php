<?php
/**
 * class.dipoleDashlets.php
 *  
 */

  class dipoleDashletsClass extends PMPlugin {
    function __construct() {
      set_include_path(
        PATH_PLUGINS . 'dipoleDashlets' . PATH_SEPARATOR .
        get_include_path()
      );
    }

    function setup()
    {
    }

    function getFieldsForPageSetup()
    {
    }

    function updateFieldsForPageSetup()
    {
    }

  }
?>