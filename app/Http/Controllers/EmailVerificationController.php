<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailVerificationRequest;
use Illuminate\Http\Request;
use Ichtrojan\Otp\Otp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EmailVerificationController extends Controller
{
    private $otp;
    public function __construct()
    {
        $this->otp = new Otp;
    }
    public function email(EmailVerificationRequest $request)
    {
        // $otpe = $this->otp->validate($request->email, $request->otp);
        // // if (!$otpe->status) {
        // //     return response(['error' => 'something went wrong'], 404);
        // // }
        // // $userr = Auth::user();
        // // $user = User::where('email', $request->email)->first();
        // // if($user == $userr){
        // //     $user->is_verified = true;
        // // $user->save();
        // // return response(['message' => 'Account Have Been Activeted'], 200);
        // // }
        // // return "mistake";
        
    }
}
