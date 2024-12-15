<?php

namespace App\Http\Controllers;

use App\Models\Instruction;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructions = Instruction::all();
        return view('instruction', compact('instructions'));
    }

 
    public function create()
    {
        $instructions = Instruction::all();
        return view('Admin.addinstruction', compact('instructions'));
    }

   
    public function store(Request $request)
    {
        $request->validate(
            [
                'instruction' => 'unique:instructions|required',
                'instruction_ar' => 'unique:instructions|required'
            ]
        );
        Instruction::create($request->all());
        return redirect()->back()->with('message', __('myCustom.instruction-message'));
    }

    // public function show(Instruction $instruction)
    // {
    //     //
    // }

    public function edit($id)
    {
        $instruction = Instruction::findOrFail($id);
        return view('Admin.editInstruction',compact('instruction'));
    }

    public function update(Request $request, Instruction $instruction)
    {
        $request->validate(
            [
                'instruction'=> 'required| unique:instructions',
            ]
        );
        $instruction->update($request->all());
        return redirect('/instruction/create')->with('message', __('myCustom.update-instruction'));
    }

    public function destroy($id)
    {
        $instruction = Instruction::findOrFail($id);
        $instruction->delete();
        return redirect('/instruction/create')->with('message', __('myCustom.delete-instruction'));
    }
}
