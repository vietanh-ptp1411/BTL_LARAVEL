<?php

namespace App\Providers;
 
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin; 
class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     Blade::if('hasrole', function($expression){
    //         $user = Auth::user();
    //         if($user){
    //             // Kiểm tra xem người dùng có một trong các vai trò được chỉ định hay không
    //             $roles = explode('|', $expression);
    //             foreach ($roles as $role) {
    //                 if ($user->hasRole($role)) {
    //                     return true;
    //                 }
    //             }
    //         }
    //         return false;
    //     });

    //     Blade::if('impersonate',function(){
    //         if(session()->has('impersonate')){
    //             return true;
    //         }
    //         return false;
    //     });
    // }
}