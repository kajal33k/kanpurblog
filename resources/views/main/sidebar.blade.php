    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white flex-shrink-0">
        <div class="p-4 text-lg font-semibold border-b border-gray-700">
          Dashboard
        </div>
        <nav class="mt-2">
          <ul>
            <li class="p-4 hover:bg-gray-700"><a href="#" class="block">Home</a></li>
            <li class="p-4 hover:bg-gray-700"><a href="#" class="block">Profile</a></li>
            <li class="p-4 hover:bg-gray-700"><a href="#" class="block">Settings</a></li>
            <li class="p-4 hover:bg-gray-700"><a href="#" class="block">Logout</a></li>
            <li class="p-4 hover:bg-gray-700"><a href="{{route('category.index')}}" class="block">Category</a></li>  
            <li class="p-4 hover:bg-gray-700"><a href="{{route('blog.index')}}" class="block">Blog</a></li>
            <li class="p-4 hover:bg-gray-700"><a href="{{Route('auth.login')}}" class="block">LogIn</a></li>
            <li class="p-4 hover:bg-gray-700"><a href="{{Route('auth.register')}}" class="block">SignIn</a></li>
          </ul>
        </nav>
      </aside>