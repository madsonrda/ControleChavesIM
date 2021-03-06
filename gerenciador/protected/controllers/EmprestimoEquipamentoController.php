<?php

class EmprestimoEquipamentoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $title_action='Emprestimo de Equipamento';

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
				'actions'=>array('create','update','SetHorarioEntrega'),
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
		$model=new EmprestimoEquipamento;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EmprestimoEquipamento']))
		{
			$model->attributes=$_POST['EmprestimoEquipamento'];
			$model->horario_entrada = date("Y-m-d H:i:s");
			if($this->decrementQuantity($model->fk_equipamento)){
				if(!$this->duplicateMat($model->matricula)){
					if($model->save())
						$this->redirect(array('index'));
					else{
						Yii::app()->user->setFlash('error', "Não foi possível salvar, contate o suporte.");
						$this->redirect(array('index'));
					}
				}else{
					Yii::app()->user->setFlash('error', "Matrícula {$model->matricula} não devolveu o equipamento.");
					$this->redirect(array('index'));
				}
			}
			else{
				Yii::app()->user->setFlash('error', "Equipamento Esgotado");
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

		if(isset($_POST['EmprestimoEquipamento']))
		{
			$model->attributes=$_POST['EmprestimoEquipamento'];
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
		$model = new EmprestimoEquipamento;
		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EmprestimoEquipamento('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EmprestimoEquipamento']))
			$model->attributes=$_GET['EmprestimoEquipamento'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EmprestimoEquipamento the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EmprestimoEquipamento::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param EmprestimoEquipamento $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='emprestimo-equipamento-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionSetHorarioEntrega(){

		$id = $_GET['chave'];
		$model_emprestimo_equipamento = EmprestimoEquipamento::model()->findByPk($id);
		$id_equipamento = $model_emprestimo_equipamento->fk_equipamento;
		$model_equipamento = Equipamento::model()->findByPk($id_equipamento);
		$model_equipamento->quantidade = $model_equipamento->quantidade+1;
		$model_emprestimo_equipamento->horario_entrega = date("Y-m-d H:i:s");
		$model_emprestimo_equipamento->saveAttributes(array('horario_entrega'));
		$model_equipamento->saveAttributes(array('quantidade'));
		
		$this->redirect("/gerenciador/emprestimoequipamento/");
	}

	public function duplicateMat($mat){

		$criteria = new CDbCriteria;
		$criteria->condition = "matricula = $mat AND horario_entrega IS NULL";

		$result = EmprestimoEquipamento::model()->find($criteria);

		if ($result != NULL)
			return true;
		return false;
	}

	protected function checkQuantity($id_equipamento){

		$result = Equipamento::model()->findByPk($id_equipamento);
		if($result->quantidade > 0)
			return true;
		return false;

	}

	protected function decrementQuantity($id_equipamento){

		$result = Equipamento::model()->findByPk($id_equipamento);
		if($result->quantidade > 0){
			$result->quantidade = $result->quantidade-1;
			$result->saveAttributes(array('quantidade'));
			return true;
		}
		return false;

	}
}
