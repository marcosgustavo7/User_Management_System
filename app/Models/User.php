<?php   

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends authenticatable {

    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'failed_login_attempts',
        'account_locked',
        'unlock_token',
        'remember_token'
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }


}
?>