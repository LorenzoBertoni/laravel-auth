@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('posts.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                type="text"
                class="form-control"
                id="title"
                name="title"
                value="{{old('title')}}"
                >
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input 
                type="text" 
                class="form-control"
                id="slug"
                name="slug"
                value="{{old('slug')}}"
                >
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea 
                name="description"
                id="description"
                class="form-control"
                >
                    {{old('description')}}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
    
@endsection