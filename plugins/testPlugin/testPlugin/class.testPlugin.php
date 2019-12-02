<?php
/**
 * class.testPlugin.php
 *  
 */

  class testPluginClass extends PMPlugin {
    function __construct() {
      set_include_path(
        PATH_PLUGINS . 'testPlugin' . PATH_SEPARATOR .
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