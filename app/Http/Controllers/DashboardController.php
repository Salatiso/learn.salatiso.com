<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Learner;
use App\Models\UserProgress;
use App\Models\Subject;

class DashboardController extends Controller
{
    /**
     * Show the user's dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Get the currently logged-in user
        $user = Auth::user();

        // Get the learner associated with the user (if it's a parent)
        $learner = null;
        if ($user->user_type === 'parent') {
            $learner = Learner::where('user_id', $user->id)->first();
        }
        //Get the user's progress.
        $progress = UserProgress::where('user_id', $user->id)->get();

       //Get the subjects
       $subjects = Subject::all();

        // Pass the data to the view
        $data = [
            'user' => $user,
            'learner' => $learner,
            'progress' => $progress,
            'subjects' => $subjects
        ];

        return view('dashboard', $data);
    }
}
