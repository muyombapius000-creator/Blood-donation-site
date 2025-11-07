<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
     public function about()
    {
        return view('about');
    }
     public function donor()
    {
        return view('DonorReg');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $incomingData = $request->validate([
         'fname' => 'required|string|max:55',
         'age' => 'required|integer|min:18|max:45',
         'select' => 'required|string',
         'email' => 'required|email|max:55',
         'phone' => 'required|string|max:20',
         'location' => 'required|string|max:255',
     ]);
     $feedback = new Feedback();
     $feedback->fname = $incomingData['fname'];
     $feedback->age = $incomingData['age'];
     $feedback->select = $incomingData['select'];
     $feedback->email = $incomingData['email'];
     $feedback->phone = $incomingData['phone'];
     $feedback->location = $incomingData['location'];
     $feedback->save();
        return redirect()->back()->with('success', 'Registration successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        $feedbacks = Feedback::all();
        return view('display', compact('feedbacks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback=Feedback::find($id);
        return view('edit', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update( Feedback $feedback,$id, Request $request)
    {
         $incomingData = $request->validate([
         'fname' => 'required|string|max:55',
         'age' => 'required|integer|min:18|max:45',
         'select' => 'required|string',
         'email' => 'required|email|max:55',
         'phone' => 'required|string|max:20',
         'location' => 'required|string|max:255',
     ]);
     $feedback = Feedback::find($id);
     $feedback->fname = $incomingData['fname'];
     $feedback->age = $incomingData['age'];
     $feedback->select = $incomingData['select'];
     $feedback->email = $incomingData['email'];
     $feedback->phone = $incomingData['phone'];
     $feedback->location = $incomingData['location'];
     $feedback->save();
        return redirect()->back()->with('success', 'Registration update successful!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::findorfail($id);
        $feedback->delete();
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
}
