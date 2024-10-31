<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisplayUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'username',
        'name',
        'bio',
        'rating',
        'co_following',
        'co_followers',
        'following',
        'followers',
        'joined',
    ];

    protected $table = 'displayuser';

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
