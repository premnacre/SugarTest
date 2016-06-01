<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-05-20 05:14:02
$dictionary["Account"]["fields"]["tog_testmodule_accounts"] = array (
  'name' => 'tog_testmodule_accounts',
  'type' => 'link',
  'relationship' => 'tog_testmodule_accounts',
  'source' => 'non-db',
  'module' => 'tog_testmodule',
  'bean_name' => false,
  'vname' => 'LBL_TOG_TESTMODULE_ACCOUNTS_FROM_TOG_TESTMODULE_TITLE',
  'id_name' => 'tog_testmodule_accountstog_testmodule_ida',
);
$dictionary["Account"]["fields"]["tog_testmodule_accounts_name"] = array (
  'name' => 'tog_testmodule_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TOG_TESTMODULE_ACCOUNTS_FROM_TOG_TESTMODULE_TITLE',
  'save' => true,
  'id_name' => 'tog_testmodule_accountstog_testmodule_ida',
  'link' => 'tog_testmodule_accounts',
  'table' => 'tog_testmodule',
  'module' => 'tog_testmodule',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["tog_testmodule_accountstog_testmodule_ida"] = array (
  'name' => 'tog_testmodule_accountstog_testmodule_ida',
  'type' => 'link',
  'relationship' => 'tog_testmodule_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TOG_TESTMODULE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);

?>