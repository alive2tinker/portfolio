<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PageView;

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
        PageView::updateOrCreate(['ip' => $request->ip()],[
            'ip' => $request->ip(),
            'page' => 'resume_download'
        ]);

        try{
            switch($type){
                case 'word':
                    return $user->word_cv != null ? Storage::disk('public')->download($user->word_cv) : redirect()->back();
                case 'pdf':
                    return $user->pdf_cv != null ? Storage::disk('public')->download($user->pdf_cv) : redirect()->back();
            }
        }catch(\Exception $e){
            return redirect()->back();
        }
    }
}
