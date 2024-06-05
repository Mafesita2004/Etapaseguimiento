<?php

namespace App\Http\Controllers;

use App\Models\ApprenticeRegistration;
use Illuminate\Http\Request;

class ApprenticeRegistrationController extends Controller
{
    public function create()
    {
        return view('apprentice.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'identification' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'program' => 'required',
            'file' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'start_contract' => 'required',
            'contract_end' => 'required',
            'nit_company' => 'required',
            'business_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'assigned_instructor' => 'required',
            'date_assignment' => 'required',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        ApprenticeRegistration::create($data);

        return redirect()->route('apprentice.index')->with('success', 'Aprendiz registrado exitosamente');
    }

    public function index()
    {
        $apprentices = ApprenticeRegistration::all();
        return view('apprentice.index', compact('apprentices'));
    }
}
