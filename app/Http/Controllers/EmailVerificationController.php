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
        $userr = Auth::guard('sanctum')->user();

        $otpe = $this->otp->validate($userr->->email, $request->otp);
        if (!$otpe->status) {
            return response(['error' => 'something went wrong'], 404);
        }
        $user = User::where('email', $request->email)->first();
        if($user == $userr){
            $user->is_verified = true;
        $user->save();
        return response(['message' => 'Account Have Been Activeted'], 200);
        }
        return "mistake";
        
    }
}
