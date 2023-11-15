<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Make sure to import the User model at the top

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all(); // Retrieve user data
        return view('dashboard', ['users' => $users]); // Pass the data to the view
    }
}
?>