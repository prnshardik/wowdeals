<?php

    if(!function_exists('_site_name')){
        function _site_name(){
            return "Wow Deals";
        }
    }  

    if(!function_exists('_site_logo')){
        function _site_logo(){
            return \URL('/assets/img/shreemart-icon.png');
        }
    }

    if(!function_exists('_site_logo_1')){
        function _site_logo_1(){
            return \URL('/assets/img/logo-dark.png');
        }
    }

    if(!function_exists('_site_logo_2')){
        function _site_logo_2(){
            return \URL('/assets/img/logo.png');
        }
    }
?>