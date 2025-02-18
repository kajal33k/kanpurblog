@extends('main.main')

@section('content')

<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Create Blog</h1>
    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="border border-gray-300 p-2 w-full">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" class="border border-gray-300 p-2 w-full"></textarea>
        </div>

        <div>
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="border border-gray-300 p-2 w-full">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="border border-gray-300 p-2 w-full">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Create Blog</button>
    </form>
</div>
@endsection

