<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\StoreLoginRequest;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Authenticate extends Controller
{
    public function login(){

        return view('Frontend.Auth.login');
    }
    public function index(){
        return 'hi';
    }

    public function register(){
        return view('admin.employee.components.add_employee');
    }

    public function store(RegisterRequest $request){

        $user = $request->all();
        User::Create([
            'name'             =>$request->get('name'),
            'email'            =>$request->get('email'),
            'password'         =>bcrypt($request->get('password')),

        ]);

        return redirect()->route('employee.list');

    }

    public function list(){
        $employee= User::all();
        return view('admin.employee.employeelist',['employee' => $employee]);
    }
    public function edit(User $employee){
        return view('admin.employee.components.edit_employee',['employee' => $employee]);
    }

    public function update(Request $request, $id){

        $employee = User::where('id', $id)->first();
        $employee->name  = $request->name;
        $employee->email  = $request->email;
        $employee->password  = $request->password;

        return redirect()->route('employee.list');
    }


    public function delete(User $employee){

        //Delete the product
        $employee->delete();

        return redirect()->route('employee.list');
    }

    // public function
    public function logout(){
        Auth::logout();
        return redirect('home');
    }

    public function loginA(Request $request) {
        try {
            $validateUser = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);

            if ($validateUser->fails()) {
                throw new ValidationException($validateUser);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                throw new AuthenticationException('Email and password do not match our records');
            }

            return view('admin.dashboard.dashboard');
        } catch (ValidationException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',

            ], 401);
        } catch (AuthenticationException $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 401);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}

