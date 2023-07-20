@extends('layouts.layout')
@section('content')
    <form action="{{route('edit_customers',['id'=>$customer->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" value="{{$customer->name}}" class="form-control" name="name" placeholder="Nhập tên của bạn ...">
                        @error('name')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="form-label">Ảnh:</label>
                        <img id="image_preview" src="{{asset('storage/'.$customer->image)}}" alt="Product image" style="max-width:100px;" >
                        <input type="file" accept="image/" id="image" name="image"   class="@error('image') is-invalid @enderror" >
                        @error('image')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date"  value="{{$customer->birth}}" class="form-control" name="birth">
                        @error('birth')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Giới tính</label> <br>
                        <select name="gender"  value="{{$customer->gender}}" class="form-select" >

                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </div>
                    @error('gender')
                    <span class="text-danger"> {{$message}} <br> </span>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text"  value="{{$customer->address}}" class="form-control" name="address" placeholder="Nhập địa chỉ của bạn ...">
                        @error('address')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Email:</label>
                        <input type="email"  value="{{$customer->email}}" class="form-control" name="email" placeholder="Nhập email ....">
                    </div>
                    @error('email')
                    <span class="text-danger"> {{$message}} <br> </span>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-3">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Số ĐT</label>
                        <input type="number"  value="{{$customer->phone}}" class="form-control" name="phone" placeholder="Nhập tên của bạn ...">
                        @error('phone')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text"  value="{{$customer->username}}" class="form-control" name="username">
                        @error('username')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password"  value="{{$customer->password}}" class="form-control" name="password">
                        @error('password')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
            </div>





            <button type="submit" class="btn btn-success">Cập nhật</button> </div>
    </form>
@endsection
