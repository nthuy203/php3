@extends('layouts.layout')
@section('content')
    <form action="{{route('update_services',['id'=>$detail->id])}}" method="POST"   enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="form-label">Tên dịch vụ:</label>
            <input type="text" class="form-control" name="name" value="{{$detail->name}}"  placeholder="Nhập tên ....">
        </div>
        @error('name')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror

        <div class="form-group">
            <label class="form-label">Ảnh:</label>
            <img id="image_preview" src="{{asset('storage/'.$detail->image)}}" alt="Product image" style="max-width:100px;" >
            <input type="file" accept="image/" id="image" name="image"   class="@error('image') is-invalid @enderror" > <br>
        </div>
        @error('image')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror

        <div class="form-group">
            <label class="form-label">Giá dịch vụ:</label>
            <input type="text" class="form-control" name="price" value="{{$detail->price}}"  placeholder="Nhập tên ....">
        </div>
        @error('price')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
