<?php
$this->startSetup();
$this->addAttribute('catalog_category', 'image_label', array(
    'group'         => 'General Information',
    'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Image Alt Text',
    'source'        => '',
    'backend'       => '',
    'visible'       => true,
    'required'      => 0,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'sort_order'    => '99998',
));

$this->addAttribute('catalog_category', 'show_layered_nav', array(
    'group'         => 'General',
    'input'         => 'select',
    'type'          => 'int',
    'label'         => 'Show Layered Navigation',
    'source'        => 'eav/entity_attribute_source_boolean',
    'backend'       => '',
    'visible'       => true,
    'required'      => 0,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'sort_order'    => '99999',
));

$this->endSetup();