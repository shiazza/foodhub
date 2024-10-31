<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_display',
        'id_comments',
        'title',
        'thumb',
        'descrip',
        'ingred',
        'tools',
        'cooktime',
        'method',
        'diff',
        'category',
        'date',
        'rating',
        'co_view',
    ];

    protected $table = 'menu';

    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_comments', 'id');
    }

    public function displayUser()
    {
        return $this->belongsTo(DisplayUser::class, 'id_display', 'id');
    }
}
