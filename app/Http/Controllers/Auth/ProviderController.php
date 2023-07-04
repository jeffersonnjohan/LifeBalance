<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider){
        // $user = Socialite::driver($provider)->user();
        // dd($user);
        $SocialUser = Socialite::driver($provider)->user();
        
        // Mendapatkan akses token untuk mengakses API GitHub
        $accessToken = $SocialUser->token;
        
        // Mengirim permintaan ke API GitHub untuk mendapatkan informasi pengguna termasuk lokasinya
        $response = Http::withToken($accessToken)->get('https://api.github.com/user');
        
        // Mendapatkan data lokasi pengguna dari respons API
        $location = $response->json()['location'];
        $avatarUrl = $response->json()['avatar_url'];

        // Download gambar
        $filename = 'avatar_' . uniqid() . '.jpg'; // Nama file unik dengan ekstensi .jpg

        // Unduh gambar dari URL dan simpan langsung di dalam direktori penyimpanan (storage)
        copy($avatarUrl, storage_path('app/public/profile-images/' . $filename));

        // Jika Anda ingin mendapatkan URL akses ke gambar yang disimpan
        $url = Storage::url('profile-images/' . $filename);
        
        $user = User::updateOrCreate([
            'provider_id' => $SocialUser->id,
            'provider' => $provider
        ], [
            'provider_token' => $SocialUser->token,

            'gender'=> fake()->randomElement(['male', 'female']),
            'username' => $SocialUser->name,
            'dob' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'address' => $location,
            'weight' => mt_rand(30,100),
            'height' => mt_rand(100,200),
            'image' => 'profile-images/'.$filename
        ]); 
    
        Auth::login($user);
    
        return redirect('/home');
    }
}
