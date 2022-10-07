@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('created'))
            <div class="alert alert-success">
                {{session('created')}}
            </div>
        @endif
    </div>
    <div class="container">
        @if (session('edited'))
            <div class="alert alert-success">
                {{session('edited')}}
            </div>
        @endif
    </div>
    <div class="container">
        @if (session('cancelled'))
            <div class="alert alert-danger">
                {{session('cancelled')}}
            </div>
        @endif
    </div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td class="actions">
                            <a 
                            href="{{route('posts.show', ['post' => $post])}}"
                            class="btn btn-primary"
                            >
                                Vedi Info
                            </a>
                            <a 
                            href="{{route('posts.edit', ['post' => $post])}}"
                            class="btn btn-warning"
                            >
                                Modifica
                            </a>
                            <form 
                            action="{{route('posts.destroy', ['post' => $post])}}"
                            method="POST"
                            class="mt-2 ms-2"
                            >
                                @csrf
                                @method('DELETE')

                                <button 
                                type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('L\'eliminazione dei dati è permanente. Confermando eliminerai l\'elemento selezionato. Desideri procedere?')"
                                >
                                    Elimina
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection