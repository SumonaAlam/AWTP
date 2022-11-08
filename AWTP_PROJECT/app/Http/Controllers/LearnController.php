<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Subject;
use App\Models\Topic;

class LearnController extends Controller
{

    public function learn()
    {
        $subjects = Subject::all();
        return view('student.learn')
        ->with('subjects', $subjects);
    }

    public function subject($id)
    {
        $topics = Topic::where('subject_id', $id)->get();
        return view('student.sub')
        ->with('topics',$topics);
    }

    public function topic($id){
        $topic = Topic::where('topic_id', $id)->first();
        return view('student.topic')
                ->with('topic', $topic);
    }

}
