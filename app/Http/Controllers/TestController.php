<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('Client.memoryTest');
    }

   
    public function store(Request $request)
    {
        $request->validate(
            [
                'q1' => 'required',
                'q2' => 'required',
                'q3' => 'required',
                'q4' => 'required',
                'q5' => 'required',
                'q6' => 'required',
                'q7' => 'required',
                'q8' => 'required',
                'q9' => 'required',
                'q10' => 'required',
                'q11' => 'required',
                'q12' => 'required',
                'q13' => 'required',
                'q14' => 'required',
                'q15' => 'required',
                'q16' => 'required',
                'q17' => 'required',
                'q18' => 'required',
                'q19' => 'required',
                'q20' => 'required',
            ]
        );
        $result = 0;
        if($request->q1 == 'yes')
        {
            $result ++;
        }
        if($request->q2 == 'yes')
        {
            $result ++;
        }
        if($request->q3 == 'yes')
        {
            $result ++;
        }
        if($request->q4 == 'yes')
        {
            $result ++;
        }
        if($request->q5 == 'yes')
        {
            $result ++;
        }
        if($request->q6 == 'yes')
        {
            $result ++;
        }
        if($request->q7 == 'yes')
        {
            $result ++;
        }
        if($request->q8 == 'yes')
        {
            $result ++;
        }
        if($request->q9 == 'yes')
        {
            $result ++;
        }
        if($request->q10 == 'yes')
        {
            $result ++;
        }
        if($request->q11 == 'yes')
        {
            $result ++;
        }
        if($request->q12 == 'yes')
        {
            $result ++;
        }
        else if($request->q12 == 'yes-1')
        {
            $result += 0.5;
        }
        if($request->q13 == 'yes')
        {
            $result ++;
        }
        else if($request->q13 == 'yes-1')
        {
            $result += 0.5;
        }
        if($request->q14 == 'yes')
        {
            $result ++;
        }
        else if($request->q14 == 'yes-1')
        {
            $result += 0.5;
        }
        if($request->q15 == 'yes')
        {
            $result ++;
        }
        else if($request->q15 == 'yes-1')
        {
            $result += 0.5;
        }
        if($request->q16 == 'yes')
        {
            $result ++;
        }
        else if($request->q16 == 'yes-1')
        {
            $result += 0.5;
        }
        if($request->q17 == 'yes')
        {
            $result ++;
        }
        else if($request->q17 == 'yes-1')
        {
            $result += 0.5;
        }
        if($request->q18 == 'yes')
        {
            $result ++;
        }
        else if($request->q18 == 'yes-1')
        {
            $result += 0.5;
        }
        if($request->q19 == 'yes')
        {
            $result ++;
        }
        else if($request->q19 == 'yes-1')
        {
            $result += 0.5;
        }
        if($request->q20 == 'yes')
        {
            $result ++;
        }
        else if($request->q20 == 'yes-1')
        {
            $result += 0.5;
        }
        Test::create(
            [
                'client_id' => session('user_id'),
                'result' => $result,
            ]
        );
        $results = Test::all();
        //return redirect()->route('/test-results',['results' => $results, 'result' => $result]);
        //return Redirect::to('/test-results', compact('results','result'));
        return redirect('/test-results')->with( 'result' , $result);
    }

    
    public function destroy($id)
    {
        $test = Test::findOrFail($id);
        $test->delete();
        return redirect()->back()->with('message', __('myCustom.test-message'));
    }
    public function showResults()
    {
    
        $results = Test::all();
        return view('Client.memoryTestResult', compact('results'));
    }
}
