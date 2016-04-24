<?php namespace txecala_laravel\Http\Controllers;

use txecala_laravel\Produto;

use Intervention\Image\Facades\Image;
use txecala_laravel\Http\Requests\ProdutoRequest;
use Input;
use Laracasts\Flash\Flash;
use UxWeb\SweetAlert\SweetAlert;
use UxWeb\SweetAlert\SweetAlerts;
class AdminController extends Controller
{

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$produtos = Produto::all();

		return view('admin.admin', ['produtos' => $produtos]);

	}



// Metodo para criar produtos atraves de interface do user

	public function create()
	{
		return view('admin.criar');
	}




	// Metod para gravar os produtos na BD
	public function store(ProdutoRequest $request){
		$input = $request->all();
		Produto::create($input);

		//Chamando o metodo de upload da imagem
		$this->upload();
		Flash::message('Produto criado com sucesso!');
		return redirect()->route('admin.admin');
	}

	//Metodo upload
	public function upload(){


		$image = Input::file('file');
		$filename  =  $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();

		$path = public_path('img/' . $filename);


		Image::make($image->getRealPath())->resize(193, 245)->save($path);

//			$file=	\Image::make(\Input::file('file'));
//			$file->move('img');
//
//		$file->encode('png');
//		$file->fit(193,245);
//
//		$file->save();

	}




//	Metodo para eliminar produtos
	public function destroy($id)
	{

		$prod = Produto::findOrFail($id);
		Flash::warning('Tem certeza que pretende apagar?');

		$prod->delete();




		return redirect('admin/admin');

	}




	public function edit($id)
	{
		$produto = Produto::find($id);

		return view('admin.editar', compact('produto'));
	}






	public function update($id, ProdutoRequest $request)
	{

		$prod = Produto::findOrFail($id);

		$this->validate($request, [
			'titulo' => 'required',
			'preco' => 'required'
		]);

		$entrada= $request->all();

		$prod->fill($entrada)->save();


		Flash::message('Produto editado com sucesso!');
		return redirect()->route('admin.admin');

	}

}