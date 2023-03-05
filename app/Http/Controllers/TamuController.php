<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function index()
    {
      $tamu = Tamu::get();
      // var_dump($tamu);
      $data = array(
        'tamu' => $tamu,
      );
      return view('tamu.get', $data);
    }
    public function store(Request $request)
    {
      $tamu = Tamu::create($request->all());
        session()->flash('success', 'Tamu Data Saved Successfully');
        return redirect('/tamu');
    }
    public function update(Request $request, $id)
      {
        $tamu = Tamu::findOrFail($id);
        $tamu->update($request->all());
        session()->flash('success', 'Tamu Data Updated Successfully');
        return redirect('/tamu');
      }
      public function delete($id)
  {
      //$deleteStudent = DB::table('students')->where('id', $id)->delete();
      $tamu = Tamu::findOrFail($id);
      $tamu->delete();

      session()->flash('success', 'Tamu Data Deleted Successfully');
      return redirect('/tamu');
  }
}
