<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Curriculum;
use App\Models\Lesson;

class PageController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Welcome to EduHome',
            'introText' => 'Empowering Your Learning Journey',
        ];
        return view('index', $data);
    }

    public function onlineLearning()
    {
        $curricula = Curriculum::all();
        $grades = ['R', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $gradeLessons = [];

        foreach ($grades as $grade) {
            $gradeLessons[$grade] = Lesson::where('grade_level', $grade)
                ->where('curriculum_id', 1) // 1 for CAPS.
                ->get();
        }

        $data = [
            'curricula' => $curricula,
            'grades' => $grades,
            'gradeLessons' => $gradeLessons,
        ];
        return view('online-learning', $data);
    }

    public function selfDrivenLearning()
    {
        $subjects = Subject::all();

        $data = [
            'subjects' => $subjects,
        ];

        return view('self-driven-learning', $data);
    }

    public function printableResources()
    {
         $grades = ['R', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]; // Or fetch from the database
       
        $gradeResources = [];
        foreach ($grades as $grade) {
            $gradeResources[$grade] = Lesson::where('grade_level', $grade)
                                          ->where('curriculum_id', null) // Only printables, change as needed
                                          ->get();
        }

        $data = [
            'grades' => $grades,
            'gradeResources' => $gradeResources,
        ];

        return view('printable-resources', $data);
    }

     public function showSupport()
    {
        $faqs = [
            [
                'question' => 'How do I register for an account?',
                'answer' => 'To register, click on the "Register" link and follow the instructions.',
            ],
            [
                'question' => 'How do I download printable resources?',
                'answer' => 'Go to the "Printable Resources" section, select the grade and subject, and download the materials.',
            ],
            [
                'question' => 'How do I track my child\'s progress?',
                'answer' => 'Log in to your account and access the "Dashboard" section.',
            ],
            [
                'question' => 'What subjects are available?',
                'answer' => 'We offer a variety of subjects, including Mathematics, Language Arts, Science, and practical skills.',
            ],
            [
                'question' => 'How do I contact support?',
                'answer' => 'You can contact us via email at support@eduhome.com or phone at +27 [Your Phone Number].',
            ],
        ];

        $data = [
            'faqs' => $faqs,
        ];

        return view('support', $data);
    }
}
