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
        $projects = Project::with('client')->paginate(15);

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
        $funcionarios = Employee::ativos();

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
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $clientes = Client::get();
        $funcionarios = Employee::ativos();

        return view('projects.edit', [
            'project' => $project,
            'clientes' => $clientes,
            'funcionarios' => $funcionarios
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProjectRequest $request
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
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
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        DB::transaction(function() use($project) {
            $project->employees()->sync([]);

            $project->delete();
        });

        return redirect()->route('projects.index')
                            ->with('mensagem', 'Projeto excluido com sucesso!');
    }
}
