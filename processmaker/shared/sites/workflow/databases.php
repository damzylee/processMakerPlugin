<?php
$dbAdapter    = 'mysql';
$dbHost       = 'localhost';
$dbName       = 'wf_workflow';
$dbUser       = 'wf_workflow';
$dbPass       = '-P1CNx2EGVvHhsj';
$dbRbacHost   = 'localhost';
$dbRbacName   = 'wf_workflow';
$dbRbacUser   = 'wf_workflow';
$dbRbacPass   = '-P1CNx2EGVvHhsj';
$dbReportHost = 'localhost';
$dbReportName = 'wf_workflow';
$dbReportUser = 'wf_workflow';
$dbReportPass = '-P1CNx2EGVvHhsj';


$dsn       = sprintf("%s://%s:%s@%s/%s", $dbAdapter, $dbUser,       $dbPass,       $dbHost,       $dbName);
$dsnRbac   = sprintf("%s://%s:%s@%s/%s", $dbAdapter, $dbRbacUser,   $dbRbacPass,   $dbRbacHost,   $dbRbacName);
$dsnReport = sprintf("%s://%s:%s@%s/%s", $dbAdapter, $dbReportUser, $dbReportPass, $dbReportHost, $dbReportName);

switch ($dbAdapter) {
  case 'mysql':
    $dsn       .= '?encoding=utf8';
    $dsnRbac   .= '?encoding=utf8';
    $dsnReport .= '?encoding=utf8';
    break;
  default:
    break;
}

$pro ['datasources']['workflow']['connection'] = $dsn;
$pro ['datasources']['workflow']['adapter'] = $dbAdapter;

$pro ['datasources']['rbac']['connection'] = $dsnRbac;
$pro ['datasources']['rbac']['adapter'] = $dbAdapter;

$pro ['datasources']['rp']['connection'] = $dsnReport;
$pro ['datasources']['rp']['adapter'] = $dbAdapter;

$pro ['datasources']['dbarray']['connection'] = 'dbarray://user:pass@localhost/pm_os';
$pro ['datasources']['dbarray']['adapter']    = 'dbarray';

return $pro;