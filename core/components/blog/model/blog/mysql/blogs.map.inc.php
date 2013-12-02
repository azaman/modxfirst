<?php
$xpdo_meta_map['Blogs']= array (
  'package' => 'blog',
  'version' => '1.1',
  'table' => 'blogs',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'author' => NULL,
    'blog' => NULL,
    'create_time' => 'CURRENT_TIMESTAMP',
  ),
  'fieldMeta' => 
  array (
    'author' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'blog' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'create_time' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 'CURRENT_TIMESTAMP',
    ),
  ),
);
