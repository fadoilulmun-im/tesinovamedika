<?php

class LaporanController extends Controller
{
	public function actionIndex()
	{
		$regions = CHtml::listData(Region::model()->findAll(), 'id', 'title');

		$employees = [];
		foreach ($regions as $key => $region) {
			$employees[$key] = Employee::model()->count('region_id=:region_id', ['region_id' => $key]);
		}

		$patients = [];
		foreach ($regions as $key => $region) {
			$patients[$key] = Patient::model()->count('region_id=:region_id', ['region_id' => $key]);
		}

		$this->render('index', [
			'regions' => $regions,
			'employees' => $employees,
			'patients' => $patients,
		]);
	}

	// Uncomment the following methods and override them if needed
	
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'accessControl',
		);
	}

	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/*
	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}