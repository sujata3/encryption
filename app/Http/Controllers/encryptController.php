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
       $request->validate([
           'value' => 'required'
       ]);


       $text_data = $request->value;

       if ($text_data == null) {
           $data = null;
           return back()->with('data', $data);
       } else {
           $data = sha1($text_data);
           return back()->with('data', $data);
       }
   }

    public function validation(Request $request)
   {
       $request->validate([
           'encryptValue' => 'required',
           'strValue' => 'required'
       ]);

       $h_data = $request->encryptValue;
       $s_data = $request->strValue;


          if ( $h_data == sha1($s_data)) {
              return back()->with('matched', 'Matched');
           }
          else{
              return back()->with('do not matched', 'Not Matched');
          }
       }








//       $data -> title = $request->title;
//       $data -> Description = $request->description;
//       $data -> save();


}
