<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.blog.index', compact('blog'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.blog.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'author_id' => auth()->id(),
        ]);

        if ($request->hasFile('image')) {
            $this->storeImage($blog, $request);
        }

        return redirect()->route('dashboard.blog.index')->with('success', 'Blog created successfully!');
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('dashboard.blog.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        if ($request->hasFile('image')) {
            $this->storeImage($blog, $request);
        }

        return redirect()->route('dashboard.blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('dashboard.blog.index')->with('success', 'Blog deleted successfully!');
    }

    private function storeImage(Blog $blog, Request $request)
    {
        $file = $request->file('image')->store('public/images');
        $blog->update(['image' => str_replace('public/', '', $file)]);
    }
}

