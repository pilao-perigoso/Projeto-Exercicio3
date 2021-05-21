<?php

$vetor1 = [
    "a" => "Água com limão ", 
    "b" =>"Bacon ", 
    "c" =>"Cúrcuma ", 
    "d" =>"Doce de leite ",
    "e" =>"Azeite ",
    "f" =>"Frango ",
    "g" =>"Gengibre ",
    "h" =>"Adoçante ",
    "i" =>"Açucar ",
    "j" =>"Jiló ",
    "k" =>"Comida Japonesa ",
    "l" =>"Leite ",
    "m" =>"Macarrão ",
    "n" =>"Nata ",
    "o" =>"Ovo ",
    "p" =>"Pizza ",
    "q" =>"Óleo de coco ",
    "r" =>"Rabanada ",
    "s" =>"Suco detox ",
    "t" =>"Sal rosa ",
    "u" =>"Glutamina ",
    "v" =>"Hibisco ",
    "w" =>"Pimenta ",
    "x" =>"Própolis ",
    "y" =>"Kumbucha ",
    "z" =>"Peixe ",
];

$vetor2 = [
    'janeiro' => "ao acordar ",
    'fevereiro' => "pré-treino ",
    'março' => "amassado com limão ",
    'abril' => "no cabelo ",
    'maio' => "em Jejum ",
    'junho' => "de 3 em 3 horas ",
    'julho' => "no chá ",
    'agosto' => "no café ",
    'setembro' => "depois das 18h00 ",
    'outubro' => "antes da aula ",
    'novembro' => "misturado na água ",
    'dezembro' => "antes do almoço "
];

$vetor3 = [
    '1-3' => "diminiu o inchaço.",
    '4-6' => "previne infarto.",
    '7-9' => "cura dor de dente.",
    '10-12' => "limpa o fígado.",
    '13-15' => "deixa mais inteligente.",
    '16-18' => "limpa as artérias.",
    '19-21' => "deixa músculos.",
    '22-24' => "fortalece a unha.",
    '25-27'=> "mata.",
    '28-30' => "dá sorte.",
    '31'  => "dá azar."
];

$dia = $_POST['dia']; 
        if($dia >= 1 && $dia <= 3){
            $dia = '1-3';
        }
        elseif($dia >= 4 && $dia <= 6){
            $dia = '4-6';
        }
        elseif($dia >= 7 && $dia <= 9){
            $dia = '7-9';
        }
        elseif($dia >= 10 && $dia <= 12){
            $dia = '10-12';
        }
        elseif($dia >= 13 && $dia <= 15){
            $dia = '13-15';
        }
        elseif($dia >= 16 && $dia <= 18){
            $dia = '16-18';
        }
        elseif($dia >= 19 && $dia <= 21){
            $dia = '19-21';
        }
        elseif($dia >= 22 && $dia <= 24){
            $dia = '22-24';
        }
        elseif($dia >= 25 && $dia <= 27){
            $dia = '25-27';
        }
        elseif($dia >= 28 && $dia <= 30){
            $dia = '28-30';
        }
        else{
            $dia = '31';
        }
        
        $frase = $vetor1[$_POST['inicial']] . $vetor2[$_POST['mes']] . $vetor3[$dia];

        require 'gerador_frases.view.php';

        

