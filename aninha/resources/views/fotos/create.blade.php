@extends('layout.app')

@section('title', 'amo a ana - create')

@section('content')

<div class="container mt-5">
    <h1>adicione uma nova foto</h1>
    <hr>
    <form action="{{ route('fotos-store')}}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome da foto:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome para a foto...">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria para a foto...">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="form-group">
                <label for="ano">Ano da foto:</label>
                <input type="number" class="form-control" name="ano" placeholder="Digite o ano da foto...">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="form-group">
                <label for="valor">Valor da foto:</label>
                <input type="number" class="form-control" name="valor" placeholder="Digite um valor para a foto...">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
    
        
    
  

@endsection