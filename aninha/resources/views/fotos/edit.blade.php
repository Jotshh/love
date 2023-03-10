@extends('layout.app')

@section('title', 'amo a ana - edit')

@section('content')

<div class="container mt-5">
    <h1>Editar foto</h1>
    <hr>
    <form action="{{ route('fotos-update',['id'=>$fotos->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome da foto:</label>
                <input type="text" class="form-control" name="nome" value="{{ $fotos->nome }}" placeholder="Digite um nome para a foto...">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" value="{{ $fotos->categoria }}"placeholder="Digite uma categoria para a foto...">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="form-group">
                <label for="ano">Ano da foto:</label>
                <input type="number" class="form-control" name="ano" value="{{ $fotos->ano }}" placeholder="Digite o ano da foto...">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="form-group">
                <label for="valor">Valor da foto:</label>
                <input type="number" class="form-control" name="valor" value="{{ $fotos->valor }}" placeholder="Digite um valor para a foto...">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
            </div>
        </div>
    </form>
</div>
    
        
    
  

@endsection