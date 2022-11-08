<?php

namespace App\Http\Controllers;

use App\Models\Summary;
use Illuminate\Http\Request;

class RetainController extends Controller
{
    public function retain()
    {
        return view('student.retain');
    }

    public function summary()
    {
        $summaries = Summary::where('student_id', session()->get('profile')->student_id)->get();
        return view('student.summary')

                ->with('summaries', $summaries);

    }

    public function summarySubmit(Request $request){
        $validate = $request->validate([
            "title"=>"required|",
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'detail'=>'required|min:4|max:200|unique:topics,detail',
        ]
    );


        $request->file('image')->store('summary');
        $summary = new Summary();
        $summary->title = $request->title;
        $summary->image = "A";
        $summary->detail = $request->detail;
        $summary->student_id = $request->session()->get('profile')->student_id;
        $summary->save();


        $summaryTemp = Summary::where('detail', $summary->detail)->first();

        $imageName = "IMG_SUMMARY_ID_".$summaryTemp->summary_id.".".$request->file('image')->getClientOriginalExtension();
        Summary::where('summary_id', $summaryTemp->summary_id)
                                ->update(['image' => $imageName]);

        return redirect()->route('summary');


    }

    public function contentDetail($id){
        $content = Content::where('content_id', $id)->first();
        $contents = Content::where('creator_id', session()->get('profile')->creator_id)->get();
        return view('creator.content_detail')
                ->with('content', $content)
                ->with('contents', $contents)
                ->with('author', session()->get('profile')->name);
    }

}
