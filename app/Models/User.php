<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'role', 
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'role' => 'integer', 
    ];

    protected $table = 'user';

    public $timestamps = false; 
    protected $primaryKey = 'id'; 

    public function isAdmin()
    {
        return $this->role === 0;
    }

    public function isRegularUser()
    {
        return $this->role === 1;
    }
}
