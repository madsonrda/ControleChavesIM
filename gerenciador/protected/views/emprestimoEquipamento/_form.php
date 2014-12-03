<?php
/* @var $this EmprestimoEquipamentoController */
/* @var $model EmprestimoEquipamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emprestimo-equipamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<fieldset>
		<legend>Emprestar Equipamento</legend>
	<?php
    	$modelEquipamento = Equipamento::model()->findAll();
    	$listEquipamento = CHtml::listData($modelEquipamento, 'id', 'nome');
    ?>
	<div class="form-group  col-lg-4">
		<?php echo $form->labelEx($model,'fk_equipamento'); ?>
		<?php echo Chtml::dropDownList("EmprestimoEquipamento[fk_equipamento]",$model,$listEquipamento,
                            array("class"=>"form-control m-bot15", "prompt"=>"Selecione", "style"=> "width:100%;")); ?>
		<?php echo $form->error($model,'fk_equipamento'); ?>
	</div>

	<div class="form-group  col-lg-4">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="form-group  col-lg-4">
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>12,'maxlength'=>12, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'matricula'); ?>
	</div>

</fieldset>
	<div class="buttons">
    	<div style="float: right; ">
           <?php echo CHtml::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', array('class'=>'btn btn-info submitForm')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->