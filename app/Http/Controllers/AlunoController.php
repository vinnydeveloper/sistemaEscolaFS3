<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller{
    

    public function cadastrarAluno(Request $request){
        if($request->isMethod('GET')){
            return view("cadastroAluno");
        }
        $novoAluno = new Aluno();
        $novoAluno->nome = $request->nome;
        $novoAluno->cpf = $request->cpf;
        $resultado = $novoAluno->save();

        if($resultado){
            return view('sucesso',['erro'=>false, 'aluno'=>$novoAluno]);
        }else {
            return view('sucesso',['erro'=>true, 'aluno'=>$novoAluno]);
        }

        

    }

    public function listarAlunos(Request $request){
        $alunos = new Aluno();
        $listaAlunos = $alunos->all();

        return view('listaAlunos',['alunos'=>$listaAlunos]);
    }

    public function deletarAluno(Request $request, $id){
        $alunos = Aluno::find($id);
        $alunos->delete();

        return redirect("/aluno/todos");

    }
  

}