<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarLogin;
use App\Models\UserModel;
use App\Models\CarDataModel;
use DB;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select('select * from carmodel');
        return view('index',['data'=>$data]);
    }
    public function login()
    {
        return view('login');
    }

    public function userform()
    {
        return view('userform');
    }
    // public function formwithname($carname)
    // {
    //     return view('userform',['carname'=>$carname]);
    // }

    public function validateit(Request $data)
    {
        $uname=$data->post('uname');
        $pass=$data->post('pwd');
        $log=CarLogin::where('uname',$uname)->where('pwd',$pass)->first();
        if(isset($log))
        {
            $data=DB::select('select * from carmodel');// to display car details
            return view('admindashboard',['data'=>$data]);
        }
        else{
            echo('login failed');
        }
    }

    public function registerit()
    {
        $reg_data=new UserModel();
        $reg_data->name=request('name');
        $reg_data->address=request('address');
        $reg_data->phone=request('phone');
        $reg_data->pickup=request('pickup');
        $reg_data->car=request('car');
        $reg_data->save();
        return view('userform');   
    }

    public function requests()
    {
        $data=DB::select('select * from _userdata');
        return view('viewrequest',['data'=>$data]);
        
    }

    public function finished($id)
    {
        $data=UserModel::find($id);
        $data->delete();
        return redirect('viewrequest');        
    }
    public function addcar()
    {
        return view('addcar') ;       
    }

    public function dash()
    {
        $data=DB::select('select * from carmodel');// to display car details
        return view('admindashboard',['data'=>$data]);
    }

    public function carregit()
    {
        $cardata=new CarDataModel(); 
        $cardata->carname=request('carname');
        $cardata->carprice=request('carprice');
        $cardata->carseats=request('carseat');
        $cardata->img=request('carimg');
        $cardata->save();
        return view('addcar'); 
    }

    

    
}