<?php

class m230429_105717_create_actions_table extends CDbMigration
{
	// public function up()
	// {
	// }

	// public function down()
	// {
	// 	echo "m230429_105717_create_actions_table does not support migration down.\n";
	// 	return false;
	// }

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('actions', array(
			'id' => 'pk',
			'title' => 'string NOT NULL',
			'description' => 'text NOT NULL',
		));
	}

	public function safeDown()
	{
		$this->dropTable('actions');
	}
}