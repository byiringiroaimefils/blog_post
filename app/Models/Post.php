<?php
// Define the namespace for this model
namespace App\Models;
// Import required traits and classes
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Post model class that extends the base Eloquent Model
class Post extends Model {
    // Use the HasFactory trait for model factories
    use HasFactory;
    // Define which fields can be mass assigned
    protected $fillable = ['title', 'content']; 
}
?>