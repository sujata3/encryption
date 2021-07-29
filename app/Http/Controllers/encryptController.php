<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Encrypt;
use Illuminate\support\facades\Crypt;
class encryptController extends Controller
{
   public function showForm()
   {
       return view('Form.add-detail');
   }
   public function store(Request $request)
   {
//       $request->validate([
//           'value' => 'required'
//       ]);


        $text_data = $request->value;

        if($text_data == null){
            $data = null;
            return view('Form.add-detail', compact('data'));
        }else{
            $data = md5($text_data);
            return view('Form.add-detail', compact('data'));
        }









//       $data -> title = $request->title;
//       $data -> Description = $request->description;
//       $data -> save();
   }

}
