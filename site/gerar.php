﻿<html>
<head>
	<meta charset="utf-8" />
	<title>SADis - Envio Concluído</title>
	<link rel="stylesheet" href="css/960_24_col.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="css/jquery.dataTables.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="css/style.css" type='text/css' /> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'><!-- GoogleFonts -->
</head>
<?php 

	require_once("db.php");
	$codigo = $_POST['codigo'];
?>

<body>
	<div class="background">
		<div class="container_24">
			<div class="grid_4 suffix_13">
				<div class="logo">
					<a href="index.html"><img src="logo_SADis_menor.png"></a>
				</div>
			</div>

			<div class="grid_24">
				<div class="background_transparente">    
					<div class="id_aba_ativa">
						Envio Concluído
					</div>

					<div class="clearfix"></div> 
					<div class="background_conteudo">
						<h2> Solicitação enviada com sucesso!</h2></br>
						<h2> Código da Solicitação para acompanhamento: <?php echo $codigo;?></h2></br>
						<a href="index.html">Retornar a página principal</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>  
	</div>           
</body>


</html>