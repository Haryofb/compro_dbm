<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Divition;
use App\Position;
use App\Cabang;

use Illuminate\Http\Request;

class BackendEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function datatables()
    {
        return datatables ( Employee::all())->toJson();
    }


     public function index(Request $request)
    {
        $divition = Divition::all();
        $position = Position::all();
        $cabang = Cabang::all();

        $employee = Employee::with(['divition','position','cabang'])->get();
        // var_dump($category);
        if($request->ajax()){
            return datatables()->of($employee)
            ->addcolumn('action',function($data){
                $button = '<a href="javascript:void(0)" data-toggle="tootip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('backend.employee.home',compact('employee','divition','position','cabang'));

        // return view('backend.employee.home',compact('employee','divition','position','cabang'));
        // return json_encode($employee, JSON_PRETTY_PRINT);
        // return $employee;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;

        $post   =   Employee::updateOrCreate(['id' => $id],
                    [
                        'name' => $request->name,
                        'divition_id' => $request->divition_id,
                        'position_id' => $request->position_id,
                        'cabang_id' => $request->cabang_id,
                        'picture' => $request->picture,

                    ]);

        return response()->json($post);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Employee::with(['divition','position','cabang'])->where($where)->first();

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Employee::where('id',$id)->delete();

        return response()->json($post);
    }
}