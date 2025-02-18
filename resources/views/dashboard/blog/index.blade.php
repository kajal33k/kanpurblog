@extends('main.main')

@section('content')

<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Blogs</h1>
    <a href="{{ route('blog.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Blog</a>

    @foreach ($blogs as $blog)
        <div class="border border-gray-300 p-4 my-2">
            <h2 class="text-xl font-bold">{{ $blog->title }}</h2>
            <p>{{ $blog->description }}</p>
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-1/3">

            <div class="flex space-x-4">
                <a href="{{ route('blog.edit', $blog->id) }}" class="bg-green-500 text-white px-4 py-2 rounded">Edit</a>
                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection


