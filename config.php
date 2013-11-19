<?php

 $conecta = mysql_connect("localhost","root","") or die(" Conexao nao efetuada.");//comando utilizado para criar a conexão com 
 //a base de dados num servidor mySQL

 if($conecta){
 	die("Conexao nao estabelcida");
 }else{
 	$db_conecta = mysql_select_db("bdronniel",$conecta); //comando utilizado para selecionar a base de dados depois que a conexão for estabelcida.	
 }
 
 mysql_close($conecta);


 

?>