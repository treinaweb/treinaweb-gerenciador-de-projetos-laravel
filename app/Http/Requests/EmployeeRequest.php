<?php

namespace App\Http\Requests;

use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'nome' => ['required', 'min:2', 'max: 100', 'string'],
            'cpf' => ['required', 'size:14', 'string'],
            'data_contratacao' => ['required', 'date_format:d/m/Y'],
            'logradouro' => ['required', 'min:2', 'max:255', 'string'],
            'numero' => ['required', 'max:20', 'string'],
            'bairro' => ['required', 'max:50', 'string'],
            'cidade' => ['required', 'max:50', 'string'],
            'complemento' => ['max:50', 'string'],
            'cep' => ['required', 'size:9', 'string'],
            'estado' => ['required', 'size:2', 'string']
        ];
    } 

     /**
     * Após a validação limpa os dados
     *
     * @return void
     */
    protected function getValidatorInstance()
    {
        $request = $this;

        return parent::getValidatorInstance()->after(function(Validator $v) use($request) {
            if ($v->errors()->isEmpty()) {
                $dados = $request->all();

                $dados['cpf'] = limpa_mascara($dados['cpf']);
                $dados['cep'] = limpa_mascara($dados['cep']);
                $dados['data_contratacao'] = date_to_iso($dados['data_contratacao']);

                $request->replace($dados);
            }
        });
    }
}
