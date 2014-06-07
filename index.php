<head>
	<meta charset="utf-8" />
	<title>SADis - Entrada</title>
	<link rel="stylesheet" href="css/960_24_col.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="css/jquery.dataTables.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="css/style.css" type='text/css' /> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'><!-- GoogleFonts -->
</head>
<?php 
	/*session_start();
	if (!isset($_SESSION["acesso"])){
		header("location: login.php");
	
	}
	else{*/

?>
<body>
	<div class="background">
		<div class="container_24">
			<div class="grid_4 suffix_13">
				<div class="logo">
					<img src="img/logo_SADis_menor">
				</div>
			</div>
			<div class="grid_7">
				<!--div class="id_usuario">
					<a href="login.php" class="right">Sair</a>
					<h1 class="right">Usuário Aluno  </h1>
				</div-->
			</div>
			<div class="grid_24">
				<div class="background_transparente">    		
					<div class="clearfix"></div> 
					<div class="background_conteudo">
								<div class="grid_18 prefix_6"> 
									<div class="grid_17 prefix_7" style="margin-left:50px" ><h1 >Entrada</h1></div>	
									<div class="grid_21 prefix_3">
									<div class="grid_6"><td><a href="solicitacao.php"> <h2>Solicitar Aproveitamento </h2></a></td></div>
									<div class="grid_6 prefix_2"><td><a href="bairros/index.php"> <h2>Acompanha Solicitação </h2></a></td></div>
									</div>
								</div>	
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>  
	</div> 
</body>	
<?php// } ?>
