<?php
session_start();

if(!isset($_SESSION['usuario'])){
	
	header ('Locarion: login.php?erro=true');
	
	exit;	
}