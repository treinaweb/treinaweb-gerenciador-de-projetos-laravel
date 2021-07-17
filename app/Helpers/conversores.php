<?php

if (!function_exists('date_to_br')) 
{
    function date_to_br(string $dataOriginal) 
    {
        return \Carbon\Carbon::create($dataOriginal)->format('d/m/Y');
    }
}