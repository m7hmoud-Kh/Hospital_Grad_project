<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\DoctorPersonalRequest;
use App\Http\Requests\Dashboard\DoctorSecurityRequest;
use App\Http\trait\Imageable;

class DashboardController extends Controller
{
    use Imageable;
    public function index()
    {
        return view('dashboard.index');
    }

    public function show_profile()
    {
        $doctorInfo  = User::find(Auth::user()->id);
        return view('dashboard.profile.index', compact('doctorInfo'));
    }

    public function updatePersnoalInfo(DoctorPersonalRequest $request)
    {
        $doctor = User::find(Auth::user()->id);
        if ($request->file('image')) {
            Storage::disk('doctor_image')->delete($doctor->image);
            $newImage = $this->insertImage($doctor->national_id, $request->image, 'Doctor_image/');
            $doctor->update([
                'image' => $newImage,
            ]);
        }
        $doctor->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number'=> $request->phone_number,
        ]);

        return redirect()->route('profile');
    }

    public function updateSecurityInfo(DoctorSecurityRequest $request)
    {
        if (password_verify($request->current_password, Auth::user()->password)) {
            $user = User::find(Auth::user()->id);
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->route('profile');
    }
}
