<?php

class m230429_105643_create_medicines_table extends CDbMigration
{
	// public function up()
	// {
	// }

	// public function down()
	// {
	// 	echo "m230429_105643_create_medicines_table does not support migration down.\n";
	// 	return false;
	// }

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('medicines', array(
			'id' => 'pk',
			'title' => 'string NOT NULL',
			'price' => 'float NOT NULL',
		));
	}

	public function safeDown()
	{
		$this->dropTable('medicines');
	}
}