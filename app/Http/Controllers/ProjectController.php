<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('client')->get();

        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Client::get();
        $funcionarios = Employee::get();

        return view('projects.create', [
            'clientes' => $clientes,
            'funcionarios' => $funcionarios
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProjectRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        DB::transaction(function() use($request) {
            $project = project::create(
                $request->except(['_token', 'funcionarios'])
            );

            $project->employees()->attach($request->funcionarios);
        });

        return redirect()->route('projects.index')
                        ->with('mensagem', 'Projeto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $project->load(['client', 'employees']);
        
        return view('projects.show', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projeto = Project::findOrFail($id);
        $clientes = Client::get();
        $funcionarios = Employee::get();

        return view('projects.edit', [
            'project' => $projeto,
            'clientes' => $clientes,
            'funcionarios' => $funcionarios
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProjectRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);

        DB::transaction(function() use($request, $project) {
            $project->update(
                $request->except(['_token', 'funcionarios'])
            );

            $project->employees()->sync($request->funcionarios);
        });

        return redirect()->route('projects.index')
                        ->with('mensagem', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
