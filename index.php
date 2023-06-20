<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<title>Multidados TI</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />

	<!-- INCLUINDO CLASSE ITEM PARA O MENU -->
	<?php include_once('model/Item.php'); ?>

	<!-- INCLUINDO O DATA REQUEST PARA BUSCA DOS DADOS -->
	<?php
	include_once('DataRequest.php');
	/* instanciando a classe datarequest */
	$dataRequest = new DataRequest();
	?>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
	<?php include_once('components/cabecalho.php') ?>
	<!-- END PAGE HEADER-->
	<!-- BEGIN DASHBOARD STATS -->
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="fa fa-shopping-cart"></i>
				</div>
				<div class="details">
					<div class="number">
						<?php
						/* pega a quantidade de clientes */
						echo $dataRequest->dadosClientes('c');
						?>
					</div>
					<div class="desc">
						Clientes
					</div>
				</div>
				<a class="more" href="#">
					Visualizar <i class="m-icon-swapright m-icon-white"></i>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="dashboard-stat green">
				<div class="visual">
					<i class="fa fa-group"></i>
				</div>
				<div class="details">
					<div class="number">
						<?php
						/* pega a quantidade de usuários */
						echo $dataRequest->dadosUsuarios('c');
						?>
					</div>
					<div class="desc">
						Usuários
					</div>
				</div>
				<a class="more" href="#">
					Visualizar <i class="m-icon-swapright m-icon-white"></i>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="dashboard-stat purple">
				<div class="visual">
					<i class="fa fa-globe"></i>
				</div>
				<div class="details">
					<div class="number">
						<?php
						/* pega a quantidade de fornecedores */
						echo $dataRequest->dadosFornecedores('c');
						?>
					</div>
					<div class="desc">
						Fornecedores
					</div>
				</div>
				<a class="more" href="#">
					Visualizar <i class="m-icon-swapright m-icon-white"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- END DASHBOARD STATS -->
	<div class="clearfix">
	</div>
	<!--Tabela-->
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
			<div id="portlet" class="portlet box grey">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-folder-open"></i>Tabela Simples
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
						<a href="#portlet-config" data-toggle="modal" class="config"></a>
						<a href="javascript:;" class="reload"></a>
						<a href="javascript:;" class="remove"></a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<!-- O HEAD FOI PREENCHIDO DINÂMICAMENTE UTILIZANDO JQUERY -->
								</tr>
							</thead>
							<tbody>
								<!-- O BODY FOI PREENCHINDO DINÂMICAMENTE UTILIZANDO JQUERY -->
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<!-- END SAMPLE TABLE PORTLET-->
		</div>
	</div>
	</div>
	</div>
	<!-- END CONTENT -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php include_once('components/rodape.php') ?>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js" type="text/javascript"></script>
	<script src="assets/scripts/index.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {
			App.init(); // initlayout and core plugins
			Index.init();
		});
	</script>
	<!-- SCRIPT PARA MUDAR A COR DA TABELA -->
	<script src="assets/scripts/muda_table_cor.js" type="text/javascript"></script>
	<!-- AJAX REQUEST PARA FAZER A REQUISIÇÃO DA "API INTERNA" -->
	<script src="assets/scripts/ajax_request.js" type="text/javascript"></script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>