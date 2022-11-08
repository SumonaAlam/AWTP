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
        $summaries = Summary::all();
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

        $request->file('image')->storeAs('public/summary', $imageName);

        return redirect()->route('summary');


    }

    public function summaryDetail($id){
        $summary = Summary::where('summary_id', $id)->first();
        $summaries = Summary::where('student_id', session()->get('profile')->student_id)->get();
        return view('student.summary_detail')
                ->with('summary', $summary)
                ->with('summaries', $summaries)
                ->with('author', session()->get('profile')->name);
    }

}
