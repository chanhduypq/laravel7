<?php 

namespace App\Logic;

use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Account {

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return \App\Models\Account
     */
    public static function getAccount($request) {
        $data = $request->all();
        $accountObject = DB::table('users')
                ->where('email', '=', $data['email'])
//                ->where('password', '=', \Illuminate\Support\Facades\Hash::make($data['password']))
                ->first();
        
        return $accountObject;
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public static function changePassword($request) {
        $data = $request->all();

        $tableName = (AuthServiceProvider::isCustomer() === TRUE) ? 'customer' : 'users';

        DB::table($tableName)
                ->where('id', '=', AuthServiceProvider::getAccountId())
                ->update(
                            [
                                'password' => \Illuminate\Support\Facades\Hash::make($data['newPassword'])
                            ]
                        )
        ;
    }

    /**
     * 
     * @param \App\Models\Account $accountObject
     * @return void
     */
    public static function saveAccountInfomationIntoSession($accountObject) {
        $accountArray = (array) $accountObject;

        foreach ($accountArray as $key => $value) {
            Session::put($key, $value);
        }
    }

}
