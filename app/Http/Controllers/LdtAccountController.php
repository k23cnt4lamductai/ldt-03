<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LdtAccountController extends Controller
{
    // action
    public function Ldtindex() {
        return "<h1> LdtAccount Controller; ldt index; return string";
    }

    // action:return view -> form thêm mới 
    public function ldtShowData(){

        // Trả về view có tên create trong thư mục \\resources\views\ldt-account-create.blade.php 
        return view ('ldt-account-create');
    }

    //action: return data to view
    public function ldtShowData(){
        // tạo mock data 
        $data = array ('2310900092','Lâm Đức Tài');
        return view ('ldt-account-showData',['ldtData'=>$data]);
    } 



}
