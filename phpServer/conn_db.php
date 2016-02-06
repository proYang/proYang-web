<?php
@ $db = new mysqli('mysql.hostinger.com.hk', 'u277374159_root', 'r5Tbqe4jl3','u277374159_blog');
$db->query('set names utf8');
if(mysqli_connect_errno()){
	echo "Error: Could not connect to database. Please try again later";
	exit;
}

?>