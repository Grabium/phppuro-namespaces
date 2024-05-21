<?php

print 'Autoloadding...';

spl_autoload_register(function ($nomeCompletoDaClasse){
  $caminhoCompleto = str_replace('Gabriel\\PHP_Puro_Namespaces', 'src', $nomeCompletoDaClasse);
  $caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoCompleto).'.php';
  if(file_exists($caminhoDoArquivo)) {
    require_once $caminhoDoArquivo;
  }
  
});

print '...completed'.PHP_EOL;
// DIRECTORY_SEPARATOR é o separadorde diretório relacionado ao sistema:

