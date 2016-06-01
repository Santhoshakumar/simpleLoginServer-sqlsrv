<?php

/*
  $connection = mysql_connect('localhost', 'root', '');
  if (!$connection){
    die("Conexão ao Banco de Dados Falhou" . mysql_error());
  }
  $select_db = mysql_select_db('register');
  if (!$select_db){
    die("Seleção do Banco de dados Falhou" . mysql_error());
  }
  */

  $serverName = "192.168.25.103"; //serverName\instanceName
  $connectionInfo = array( "Database"=>"dev", "UID"=>"dev", "PWD"=>"Dev2016");
  $conn = sqlsrv_connect( $serverName, $connectionInfo);

  if( $conn ) {
       echo "Connection established.<br />";
  }else{
       echo "Connection could not be established.<br />";
       die( print_r( sqlsrv_errors(), true));
  }





?>
