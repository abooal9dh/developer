<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use  App\Models\sign;

class SignaturePadController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('signaturePad');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function upload(Request $request)
    {
        $folderPath = public_path('upload/');
        
        $image_parts = explode(";base64,", $request->signed);
              
        $image_type_aux = explode("image/", $image_parts[0]);
           
        $image_type = $image_type_aux[1];
           
        $image_base64 = base64_decode($image_parts[1]);
           
        $file = $folderPath . uniqid() . '.'.$image_type;
        file_put_contents($file, $image_base64);
        $sign = new sign();
        $sign->name = $request->input('name');
        $sign->origin = $request->input('phone');
        $sign->signature = $file;
        $sign->save();
        return back()->with('success', ' تم حفظ معلوماتك بنجاح');

    }
}