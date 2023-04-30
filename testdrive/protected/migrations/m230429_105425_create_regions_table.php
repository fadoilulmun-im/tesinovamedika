<?php

class m230429_105425_create_regions_table extends CDbMigration
{
	// public function up()
	// {
	// }

	// public function down()
	// {
	// 	echo "m230429_105425_create_regions_table does not support migration down.\n";
	// 	return false;
	// }

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('regions', array(
			'id' => 'pk',
			'title' => 'string NOT NULL',
		));
	}

	public function safeDown()
	{
		$this->dropTable('regions');
	}
	
}