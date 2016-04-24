<?php namespace txecala_laravel\Http\Requests;

use txecala_laravel\Http\Requests\Request;

class ProdutoRequest extends Request {

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
			'nome' => 'required|min:5',
			'titulo'=> 'required',
			'descricao'=> 'required',
			'preco'=> 'required'

			];
	}

	public function messages(){
		return [
			'titulo.required' => 'Esqueceste de por o titulo',
			'descricao.required' => 'Esqueceste de por a descricao',
		'preco.required' => 'Esqueceste de por o preco',
		'nome.required' => 'Esqueceste de por nome',
			'nome.min' => 'O nome deve ter no minimo 5 caracteres'

		];
	}

}
