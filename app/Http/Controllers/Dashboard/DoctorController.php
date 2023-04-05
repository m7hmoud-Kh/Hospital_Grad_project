<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\trait\Imageable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\StoreDoctorRequest;

class DoctorController extends Controller
{
    use Imageable;
    public function index()
    {
        $allDoctors = User::role('doctor')->latest()->get();
        $data = [
            'doctors' => $allDoctors
        ];
        return view('dashboard.doctor.index', compact('data'));
    }

    public function create()
    {
        return view('dashboard.doctor.create');
    }

    public function store(StoreDoctorRequest $request)
    {
        $newImage = $this->insertImage($request->national_id, $request->image, 'Doctor_image/');

        $password = Hash::make($request->password);

        $doctor = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'image'=>$newImage,
            'password' => $password,
            'national_id'=>$request->national_id
        ]);
        $doctor->assignRole('doctor');

        return redirect()->route('doctor.index');
    }

    public function destory(Request $request)
    {
        $doctor = User::find($request->id);

        if ($doctor->image != null) {
            Storage::disk('doctor_image')->delete($doctor->image);
        }

        $doctor->delete();

        return redirect()->route('doctor.index');
    }
}
