<?php
// created: 2018-07-12 20:41:03
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'factory_code' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_FACTORY_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'issue_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_ISSUE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'location' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_LOCATION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'active' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_ACTIVE',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'c_cashes',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'c_cashes',
    'width' => '5%',
    'default' => true,
  ),
);