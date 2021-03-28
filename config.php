<?php
error_reporting(0);
//DADOS DO SITE
$site_name = "Leozinho CDS";//NOME DO SITE
define("SITE_NAME", "Site tv", true);
define("SITE_URL", "https://tv.live1pack2.ml", true);
define("HOST", "localhost", true);
define("USER", "u385797723_tv", true);
define("BANCO", "u385797723_tv", true);
define("PASSWORD", "Qwert.,07", true);
// FAZ A CONEXÃO
try {$conexao = new PDO('mysql:host=' . HOST . ';dbname=' . BANCO, USER, PASSWORD);}catch (PDOException $e){
    header('Location:'. $site_url.'/erro?db=error');
    exit;}