@extends('layouts.app')

@section('content')
    <body>
    <form action="{{route('managers.update',$peoples->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control"
                   placeholder="Enter name" name="name" value="{{$peoples->name}}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control"
                   placeholder="enter email" name="phone" value="{{$peoples->phone}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control"
                   placeholder="enter city" name="email" value="{{$peoples->email}}">
        </div>
        <label>Image</label>
        <input type="text" class="form-control"
               placeholder="enter city" name="image" value="{{$peoples->image}}" width="100px" height="100px"> =>
        <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </form>
    </body>
@endsection
