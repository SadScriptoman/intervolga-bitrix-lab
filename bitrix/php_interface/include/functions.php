<?php

    function dump($var){

        Bitrix\Main\Diag\Debug::dump($var);
        
    }

    function getCurPageURL(){
        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);

        return $url[0];
    }