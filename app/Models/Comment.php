<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_display',
        'com',
    ];

    protected $table = 'comments';

    public $timestamps = false;

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_comments', 'id');
    }

    public function displayUser()
    {
        return $this->belongsTo(DisplayUser::class, 'id_display', 'id');
    }
}
