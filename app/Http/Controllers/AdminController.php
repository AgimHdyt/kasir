<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title' => 'Admin'
        ]);
    }

    public function addLevel()
    {
        return view('admin.add-level', [
            'title' => 'Add Level'
        ]);
    }

    public function saveLevel(Request $request)
    {
        $validated = $request->validate([
            'level' => 'required'
        ]);

        DB::table('levels')->insert($validated);

        return redirect()->to('/admin')->with('success', 'Level added!');
    }
}
