<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InativarFuncionario extends Controller
{
    /**
     * Inativa um funcionário
     *
     * @param Employee $employee
     * @return void
     */
    public function __invoke(Employee $employee)
    {
        if ($employee->data_demissao) {
            return redirect()->route('employees.show', $employee)
                                ->with('mensagem', 'Esse funcionário já está inativo!');
        }

        $employee->data_demissao = Carbon::now();
        $employee->save();

        return redirect()->route('employees.show', $employee)
                                ->with('mensagem', 'Funcionário inativado com sucesso!');
    }
}
