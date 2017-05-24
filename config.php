<?php
/**
 * Configurações de conexão com o banco de dados.
 * Confere qual ambiente esta
 * User: JRNET
 * Date: 21/05/2017
 * Atualizado com algumas modificações
 */
require 'environment.php';

// Foi Removido define("BASE_URL", "http://localhost/");

global $config;
global $db;

$config = array();
 // Verifica o ambiente que esta "development"
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/chat");
	$config['dbname'] = 'chat';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://localhost/chat");
	$config['dbname'] = 'chat';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

// Adicionado a conexão com banco
$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>