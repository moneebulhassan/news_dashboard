<?php

namespace App\Http\Controllers;

use App\Computer;
use App\MaintenanceDetail;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computer::all();
        return view('forms.index',compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //

        $computer= new Computer();

        $computer->Item_Name = request('item_name');
        $computer->Serial_Number = request('Serial_Number');
        $computer->model = request('model');
        $computer->type = request('type');
        $computer->operating_system = request('operating_system');
        $computer->hard_drive = request('hard_drive');
        $computer->Ram = request('Ram');
        $computer->processor = request('processor');
        $computer->save();


      
        return redirect()->route('forms.index');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computer = Computer::find($id);
        // dd($computer->Item_Name);
        return view('forms.edit',compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$computer_id)
    {

      $computer = Computer::find($computer_id);
      // $computer->update($request->all());

      $computer->Item_Name = request('item_name');
      $computer->Serial_Number = request('Serial_Number');
      $computer->model = request('model');
      $computer->type = request('type');
      $computer->operating_system = request('operating_system');
      $computer->hard_drive = request('hard_drive');
      $computer->Ram = request('Ram');
      $computer->processor = request('processor');
      $computer->save();

      return redirect()->route('forms.index');
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
