<?php

class m20101130070902_create_car_table extends CDbMigration
{
 public function up()
 {
   $this->createTable('car',array(
     'id'=>'int UNSIGNED NOT NULL AUTO_INCREMENT',
     'owner'=>'string',
     'age'=>'int',
     'make'=>'CHAR(10)',
     'model'=>'VARCHAR(64)',
     'PRIMARY KEY (id)')
   );
 }
 public function down()
 {
   $this->dropTable('car');
 }
}
