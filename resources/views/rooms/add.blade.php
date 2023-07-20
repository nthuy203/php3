@extends('layouts.layout')
@section('content')
    <form action="{{route('add')}}" method="post" >
        @csrf
        <div class="form-group">
            <label class="form-label">Tên Loại Phòng:</label>
            <input type="text" class="form-control" name="name"  placeholder="Nhập tên ....">
        </div>
        @error('name')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror
        <div class="form-group">
            <label class="form-label">Tên  Phòng:</label>
            <input type="text" class="form-control" name="name"  placeholder="Nhập tên ....">
        </div>
        @error('name')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror

        <div class="form-group">
            <label class="form-label">Ảnh:</label>
            <input type="file" class="form-control" name="name"  placeholder="Nhập tên ....">
        </div>
        @error('name')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror

        <div class="form-group">
            <label class="form-label">Giá Phòng:</label>
            <input type="number" class="form-control" name="name"  placeholder="Nhập tên ....">
        </div>
        @error('name')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror

        <div class="form-group">
            <label class="form-label">Mô tả:</label>
            <input type="text" class="form-control" name="name"  placeholder="Nhập tên ....">
        </div>
        @error('name')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror

        <div class="form-group">
            <label class="form-label">Trạng thái:</label>
            <input type="text" class="form-control" name="name"  placeholder="Nhập tên ....">
        </div>
        @error('name')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror

        <div class="form-group">
            <select name="type_room" class="w-100" id="">
                    <?php
                    foreach($types as $type){
                        extract($type);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>
            </select>
        </div>
        @error('name')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
