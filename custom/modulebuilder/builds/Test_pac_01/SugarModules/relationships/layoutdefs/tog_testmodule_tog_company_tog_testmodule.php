<?php
 // created: 2016-05-20 05:14:02
$layout_defs["tog_testmodule"]["subpanel_setup"]['tog_testmodule_tog_company'] = array (
  'order' => 100,
  'module' => 'tog_Company',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TOG_TESTMODULE_TOG_COMPANY_FROM_TOG_COMPANY_TITLE',
  'get_subpanel_data' => 'tog_testmodule_tog_company',
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
