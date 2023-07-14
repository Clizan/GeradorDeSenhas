<?php

 #Função responsável por criar senhas aleatórios
 function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros){

  $letasMaisculas = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; //contem as letras maiúsculas
  $letrasMinusculas= "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
  $numeral = "0123456789"; // $nu contem os números
  $senha = null; //criando a variavel senha como nula para receber as próximas informações
  
  if ($maiusculas){
   // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
   $senha .= str_shuffle($letasMaisculas);
  }
  
  if ($minusculas){
   // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
   $senha .= str_shuffle($letrasMinusculas);
  }
  
  if ($numeros){
   // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
   $senha .= str_shuffle($numeral);
  }
  
  // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
  return substr(str_shuffle($senha),0,$tamanho);
 
 }

 #chamando a função que cria a senha aleatória
 $criarSenha = gerar_senha(12, true, true, true);

?>
