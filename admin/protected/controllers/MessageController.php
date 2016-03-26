<?php

class MessageController extends AdminController
{
	public function actionHelloGameBreeders() {
    $theTime = date("Y m d H:i:s");
		$this->render('helloGameBreeders', array('time' => $theTime));
	}

  public function actionGoodbye() {
    $this->render('goodbye');
  }

	public function actionIndex()	{
		$this->render('index');
	}

  public function repeat($inputString) {
    return $inputString;
  }

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

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