<html>
<head>
	<meta charset="utf-8" />
	<title>SADis - Confirmar Aproveitamento</title>
	<link rel="stylesheet" href="css/960_24_col.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="css/jquery.dataTables.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="css/style.css" type='text/css' /> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'><!-- GoogleFonts -->
</head>
<?php 
	require_once("db.php");
	
	
	
	//Tratamento SQL-Injection
	$nome = $_POST["Nome"];
	$telefone = $_POST["Telefone"];
	$email = $_POST["Email"];
	$matricula = $_POST["Matricula"];
	$IdFaculdade = $_POST["FACULDADE"];
	$IdCurso = $_POST["CURSO"];

	
	$nome = mysql_real_escape_string($nome,$con);	
	$telefone = mysql_real_escape_string($telefone,$con);	
	$email = mysql_real_escape_string($email,$con);	
	$matricula = mysql_real_escape_string($matricula,$con);	
	$IdFaculdade = mysql_real_escape_string($IdFaculdade,$con);	
	$IdCurso = mysql_real_escape_string($IdCurso,$con);	
	
	include("consultarDados.php");
	include("listarDisciplinas.php");
	
	
	
	
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
						Confirmar Solicitação
					</div>

					<div class="clearfix"></div> 
					<div class="background_conteudo">
						<form method="POST" action="gerar.php">
							
							<h2>Nome Completo  </h2> <?php echo $nome;?>
							<h2>Telefone </h2>  <?php echo $telefone;?>
							<h2>Email </h2>  <?php echo $email;?>
							<h2>Matrícula </h2> <?php echo $matricula;?>
							<h2>Faculdade Atual </h2>  <?php echo $nmFaculdade;?>
							<h2>Curso Solicitado </h2> <?php echo $nmCurso;?>
							<h2>Disciplinas Cursadas</h2>  <?php include("listarDisciplinas.php");?>
							
							<input type="hidden" name="nome" value="<?php echo $nome;?>">
							<input type="hidden" name="telefone" value="<?php echo $telefone;?>">
							<input type="hidden" name="email" value="<?php echo $email;?>">
							<input type="hidden" name="matricula" value="<?php echo $matricula;?>">
							<input type="hidden" name="faculdade" value="<?php echo $IdFaculdade;?>">
							<input type="hidden" name="curso" value="<?php echo $IdCurso;?>">
							<input type="hidden" name="disciplinas" value="<?php echo $_POST['disciplinas'];?>">
							
							<br>
							<br>
							<input style="margin-left:160px;"class="btn" type="submit" value="CONFIRMAR"  />
						</form>
						<button style="margin-top:-62px;" class="btn" onClick="window.history.back();" >CANCELAR</button>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>  
	</div>           
</body>



</html>