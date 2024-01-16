<?php

namespace App\Http\Controllers;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Dompdf\Dompdf;


class Certicate extends Controller
{
    public function submitForm (Request $request)
    {
        $email = $request->input('email');

        $certificate = Certificate::where('email', $email)->first();

        if ($certificate) {
            // Email exists, create certificate
            $firstName = $certificate->first_name;
            $lastName = $certificate->last_name;
             // Return the certificate view
                 return view('certificate', compact('firstName', 'lastName'));
        } else {
            // Email does not exist, display error alert
            return back()->with('error', 'Email not found in the database.');
        }
    }
}
