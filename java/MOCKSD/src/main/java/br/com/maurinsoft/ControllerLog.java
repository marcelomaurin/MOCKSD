package br.com.maurinsoft;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;


@RestController
public class ControllerLog {

    @Autowired
    ServiceLog serviceLog;

    @GetMapping("/registra-log")
    public String registraLog(@RequestParam("email") String email) {
        String sucesso = "{\n" +
                "   \"sucesso\": true,\n" +
                "   \"retorno\": {\n" +
                "       \"texto\": \"Sucesso no retorno da mensagem:\"\n" +
                "   }\n" +
                "}";
        String falha = "{\n" +
                "   \"sucesso\": false,\n" +
                "   \"retorno\": {\n" +
                "       \"texto\": \"Ocorreu um erro / Não localizamos seu CPF / Nao ha dividas vinculadas a voce. Digite outro cpf ou # para voltar:\"\n" +
                "   }\n" +
                "}";

        if ("falha".equals(email)) {
            return falha;
        } else {
            return sucesso;
        }
    }

}