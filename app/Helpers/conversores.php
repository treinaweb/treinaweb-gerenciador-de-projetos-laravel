<?php

if (!function_exists('date_to_br')) 
{
    function date_to_br(string $dataOriginal): string
    {
        return \Carbon\Carbon::create($dataOriginal)->format('d/m/Y');
    }
}

if (!function_exists('date_to_iso')) 
{
    function date_to_iso(string $dataOriginal): string
    {
        return \Carbon\Carbon::createFromFormat('d/m/Y', $dataOriginal)
                                ->toDateString();
    }
}



