<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formlogin() {
        $logo = Logo::get();
        return view('pages.admin.login', [
            'logo' => $logo,
        ]);
    }

    public function login(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $account_data = Users::where('username', $username)->first();
        if(!$account_data) {
            return redirect()->back()->with('error_login', 'Username tidak ditemukan')
                ->withInput($request->except('password'));
        }
        
        if(Hash::check($password, $account_data->password)){
            $request->session()->put('account_data', $account_data);
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->back()->with('error_login', 'Password anda salah')
                ->withInput($request->except('password'));
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin');
    }

    public function recover(Request $request)
    {
        return view('pages.admin.recoverpw');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $name = $request->input("name");
        $username = $request->input("username");
        $email = $request->input("email");
        $password = $request->input("password");

        $data = [
            "name" => $name,
            "username" => $username,
            "email" => $email,
            "password" => password_hash($password, PASSWORD_ARGON2ID)
        ];

        $create_users = Users::create($data);
        if($create_users) {
            return redirect()->route('login')->with('sukses', 'Password berhasil dibuat');
        }
        else {
            return redirect()->back()->with('gagal', 'akun gagal dibuat');
        }
    }


    public function show(Request $request) {
        $account_data = $request->session()->get('account_data');
        return view('pages.admin.user.detail', [
            'account_data' => $account_data
        ]);
    }

    public function edit(Request $request, $id) {
        $user = Users::findOrFail($id);
        return view('pages.admin.user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'profil' => 'required|max:1024',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $profilFile = $request->file('profil');
        $profil = $profilFile->getClientOriginalName();
        $profilFile->move(\base_path() . "/public/library/user/", $profil);

        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_ARGON2ID),
            'profil' => $profil,
        ];

        $update_profil = Users::where('id', $id)->update($data);
        if($update_profil) {
            return redirect()->route('/dashboard')->with('sukses', 'Profil berhasil di update');
        }
        else {
            return redirect()->back()->with('gagal', 'Profil tidak berhasil di update');
        }
    }
    
}
