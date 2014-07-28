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

	require_once("db.php");

?>

<body>
	<div class="background">
		<div class="container_24">
			<div class="grid_4 suffix_13">
				<div class="logo">
					<a href="../index.html"><img src="logo_SADis_menor.png"></a>
				</div>
			</div>

			<div class="grid_24">
				<div class="background_transparente">    
					<div class="id_aba_ativa">
						Acompanhar Solicitação
					</div>

					<div class="clearfix"></div> 
					<div class="background_conteudo">
						<form onsubmit="return validar(this);" method="POST" action="checarSolicitacao.php">


							<h2>Código da Solicitação: </h2><input type="text" name="CodSolic" id="NOME" />
							
						
							<br />		
							<br />		
							<br />		
							
							
							<input type="submit" class="btn" value="ENVIAR"  onClick="if (!validacao()) return false;"/>

						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>  
	</div>           
</body>


</html>


<script type="text/javascript">
	function validar(formulario) {

		if (formulario.CodSolic.value.length == 0 )   {
			alert("Por favor preencher os campos.");
			return false;
		}
		

		return true;
	}
</script>