<?php
function verificarAcesso($idade, bool $auth)
{
    if ($idade >= 18 && $auth == true) {
        return "Acesso autorizado";
    } else if ($idade < 18) {
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } else if ($idade >= 18 && $auth == false) {
        return "Acesso negado. Autorização necessária";
    }
}
