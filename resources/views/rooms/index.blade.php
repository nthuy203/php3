@extends('layouts.layout')
@section('content')
    <a href="{{route('add')}}" class="btn btn-warning" role="button">Thêm mới</a>
    <div class="col-md-5 col-lg-3 order-3 order-md-2">
        <div class="xp-searchbar">
            <form>
                <div class="input-group">
                    <input type="search" class="form-control"
                           placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn" type="submit" id="button-addon2">Go
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if (Session::has('success'))
        <span class="btn btn-light" >{{ Session::get('success') }}</span>
    @endif
    @if (Session::has('error'))
       <span class="btn btn-danger"> {{ Session::get('error') }}</span>
    @endif
   <table class="table table-hover">
       <tr class="table-dark">
           <td>Mã Phòng</td>
           <td>Tên Phòng</td>
           <td>Ảnh</td>
           <td>Giá</td>
           <td>Mô tả	</td>
           <td>Trạng thái</td>
           <td>Loại phòng</td>
           <td>Ngày tạo</td>
           <td>Chức Năng</td>
       </tr>
       <tbody>
       @foreach ($rooms as $item )
           <tr>
               <td>{{ $item->id }}</td>
               <td>{{ $item->name }}</td>
               <td>{{ $item->image }}</td>
               <td>{{ $item->price }}</td>
               <td>{{ $item->description }}</td>
               <td>{{ $item->status }}</td>
               <td>{{ $item->created_at }}</td>
               <td>{{ $item->name }}</td>
               <td>
                   <a href="{{route('edit',['id'=>$item->id])}}" type="button" class="btn btn-success" >Cập nhật</a>
                   <a href="{{route('delete',['id'=>$item->id])}}" type="button" class="btn btn-danger" >Xóa</a>
               </td>

           </tr>
       @endforeach

       </tbody>
   </table>

@endsection
