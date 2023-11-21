<?php

namespace App\Http\Controllers;

use App\Models\stock;
use App\Http\Requests\StorestockRequest;
use App\Http\Requests\UpdatestockRequest;
use Illuminate\Http\Request;
use Exception;
use PDOException;

class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = stock::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
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
    public function store(StorestockRequest $request)
    {
        try {
            $data = stock::create($request->all());
            return response()->json(['status' => true, 'message' => 'input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorestockRequest $request, stock $stock)
    {
        try {
            $data = $stock->update($request->all());
            return response()->json(['status' => true, 'message' => 'update data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stock $stock)
    {
        try {
            $data = $stock->delete();
            return response()->json(['status' => true, 'message' => 'delete data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }
}
