<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function submitForm (Request $request)
    {
        $email = $request->input('email');

        $certificate = Certificate::where('email', $email)->first();

        if ($certificate) {
            // Email exists, create certificate
            $firstName = $certificate->first_name;
            $lastName = $certificate->last_name;

            // Your certificate creation logic here

            return view('certificate', compact('firstName', 'lastName'));
        } else {
            // Email does not exist, display error alert
            return back()->with('error', 'Email not found in the database.');
        }
    }
}
