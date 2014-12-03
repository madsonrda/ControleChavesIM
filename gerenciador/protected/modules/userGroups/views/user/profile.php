<?php
$this->breadcrumbs=array(
	'Dados do usuário',
); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user_groups_user-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'mainForm valid'),
)); ?>

	<p class="note"></p>

	<?php echo $form->errorSummary($model); ?>

        <div class="form-group  col-lg-4">
            <?php echo CHtml::label('Login', 'UserGroupsUser_username'); ?>
            <?php //echo $form->labelEx($model,'username'); ?>
                <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255, 'disabled'=>'disabled', 'class'=>'form-control')); ?>
            <div class="fix"></div>            
        </div>

        <div class="form-group  col-lg-4">
            <label class="required" for="current_password">Senha atual<span class="required"> *</span></label>
                <?php echo CHtml::passwordField('current_password', '', array('class'=>'form-control')); ?>
            <div class="fix"></div>            
        </div>

        <div class="form-group  col-lg-4">
            <?php echo CHtml::label('Nova senha', 'UserGroupsUser_password'); ?>
            <?php //echo $form->labelEx($model,'password'); ?>
                <?php echo CHtml::passwordField('UserGroupsUser[password]', '', array('class'=>'form-control')); ?>
            <div class="fix"></div>            
        </div>

        <div class="form-group  col-lg-4">
            <?php echo CHtml::label('Repita a nova senha', 'UserGroupsUser_password_again'); ?>
                <?php echo CHtml::passwordField('UserGroupsUser[password_again]', '',  array('class'=>'form-control')); ?>
            <div class="fix"></div>
        </div>

        <div class="buttons">    
            <div style="float: right; ">
               <?php echo CHtml::submitButton('Atualizar', array('class'=>'btn btn-info submitForm','onclick'=>'preventAlert()')); ?>
            </div>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
    function preventAlert(){
        console.log('oi');
        window.onbeforeunload = null;
    }
</script>