<?php //Recursos PHP
const ESCOLA = "senac";
$curso = "Programador WEB";
$tecnologias = ["HTML", "CSS", "JavaScript", "PHP"];

function verificarIdade (int $valor):string {
    if ($valor >= 18) {
        return "maior";

     } else {
         return "menor";
      }  
    }