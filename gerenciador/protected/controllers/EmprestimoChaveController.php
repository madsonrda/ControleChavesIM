<?php

class EmprestimoChaveController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $title_action = 'Empréstimo de Chave';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'sethorarioentrega'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
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
		$model=new EmprestimoChave;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EmprestimoChave']))
		{
			$model->attributes=$_POST['EmprestimoChave'];
			$model->horario_entrada = date("Y-m-d H:i:s");
			if(!$this->duplicateMat($model->matricula)){ 
				if($model->save())
					$this->redirect(array('index'));
			}else{
				Yii::app()->user->setFlash('error', "Matrícula {$model->matricula} não devolveu a chave.");
				$this->redirect(array('index'));
			}
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

		if(isset($_POST['EmprestimoChave']))
		{
			$model->attributes=$_POST['EmprestimoChave'];
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

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$title_action = 'Empréstimos de Chave';
		//$dataProvider=new CActiveDataProvider('EmprestimoChave');
		$model = new EmprestimoChave;
		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EmprestimoChave('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EmprestimoChave']))
			$model->attributes=$_GET['EmprestimoChave'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EmprestimoChave the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EmprestimoChave::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param EmprestimoChave $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='emprestimo-chave-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionSetHorarioEntrega(){

		$id = $_GET['chave'];
		$model_emprestimochave = EmprestimoChave::model()->findByPk($id);
		$model_emprestimochave->horario_entrega = date("Y-m-d H:i:s");
		$model_emprestimochave->saveAttributes(array('horario_entrega'));
		
		$this->redirect("/gerenciador/emprestimochave/");
	}

	public function duplicateMat($mat){

		$criteria = new CDbCriteria;
		$criteria->condition = "matricula = $mat AND horario_entrega IS NULL";

		$result = EmprestimoChave::model()->find($criteria);

		if ($result != NULL)
			return true;
		return false;
	}
}
