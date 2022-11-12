<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CVController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, User $user, $type)
    {
        try{
            switch($type){
                case 'word':
                    return Storage::disk('public')->download($user->word_cv);
                case 'pdf':
                    return Storage::disk('public')->download($user->pdf_cv);
            }
        }catch(\Exception $e){
            return redirect()->back();
        }
    }
}
