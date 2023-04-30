<?php

class m230429_110116_create_handlings_table extends CDbMigration
{
	// public function up()
	// {
	// }

	// public function down()
	// {
	// 	echo "m230429_110116_create_handlings_table does not support migration down.\n";
	// 	return false;
	// }

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('handlings', array(
			'id' => 'pk',
			'employee_id' => 'int NOT NULL',
			'patient_id' => 'int NOT NULL',
			'medicine_id' => 'int NULL',
			'price' => 'float NOT NULL',
			'date' => 'date NOT NULL',
			'notes' => 'text NOT NULL',
		));

		$this->addForeignKey(
			'fk_handlings_employee_id', 
			'handlings', 
			'employee_id', 
			'employees', 
			'id', 
			'SET NULL', 
			'CASCADE'
		);

		$this->addForeignKey(
			'fk_handlings_patient_id', 
			'handlings', 
			'patient_id', 
			'patients', 
			'id', 
			'SET NULL', 
			'CASCADE'
		);

		$this->addForeignKey(
			'fk_handlings_medicine_id', 
			'handlings', 
			'medicine_id', 
			'medicines', 
			'id', 
			'SET NULL', 
			'CASCADE'
		);
	}

	public function safeDown()
	{
		$this->dropTable('handlings');
	}
}