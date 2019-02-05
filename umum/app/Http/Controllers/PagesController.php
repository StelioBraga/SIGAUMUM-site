<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Estudante;

class PagesController extends Controller
{
    
   

    public function store(Request $request){
      
        $nome = $request->input('nomedoestudante');
        
        $estudante = new Estudante();
        $estudante->primeiro_nome = "stelio";
        $estudante->ultimo_nome = "nome";
        $estudante->curso = "nome";
        $estudante->save();

        return "Sucesso!";
    }

   /*  public function index()
    {
        $estudantes = DB::table('Estudantes')->get();

        return view('index', ['Estudantes' => $estudantes]);
    }
 */
    public function index()
    {
        $estudantes=Estudante::where('id', '1')->get();
        return view('index',compact('estudantes'));
    }
    

    public function search(Request $request){ 

        $search = $request ->get('nomedoestudante');
        $post =Estudante::where('primeiro_nome','$'.'$search'.'$')->get();
        return vview('index',compact(['estudantes' -> $post]));
    }

  
}


