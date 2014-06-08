<?php	
	$aDisciplinas = $_POST['disciplinas'];
	if(empty($aDisciplinas)) 
	{
		$semMaterias = true;
	} 
	else
	{
		$N = count($aDisciplinas);
		for($i=0; $i < $N; $i++)
			{
							
			  	$indDisciplina = $aDisciplinas[$i];
				$result = mysql_query("SELECT CdIdeDis, NmIdeDis from disciplinas where CdIdeDis = ".$indDisciplina."");
				while($row = mysql_fetch_array($result)){
					echo utf8_encode($row["NmIdeDis"])."<br>";
				}
			 
			}
	}
	
?>	