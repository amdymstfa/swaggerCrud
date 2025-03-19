<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
/**
 * @OA\Info(
 *      title="Book Manager API",
 *      version="1.0",
 *      description="API Book Manager",
 * )
 *
 * @OA\Tag(
 *     name="Books",
 *     description="Mamage books"
 * )
 */
class BookController extends Controller
{
/**
 * @OA\Get(
 *     path="/api/books",
 *     summary="Retrieve all books",
 *     tags={"Books"},
 *     @OA\Response(
 *         response=200,
 *         description="List of books",
 *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Book"))
 *     )
 * )
 */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Book::all());
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
