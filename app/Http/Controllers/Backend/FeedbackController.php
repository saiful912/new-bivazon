<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks=Feedback::orderBy('id','desc')->get();
        return view('backend.dashboard.feedback.index',compact('feedbacks'));
    }

    public function store(FeedbackRequest $request)
    {
        try {
            $feedback = new Feedback();
            $feedback->name = $request->name;
            $feedback->email = $request->email;
            $feedback->message = $request->message;
            $feedback->save();
            notify()->success('A Feedback has created successfully ', 'success');
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }
    }

    public function edit(FeedbackRequest $request,$id)
    {
        try {
            if (empty($request['status'])) {
                $status = 0;
            } else {
                $status = 1;
            }
            $feedback = Feedback::find($id);
            $feedback->name = $request->name;
            $feedback->email = $request->email;
            $feedback->message = $request->message;
            $feedback->status = $status;
            $feedback->save();
            notify()->success('Feedback has Update successfully ', 'success');
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }

    }

    public function delete($id)
    {
        $feedback=Feedback::find($id);
        if (!is_null($feedback)){
            $feedback->delete();
        }
        notify()->success('Feedback deleted successfully','success');
        return back();
    }
}
