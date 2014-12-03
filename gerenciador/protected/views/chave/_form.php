<?php
/* @var $this ChaveController */
/* @var $model Chave */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'chave-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
		'htmlOptions'=>array('class'=>'form valid'),
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>
	<fieldset>
		<legend>Cadastrar chave de sala</legend>
		<div class="form-group  col-lg-4">
			<p>
			<?php echo $form->labelEx($model,'chave'); ?>
			<?php echo $form->textField($model,'chave',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
			<?php echo $form->error($model,'chave'); ?>
			</p>
		</div>
	</fieldset>

	<div class="buttons">
    	<div style="float: right; ">
           <?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Atualizar', array('class'=>'btn btn-info submitForm')); ?>
		</div>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->