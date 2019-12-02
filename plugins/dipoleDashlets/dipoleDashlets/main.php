<?php
$G_MAIN_MENU            = 'processmaker';
$G_ID_MENU_SELECTED     = 'ID_DIPOLEDASHLETS_MNU_01';
$G_PUBLISH = new Publisher;
$G_PUBLISH->AddContent('view', 'dipoleDashlets/mainLoad');
G::RenderPage('publish');
?>