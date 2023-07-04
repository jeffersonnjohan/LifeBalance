<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index(Request $request) {
        return view('/login');
    }

    public function authenticate(Request $request): RedirectResponse{
        $validated =  $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // $credentials = $request->all();
        unset($validated['_token']);
        if(Auth::attempt($validated)) {
            $user = User::find(Auth::user()->id);
            $last_login = $user->last_login;
            $current_date = Carbon::now()->format('Y-m-d');

            // Cek apakah last_login sama dengan hari ini
            if($last_login != $current_date){
                
                // Kalau tidak sama, cek apakah terakhir login tuh kemarin
                $previousDate = Carbon::parse($current_date)->subDay()->format('Y-m-d');
                
                if($last_login != $previousDate){
                    // Kalau terakhir login tuh udah lama, hapus streaknya
                    $user->update([
                        'last_login' => $current_date,
                        'streak_count' => 1,
                    ]);
                } else{
                    // Kalau terakhir login kemarin, streaknya tambahin
                    $user->update([
                        'last_login' => $current_date,
                        'streak_count' => $user->streak_count + 1,
                    ]);
                }
                
            }

            $request->session()->regenerate();
            // $id = User::where('username', $credentials['username'])->pluck('id')->first();
            // $request->session()->put('activeId', $id);
            return redirect()->intended('/home');
        }
        return back()->with('loginError', 'Incorrect username or password');
        // return $credentials;
    }
}
