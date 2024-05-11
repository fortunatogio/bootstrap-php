<?php
     
    function exibirData(){
        echo "Hoje é dia ".date("d");
    }

    function somar($n1, $n2){
        return $n1 + $n2;
    }


    function positivoNegativo($v){
        if ($v > 0){
            return "Valor positivo";
        } elseif($v<0){
            return "Valor Negativo";
        } else{
            return "Ihual a zero";
        }
    }

    function menorValor($v, $v1, $v2, $v3, $v4, $v5, $v6, $v7){
        $menorvalor = 999999999999999999999999999999999;
        $pos = 0;

        if ($v<$menorvalor){
            $menorvalor = $v1;
            $pos = 1;
        }
        if ($v2<$menorvalor){
            $menorvalor = $v2;
            $pos = 2;
        }
        if ($v3<$menorvalor){
            $menorvalor = $v3;
            $pos = 3;
        }
        if ($v4<$menorvalor){
            $menorvalor = $v4;
            $pos = 4;
        }
        if ($v5<$menorvalor){
            $menorvalor = $v5;
            $pos = 5;
        }
        if ($v6<$menorvalor){
            $menorvalor = $v6;
            $pos = 6;
        }
        if ($v7<$menorvalor){
            $menorvalor = $v7;
            $pos = 7;
        }

        return array ($menorvalor, $pos);
    }