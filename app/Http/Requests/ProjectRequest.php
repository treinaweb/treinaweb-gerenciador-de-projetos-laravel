<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'string', 'min:2', 'max:100'],
            'orcamento' => ['required', 'numeric', 'min:0'],
            'data_inicio' => ['required', 'date'],
            'data_final' => ['required', 'date'],
            'client_id' => ['required', 'int'],
            'funcionarios' => ['required', 'array']
        ];
    }

    /**
     * Trata os dados antes de ser usado
     *
     * @return void
     */
    public function validationData()
    {
        $dados = $this->all();

        $dados['data_inicio'] = date_to_iso($dados['data_inicio']);
        $dados['data_final'] = date_to_iso($dados['data_final']);
        $dados['orcamento'] = str_replace(['.', ','], ['', '.'], $dados['orcamento']);

        $this->replace($dados);

        return $dados;
    }
}
