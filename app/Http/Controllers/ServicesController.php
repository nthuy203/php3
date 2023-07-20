<?php

namespace App\Http\Controllers;
use App\Http\Requests\ServicesRequest;
use App\Models\ServicesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ServicesController extends Controller
{
    public function index()
    {
        $services = ServicesModel::all();
        return view('services.index', compact('services'));
    }
    public function add(ServicesRequest $request)
    {

        if ($request->isMethod('post')) {

            $services = new ServicesModel();
            $services->name = $request->name;
            $services->image = $request->image;
            $services->price = $request->price;
            if($request->hasfile('image') && $request->file('image')->isValid()){

                $services->image = uploadFile('hinh',$request->file('image'));
            }
            $services->save();
            //tạo thông báo

            if ($services->save()) {
                session::flash('success', 'Thêm dịch vụ thành công');

                return redirect()->route('services');


            } else {
                session::flash('error', 'Lỗi thêm dịch vụ');
            }

        }
        return view('services.add');
    }

        public function edit($id){
            $detail = ServicesModel::find($id);
            return view('services.edit',compact('detail'));

        }

    public function update(ServicesRequest $request , string $id){
        $services = ServicesModel::where('id',$id)->first();
        $services->name = $request->input('name');
        $services->image = $request->input('image');
        $services->price = $request->input('price');
        if($request->hasfile('image') && $request->file('image')->isValid()){

            $services->image = uploadFile('hinh',$request->file('image'));
        }else{
            unset($services['image']);
        }

        $services->save($request->all());


        if($services->update()){
            session::flash('success',' Cập nhật dịch vụ thành công');
            return redirect()->route('services');


        }else {
            session::flash('error', 'Lỗi cập nhật dịch vụ');
        }
        return view('services.edit');

    }


    public function delete( $id){


        if($id){
            $services = ServicesModel::where('id',$id)->delete();

            if($services){
                session::flash('success','Xóa thanh cong');
                return redirect()->route('services');
            }
            else{
                session::flash('error','Xóa lỗi');
            }
        }

        return redirect()->route('services');


    }


}
