@extends('component.main')
@section('content')
<div class="flex justify-center m-8" data-aos="fade-up">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center" data-aos="fade-up">Create a New Account</h2>
        <form>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2" data-aos="fade-up">Full Name</label>
                <input type="text" id="name" placeholder="Enter your full name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2" data-aos="fade-up">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2" data-aos="fade-up">Password</label>
                <input type="password" id="password" placeholder="Create a password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="mb-4">
                <label for="confirm-password" class="block text-gray-700 font-semibold mb-2" data-aos="fade-up">Confirm Password</label>
                <input type="password" id="confirm-password" placeholder="Confirm your password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="flex items-center mb-6">
                <label class="inline-flex items-center text-gray-700">
                    <input type="checkbox" class="form-checkbox text-red-500">
                    <span class="ml-2">I agree to the <a href="#" class="text-red-500 hover:underline" data-aos="fade-up">Terms and Conditions</a></span>
                </label>
            </div>
            <button type="submit" class="w-full bg-red-500 text-white font-semibold py-2 rounded-lg shadow-md hover:bg-red-600 transition duration-200" data-aos="fade-up">Sign Up</button>
        </form>
        <p class="text-gray-700 text-center mt-6">Already have an account? <a href="#" class="text-red-500 hover:underline" data-aos="fade-up">Login</a></p>
    </div>
</div>
@endsection