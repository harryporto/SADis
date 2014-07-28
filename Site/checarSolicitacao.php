<html>
<head>
	<meta charset="utf-8" />
	<title>SADis - Acompanhar Solicitação</title>
	<link rel="stylesheet" href="css/960_24_col.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="css/jquery.dataTables.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="css/style.css" type='text/css' /> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'><!-- GoogleFonts -->
</head>
<?php 

	require "db.php";
	$codigo = $_POST['CodSolic'];
	

	$result = mysql_query("SELECT StatusSolic FROM solicitacoes WHERE CodSolic ='$codigo' ");
	
	while($row = mysql_fetch_array($result)){
		$status = utf8_encode($row["StatusSolic"]);
	}
	
	if (!(isset($status))){
		$status = "Solicitação não encontrada";
	}
	
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
						Acompanhar Solicitação
					</div>

					<div class="clearfix"></div> 
					<div class="background_conteudo">
						<div class="background_conteudo">
							<h2> Status da Solicitação: <br><?php echo $status;?></h2></br>
							<a href="index.html">Retornar a página principal</a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>  
	</div>           
</body>


</html>
