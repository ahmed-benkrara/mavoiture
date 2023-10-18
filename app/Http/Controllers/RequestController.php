<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as Demande;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $search = $req->input('phone');
        $query = Demande::orderBy('created_at', 'desc');
        if ($search){
            $query->where('phone', '=', $search);
        }
        $requests = $query->paginate(20);
        return view('admin.requests', compact('requests', 'search'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }
}
