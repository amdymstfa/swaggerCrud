<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/**
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Book Manager API Server"
 * )
 */

/**
 * @OA\Tag(
 *     name="Books",
 *     description="Manage books"
 * )
 */
Route::apiResource('books', BookController::class);
