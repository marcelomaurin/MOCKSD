<?php

ini_set('display_errors', 'off');
error_reporting(E_ALL);

	
$typereq = $_SERVER['REQUEST_METHOD'];
//echo $typereq;



if ($typereq==='POST') 
{
	$email = $_POST['email'];
}

if ($typereq === 'GET') 
{
	if ($_GET['email']) 
	{
		$email = $_GET['email'];
	}	
	else
	{
		$email = 'vazio';
	}
	echo SacD_registra_log();
}

if ($typereq === 'DELETE') 
{
	
}


// Endpoint do web service para inserir dados na tabela SacD_logs
function SacD_registra_log(  ) {
    global $wpdb;

    $sucesso =
    '{
           "sucesso": true,
           "retorno": {
           "texto": "Sucesso no retorno da mensagem:"
           }
      }';
    $falha =
    '{
           "sucesso": false,
           "retorno": {
           "texto": "Ocorreu um erro / Não localizamos seu CPF / Nao ha dividas vinculadas a voce. Digite outro cpf ou # para voltar:"
           }
      }';
    //$email = $request->get_param('email');
    if ($email=="falha"){
      $resposta = $falha;
    }
    else
    {
      $resposta = $sucesso;
    }

    return $resposta;
}
