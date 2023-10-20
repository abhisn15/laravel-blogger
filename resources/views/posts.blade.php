@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center ">{{ $title }}</h1>


    <div class="row justify-content-center mb-3  ">
        <div class="col-md-6">
            {{-- blog jangan posts karena dari awal nulisnya blog  --}}
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="d-flex justify-content-center">
        <div class="card mb-3">
            @if (!$posts[0]->image)
            <div style="max-height: 400px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                    class="img-fluid ">
                    
                </div>
                @else
                <div class="d-flex justify-content-center align-items-center">
                    <img style="max-width: 400px; overflow:hidden" src="https://images.unsplash.com/photo-1670057037226-b3d65909424f?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
                </div>
                @endif
                
                
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                        
                        <p>
                            <small class="text-body-secondary">
                                By. <a href="/blog?author={{ $posts[0]->author->username }}"
                                    class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                                    href="/blog?category={{ $posts[0]->category->slug }}"class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                                    {{ $posts[0]->created_at->diffForHumans() }}
                                </small>
                            </p>
                            
                            <div class="d-flex justify-content-center mb-3">
                                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                            </div>
                            <style>
                                html {
                                    overflow-x: hidden;
                                }
                                .card {
                                    width: 400px;
                                }
                                .card-text{
                                    width: 400px;
                                }
                                </style>

<a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-primary">Read More</a>

</div>
</div>
</div>



        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2  " style="background-color:rgba(0,0,0, 0.7)"> <a
                                    href="/blog?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">{{ $post->category->name }}</a> </div>

                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="img-fluid ">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif


                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                </p>

                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4 ">No post found.</p>
    @endif


    {{ $posts->links() }}

@endsection
