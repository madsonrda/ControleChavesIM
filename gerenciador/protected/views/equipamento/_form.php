<?php
/* @var $this EquipamentoController */
/* @var $model Equipamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios</p>

	<?php echo $form->errorSummary($model); ?>

	<fieldset>
		<legend>Cadastrar Equipamento Novo</legend>
	<div class="form-group  col-lg-4">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="form-group  col-lg-4">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="form-group  col-lg-4">
		<?php echo $form->labelEx($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'quantidade'); ?>
	</div>
</fieldset>
	<div class="buttons">
    	<div style="float: right; ">
           <?php echo CHtml::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', array('class'=>'btn btn-info submitForm')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->