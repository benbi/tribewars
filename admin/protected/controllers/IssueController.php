<?php

class IssueController extends AdminController
{
  /**
   * @var private property containing the associated Project model instance.
   */
  private $_project = null;

  /**
   * Protected method to load the associated Project model class
   * @projectId the primary identifier of the associated Project
   * @return object the Project data model based on the primary key
   */
  protected function loadProject($projectId) {
    // if the project is null, create it based on input id
    if ($this->_project === null) {
      $this->_project = Project::model()->findByPk($projectId);
      if ($this->_project === null) {
        throw new CHttpException(404, 'The requested project does not exist.');
      }
    }
    return $this->_project;
  }

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
		$model=new Issue;
    $model->projectId = $this->_project->id;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Issue']))
		{
			$model->attributes=$_POST['Issue'];
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

		if(isset($_POST['Issue']))
		{
			$model->attributes=$_POST['Issue'];
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
		$this->loadModel($id)->delete();
		Yii::app()->user->setState('success', 'The requested item has been deleted.');
		$this->redirect(array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Issue');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Issue::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='issue-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

  /**
   * In-class defined filter method, configured for use in the above filters() method
   * It is called before the actionCreate() action method is run in order to ensure a proper project context
   */
  public function filterProjectContext($filterChain) {
    // set the project identifier based on either the GET or POST input
    // request variables, since we allow both types for our actions
    $projectId = null;
    if (isset($_GET['pid'])) {
      $projectId = $_GET['pid'];
    } elseif (isset($_POST['pid'])) {
      $projectId = $_POST['pid'];
    } else {
      $projectId = Yii::app()->getRequest()->getQuery('id');
    }
    $this->loadProject($projectId);
    // complete the running of otehr filters and execute the requested action
    $filterChain->run();
  }

  /**
   * Returns the project model instance to which this issue belongs
   */
  public function getProject() {
    return $this->_project;
  }
}
