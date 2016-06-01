<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-05-20 05:14:01
$dictionary["Contact"]["fields"]["tog_company_contacts"] = array (
  'name' => 'tog_company_contacts',
  'type' => 'link',
  'relationship' => 'tog_company_contacts',
  'source' => 'non-db',
  'module' => 'tog_Company',
  'bean_name' => 'tog_Company',
  'vname' => 'LBL_TOG_COMPANY_CONTACTS_FROM_TOG_COMPANY_TITLE',
  'id_name' => 'tog_company_contactstog_company_ida',
);
$dictionary["Contact"]["fields"]["tog_company_contacts_name"] = array (
  'name' => 'tog_company_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TOG_COMPANY_CONTACTS_FROM_TOG_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'tog_company_contactstog_company_ida',
  'link' => 'tog_company_contacts',
  'table' => 'tog_company',
  'module' => 'tog_Company',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["tog_company_contactstog_company_ida"] = array (
  'name' => 'tog_company_contactstog_company_ida',
  'type' => 'link',
  'relationship' => 'tog_company_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TOG_COMPANY_CONTACTS_FROM_CONTACTS_TITLE',
);

?>