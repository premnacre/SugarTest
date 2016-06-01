<?php
// created: 2016-05-20 05:14:02
$dictionary["tog_testmodule_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tog_testmodule_accounts' => 
    array (
      'lhs_module' => 'tog_testmodule',
      'lhs_table' => 'tog_testmodule',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tog_testmodule_accounts_c',
      'join_key_lhs' => 'tog_testmodule_accountstog_testmodule_ida',
      'join_key_rhs' => 'tog_testmodule_accountsaccounts_idb',
    ),
  ),
  'table' => 'tog_testmodule_accounts_c',
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
      'name' => 'tog_testmodule_accountstog_testmodule_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tog_testmodule_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tog_testmodule_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tog_testmodule_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tog_testmodule_accountstog_testmodule_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tog_testmodule_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tog_testmodule_accountsaccounts_idb',
      ),
    ),
  ),
);