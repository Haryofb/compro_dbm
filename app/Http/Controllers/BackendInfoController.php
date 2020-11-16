<?php

namespace App\Http\Controllers;

use App\Info;
// use App\Divition;
// use App\Position;
use App\Cabang;

use Illuminate\Http\Request;

class BackendInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function datatables()
    {
        return datatables ( Info::all())->toJson();
    }


     public function index(Request $request)
    {
        // $divition = Divition::all();
        // $position = Position::all();
        $cabang = Cabang::all();

        $info = Info::with(['cabang'])->get();
        // var_dump($category);
        if($request->ajax()){
            return datatables()->of($info)
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

        return view('backend.info.home',compact('info','cabang'));

        // return view('backend.Info.home',compact('Info','divition','position','cabang'));
        // return json_encode($Info, JSON_PRETTY_PRINT);
        // return $Info;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;

        $post   =   Info::updateOrCreate(['id' => $id],
                    [
                        'name' => $request->name,
                        'cabang_id' => $request->cabang_id,
                        'picture' => $request->picture,
                        'description' => $request->description,


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
        $post  = Info::with(['cabang'])->where($where)->first();
        // console.log($post);
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
        $post = Info::where('id',$id)->delete();

        return response()->json($post);
    }
}