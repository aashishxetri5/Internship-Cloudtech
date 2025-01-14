<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function verifyCredentials(Request $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");

        try {

            $user = User::where("username", $username)->first();

            if (!$user) {
                return redirect(route("loginPage"))->with("message", "User doesn't exist");
            }

            if (!Hash::check($password, $user->password)) {
                return redirect(route("loginPage"))->with("message", "Invalid credentails");
            }

            session(["loggedInUser" => $user->id]);
 
            return redirect(route("dashboardPage"))->with("message", "Logged in successfully");
        } catch (Exception $e) {
            return redirect(route(""))->with("message", $e->getMessage());
        }
    }

    public function logoutUser(Request $request)
    {

        session()->flush();
        return redirect(route("loginPage"))->with("message", "Logged out successfully");

    }



}
