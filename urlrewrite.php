<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/news/([\\w-]+)/([\\w-]+)/#',
    'RULE' => 'ELEMENT_CODE=$2&SECTION_CODE=$1',
    'PATH' => '/news/index.php',
    'SORT' => 3,
  ),
  2 => 
  array (
    'CONDITION' => '#^/news/([\\w-]+)/#',
    'RULE' => 'SECTION_CODE=$1',
    'PATH' => '/news/index.php',
    'SORT' => 3,
  ),
  3 =>
  array(
      'CONDITION' => '#^/catalog/{}/',
      'RULE' => 'SECTION_CODE=$1',
      'PATH' => '/catalog/index.php',
      'SORT' => 3,
  ),
  4 =>
      array(
          'CONDITION' => '#^/catalog/{}/{}/',
          'RULE' => 'SECTION_CODE=$1&CODE=$1',
          'PATH' => '/catalog/index.php',
          'SORT' => 3,
      ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
