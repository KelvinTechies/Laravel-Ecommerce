<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userCreateModel;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\CartModel;

class UserCreationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $userData= usercreateModel::where('id', '=', session('loggedUser'));
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();
        $Products = CartModel::with(['ProductsModels'=>function($query){
            $query->select('id', 'Description', 'DogName', 'Color', 'Quantity', 'DogType', 'Price', 'Image');
        }])->where('UserId',  $userData->id)->get()->toArray();

        return view('users.dashboard')->with([
            'userData'=>$userData,
            'Products'=>$Products
        ]);
    }
    public function adminDashboard()
    {
        // $userData= usercreateModel::where('id', '=', session('loggedUser'));
        $userData = userCreateModel::where('id', '=', session('loggedUser'))->first();

        return view('admin.dashboard')->with([
            'userData'=>$userData
        ]);
    }
    public function register()
    {
       return view('Users.Register');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
       return view('Users.Login');        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form= $request->validate([
            'fullname'=>'required|string',
            'username'=>'required|string',
            'email'=>'required|string|email|unique:user_create_models',
            'password'=>'required|confirmed',
            'checkBox'=>'required',
            'gender' => 'in:male,female'
        ]);
    //    dd($form);

    usercreateModel::create([
        'FullName'=>$request->input('fullname'),
        'UserName'=>$request->input('username'),
        'Email'=>$request->input('email'),
        'Password'=>Hash::make($request['password'])
    ]);
    

    return view('Users.Login');
    }
public function ValidateLogin(Request $request){
    // dd($request);

    $validCredentials=$request->validate([
        'email'=>'required|string',
        'password'=>'required'
    ]);
    // dd($validCredentials);

    $user=usercreateModel::where('email', '=', $request->email)->first();

    if(!$user){
        return back()->with('fail', 'Invalid Credentials');
    }else{
        if(Hash::check($request->password, $user->Password) && $user->role=='1'){
            $request->session()->put('loggedUser', $user->id);
            return redirect('admin/dashboard');
        }elseif(Hash::check($request->password, $user->Password) && $user->role=='0'){
            $request->session()->put('loggedUser', $user->id);
            return redirect('dashboard');
        }
        else{
        return back()->with('fail', 'Wrong Password');            
        }
    }

}
    /**
     * Display the specified resource.
     */
    public function Logout()
    {
        if(Session::has('loggedUser')){
            session()->pull('loggedUser');
            return redirect('/login');
        }
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editAdmin(string $id)
    {
        $userData=usercreateModel::find($id);

        return view('Admin.edit')->with([
            'userData'=>$userData
        ]);
    }
    public function editUser(string $id)
    {
        $userData=usercreateModel::find($id);

        return view('users.edit_user')->with([
            'userData'=>$userData
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       dd($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
