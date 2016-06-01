<?php
 // created: 2016-05-20 05:14:01
$layout_defs["tog_Company"]["subpanel_setup"]['tog_company_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TOG_COMPANY_CONTACTS_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'tog_company_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
