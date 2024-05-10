<?php
require 'outro.php';

$variavel = 115315414564348631405346546543421654125;
var_dump($variavel);
var_dump('teste');

try {
  funcao1("Um parâmetro");
} catch (\Throwable $th) {
  echo $th->getMessage();
}