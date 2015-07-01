<?php

    function rota(){


        $rotas = ["home","empresa","produtos","servicos","contato"];
        $rota = trim(parse_url(filter_input(INPUT_SERVER,'REQUEST_URI'),PHP_URL_PATH),'/');


        if (($rota == "") or (!file_exists($rota.".php")) or (!in_array($rota,$rotas))){

            return "erro.php";

        }else{

            return $rota.".php";

        }


    }


?>
