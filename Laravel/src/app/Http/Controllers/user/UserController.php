<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Requests\RegistRegistrationRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function top(){
        return view('user.top');
    }
}