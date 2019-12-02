<?php /* Smarty version 2.6.30, created on 2019-08-30 20:53:41
         compiled from designer/index.html */ ?>
<!DOCTYPE html>
<head>
    <!-- translations -->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['translationMafe']; ?>
"></script>

<?php if ($this->_tpl_vars['isDebugMode']): ?>
    <!-- files that are built into pmui.css-->
    <?php $_from = $this->_tpl_vars['pmuiCssCacheFile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <link rel="stylesheet" type="text/css" href="/lib-dev/pmUI/<?php echo $this->_tpl_vars['file']; ?>
" />
    <?php endforeach; endif; unset($_from); ?>
    <!-- files that are built into mafe.css-->
    <?php $_from = $this->_tpl_vars['mafeCssFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <link rel="stylesheet" type="text/css" href="/lib-dev/mafe/<?php echo $this->_tpl_vars['file']; ?>
" />
    <?php endforeach; endif; unset($_from); ?>

    <link rel="stylesheet" type="text/css" href="/lib-dev/css/jquery.layout.css" />
    <link rel="stylesheet" type="text/css" href="/lib-dev/css/jquery-ui-1.10.3.custom.min.css" />
    <!--<link rel="stylesheet" type="text/css" href="/lib/css/jquery.dataTables.css">-->

    <script type="text/javascript">
        var prj_uid = "<?php echo $this->_tpl_vars['prj_uid']; ?>
";
        var app_uid = "<?php echo $this->_tpl_vars['app_uid']; ?>
";
        var consolidated = "<?php echo $this->_tpl_vars['consolidated']; ?>
";
        var enterprise = "<?php echo $this->_tpl_vars['enterprise']; ?>
";
        var prj_readonly = "<?php echo $this->_tpl_vars['prj_readonly']; ?>
";
        var credentials = "<?php echo $this->_tpl_vars['credentials']; ?>
";
        var distribution = "<?php echo $this->_tpl_vars['distribution']; ?>
";
        var SYS_SYS = "<?php echo $this->_tpl_vars['SYS_SYS']; ?>
";
        var SYS_LANG = "<?php echo $this->_tpl_vars['SYS_LANG']; ?>
";
        var SYS_SKIN = "<?php echo $this->_tpl_vars['SYS_SKIN']; ?>
";
        var HTTP_SERVER_HOSTNAME = "<?php echo $this->_tpl_vars['HTTP_SERVER_HOSTNAME']; ?>
";
        var maxFileSizeInformation = <?php echo $this->_tpl_vars['maxFileSizeInformation']; ?>
;
    </script>
    <script type="text/javascript" src="/lib-dev/js/wz_jsgraphics.js"></script>
    <script type="text/javascript" src="/lib-dev/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/lib-dev/js/underscore-min.js"></script>
    <script type="text/javascript" src="/lib-dev/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="/lib-dev/js/jquery.layout.min.js"></script>
    <script type="text/javascript" src="/lib-dev/js/restclient.min.js"></script>
    <script type="text/javascript" src="/lib-dev/js/modernizr.js"></script>

    <!-- files that are built into pmui.js-->
    <?php $_from = $this->_tpl_vars['pmuiJsCacheFile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <script type="text/javascript" src="/lib-dev/pmUI/<?php echo $this->_tpl_vars['file']; ?>
"></script>
    <?php endforeach; endif; unset($_from); ?>

    <!-- files that are built into mafe.js-->
    <?php $_from = $this->_tpl_vars['mafeJsFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <script type="text/javascript" src="/lib-dev/mafe/<?php echo $this->_tpl_vars['file']; ?>
"></script>
    <?php endforeach; endif; unset($_from); ?>
    <!-- files that are built into designer.js-->
    <?php $_from = $this->_tpl_vars['designerCacheFile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <script type="text/javascript" src="/lib-dev/mafe/<?php echo $this->_tpl_vars['file']; ?>
"></script>
    <?php endforeach; endif; unset($_from); ?>

    <!-- tinyMCE -->
    <script type="text/javascript" src="/js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

    <!-- CodeMirror -->
    <script type="text/javascript" src="/js/codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" type="text/css" href="/js/codemirror/lib/codemirror.css"/>
    <script type="text/javascript" src="/js/codemirror/mode/javascript/javascript.js"></script>

    <script type="text/javascript" src="/js/codemirror/addon/edit/matchbrackets.js"></script>
    <script type="text/javascript" src="/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script type="text/javascript" src="/js/codemirror/mode/xml/xml.js"></script>
    <script type="text/javascript" src="/js/codemirror/mode/css/css.js"></script>
    <script type="text/javascript" src="/js/codemirror/mode/clike/clike.js"></script>
    <script type="text/javascript" src="/js/codemirror/mode/php/php.js"></script>

<?php else: ?>

    <link rel="stylesheet" type="text/css" href="/lib/css/mafe-<?php echo $this->_tpl_vars['buildhash']; ?>
.css" />
    <link rel="stylesheet" type="text/css" href="/css/<?php echo $this->_tpl_vars['sys_skin']; ?>
-pm3.css" />
    <?php $_from = $this->_tpl_vars['sourceCss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pathFile']):
?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['pathFile']; ?>
" />
    <?php endforeach; endif; unset($_from); ?>
    <script type="text/javascript">
        var prj_uid = "<?php echo $this->_tpl_vars['prj_uid']; ?>
";
        var app_uid = "<?php echo $this->_tpl_vars['app_uid']; ?>
";
        var consolidated = "<?php echo $this->_tpl_vars['consolidated']; ?>
";
        var enterprise = "<?php echo $this->_tpl_vars['enterprise']; ?>
";
        var prj_readonly = "<?php echo $this->_tpl_vars['prj_readonly']; ?>
";
        var credentials = "<?php echo $this->_tpl_vars['credentials']; ?>
";
        var distribution = "<?php echo $this->_tpl_vars['distribution']; ?>
";
        var SYS_SYS = "<?php echo $this->_tpl_vars['SYS_SYS']; ?>
";
        var SYS_LANG = "<?php echo $this->_tpl_vars['SYS_LANG']; ?>
";
        var SYS_SKIN = "<?php echo $this->_tpl_vars['SYS_SKIN']; ?>
";
        var HTTP_SERVER_HOSTNAME = "<?php echo $this->_tpl_vars['HTTP_SERVER_HOSTNAME']; ?>
";
        var maxFileSizeInformation = <?php echo $this->_tpl_vars['maxFileSizeInformation']; ?>
;
    </script>
    <script type="text/javascript" src="/lib/js/mafe-<?php echo $this->_tpl_vars['buildhash']; ?>
.js"></script>
    <?php $_from = $this->_tpl_vars['sourceJs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pathFile']):
?>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['pathFile']; ?>
"></script>
    <?php endforeach; endif; unset($_from); ?>

<?php endif; ?>


</head>
<body onresize="resizingFrame();">
<!--<div class="ui-layout-north">-->
     <div class="loader"></div>
     <section class="navBar" id="idNavBar">
        <div class="head"></div>
        <nav>
            <ul id="idNavBarList">

            </ul>
        </nav>

    </section>
    <div class="bpmn_shapes">
    </div>
<!--</div>-->
<div id="p-center-layout"/>
    <!--BODY-->
    <div class="ui-layout-center tab-content" id="div-layout-canvas">
    </div>

    <section class="content" id="idContent">

        <div class="content_controls">
            <div class="head"></div>
            <ul id="contentControlList">
                
            </ul>
        </div>
        <div class="bpmn_shapes_legend">
            <div class="head"></div>
        </div>
    </section>
<SCRIPT src="/jscore/src/PM.js" type=text/javascript></SCRIPT>
<SCRIPT src="/jscore/src/Sessions.js" type=text/javascript></SCRIPT>
</body>