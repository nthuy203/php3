<?php

namespace App\Http\Controllers;
use App\Http\Requests\RoomRequest;
use App\Models\RoomModel;
use App\Models\TypeRoomModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        $rooms = RoomModel::all();
        return view('rooms.index',compact('rooms'));
    }
    public function add(RoomRequest $request){
        $type = TypeRoomModel::all();
        $rooms = RoomModel::all();
        if($request->isMethod('post')) {

            $rooms = new RoomModel();
            $rooms->name = $request->name;
            $rooms->image = $request->image;
            if($request->hasfile('image') && $request->file('image')->isValid()){

                $rooms->image = uploadFile('hinh',$request->file('image'));
            }
            $rooms->price = $request->price;
            $rooms->description	 = $request->description;
            $rooms->room_type = $request->room_type;
            $rooms->status = $request->status;


            $rooms->save();
            //tạo thông báo

            if($rooms->save()){
                session::flash('success','Thêm  phòng thành công');
                return redirect()->route('Room');


            }else {
                session::flash('error', 'Lỗi thêm  phòng');
            }

        }

        return view('rooms.add',compact('type','rooms'));



    }
    public function edit( Request $request , $id){
        $type = TypeRoomModel::all();
        $rooms = RoomModel::find($id);
        if( $request->isMethod('post')){
            $rooms->name = $request->name;
            if($request->hasfile('image') && $request->file('image')->isValid()){

                $rooms->image = uploadFile('hinh',$request->file('image'));
            }else{
                unset($rooms['image']);
            }
            $rooms->description = $request->description;
            $rooms->room_type = $request->room_type;
            $rooms->status = $request->status;

            $rooms->save();
            if($rooms->save()){

                session::flash('success','Cập nhật phòng thành công');
                return redirect()->route('Room');
            }else{
                session::flash('error','Lỗi cập nhật phòng');
            }

        }
        return view('rooms.edit',compact('rooms','type'));

}
    public function delete($id){


        if($id){
            $rooms = RoomModel::where('id',$id)->delete();

            if($rooms){
                session::flash('success','Xóa thanh cong');
                return redirect()->route('Room');
            }
            else{
                session::flash('error','Xóa lỗi');
            }
        }

        return redirect()->route('Room');


    }
}
