<?php
$xpdo_meta_map['Blogs']= array (
  'package' => 'blog',
  'version' => '1.1',
  'table' => 'blogs',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'id' => NULL,
    'author' => NULL,
    'blog' => NULL,
    'create_time' => 'CURRENT_TIMESTAMP',
  ),
  'fieldMeta' => 
  array (
    'id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
    ),
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
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
