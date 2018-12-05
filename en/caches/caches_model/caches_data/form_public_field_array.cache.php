<?php
return array (
  'xmaa' => 
  array (
    'info' => 
    array (
      'formtype' => 'text',
      'field' => 'xmaa',
      'name' => '姓名',
      'tips' => '',
      'formattribute' => '',
      'css' => '',
      'minlength' => '1',
      'maxlength' => '',
      'pattern' => '',
      'errortips' => '',
      'modelid' => '0',
      'setting' => '{\\"size\\":\\"50\\",\\"defaultvalue\\":\\"\\",\\"ispassword\\":\\"0\\"}',
      'siteid' => '1',
      'unsetgroupids' => '',
      'unsetroleids' => '',
    ),
    'sql' => 'ALTER TABLE `formguide_table` ADD `xmaa` VARCHAR( 255 ) NOT NULL DEFAULT \'\'',
  ),
);
?>