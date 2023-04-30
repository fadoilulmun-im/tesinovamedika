<?php

class m230429_105844_create_patients_table extends CDbMigration
{
	// public function up()
	// {
	// }

	// public function down()
	// {
	// 	echo "m230429_105844_create_patients_table does not support migration down.\n";
	// 	return false;
	// }

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('patients', array(
			'id' => 'pk',
			'name' => 'string NOT NULL',
			'address' => 'string NOT NULL',
			'phone' => 'string NOT NULL',
			'nik' => 'string NOT NULL',
			'region_id' => 'bigint NOT NULL',
		));

		$this->addForeignKey(
			'fk_patients_region_id', 
			'patients', 
			'region_id', 
			'regions', 
			'id', 
			'SET NULL', 
			'CASCADE'
		);
	}

	public function safeDown()
	{
		$this->dropTable('patients');
	}
}