<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Dashboard\StoreSickRequest;

class SickController extends Controller
{
    public function index()
    {
        $allSicks = User::role('sick')->latest()->get();
        $data = [
            'sicks' => $allSicks
        ];
        return view('dashboard.sick.index', compact('data'));
    }

    public function create()
    {
        return view('dashboard.sick.create');
    }

    public function store(StoreSickRequest $request)
    {

        $password = Hash::make($request->password);

        $sick = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => $password,
            'national_id'=>$request->national_id
        ]);
        $sick->assignRole('sick');

        return redirect()->route('sick.index');
    }

    public function destory(Request $request)
    {
        $sick = User::find($request->id);

        $sick->delete();

        return redirect()->route('sick.index');
    }
}
