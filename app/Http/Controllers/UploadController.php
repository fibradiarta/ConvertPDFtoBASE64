<?php

namespace App\Http\Controllers;

use App\upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function Upload(Request $request)
    {
        $base64 = base64_encode(file_get_contents($request->file('pdf')->path()));

        Upload::create([
            'file' => $base64
        ]);


        return redirect('/');
    }
    public function List()
    {
        $list = Upload::all();
        return view('list', compact('list'));
    }

    public function Download($id)
    {
        $details = Upload::find($id);
        $decoded = base64_decode($details->file);
        $file = 'myfile_'.date('dmYhs').'.pdf';;
        file_put_contents($file,$decoded);

        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            unlink($file);
            exit;
        }

        return view('list', compact('list'));
    }
}
