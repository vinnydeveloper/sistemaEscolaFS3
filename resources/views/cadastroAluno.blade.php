@extends('template')

@section('conteudo')
        <form action="/aluno/cadastro" method="post">
            @csrf
            <input type="text" name="nome">
            <input type="text" name="sobrenome">
            <button type="submit">Enviar</button>
        </form>
 @endsection       
