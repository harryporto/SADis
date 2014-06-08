<?php

	$result = mysql_query("SELECT CdIdeFacul, NmIdeFacul from faculdades where CdIdeFacul = ".$IdFaculdade."");
	while($row = mysql_fetch_array($result)){
		$nmFaculdade = utf8_encode($row["NmIdeFacul"]);
	}
	$result = mysql_query("SELECT CdIdeCur, NmIdeCur from cursos where CdIdeCur  = ".$IdCurso."");
	while($row = mysql_fetch_array($result)){
		$nmCurso = utf8_encode($row["NmIdeCur"]);
	}


?>