<?php

if (!function_exists('limpa_mascara')) 
{
    function limpa_mascara(string $valorOriginal): string
    {
        return str_replace(['.', '-'], '', $valorOriginal);
    }
}

if (!function_exists('situacao_funcionario')) 
{
    function situacao_funcionario(string $dataDemissao = null): string
    {
        return $dataDemissao === null ? 'Ativo' : 'Demitido';
    }
}
