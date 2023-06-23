# MOCKSD
MOCK SacDigital

# Objetivo
Exemplo de projeto "Mock" de serviço do SACDigital. Escritos em PHP, Wordpress, Java

https://sac.digital/

Observação: Este projeto não tem vinculo com a empresa, foi desenvolvido por terceiro, e não tem ligação direta ou indireta com esta empresa.
Este projeto é para teste, tendo sido criado para validação.

# Procedimento de instalação

Instalação do Plugin
====================
1) Baixe o fonte /php/plugin
2) Copie o plugin para a pasta \www\wp-content\plugins
3) Entre na wordpress, nos plugins, ative o plugin SACDigital

Instalação do ws
================
1) Baixe o fonte
2) Copie a pasta ws para o raiz do html
3) Entre no site e digite http://seusite/ws/teste_moc.php

Configurando no sacdigital
==========================
Entre no menu que deseja parametrizar a função, vá em CONFIGURAR REQUISIÇÃO, em "Rota HTTP" aponte o url http://seusite/ws/teste_moc.php , teste para ver se funciona.
No caso do plugin deve ser criado um url: http:seusite/wp-json/SacD/v1/registra_log.php
   


Resultado esperado
==================
Deve aparecer no menu com a opção que programou a informação:
"Sucesso no retorno da mensagem:"


