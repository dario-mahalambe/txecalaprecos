<?php namespace txecala_laravel\Http\Controllers;

use txecala_laravel\Http\Requests;
use txecala_laravel\Http\Controllers\Controller;
use txecala_laravel\Produto;
use Illuminate\Support\Facades\Request;
use DB;

class ProdutoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$produtos= Produto::all();

		return view('produtos', ['produtos'=> $produtos]);



	}




	public function pesquisa(Request $request){


			$query = Request::input('search');

	//$procura=	Input::get('search');
//			if($query){
//
//			$produtos = DB::table('produtos');
//				$resultado = $produtos->where ('titulo', 'LIKE', '%'. $query .'%')
//					->get();
//			}


		$produtos = DB::table('produtos')->where('titulo', 'LIKE', '%' .$query . '%')->paginate(8);

		return view('resultadosPesquisa', compact('produtos','query'));

	}













	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{



	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
