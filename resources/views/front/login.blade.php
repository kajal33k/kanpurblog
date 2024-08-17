@extends('component.main')
@section('content')
<div class="flex justify-center m-8">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Login to Your Blog</h2>
        <form>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" placeholder="Enter your password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="flex items-center justify-between mb-6">
                <label class="inline-flex items-center text-gray-700">
                    <input type="checkbox" class="form-checkbox text-red-500">
                    <span class="ml-2">Remember me</span>
                </label>
                <a href="#" class="text-red-500 hover:underline">Forgot password?</a>
            </div>
            <button type="submit" class="w-full bg-red-500 text-white font-semibold py-2 rounded-lg shadow-md hover:bg-red-600 transition duration-200">Login</button>
        </form>
        <p class="text-gray-700 text-center mt-6">Don't have an account? <a href="#" class="text-red-500 hover:underline">Sign Up</a></p>
    </div>
</div>
@endsection