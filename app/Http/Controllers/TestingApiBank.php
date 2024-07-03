<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingApiBank extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $parameter = $request->data;

    $data = json_decode($this->data_bank, true);

    if (isset($parameter['name']) && strlen($parameter['name']) < 3) {
      return response()->json([
        'code' => 3,
        'info' => 'Keyword harus sama dengan atau lebih dari 3 karakter'
      ]);
    }

    $result = isset($parameter['name']) ? $this->array_search_partial($data, $parameter['name']) : $data;

    if (!$result) {
      return response()->json([
        'code' => 2,
        'info' => 'Data is empty'
      ]);
    }

    return response()->json([
      'code' => 0,
      'info' => 'Banks retrieved successfully',
      'data' => $result
    ]);
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
  public function show(string $id)
  {
    //
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