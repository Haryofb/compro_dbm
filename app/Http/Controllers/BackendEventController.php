<?php

namespace App\Http\Controllers;

use App\Event;
// use App\Divition;
// use App\Position;
// use App\Cabang;

use Illuminate\Http\Request;

class BackendEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function datatables()
    {
        return datatables ( Event::all())->toJson();
    }


     public function index(Request $request)
    {
        // $divition = Divition::all();
        // $position = Position::all();
        // $cabang = Cabang::all();

        $event = Event::all();
        // var_dump($category);
        if($request->ajax()){
            return datatables()->of($event)
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

        return view('backend.event.home',compact('event'));

        // return view('backend.Event.home',compact('Event','divition','position','cabang'));
        // return json_encode($Event, JSON_PRETTY_PRINT);
        // return $Event;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;

        $post   =   Event::updateOrCreate(['id' => $id],
                    [
                        'name' => $request->name,
                        'description' => $request->description,
                        'date' => $request->date,
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
        $post  = Event::where($where)->first();

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
        $post = Event::where('id',$id)->delete();

        return response()->json($post);
    }
}
