<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    /**
     * Lista os clientes
     *
     * @return View
     */
    public function index(): View
    {
        $clients = Client::paginate(15);

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Mostra um cliente especifico
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $client = Client::findOrFail($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Exibi o formulário de criação
     *
     * @return View
     */
    public function create(): View
    {
        return view('clients.create');
    }

    /**
     * Cria um cliente no banco de dados
     *
     * @param ClientRequest $request
     * @return RedirectResponse
     */
    public function store(ClientRequest $request): RedirectResponse
    {
        $dados = $request->except('_token');

        Client::create($dados);

        return redirect()->route('clients.index')
                ->with('mensagem', "Cadastrado com sucesso!");
    }

    /**
     * Mostra o formulário para edição
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $client = Client::findOrFail($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Atualiza o cliente no banco de dados
     *
     * @param integer $id
     * @param ClientRequest $request
     * @return RedirectResponse
     */
    public function update(int $id, ClientRequest $request): RedirectResponse
    {
        $client = Client::findOrFail($id);

        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);

        return redirect()->route('clients.index')
                ->with('mensagem', "Atualizado com sucesso!");;
    }

    /**
     * Apaga um cliente no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $client = Client::findOrFail($id);

        $client->delete();

        return redirect('/clients');
    }
}
