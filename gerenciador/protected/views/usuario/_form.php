<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
$group = UserGroupsGroup::model()->findAll();
$groups = array();
foreach ($group as $grupo){
    $groups[$grupo["id"]] = ucfirst($grupo["groupname"]);
}
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form valid','enctype'=>'multipart/form-data'),
)); ?>

    <p class="note">Campos com <span class="required">*</span> s&atilde;o obrigat&oacute;rios.</p>

    <?php echo $form->errorSummary($model); ?>

    <fieldset>
		<legend>Dados de Cadastro</legend>
        <div class="form-group  col-lg-4">
            <?php echo $form->labelEx($model,'nome'); ?>
            <?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>60, 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'nome'); ?>
        </div>
        <div class="form-group  col-lg-4">
            <?php echo $form->labelEx($model,'sobrenome'); ?>
            <?php echo $form->textField($model,'sobrenome',array('size'=>60,'maxlength'=>60, 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'sobrenome'); ?>
        </div>
        <div class="form-group  col-lg-4">
            <?php echo $form->labelEx($model,'telefone'); ?>
            <?php echo $form->textField($model,'telefone',array('size'=>15,'maxlength'=>15, 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'telefone'); ?>
        </div>
        <div class="form-group  col-lg-4">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>120, 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>
    </fieldset>
    <fieldset>
		<legend>Dados de Login</legend>
        <div class="form-group  col-lg-4">
            <?php echo $form->labelEx($model,'Usuário'); ?>
            <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>120, 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>
        <div class="form-group  col-lg-4">
            <?php echo $form->labelEx($model,'Senha'); ?>
            <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>120, 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
        <div class="form-group  col-lg-4">
            <?php echo $form->labelEx($model,'Grupo'); ?>
            <?php echo $form->dropDownList($model,'group_id',$groups,array("class"=>"form-control m-bot15","prompt"=>"Selecione o grupo")); ?>
            <?php echo $form->error($model,'group_id'); ?>
        </div>
    </fieldset>
    <div class="clear"></div>
    <div class="buttons">
		<div style="float: right; ">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Atualizar', array('class'=>'btn btn-info submitForm')); ?>
		</div>
    </div>
<?php $this->endWidget(); ?>
