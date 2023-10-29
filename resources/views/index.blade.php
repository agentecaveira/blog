@extends('master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Acões</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $post)

            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td><button></button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
