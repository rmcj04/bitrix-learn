<?php
$arUrlRewrite=array (
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
    array (
        'CONDITION' => '#^/news/([\w-]+)/([\w-]+)/#',
        'RULE' => "ELEMENT_CODE=$2",
        'PATH' => '/news/index.php',
        'SORT' => 3
    ),
  array (
    'CONDITION' => '#^/news/([\w-]+)/#',
    'RULE' => "SECTION_CODE=$1",
    'PATH' => '/news/index.php',
      'SORT' => 3
  ),
);
