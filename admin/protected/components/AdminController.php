<?php
/**
 * @name AdminController
 * @author Angga Sanjaya Lingga
 *
 */

abstract class AdminController extends BaseController {
	
	public $layout='//layouts/main';
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'error' action
				'actions'=>array('error'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform all actions
				//'actions'=>array(),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function init() {		
		parent::init();
		Yii::app()->theme = 'admin';
	}
}