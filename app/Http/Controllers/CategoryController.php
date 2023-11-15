<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Make sure to import the User model at the top

class CategoryController extends Controller
{
    public function index()
    {
        $users = User::all(); // Replace Category with your actual model name and data retrieval logic.
        return view('categories',  ['users' => $users]); // Pass the data to the view
    }

}
?>