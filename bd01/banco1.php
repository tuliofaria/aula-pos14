<?php

	$conn = mysql_connect("localhost", "root", "");
	$bd = mysql_select_db("cdcol");

	$query = mysql_query("select * from cds");

	while($dados = mysql_fetch_array($query)){

		echo $dados["titel"]."<br>";

	}