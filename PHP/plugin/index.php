<?php
/**
 * Plugin Name: SACDigital
 * Plugin URI: http://maurinsoft.com.br/
 * Description: Exemplo de Web Service Mocking
 * Version: 1.0
 * Author: Marcelo Maurin Martins
 * Author URI: https://maurinsoft.com.br
 */


// Adiciona a rota do web service para chamar /wp-json/SacD/v1/registra_log
add_action( 'rest_api_init', 'SacD_register_moc' );



function SacD_register_moc() {
    //...
    register_rest_route( 'SacD/v1', '/registra_log.php', array(
        'methods' => 'GET',
        'callback' => 'SacD_registra_log',
    ) );
	
}


// Endpoint do web service para inserir dados na tabela SacD_logs
function SacD_registra_log( WP_REST_Request $request ) {
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
    $email = $request->get_param('email');
    if ($email=="falha"){
      $resposta = $falha;
    }
    else
    {
      $resposta = $sucesso;
    }

    return $resposta;
}





