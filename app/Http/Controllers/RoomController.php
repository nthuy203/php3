<?php

namespace App\Http\Controllers;
use App\Http\Requests\RoomRequest;

use App\Models\RoomModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        $rooms = DB::table('rooms')->get();
        return view('rooms.index',compact('rooms'));
    }
    public function add(RoomRequest $request){

        if($request->isMethod('post')) {

            $rooms = new RoomModel();
            $rooms->name = $request->name;
            $rooms->image = $request->image;
            $rooms->price = $request->price;
            $rooms->description	 = $request->description;
            $rooms->status = $request->status;
            $rooms->type_room = $request->type_room;

            $rooms->save();
            //tạo thông báo

            if($rooms->save()){
                session::flash('success','Thêm  phòng thành công');
                return redirect()->route('index');


            }else {
                session::flash('error', 'Lỗi thêm  phòng');
            }

        }


        return view('rooms.add');


    }
}
