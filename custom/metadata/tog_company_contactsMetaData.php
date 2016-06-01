<?php
// created: 2016-05-20 05:14:01
$dictionary["tog_company_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tog_company_contacts' => 
    array (
      'lhs_module' => 'tog_Company',
      'lhs_table' => 'tog_company',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tog_company_contacts_c',
      'join_key_lhs' => 'tog_company_contactstog_company_ida',
      'join_key_rhs' => 'tog_company_contactscontacts_idb',
    ),
  ),
  'table' => 'tog_company_contacts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'tog_company_contactstog_company_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tog_company_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tog_company_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tog_company_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tog_company_contactstog_company_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tog_company_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tog_company_contactscontacts_idb',
      ),
    ),
  ),
);