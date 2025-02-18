<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard; // Ensure this points to your correct model
use App\Http\Requests\DashboardRequest; // Ensure this points to your custom request validation class

class DashboardController extends Controller
{
    // Display a listing of the dashboards
    public function index()
    {
        
        return view('dashboard.dashboard');
    }

    // Show the form for creating a new dashboard
    public function create()
    {
        return view('dashboard.create');
    }

    // Store a newly created dashboard in storage
    public function store(DashboardRequest $request)
    {
        Dashboard::create($request->validated());
        return redirect()->route('dashboard.index')->with('success', 'Dashboard successfully created.');
    }

    // Show the form for editing the specified dashboard
    public function edit(Dashboard $dashboard)
    {
        return view('dashboard.edit', compact('dashboard'));
    }

    // Update the specified dashboard in storage
    public function update(DashboardRequest $request, Dashboard $dashboard)
    {
        $dashboard->update($request->validated());
        return redirect()->route('dashboard.index')->with('success', 'Dashboard successfully updated.');
    }

    // Remove the specified dashboard from storage
    public function destroy(Dashboard $dashboard)
    {
        $dashboard->delete();
        return redirect()->route('dashboard.index')->with('success', 'Dashboard successfully deleted.');
    }
}
