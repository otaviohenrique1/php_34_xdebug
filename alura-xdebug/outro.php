<?php

function funcao1(string $param): never
{
  echo $param;
  funcao2();
}

function funcao2(): never
{
  throw new Exception("Mensagem");
}
