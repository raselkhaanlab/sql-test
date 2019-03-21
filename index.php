<?php
require_once "connection.php";
//host,dbname,username,passwrod 
	$db=new connection('localhost','test','root','');
  	$campaigns=$db->selectAll('campaigns');
  	$landers=$db->selectAll('landers');
  	$conversions=$db->selectAll('conversions');
  	$exec_results= $db->resultExecuted();

 require_once "view.php";
