<head>
	<meta charset="utf-8" />
	<title>SADis - Solicitar Aproveitamento</title>
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
	require_once("db.php");
?>

<body>
	<div class="background">
		<div class="container_24">
			<div class="grid_4 suffix_13">
				<div class="logo">
					<a href="../index.php"><img src="img/logo_SADis_menor.png"></a>
				</div>
			</div>
			<!--div class="grid_7">
				<div class="id_usuario">
					<a href="../login.php" class="right">Sair</a>
					<h1 class="right">Usuário Aluno </h1>
				</div>
			</div-->
			<div class="grid_24">
				<div class="background_transparente">    
					<div class="id_aba_ativa">
						Solicitar Aproveitamento
					</div>

					<div class="clearfix"></div> 
					<div class="background_conteudo">
						<form method="POST" action="">
							<h2>Nome Completo </h2>  
							<input value="Usuário" type="text" name="NomeCompleto" class="input"></input>							
							</br>	
							<br />
							
							<h2>Telefone </h2><input maxlength="10" type="textfield" name="Telefone" id="Telefone"/> 
							<br />
							<h2>Email </h2><input maxlength="10" type="textfield" name="Email" id="Email"/> 
							<br />
							<h2>Matrícula </h2><input maxlength="10" type="textfield" name="Matricula" id="Matricula"/> 
							<br />							
							<h2>Faculdade  </h2>
							
							<select name="FACULDADE">
								<?php 
									  $result = mysql_query("SELECT CdIdeFacul  , NmIdeFacul from faculdades  ");
										while($row = mysql_fetch_array($result))
										{ ?><option value="<?php echo utf8_encode($row['CdIdeFacul']);?>" > <?php echo utf8_encode($row['NmIdeFacul']);?> </option>             
									<?php
										}
								?>    
																						
							</select>

							</br>	
							<br />
							<h2>Curso  </h2>
							<select name="CURSO">
								<?php 
									  $result = mysql_query("SELECT CdIdeCur, NmIdeCur from cursos  ");
										while($row = mysql_fetch_array($result))
										{ ?><option value="<?php echo utf8_encode($row['CdIdeCur']);?>" > <?php echo utf8_encode($row['NmIdeCur']);?> </option>             
									<?php
										}
								?>    
																						
							</select>

							</br>	
							<br />

							<h2>Disciplinas </h2> 
							<input type="checkbox" name="disciplinas" value="MATA37">MATA37 - Analise de Algoritmos<br>
							<input type="checkbox" name="disciplinas" value="MATA50">MATA50 - Sistemas Operacionais 

							</br>	
							<br />
						

							<br/>
							<br/>						
							<input class="btn" type="submit" value="ENVIAR"  onClick="if (!validacao()) return false;"/>

						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>  
	</div>           
</body>
<?php// } ?>

<script>

alert("Por favor preencher todos os campos");

</script>
