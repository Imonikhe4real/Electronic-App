{# <?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
       $users = User::all();
       return view('/admin/users',compact('users'));
    }
} #}
