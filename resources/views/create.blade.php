@extends('master')

@section('content')
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Título">
        </div>
        <div class="mb-3">
            <label for="post" claspost-label">Conteúdo</label>
            <textarea class="form-control" name="post" id="post" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
