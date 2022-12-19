<?php
/*
 * Environment - define o ambiente que desejo acessa
 * 	development - desenvolvimento
 * 	prodution - repositório web
 */
define("ENVIRONMENT", "development");

//nome do projeto
define("NAME_PROJECT", "Joab Torres Alencar");

//URL DO PROJETO
define("BASE_URL", "http://localhost/v2joabtorres/");

$config = array(
    'db' => array(
        'dbname' => 'joabtorres',
        //nome do banco
        'host' => 'localhost',
        //host
        'dbuser' => 'root',
        // nome do usuario
        'dbpass' => '' // senha
    )
);