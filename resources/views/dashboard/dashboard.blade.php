@extends('main.main')

@section('content')

<!-- Main Content Wrapper -->
<div class="flex flex-col flex-1 overflow-hidden">
    <!-- Top Bar -->
    <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <h1 class="text-lg font-semibold">Dashboard</h1>
        <div class="flex items-center space-x-4">
            <button class="bg-blue-500 hover:bg-blue-600 focus:ring focus:ring-blue-300 text-white px-4 py-2 rounded transition">
                Notifications
            </button>
            <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="User avatar image">
        </div>
    </header>

    <!-- Dashboard Content -->
    <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
        <!-- Statistics Section -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <!-- Card: Total Users -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Total Users</h2>
                <p class="text-3xl font-bold text-blue-600">1,234</p>
            </div>

            <!-- Card: Active Users -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Active Users</h2>
                <p class="text-3xl font-bold text-green-600">567</p>
            </div>

            <!-- Card: New Orders -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">New Orders</h2>
                <p class="text-3xl font-bold text-yellow-600">98</p>
            </div>

            <!-- Card: Revenue -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Revenue</h2>
                <p class="text-3xl font-bold text-red-600">$12,345</p>
            </div>
        </section>

        <!-- Charts Section -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-xl font-semibold mb-4">Sales Chart</h2>
            <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                <p class="text-center text-gray-500">Chart Placeholder</p>
            </div>
        </section>

        <!-- Recent Orders Table Section -->
        <section class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Recent Orders</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="w-full bg-gray-100 text-left">
                            <th class="py-3 px-4 border-b border-gray-200">Order ID</th>
                            <th class="py-3 px-4 border-b border-gray-200">Customer</th>
                            <th class="py-3 px-4 border-b border-gray-200">Amount</th>
                            <th class="py-3 px-4 border-b border-gray-200">Status</th>
                            <th class="py-3 px-4 border-b border-gray-200">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center bg-white">
                            <td class="py-3 px-4 border-b border-gray-200">#001</td>
                            <td class="py-3 px-4 border-b border-gray-200">John Doe</td>
                            <td class="py-3 px-4 border-b border-gray-200">$123.45</td>
                            <td class="py-3 px-4 border-b border-gray-200 text-green-500">Completed</td>
                            <td class="py-3 px-4 border-b border-gray-200">2024-09-01</td>
                        </tr>
                        <tr class="text-center bg-white">
                            <td class="py-3 px-4 border-b border-gray-200">#002</td>
                            <td class="py-3 px-4 border-b border-gray-200">Jane Smith</td>
                            <td class="py-3 px-4 border-b border-gray-200">$678.90</td>
                            <td class="py-3 px-4 border-b border-gray-200 text-yellow-500">Pending</td>
                            <td class="py-3 px-4 border-b border-gray-200">2024-09-02</td>
                        </tr>
                        <tr class="text-center bg-white">
                            <td class="py-3 px-4 border-b border-gray-200">#003</td>
                            <td class="py-3 px-4 border-b border-gray-200">Mike Johnson</td>
                            <td class="py-3 px-4 border-b border-gray-200">$234.56</td>
                            <td class="py-3 px-4 border-b border-gray-200 text-red-500">Cancelled</td>
                            <td class="py-3 px-4 border-b border-gray-200">2024-09-03</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>

@endsection
