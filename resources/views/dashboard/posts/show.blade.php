@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>


                <a href="/dashboard/posts" class="btn btn-success"> <i data-feather="arrow-left"></i> Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <i data-feather="edit"></i> Edit</a>
            
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('yakin mau hapus?')"><i
                            data-feather="x-circle"></i>Delete</button>
                </form>

                @if (!$post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
              
                @else
                <img src="https://images.unsplash.com/photo-1619410283995-43d9134e7656?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif



               

                {{-- my = atas bawah --}}
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>



                {{-- <a href="/blog" class="d-block mt-3 ">Back to Posts</a> --}}

            </div>
        </div>
    </div>
@endsection
