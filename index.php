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
    register_rest_route( 'SacD/v1', '/registra_log', array(
        'methods' => 'GET',
        'callback' => 'SacD_registra_log',
    ) );
}


// Endpoint do web service para inserir dados na tabela SacD_logs
function SacD_registra_log( WP_REST_Request $request ) {
    global $wpdb;

    return 'Dados inseridos na tabela com sucesso.';
}





