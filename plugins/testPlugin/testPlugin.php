<?php

class testPluginPlugin extends PMPlugin
{
  private $dashletsUids;
  
  public function testPluginPlugin($sNamespace, $sFilename = null)
  {
    $res = parent::PMPlugin($sNamespace, $sFilename);
    $this->sFriendlyName = "Test Plugin";
    $this->sDescription  = "This is a test plugin to learn about plugin development";
    $this->sPluginFolder = "testPlugin";
    $this->sSetupPage    = "setup";
    $this->iVersion      = "1.0.0";
    //$this->iPMVersion    = 2425;
    $this->aWorkspaces   = null;
    //$this->aWorkspaces = array("os");
    
    
    $this->dashletsUids = array(
      array("DAS_UID" => "6919299145de0e7a0410d92097682744",
            "DAS_CLASS" => "dashlettestPlugin",
            "DAS_TITLE" => "Dashlet testPlugin",
            "DAS_DESCRIPTION" => "Dashlet testPlugin",
            "DAS_VERSION" => "1.0",
            "DAS_CREATE_DATE" => date("Y-m-d"),
            "DAS_UPDATE_DATE" => date("Y-m-d"))
    );
    
    
    return $res;
  }

  public function setup()
  {
    $this->setCompanyLogo("/plugin/testPlugin/testPlugin.png");
    $this->registerMenu("processmaker", "menutestPlugin.php");
    $this->registerMenu("cases", "menuCasestestPlugin.php");
    $this->registerStep("7202279305de0e76d6b62c3025665290", "steptestPluginApplication", "testPlugin external step");
    $this->registerPmFunction();
    $this->redirectLogin("PROCESSMAKER_TESTPLUGIN", "users/users_List");
    
    $this->registerDashlets();
    $this->enableRestService();
  }

  public function install()
  {
    $RBAC = RBAC::getSingleton() ;
    $RBAC->initRBAC();
    $roleData = array();
    $roleData["ROL_UID"] = G::GenerateUniqueId();
    $roleData["ROL_PARENT"] = "";
    $roleData["ROL_SYSTEM"] = "00000000000000000000000000000002";
    $roleData["ROL_CODE"] = "PROCESSMAKER_TESTPLUGIN";
    $roleData["ROL_CREATE_DATE"] = date("Y-m-d H:i:s");
    $roleData["ROL_UPDATE_DATE"] = date("Y-m-d H:i:s");
    $roleData["ROL_STATUS"] = "1";
    $RBAC->createRole($roleData);
    $RBAC->createPermision("PM_TESTPLUGIN");
  }
  
  public function enable()
  {
    $this->dashletInsert();
  }

  public function disable()
  {
    $this->dashletDelete();
  }
  
  public function dashletInsert()
  {

    
    $connection = Propel::getConnection(DashletPeer::DATABASE_NAME);
    
    foreach ($this->dashletsUids as $dashletData) {
      $dashlet = new Dashlet();
      
      if (is_null($dashlet->load($dashletData["DAS_UID"]))) {
        $dashlet->fromArray($dashletData, BasePeer::TYPE_FIELDNAME);
        $connection->begin();
        $dashlet->save();
        $connection->commit();
      }
    }
  }
  
  public function dashletDelete()
  {

    
    foreach ($this->dashletsUids as $dashletData) {
      $criteria = new Criteria("workflow");
      $criteria->add(DashletPeer::DAS_UID, $dashletData["DAS_UID"]);
      DashletPeer::doDelete($criteria);
    }
  }
}

$oPluginRegistry = PMPluginRegistry::getSingleton();
$oPluginRegistry->registerPlugin("testPlugin", __FILE__);
