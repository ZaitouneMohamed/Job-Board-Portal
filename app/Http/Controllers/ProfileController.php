<?php

namespace App\Http\Controllers;

use App\Http\Requests\profile\CreatProfile;
use App\Models\user\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreatProfile $request)
    {
        $profile = Profile::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "phone" => $request->phone,
            "user_id" => auth()->user()->id,
            "gender" => $request->gender,
            "description" => $request->description,
        ]);
        return redirect()->back()->with([
            "success" => "profile set successfully"
        ]);
    }
}
