<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(15);

        return view('employees.index', [
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmployeeRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        DB::transaction(function() use($request) {
            $employee = Employee::create(
                $request->only(['nome', 'cpf', 'data_contratacao'])
            );

            $employee->address()->create(
                $request->only(['logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'cep', 'estado'])
            );
        });

        return redirect()->route('employees.index')
                        ->with('mensagem', 'Funcionário cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', [
            'employee' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EmployeeRequest $request
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        DB::transaction(function() use ($request, $employee) {
            $employee->update(
                $request->only(['nome', 'cpf', 'data_contratacao'])
            );

            $employee->address->update(
                $request->only(['logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'cep', 'estado'])
            );
        });

        return redirect()->route('employees.index')
                        ->with('mensagem', 'Funcionário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        DB::transaction(function() use ($employee) {
            $employee->address->delete();

            $employee->delete();
        });

        return redirect()->route('employees.index')
                        ->with('mensagem', 'Funcionário apagado com sucesso!');
    }
}
