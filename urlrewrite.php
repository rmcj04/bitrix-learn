<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/news/([\\w-]+)/([\\w-]+)/#',
    'RULE' => 'ELEMENT_CODE=$2',
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
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^#',
    'RULE' => '',
    'ID' => 'bitrix:news.list',
    'PATH' => '/local/templates/bx-template/includes/pages/news/listing.php',
    'SORT' => 100,
  ),
);
