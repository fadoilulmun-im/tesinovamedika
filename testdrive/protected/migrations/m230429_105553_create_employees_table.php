<?php

class m230429_105553_create_employees_table extends CDbMigration
{
	// public function up()
	// {
	// }

	// public function down()
	// {
	// 	echo "m230429_105553_create_employees_table does not support migration down.\n";
	// 	return false;
	// }

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('employees', array(
			'id' => 'pk',
			'name' => 'string NOT NULL',
			'position' => 'string NOT NULL',
			'address' => 'string NOT NULL',
			'phone' => 'string NOT NULL',
			'region_id' => 'bigint NOT NULL',
		));

		$this->addForeignKey(
			'fk_employees_region_id', 
			'employees', 
			'region_id', 
			'regions', 
			'id', 
			'SET NULL', 
			'CASCADE'
		);
	}

	public function safeDown()
	{
	}
}