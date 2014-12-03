<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',        
	'enableClientValidation'=>false,
	'clientOptions'=>array('validateOnSubmit'=>true),
        'htmlOptions'=>array('class'=>'form-signin')
)); ?>

<div class="login-wrap">
    <div>
     <?php echo $form->textField($model,'username', array('id'=>'req1','class'=>'form-control', 'placeholder'=>'Login', )); ?>
     <?php echo $form->passwordField($model,'password', array('id'=>'req2','class'=>'form-control', 'placeholder'=>'Senha', )); ?>
     <a style="margin-top: 20px" data-toggle="modal" href="#recuperarSenha"> Recuperar senha?</a>
    </div>
     <div style="clear: both"></div>
     <div>
         <p><?php echo CHtml::submitButton('Entrar', array('class'=>'btn btn-lg btn-login btn-block')); ?></p>
     </div>
</div>

<?php $this->endWidget(); ?>

<form class="form valid" id="recupera-form"  method="post">
    <div class="modal fade" id="recuperarSenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Recuperar Senha</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group  col-lg-12">
                        <p>
                            <label for="UserGroupsUser_email">Email</label>
                            <input size="60" maxlength="255" class="form-control valid" name="email" id="email" type="text">
                        </p>
                    </div>
                    <div style="clear: both"></div>
                    <span>Sua senha será enviada para o email fornecido.</span>
                </div>
                <div style="clear: both"></div>
                <div class="modal-footer">
                    <!--Notification Start -->
                    <div class="notifications" style="float: left;">
                        <div  id="notification" class="alert  fade " style="margin-bottom: 0px !important">
                            <span id="mensagem"><strong><i class="icon-ok-sign"></i> </strong></span>  
                        </div>
                    </div>
                    <!--Notification End -->
                    <button data-dismiss="modal" class="btn btn-default" type="button">Fechar</button>
                    <input class="btn btn-info submitForm" type="button" name="enviarEmail" id="enviarEmail"  value="Enviar">   
                </div>
            </div>
        </div>
    </div>
</form>

<script>
$("#enviarEmail").click(function(){
    $.ajax({
        url: '/Usuario/recuperaSenha',
        type: 'POST',
        data: $("#recupera-form").serialize(),
        success: function(data){
            console.log(data);
            if(data == "ok"){
                document.getElementById('mensagem').innerHTML = "Senha enviada!";
                $("#notification").addClass('in alert-success ');
            }else{
                document.getElementById('mensagem').innerHTML = "Email incorreto!";
                $("#notification").addClass('in alert-block alert-danger');
            }
        }
    });
  });
</script>