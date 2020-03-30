<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;

use App\Mail\AdminRestPassword;
use Carbon\Carbon;
use Illuminate\Database\Console\Migrations\ResetCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminAuth extends Controller
{
    //
    public function login()
    {
        return view('admin.login');
    }

    public function dologin()
    {

        $email = request('email');
        $pass = request('password');

        $rememberme = request('rememberme') == 1 ? true : false;

        if (AdminHelperAuth()->attempt(['email' => $email, 'password' => $pass], $rememberme)) {
            return redirect('admin');
        } else {
            session()->flash('error', trans('admin.inccorrect_information_login'));
            return redirect(aurl('login'));
        }
    }

    public function logOut()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }

    public function forgotPassword()
    {
        return view('admin.forgot-password');
    }

    public function forgotPasswordPost()
    {
        $admin = Admin::where('email', request('email'))->first();
        if (!empty($admin)) {
            $token = app('auth.password.broker')->createToken($admin);
            $data = DB::table('password_resets')->insert([
                'email' => $admin->email,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);

            Mail::to($admin->email)->send(new AdminRestPassword(['data' => $admin, 'token' => $token]));

            session()->flash('success', trans('admin.link-sent'));
            return back();
        }
        return back();
    }

    public function restPassword($token)
    {

        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>',
            Carbon::now()->subHours(2))->first();
        if (!empty($check_token)) {
            return view('admin.reset-password', ['data' => $check_token]);
        } else {
            return redirect(aurl('forgot-password'));

        }
        //return dd($check_token);
    }

    public function restPasswordFinal($token)
    {
        $this->validate(request(), [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ], [], [
            'password' => 'Password',
            'password_confirmation' => 'Confirmation Password',
        ]);

        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
        if (!empty($check_token)) {
            $admin = Admin::where('email', $check_token->email)->update([
                'email' => $check_token->email,
                'password' => bcrypt(request('password'))
            ]);
            DB::table('password_resets')->where('email', request('email'))->delete();
            AdminHelperAuth()->attempt(['email' => $check_token->email, 'password' => request('password')], true);
            return redirect(aurl());
        } else {
            return redirect(aurl('forgot-password'));
        }
    }
}

