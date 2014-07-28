<head>
	<meta charset="utf-8" />
	<title>SADIS Administrador - Entrada</title>
	<link rel="stylesheet" href="../css/960_24_col.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="../css/jquery.dataTables.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="../css/style.css" type='text/css' /> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'><!-- GoogleFonts -->
</head>
<?php 
	session_start();
	if (!isset($_SESSION["acesso"])){
		header("location: login.php");
		
	}
	else{
		include ("db.php");
		$usuario = $_SESSION["usuario"];
		$sql = "SELECT CdIdeUsu FROM usuarios where NmIdeUsu = '$usuario' ";
		$result = mysql_query($sql);
		while($row = mysql_fetch_array($result)){
			$CdIdeUsu = $row['CdIdeUsu'];
		}
?>
<body>
	<div class="background">
		<div class="container_24">
			<div class="grid_4 suffix_13">
				<div class="logo">
					<img src="../img/logo_SADis_menor.png">
				</div>
			</div>
			<div class="grid_7">
				<div class="id_usuario">
					<a style="margin-left:15px;" href="login.php" class="right">Sair</a>
					<h1 class="right">Usuário Administrador  </h1>
				</div>
			</div>
			<div class="grid_24">
				<div class="background_transparente">    		
					<div class="clearfix"></div> 
					<div class="background_conteudo">
								<div class="grid_11 prefix_13"><h1 >Painel do Administrador</h1></div>	
								<div class="grid_16 prefix_8">
								<div class="grid_3"><td><a href="cursos/index.php"> <h2>Cursos </h2></a></td></div>
								<div class="grid_3"><td><a href="disciplinas/index.php"> <h2>Disciplinas </h2></a></td></div>
								<div class="grid_3"><td><a href="usuarios/index.php"> <h2>Usuários </h2></a></td></div>
								<div class="grid_3"><td><a href="solicitacoes/index.php"> <h2>Solicitações </h2></a></td></div>
								<div class="grid_3"><td><a href="mudarSenha.php?CdIdeUsu=<?php echo $CdIdeUsu;?>"> <h2>Mudar a Senha </h2></a></td></div>
								</div>	
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>  
	</div> 
</body>	
<?php } ?>
