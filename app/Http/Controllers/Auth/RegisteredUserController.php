<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Package;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
=======
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
>>>>>>> c60f1fce68830e15a4653713dca42f4adaa974c1

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($package_id): View
    {
        $data['package']=Package::find($package_id);
        $data['package_id']=$package_id;
        return view('auth.register',$data);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request,$package_id)
    {
        

        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255']
        ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     $uname = substr($request->name,0,2),
        //     $codename = $this->GenerateUserName($uname),
        //     dd($codename),
        //     'email' => $request->email,
        //     'package_id'=>$package_id,
        //     'password' => Hash::make($request->password),
        // ]);

      
        $user = new User();
        $user->name = $request->name;
        $uname = substr($request->name,0,2);
        $codename = $this->GenerateUserName($uname);
        $user->code = $codename;
        $user->email = $request->email;
        $user->passcode = random_int(1000,9999);
        $user->package_id =$package_id;
        $user->password = Hash::make($request->password);
        $user->save();

        event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
            return view('pages.user_detail',compact('user'));
    }

    public function GenerateUserName($uname)
    {
        $number = uniqid( $uname,false);
        
        if($this->UserNameExists($number))
        {
            return $this->GenerateUserName($uname);
        }
        
         return $number;
    }

    public function UserNameExists($number)
    {
        return User::where('code',$number)->exists();
    }


}
