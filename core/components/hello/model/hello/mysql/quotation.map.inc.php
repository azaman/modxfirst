<?php
$xpdo_meta_map['Quotation']= array (
  'package' => 'hello',
  'version' => '1.1',
  'table' => 'quotation',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'quote' => NULL,
    'author' => '',
    'topic' => '',
  ),
  'fieldMeta' => 
  array (
    'quote' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
      'null' => false,
      'index' => 'index',
    ),
    'author' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '200',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'topic' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'topic' => 
    array (
      'alias' => 'topic',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'topic' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'author' => 
    array (
      'alias' => 'author',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'author' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'quote' => 
    array (
      'alias' => 'quote',
      'primary' => false,
      'unique' => false,
      'type' => 'FULLTEXT',
      'columns' => 
      array (
        'quote' => 
        array (
          'length' => '',
          'collation' => '',
          'null' => false,
        ),
        'author' => 
        array (
          'length' => '',
          'collation' => '',
          'null' => false,
        ),
        'topic' => 
        array (
          'length' => '',
          'collation' => '',
          'null' => false,
        ),
      ),
    ),
  ),
);
