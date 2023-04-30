<?php

class m230429_105513_create_users_table extends CDbMigration
{
	// public function up()
	// {
	// }

	// public function down()
	// {
	// 	echo "m230429_105513_create_users_table does not support migration down.\n";
	// 	return false;
	// }

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('users', array(
			'id' => 'pk',
			'username' => 'string NOT NULL',
			'password' => 'string NOT NULL',
			'role' => 'string NOT NULL',
		));
	}

	public function safeDown()
	{
		$this->dropTable('users');
	}
	
}