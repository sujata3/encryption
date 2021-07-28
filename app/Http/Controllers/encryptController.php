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
   public function store(Request $request){

      $data = new Encrypt();
        $request-> validate([
           'title' => 'required',
           'description' => 'required'
       ]);

       $data -> title = $request->title;
       $data -> Description = $request->description;
       $data -> save();
   }

//    public function storeSecret(Request $request)
//    {
//        $request->data()->description([
//            'Description' => Crypt::encryptString($request->description),
//        ])->save();
//    }
}
