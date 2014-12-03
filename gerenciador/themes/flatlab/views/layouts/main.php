<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl.'/img/favicon.png' ?>">
    
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/jquery-ui/jquery-ui-1.10.1.custom.css');?>
    <!-- Bootstrap core CSS -->
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/bootstrap.min.css');?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/bootstrap-reset.css');?>
    <!--external css-->
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/font-awesome/css/font-awesome.css');?>
    <!-- Custom styles for this template -->
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/style.css');?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/style-responsive.css');?>
    <!-- customizations -->
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/custom.css');?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->theme->baseUrl.'/js/html5shiv.js' ?>"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl.'/js/respond.min.js' ?>"></script>
    <![endif]-->
  </head>

  <body>

<?php
 $usuario = UserGroupsUser::model()->findByPk(Yii::app()->user->id);
?>
  <section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
      <div class="sidebar-toggle-box">
		    <div title="Alternar exibição do menu" data-placement="right" ><i class="icon-reorder tooltips"></i></div>
      </div>
      <!--logo start-->
      <a href="<?php echo Yii::app()->getHomeUrl(); ?>" class="logo" title="Página inicial" >Gerenciador <span>Beta</span></a>
      <!--logo end-->    

        <div class="nav notify-row" id="top_menu">
            <!--<button class="btn btn-success" style="float: right;"></button>-->
        </div>

      <!--notifications start-->
      <?php if(Yii::app()->user->hasFlash('error')): ?>    
        <div class="notifications" style="float: left; width: 53%; margin: 5px 0 0 40px;">
            <div class="alert alert-block alert-danger fade in" style="margin-bottom: 0px !important">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                </button>
                <strong><i class="icon-exclamation-sign"></i> ERRO:</strong> <?php echo Yii::app()->user->getFlash('error'); ?>
            </div>
        </div>
      <?php endif; ?>
      <?php if(Yii::app()->user->hasFlash('success')): ?>    
        <div class="notifications" style="float: left; width: 53%; margin: 5px 0 0 40px;">
            <div class="alert alert-success fade in" style="margin-bottom: 0px !important">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                </button>
                <strong><i class="icon-ok-sign"></i> SUCESSO!</strong> <?php echo Yii::app()->user->getFlash('success'); ?>
            </div>
        </div>
      <?php endif; ?>          
      <!--notifications end-->

      <div class="top-nav ">
        <ul class="nav pull-right top-menu">
            <!--<li>
               <a style="font-size: 14px" data-toggle="modal" href="#reportarErro"> Reportar erro</a>
            </li>-->
            <!-- user login dropdown start-->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <img alt="" src="" style="display: none">
                  <span class="username"><?= Yii::app()->user->name ?></span>
                  <b class="caret"></b>
              </a>
              <ul class="dropdown-menu extended logout" style="width: 160px !important">
                <div class="log-arrow-up"></div>
                <li style="width: 100%">
                  <a href="<?php echo Yii::app()->createUrl('userGroups/user/profile', array('id'=>Yii::app()->user->id)); ?>">
                    <i class=" icon-suitcase"></i> Perfil
                  </a>
                </li>
                <li>
                  <a href="<?php echo Yii::app()->baseUrl; ?>/userGroups/user/logout">
                    <i class="icon-key"></i> Sair 
                  </a>
                </li>
              </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
      </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
      <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        <?php 
            switch (Yii::app()->user->groupName) {
                case 'root':
        ?>
                    <li class="sub-menu">
						<a href="javascript:;" >
							<span>Gerenciar Chaves</span>
						</a>
						<ul class="sub">
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/chave/create" tittle="">Cadastrar</a></li>
							<li><a href="<?php echo Yii::app()->baseUrl; ?>/emprestimochave/create" tittle="">Emprestar</a></li>
							<li><a href="<?php echo Yii::app()->baseUrl; ?>/emprestimochave/" tittle="">Histórico</a></li>
							<li><a href="<?php echo Yii::app()->baseUrl; ?>#" tittle="">Gerar relatório</a></li>
						</ul>
					</li>


					<li class="sub-menu">
						<a href="javascript:;" >
							<span>Gerenciar Equipamentos</span>
						</a>
						<ul class="sub">
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/equipamento/create" tittle="">Cadastrar</a></li>
							<li><a href="<?php echo Yii::app()->baseUrl; ?>/emprestimoequipamento/create" tittle="">Emprestar</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/emprestimoequipamento/" tittle="">Histórico</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/emprestimoequipamento/" tittle="">Gerar Relatório</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/equipamento/create" tittle="">Novo Equipamento</a></li>
						</ul>
					</li>

               <?php 
                break;
               }
		?>
        <!--menu end-->
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <form class="form valid" id="bug-form" action="/bug/reportarBug" method="post">
                    <div class="modal fade" id="reportarErro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Contato</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group  col-lg-12"> 
                                        <p>
                                          <textarea rows="4" cols="50"  class="form-control" name="Bug[descricao]" id="Bug[descricao]" type="text" placeholder="Digite aqui sua dúvida"> </textarea>
                                        </p>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div style="clear: both"></div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Fechar</button>
                                    <input class="btn btn-info submitForm" type="submit" name="yt1" value="Enviar">                                          
                                </div>
                            </div>
                        </div>
                    </div>
                  </form>
                  <div class="col-lg-12 title">
                      <!--breadcrumbs start -->
                      <?php if(isset($this->breadcrumbs)):?>
                            <?php if ($this->breadcrumbs) {?>
                                 <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                        'links'=>$this->breadcrumbs,
                                        'tagName'=>'ul',
                                        'htmlOptions' => array('class' => 'breadcrumb'),
                                        'homeLink'=>'<li><a href="'.Yii::app()->homeUrl.'"><i class="icon-home"></i> Página Inicial</a></li>',
                                        //'activeLinkTemplate'=>'<li><a href="{url}">{label}</a></li>',
                                        'separator' => ' > ',
                                        //'inactiveLinkTemplate'=>'<li class="active">{label}</li>'
                                )); ?>
                             <?php }
                             else{
                                 echo '<div class="breadcrumb">'.CHtml::encode($this->pageTitle).'</div>';
                             }?>
                      <?php endif?>
                  </div>
              </div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <div class="task-progress">
                                  <h1><?= $this->title_action ?></h1>					
                              </div>
                              <div style="clear:both"></div>
                          </header>
                          <div class="panel-body">
                              <?php echo $content; ?>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              <b>Universidade Federal da Bahia - </b>Sistema de Gerenciamento de Salas e Equipamentos
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
    
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/bootstrap-datepicker/css/datepicker.css');?>

    <!-- js placed at the end of the document so the pages load faster -->
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <?php //Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/bootstrap.min.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.dcjqaccordion.2.7.js', CClientScript::POS_END, array('class'=>'include'));?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.scrollTo.min.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.nicescroll.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/respond.min.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.validate.min.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.validate.messages_pt_BR.js', CClientScript::POS_END);?>
    <!--scripts utilizados anteriormente-->
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/ui/jquery-ui.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/ui/jquery.ui.position.js', CClientScript::POS_END);?>
    <?php //Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/ui/jquery.ui.datepicker.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/bootstrap-datepicker/js/bootstrap-datepicker.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/forms/jquery.maskMoney.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/forms/jquery.maskedinput.min.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/forms/chosen.jquery.js', CClientScript::POS_END);?>
    <?php //Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/forms/jquery.ui.datepicker-pt-BR.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/forms/autoNumeric.js', CClientScript::POS_END);?>    
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.smartWizard.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.MyThumbnail.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.boxy.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/accounting.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/init.js', CClientScript::POS_END);?>
    <!--common script for all pages-->
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/common-scripts.js', CClientScript::POS_END);?>
    <!--customizations-->
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom-scripts.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/count.js', CClientScript::POS_END);?>

  </body>
</html>