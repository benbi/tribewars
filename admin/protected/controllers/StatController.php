<?php

class StatController extends AdminController
{
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Stat;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Stat']))
		{
			$model->attributes=$_POST['Stat'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Stat']))
		{
			$model->attributes=$_POST['Stat'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		//var_dump($_POST['Stat']);
		if(isset($_POST['Stat'])) {
	      foreach ($_POST['Stat'] as $keyRace => $valueRace) {
	        foreach ($valueRace as $keyClass => $valueClass) {
	          foreach ($valueClass as $keyAttribute => $valueStat) {
	            $criteria = new CDbCriteria;
	            $criteria->addCondition("raceId = $keyRace");
	            $criteria->addCondition("classId = $keyClass");
	            $criteria->addCondition("attributeId = $keyAttribute");
	            
	            $model = Stat::model()->find($criteria);
	            if ($model) {
	            } 
	            else {
	              $model = new Stat;
	            }
	            
	            echo $keyRace .'-' .$keyClass .'-' .$keyAttribute .'<br/>';
	            
	            $model->raceId = $keyRace;
	            $model->classId = $keyClass;
	            $model->attributeId = $keyAttribute;
	            $model->value = $valueStat;
				$model->save();
	          }
	        }
	      }
	      
	      $this->refresh();
			//$model->attributes=$_POST['Stat'];
		}
		$dataProvider=new CActiveDataProvider('Stat');
	    $allData = Stat::model()->findAll();
	    $arrayData = array();
	    foreach ($allData as $v) {
			$arrayData[$v->raceId][$v->classId][$v->attributeId] = $v->value;
	    }

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
      		'data'=>$arrayData,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Stat::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='stat-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
