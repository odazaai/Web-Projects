<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $projects = [
        //     [
        //         'id' => 1,
        //         'title' => 'Curriculum Vitae',
        //         'body' => 'Projek ini dibuat saat awal mempelajari HTML & CSS, membuat CV sederhana dengan tujuan mengetes kemampuan dasar pada HTML & CSS, 
        //     pengerjaannya pun hanya 1 hari',
        //     ],
        //     ];
        // $project = Arr::first($projects, function ($project) use ($id) {
        //     return $project['id'] == $id;
        // });
        // return view('/detail', ['detail' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
