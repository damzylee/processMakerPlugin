<?php /* Smarty version 2.6.30, created on 2019-08-30 23:25:43
         compiled from /opt/processmaker/workflow/engine/templates/cases/cases_ScreenDerivation.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/opt/processmaker/workflow/engine/templates/cases/cases_ScreenDerivation.html', 329, false),)), $this); ?>
<div id="publisherContent[1]" style="margin: 0px;" align="center">
<form name="frmDerivation" id="frmDerivation" action="cases_Derivate" method="POST" class="formDefault" style="margin: 0px;">
  <input type="hidden" name="form[ROU_TYPE]" id="form[ROU_TYPE]" value="<?php echo $this->_tpl_vars['PROCESS']['ROU_TYPE']; ?>
">
  <div class="borderForm" style="width: 500px; padding-left: 0; padding-right: 0; border-width: 1px;">
    <div class="boxTop">
      <div class="a"></div>
      <div class="b"></div>
      <div class="c"></div>
    </div>
    <div class="content" style="height: 100%;">
      <table width="99%">
        <tr>
          <td valign='top'>
          <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
              <td colspan="2" class="withoutLabel">
              <table width='100%' cellspacing="0" cellpadding="0">
                <tr>
                  <?php if ($this->_tpl_vars['PREVIOUS_PAGE']): ?>
                  <td valign='top' class='tableOption' width='33%' align="left">
                  <table cellspacing="0" cellpadding="0" width='100%'>
                    <tr>
                      <td class='tableOption' align="left" width="120"><img src="/images/bulletButtonLeft.gif" width="6" />&nbsp; <a class="tableOption" href='<?php echo $this->_tpl_vars['PREVIOUS_PAGE']; ?>
' id="form[DYN_BACKWARD]" name="form[DYN_BACKWARD]" onclick=""><?php echo $this->_tpl_vars['PREVIOUS_PAGE_LABEL']; ?>
</a></td>
                      <td class='tableOption'>&nbsp;</td>
                    </tr>
                  </table>
                  </td>
                  <?php endif; ?>
                  <td valign='top' class='tableOption'>
                  <table cellspacing="0" cellpadding="0" width='100%'>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                  </td>
                  <td valign='top'></td>
                </tr>
              </table>
              </td>
            </tr>

            <tr>
              <?php if ($this->_tpl_vars['PROCESS']['ERROR'] == '' && $this->_tpl_vars['PROCESS']['ROU_TYPE'] != 'SELECT' && $this->_tpl_vars['PROCESS']['ROU_FINISH_FLAG']): ?>
              <td class='FormTitle' colspan="2" align=""><?php echo $this->_tpl_vars['END_OF_PROCESS']; ?>
</td>
              <?php else: ?>
              <td class='FormTitle' colspan="2" align=""><?php echo $this->_tpl_vars['ASSIGN_TASK']; ?>
</td>
              <?php endif; ?>
            </tr>

            <?php $_from = $this->_tpl_vars['TASK']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['data']):
?>
            <tr height="5">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>

            <?php if ($this->_tpl_vars['PROCESS']['ROU_TYPE'] == 'SELECT'): ?>
            <form name="frmDerivation<?php echo $this->_tpl_vars['id']; ?>
" id="frmDerivation<?php echo $this->_tpl_vars['id']; ?>
" action="cases_Derivate" method="POST" class="formDefault" method="post" style="margin: 0px;"><input type="hidden" name="form[ROU_TYPE]" id="form[ROU_TYPE]" value="<?php echo $this->_tpl_vars['PROCESS']['ROU_TYPE']; ?>
">
            <tr>
              <td class="FormLabel" width="100"><?php echo $this->_tpl_vars['OPTION_LABEL']; ?>
 <?php echo $this->_tpl_vars['id']; ?>
:</td>
              <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['ROU_CONDITION']; ?>
</td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['PROCESS']['ERROR'] == ''): ?>
                <?php if (( $this->_tpl_vars['data']['NEXT_TASK']['TAS_TYPE'] == "INTERMEDIATE-CATCH-MESSAGE-EVENT" )): ?>
                    <tr>
                        <td class="FormFieldContent" colspan="2" style="text-align: center"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_TITLE']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_HIDDEN_FIELD']; ?>
</td>
                    </tr>
                <?php elseif (( $this->_tpl_vars['data']['NEXT_TASK']['TAS_TYPE'] == "INTERMEDIATE-CATCH-TIMER-EVENT" )): ?>
                    <tr style="display: none;">
                        <td class="FormFieldContent" colspan="2"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_HIDDEN_FIELD']; ?>
</td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td class="FormLabel" width="100"><?php echo $this->_tpl_vars['NEXT_TASK_LABEL']; ?>
:</td>
                        <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_TITLE']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_HIDDEN_FIELD']; ?>
</td>
                    </tr>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (! $this->_tpl_vars['data']['NEXT_TASK']['ROU_FINISH_FLAG']): ?>
              <?php if ($this->_tpl_vars['data']['NEXT_TASK']['TAS_NEXT'] == 'STATIC_MI' || $this->_tpl_vars['data']['NEXT_TASK']['TAS_NEXT'] == 'CANCEL_MI'): ?>
                <?php $_from = $this->_tpl_vars['data']['NEXT_TASK']['USER_ASSIGNED']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['dataUser']):
?>
                <?php if ($this->_tpl_vars['dataUser']['USR_HIDDEN_FIELD'] != ''): ?>
                <tr>
                  <td class="FormLabel" width="100"><?php echo $this->_tpl_vars['EMPLOYEE']; ?>
:</td>
                  <td class="FormFieldContent"><?php echo $this->_tpl_vars['dataUser']['USR_UID']; ?>
<?php echo $this->_tpl_vars['dataUser']['USR_HIDDEN_FIELD']; ?>
</td>
                </tr>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['data']['NEXT_TASK']['TAS_NEXT'] == ''): ?>
                <?php if ($this->_tpl_vars['data']['NEXT_TASK']['USR_UID'] != ''): ?>
                    <?php if (( $this->_tpl_vars['data']['NEXT_TASK']['TAS_TYPE'] == "INTERMEDIATE-CATCH-MESSAGE-EVENT" )): ?>
                        <tr>
                            <td class="FormFieldContent" colspan="2" style="text-align: center"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_HIDDEN_FIELD']; ?>
</td>
                        </tr>
                    <?php elseif (( $this->_tpl_vars['data']['NEXT_TASK']['TAS_TYPE'] == "SCRIPT-TASK" )): ?>
                        <tr>
                            <td class="FormLabel" width="100"></td>
                            <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_UID']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_HIDDEN_FIELD']; ?>
</td>
                        </tr>
                    <?php elseif (( $this->_tpl_vars['data']['NEXT_TASK']['TAS_TYPE'] == "SERVICE-TASK" )): ?>
                    <tr>
                        <td class="FormLabel" width="100"></td>
                        <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_UID']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_HIDDEN_FIELD']; ?>
</td>
                    </tr>
                    <?php elseif (( $this->_tpl_vars['data']['NEXT_TASK']['TAS_TYPE'] == "INTERMEDIATE-CATCH-TIMER-EVENT" )): ?>
                        <tr>
                            <td class="FormLabel" width="100"><?php echo $this->_tpl_vars['NEXT_TASK_LABEL']; ?>
:</td>
                            <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_UID']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_HIDDEN_FIELD']; ?>
</td>
                        </tr>
                    <?php else: ?>
                        <tr>
                            <td class="FormLabel" width="100"><?php echo $this->_tpl_vars['EMPLOYEE']; ?>
:</td>
                            <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_UID']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_HIDDEN_FIELD']; ?>
</td>
                        </tr>
                    <?php endif; ?>
                <?php endif; ?>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['data']['NEXT_TASK']['TAS_TRANSFER_FLY'] == 'true'): ?>
              <tr>
                <td class='FormSubTitle' colspan="2" align=""><?php echo $this->_tpl_vars['TAS_TIMING_TITLE']; ?>
 For <?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_TITLE']; ?>
 Task</td>
              </tr>
              <tr>
                <td class="FormLabel" width="100"><?php echo $this->_tpl_vars['TAS_DURATION']; ?>
:</td>
                <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_DURATION']; ?>
</td>
              </tr>
              <tr>
                <td class="FormLabel" width="100"><?php echo $this->_tpl_vars['TAS_TIMEUNIT']; ?>
:</td>
                <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_TIMEUNIT']; ?>
</td>
              </tr>
              <tr>
                <td class="FormLabel" width="100"><?php echo $this->_tpl_vars['TAS_TYPE_DAY']; ?>
:</td>
                <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_TYPE_DAY']; ?>
</td>
              </tr>
              <?php if ($this->_tpl_vars['data']['NEXT_TASK']['TAS_CALENDAR'] != ''): ?>
              <tr>
                <td class="FormLabel" width="100"><?php echo $this->_tpl_vars['TAS_CALENDAR']; ?>
:</td>
                <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_CALENDAR']; ?>
</td>
              </tr>
              <?php endif; ?>
              <tr height="0">
                <td colspan="2">
                  <?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_TRANSFER_HIDDEN_FLY']; ?>

                </td>
              </tr>
            <?php endif; ?>
            <?php else: ?>
            <tr>
              <td class="FormLabel" width="100"><?php echo $this->_tpl_vars['LAST_EMPLOYEE']; ?>
:</td>
              <td class="FormFieldContent"><?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_UID']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_HIDDEN_FIELD']; ?>
</td>
            </tr>
            <?php endif; ?>

            <tr height="0">
              <td colspan="2">
                <?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_ASSIGN_TYPE']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_DEF_PROC_CODE']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['DEL_PRIORITY']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_PARENT']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['ROU_PREVIOUS_TASK']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['ROU_PREVIOUS_TYPE']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['ROU_CONDITION']; ?>
<?php echo $this->_tpl_vars['data']['NEXT_TASK']['SOURCE_UID']; ?>

              </td>
            </tr>

            <?php if ($this->_tpl_vars['PROCESS']['ROU_TYPE'] == 'SELECT'): ?>
            <tr>
              <td colspan="2" align="center">
                <?php if ($this->_tpl_vars['data']['NEXT_TASK']['TAS_ASSIGN_TYPE'] != '' && ! $this->_tpl_vars['data']['NEXT_TASK']['ROU_FINISH_FLAG']): ?>
                <input type="button" class='module_app_button___gray' name="btnContinue_<?php echo $this->_tpl_vars['id']; ?>
" id="btnContinue" value="<?php echo $this->_tpl_vars['CONTINUE_WITH_OPTION']; ?>
 <?php echo $this->_tpl_vars['id']; ?>
 " onclick="return clickButton(this);">
                <?php endif; ?> <?php if ($this->_tpl_vars['data']['NEXT_TASK']['TAS_ASSIGN_TYPE'] != '' && $this->_tpl_vars['data']['NEXT_TASK']['ROU_FINISH_FLAG']): ?>
                <input type="button" class='module_app_button___gray' name="btnContinue_<?php echo $this->_tpl_vars['id']; ?>
" id="btnContinue" value="<?php echo $this->_tpl_vars['FINISH_WITH_OPTION']; ?>
 <?php echo $this->_tpl_vars['id']; ?>
 " onclick="return clickButton(this);">
                  <?php echo $this->_tpl_vars['data']['NEXT_TASK']['TAS_ASSIGN_TYPE']; ?>

                <?php endif; ?>
              </td>
            </tr>

            </form>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <?php if ($this->_tpl_vars['PROCESS']['ERROR'] == '' && $this->_tpl_vars['PROCESS']['ROU_TYPE'] != 'SELECT' && ! $this->_tpl_vars['PROCESS']['ROU_FINISH_FLAG']): ?>
            <tr>
              <td colspan="2" align="center">
                <input type="button" class='module_app_button___gray' name="btnContinue_<?php echo $this->_tpl_vars['id']; ?>
" id="btnContinue" value="<?php echo $this->_tpl_vars['CONTINUE']; ?>
" <?php echo $this->_tpl_vars['PROCESS']['DISABLED']; ?>
 onclick="return clickButton(this);">
              </td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['PROCESS']['ERROR'] == '' && $this->_tpl_vars['PROCESS']['ROU_TYPE'] != 'SELECT' && $this->_tpl_vars['PROCESS']['ROU_FINISH_FLAG']): ?>
            <tr>
              <td colspan="2" align="center">
                <input type="button" class='module_app_button___gray' name="btnContinue_<?php echo $this->_tpl_vars['id']; ?>
" id="btnContinue" value="<?php echo $this->_tpl_vars['FINISH']; ?>
" onclick="return clickButton(this);">
              </td>
            </tr>
            <?php endif; ?>
          </table>
          </td>
        </tr>
      </table>
    </div>

    <div class="boxBottom">
      <div class="a"></div>
      <div class="b"></div>
      <div class="c"></div>
    </div>
  </div>
<?php if ($this->_tpl_vars['PROCESS']['ROU_TYPE'] != 'SELECT'): ?>
</form>
<?php endif; ?>
</div>

<script>
  // deviration type
  var rouType = '<?php echo $this->_tpl_vars['PROCESS']['ROU_TYPE']; ?>
';
  var userHidden = '<?php echo $this->_tpl_vars['data']['NEXT_TASK']['USR_HIDDEN_FIELD']; ?>
';
  <?php echo '

  // option select
  var optionSelect = "";

  /**
   * @name clickButton
   * @description verify the option select in button
   * @access public
   * @param obj [object: button, submit]
   * @return boolean
   * @author Brayan Pereyra - Cochalo <brayan@colosa.com>
   */
  var clickButton  = function(obj) {
    disabledButton();

    var nameButton = obj.name;
    var pos        = nameButton.lastIndexOf("_");
    optionSelect   = nameButton.substr(pos+1);
    if (validateSubmitForm()) {
      obj.form.submit();
    }
    return true;
  };

  /**
   * @name disabledButton
   * @description disable all button type submit
   * @access public
   * @return boolean
   * @author Brayan Pereyra - Cochalo <brayan@colosa.com>
   */
  var disabledButton = function() {
    var submitsForm  = document.getElementsByTagName("input");

    for (var i = 0 ; i <= submitsForm.length ; i++) {
      if (typeof(submitsForm[i]) != \'undefined\' && submitsForm[i].type == \'button\') {
        submitsForm[i].disabled = true;
      }
    }

    return true;
  };

  /**
   * @name disabledButton
   * @description enable all button type submit
   * @access public
   * @return boolean
   * @author Brayan Pereyra - Cochalo <brayan@colosa.com>
   */
  var enabledButton = function() {
    var submitsForm = document.getElementsByTagName("input");

    for (var i = 0 ; i <= submitsForm.length ; i++) {
      if (typeof(submitsForm[i]) != \'undefined\' && submitsForm[i].type == \'button\') {
        submitsForm[i].disabled = false;
      }
    }

    return true;
  };

  /**
   * @name validateSubmitForm
   * @description validate value select
   * @access public
   * @return boolean
   * @author Brayan Pereyra - Cochalo <brayan@colosa.com>
   */
  var validateSubmitForm = function() {
    disabledButton();
    var flagSelect = false;

    // verify type of derivation
    if (rouType == \'PARALLEL\' || rouType == \'PARALLEL-BY-EVALUATION\') {
      // verify all value select
      var selectsForm = document.getElementsByTagName("select");
      for (var i = 0 ; i <= selectsForm.length ; i++) {
        if (typeof(selectsForm[i]) != \'undefined\') {
          var vtext = new input(selectsForm[i]);
          if (selectsForm[i].value == \'\') {
            flagSelect = true;
            vtext.failed();
          } else {
            vtext.passed();
          }
        }
      }

      if (flagSelect) {
        enabledButton();
        alert(G_STRINGS.ID_ASSIGN_CASE_TO_USER);
        return false;
      }
    } else {
      var selectId = "form[TASKS]["+optionSelect+"][USR_UID]";

      if (typeof(document.getElementById(selectId)) != \'undefined\' && document.getElementById(selectId) != null && (rouType == \'SELECT\' || userHidden == \'\')) {
        var vtext  = new input(document.getElementById(selectId));

        // verify value select the option select
        if (document.getElementById(selectId).value == \'\' &&
            document.getElementById("form[TASKS]["+optionSelect+"][TAS_ASSIGN_TYPE]").value != \'SELF_SERVICE\' &&
            document.getElementById("form[TASKS]["+optionSelect+"][TAS_ASSIGN_TYPE]").value != \'SELF_SERVICE_EVALUATE\'
           ) {
          enabledButton();
          vtext.failed();
          alert(G_STRINGS.ID_ASSIGN_CASE_TO_USER);
          return false;
        } else {
          vtext.passed();
        }
      }
    }


    '; ?>

    setNestedProperty(this, Array('disabled'), 'true');
    setNestedProperty(this, Array('value'), '<?php echo ((is_array($_tmp=$this->_tpl_vars['PROCESSING_MESSAGE'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
');
    <?php echo '

    return true;
  };

  '; ?>

</script>