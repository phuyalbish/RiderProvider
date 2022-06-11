<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CMSController extends Controller
{
    function CMSDashboard(){
        return view('cmsDashboard');
    }

    function CMSLogin(){
        
        return view('cmsLogin');
    }
        
        function CMSLoginCheck(Request $request){

            if($request->input('developer_uname') == "user123" && ($request->input('developer_password') == "password123")){
                setcookie('cookie_cms', $request->input('developer_uname'), time() + (86400 * 90), "/");
                    return redirect(route('cms.dashboard'));
                }
                else{
                    
                    $err_msg="Wrong UserName or Password";
                    return view('cmsLogin',compact('err_msg'));
                }
        }


            function CmsSignOut(){
                unset($_COOKIE['cookie_cms ']);
                setcookie("cookie_cms", "", time()-3600);
                return redirect(route('cms.login'));

            }
}

