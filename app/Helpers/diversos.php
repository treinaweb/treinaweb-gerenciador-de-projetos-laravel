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
        return $dataDemissao === null ? 'Ativo' : 'Inativo';
    }
}

if (!function_exists('formata_cpf')) 
{
    function formata_cpf(string $cpf): string
    {
        return \Clemdesign\PhpMask\Mask::apply($cpf, '000.000.000-00');
    }
}

if (!function_exists('formata_cep')) 
{
    function formata_cep(string $cpf): string
    {
        return \Clemdesign\PhpMask\Mask::apply($cpf, '00000-000');
    }
}
