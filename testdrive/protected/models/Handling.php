<?php

/**
 * This is the model class for table "handlings".
 *
 * The followings are the available columns in table 'handlings':
 * @property integer $id
 * @property integer $employee_id
 * @property integer $patient_id
 * @property integer $action_id
 * @property integer $medicine_id
 * @property double $price
 * @property string $date
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Employees $employee
 * @property Patients $patient
 * @property Actions $action
 * @property Medicines $medicine
 */
class Handling extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'handlings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, patient_id, price, date, notes', 'required'),
			array('employee_id, patient_id, action_id, medicine_id', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, patient_id, action_id, medicine_id, price, date, notes', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'employee' => array(self::BELONGS_TO, 'Employee', 'employee_id'),
			'patient' => array(self::BELONGS_TO, 'Patient', 'patient_id'),
			'action' => array(self::BELONGS_TO, 'Action', 'action_id'),
			'medicine' => array(self::BELONGS_TO, 'Medicine', 'medicine_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'employee_id' => 'Employee',
			'patient_id' => 'Patient',
			'action_id' => 'Action',
			'medicine_id' => 'Medicine',
			'price' => 'Price',
			'date' => 'Date',
			'notes' => 'Notes',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('patient_id',$this->patient_id);
		$criteria->compare('action_id',$this->action_id);
		$criteria->compare('medicine_id',$this->medicine_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Handling the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
