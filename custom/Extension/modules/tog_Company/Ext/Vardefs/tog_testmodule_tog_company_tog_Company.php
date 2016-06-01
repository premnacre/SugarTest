<?php
// created: 2016-05-20 05:14:03
$dictionary["tog_Company"]["fields"]["tog_testmodule_tog_company"] = array (
  'name' => 'tog_testmodule_tog_company',
  'type' => 'link',
  'relationship' => 'tog_testmodule_tog_company',
  'source' => 'non-db',
  'module' => 'tog_testmodule',
  'bean_name' => false,
  'vname' => 'LBL_TOG_TESTMODULE_TOG_COMPANY_FROM_TOG_TESTMODULE_TITLE',
  'id_name' => 'tog_testmodule_tog_companytog_testmodule_ida',
);
$dictionary["tog_Company"]["fields"]["tog_testmodule_tog_company_name"] = array (
  'name' => 'tog_testmodule_tog_company_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TOG_TESTMODULE_TOG_COMPANY_FROM_TOG_TESTMODULE_TITLE',
  'save' => true,
  'id_name' => 'tog_testmodule_tog_companytog_testmodule_ida',
  'link' => 'tog_testmodule_tog_company',
  'table' => 'tog_testmodule',
  'module' => 'tog_testmodule',
  'rname' => 'name',
);
$dictionary["tog_Company"]["fields"]["tog_testmodule_tog_companytog_testmodule_ida"] = array (
  'name' => 'tog_testmodule_tog_companytog_testmodule_ida',
  'type' => 'link',
  'relationship' => 'tog_testmodule_tog_company',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TOG_TESTMODULE_TOG_COMPANY_FROM_TOG_COMPANY_TITLE',
);
