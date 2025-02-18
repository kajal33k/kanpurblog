<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professional Dashboard</title>
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Tailwind Forms Plugin -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.4.0/dist/forms.min.js"></script>
</head>

<body class="bg-gray-100 font-sans antialiased h-screen">

  <div class="flex h-full">

    <!-- Sidebar -->
    @include('main.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
      @yield('content')
    </div>
    
  </div>

</body>

</html>
