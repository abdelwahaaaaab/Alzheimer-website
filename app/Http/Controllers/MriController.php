<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Mri;

class MriController extends Controller
{
    public function index()
    {
        return view('Client.MRI');
    }

    public function create()
    {
        return view('Client.result');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'pname' => 'required',
                'img' => 'required',
            ]
        );
        $path = 'D:/My College/Graduation Project/Alzheimer_project/Dataset_alzheimer/dataset/Testing/'.$request->img;
        $response = Http::asForm()->post(
            'http://localhost:5000/predict',
            [
                'path' => $path,
            ]
        );
        $data = $response->json();
        $MRIresult = $data['pred:'];
        if (session()->has('mri')) {
            session()->forget('mri');
        }
        if (session()->has('result')) {
            session()->forget('result');
        }
        session()->put(
            [
                'mri'=> $MRIresult,
                'result_mri' => true, 
            ]
            
            );

        $ar_result = '';
        if($MRIresult == 'Mild Demented')
        {
            $ar_result = 'المراحل المبكرة للمرض';
        }
        elseif($MRIresult == 'Moderate Demented')
        {
            $ar_result = 'من متوسط إلى متدهور قليلا';
        } 
        elseif($MRIresult == 'Non Demented')
        {
            $ar_result = 'غير مصاب بالمرض';
        }
        elseif($MRIresult == 'Very Mild Demented')
        {
            $ar_result =  'خفيف جدا في المراحل الأولية';
        }
        $result = Mri::create(
            [
                'patient_name' => $request->pname,
                'client_id' => session('user_id'),
                'mri_result' => $MRIresult,
                'mri_result_ar' => $ar_result,
            ]
        );
        return redirect('/mri/create')->with('MRIresult', $MRIresult);
        
    }


    public function showResults()
    {
        $results = Mri::all();
        return view('Client.AllMriResults', compact('results'));
        
    }

  
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
