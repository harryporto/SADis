<?php	
	// Arquivo: gravarDisciplinas.php
	// Grava as disciplinas cursadas pelo aluno na tabela
	
	$gDisciplinas = $_POST['disciplinas'];
	if(empty($gDisciplinas)) 
	{
		$semMaterias = true;
	} 
	else
	{
		$N = count($gDisciplinas);
		for($i=0; $i < $N; $i++)
			{
							
				$indDisc = $gDisciplinas[$i];
				
				$rs = mysql_query("INSERT INTO r_alunos_disciplinas (ALUNOS_CdIdeAlu, DISCIPLINAS_CdIdeDis ) 
																VALUES ( '" . $indAluno . "' , '" . $indDisc . "') ");
			 
			}
	}
	
?>	