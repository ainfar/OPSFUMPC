<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;


class ManageProfileController extends Controller
{

    public function editProfile()
    {
        return view('ManageUserProfile.DetailProfile')->with('user', auth()->user());

    }


    public function updateProfile()
    {
       $user = auth()->user();
    }
}
