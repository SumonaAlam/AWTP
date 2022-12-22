<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContentResource;
use App\Models\Content;
use App\Models\Creator;
use App\Http\Requests\StoreCreatorRequest;
use App\Http\Requests\UpdateCreatorRequest;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\User;
use stdClass;
use Symfony\Component\HttpFoundation\Request;

class CreatorController extends Controller
{
    public function dashboard(Request $request){
        $subjects = Subject::all();
        $contents = Content::where('creator_id', $request->input("creator_id"))->get();
        $object = new stdClass();
        $object->subjects = $subjects;
        $object->contents = ContentResource::collection($contents);
        return $object;

    }

    public function createContentSubmit(Request $request){

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

        $request->file('image')->storeAs('public/content', $imageName);

        $content = new Content();
        $content->subject_id = $request->subject;
        $content->topic_id = Topic::where('detail', $topic->detail)->first()->topic_id;
        $content->creator_id = $request->creator_id;
        $content->save();

        return $request;
    }

    public function contentDetail(Request $request){
        $content = Content::where('content_id', $request->input("content_id"))->first();
        $contents = Content::where('creator_id', $request->input("creator_id"))->get();
        $object = new stdClass();
        $object->content = ($content->topic);
        $object->contents = ContentResource::collection($contents);
        return $object;
    }

    public function updateCreator(Request $request){

        User::where('user_id', $request->id)
            ->update([
                'username' => $request->username
            ]);

        Creator::where('user_id', $request->id)
            ->update([
                'age' => $request->age,
                'bio' => $request->bio,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

        return $request;
    }

    public function newCreatorData(Request $request){

        $user = User::where('user_id', $request->input("user_id"))->first();
        $creator = Creator::where('user_id', $request->input("user_id"))->first();
        $object = new stdClass();
                $object->user = $creator;
                $object->role = "CREATOR";
                $object->name = $user->username;
                return $object;


    }
}
