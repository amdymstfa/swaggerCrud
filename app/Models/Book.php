<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Book",
 *     title="Book",
 *     description="Book model",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="title", type="string", example="Laravel for Beginners"),
 *     @OA\Property(property="author", type="string", example="John Doe"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'author'
    ];
}
