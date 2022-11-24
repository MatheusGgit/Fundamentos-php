<?php
spl_autoload_register(function (string $nomeCompletoDaClasse){
    //
    //
    $caminhoDoArquivo = str_replace('Funcamentos-php\\Poo\\Definicao explicita de dados\\Modelo', 'src', $nomeCompletoDaClasse);
    $caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoDoArquivo);
    if (file_exists($caminhoDoArquivo))
    {
        require_once $caminhoDoArquivo;
    }
});