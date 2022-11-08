<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Creator;
use App\Http\Requests\StoreCreatorRequest;
use App\Http\Requests\UpdateCreatorRequest;
use App\Models\Subject;
use App\Models\Topic;
use Symfony\Component\HttpFoundation\Request;

class CreatorController extends Controller
{
    public function dashboard(){
        $subjects = Subject::all();
        $contents = Content::where('creator_id', session()->get('profile')->creator_id)->get();
        return view('creator.dash_creator')
                ->with('subjects', $subjects)
                ->with('contents', $contents);

    }

    public function createContentSubmit(Request $request){
        $validate = $request->validate([
            "title"=>"required|",
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'detail'=>'required|min:4|max:200|unique:topics,detail',
            'subject'=>'required'
        ]
    );


        $request->file('image')->store('content');
        $topic = new Topic();
        $topic->title = $request->title;
        $topic->image = "A";
        $topic->detail = $request->detail;
        $topic->subject_id = $request->subject;
        $topic->save();


        $topicTemp = Topic::where('detail', $topic->detail)->first();

        $imageName = "IMG_CONTENT_ID_".$topicTemp->topic_id.".".$request->file('image')->getClientOriginalExtension();
        Topic::where('topic_id', $topicTemp->topic_id)
                                ->update(['image' => $imageName]);

        $content = new Content();
        $content->subject_id = $request->subject;
        $content->topic_id = Topic::where('detail', $topic->detail)->first()->topic_id;
        $content->creator_id = $request->session()->get('profile')->creator_id;
        $content->save();

        return redirect()->route('creatorDash');
        // return $request->session()->get('profile');

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
