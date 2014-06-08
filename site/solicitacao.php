<html>
<head>
	<meta charset="utf-8" />
	<title>SADis - Solicitar Aproveitamento</title>
	<link rel="stylesheet" href="css/960_24_col.css" type='text/css'/> <!-- Grid 960 -->
	<link rel="stylesheet" href="css/style.css" type='text/css' /> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'><!-- GoogleFonts -->
	<script src="js/jquery-1.10.2.min.js"></script>
</head>
<?php 

	require_once("db.php");

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
						Solicitar Aproveitamento
					</div>

					<div class="clearfix"></div> 
					<div class="background_conteudo">
						<form method="POST" action="confirmar.php" onsubmit="return validar(this);" >
							<h2>Nome Completo </h2>  
							<input maxlength="100" style="width:350px;" type="textfield" name="Nome" id="Nome"/> 					
							</br>	
							<br />
							
							<h2>Telefone </h2>
							<input maxlength="10" type="textfield" name="Telefone" id="Telefone"/> 
							<br />
							
							<h2>Email </h2>
							<input maxlength="50" type="textfield" name="Email" id="Email"/> 
							<br />
							
							<h2>Matrícula </h2>
							<input maxlength="10" type="textfield" name="Matricula" id="Matricula"/> 
							<br />							
							
							<h2>Faculdade Atual </h2>
							
							<select name="FACULDADE">
								<option value="0" > Selecione... </option>  
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
							<h2>Curso Solicitado </h2>
							<select name="CURSO">
								<option value="0" > Selecione... </option>  
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

							<h2>Disciplinas Cursadas</h2> 
							<?php 
								
								$result = mysql_query("SELECT CdIdeDis, NmIdeDis from disciplinas ");
								while($row = mysql_fetch_array($result))
								{  ?>
								
								<input type="checkbox" name="disciplinas[]" value="<?php echo utf8_encode($row['CdIdeDis']);?>"> <?php echo utf8_encode($row['NmIdeDis']);?><br>
							<?php
								}
							?>    

							</br>	
							<h2>Histórico Escolar Anterior</h2> 
							<input name="userfile" 
							type="file" />
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

<script type="text/javascript">
	$('#Telefone').keyup(function(e)
	{

		if (/\D/g.test(this.value))
		{
			// Filter non-digits from input value.
			this.value = this.value.replace(/\D/g, '');
		}
			
	});
	$('#Matricula').keyup(function(e)
	{

		if (/\D/g.test(this.value))
		{
			// Filter non-digits from input value.
			this.value = this.value.replace(/\D/g, '');
		}
			
	});	
	
	function validar(formulario) {

		if (
			(formulario.Nome.value.length == 0 ) || (formulario.Telefone.value.length == 0 ) ||
			(formulario.Email.value.length == 0 ) || (formulario.Matricula.value.length == 0 ) ||
			(formulario.FACULDADE.value == 0 ) || (formulario.CURSO.value == 0 ) 
			
			){
			alert("Por favor preencher todos os campos.");
			return false;
		}
		
		if ((formulario.Telefone.value.length < 8 ) && (formulario.Telefone.value.length > 0 )){
			alert("Telefone inválido.");
			return false;							
		}		
		return true;
	}
</script>