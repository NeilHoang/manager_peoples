@extends('layouts.app')

@section('content')
    <body>
    <form action="{{route('managers.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control"
                   placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control"
                   placeholder="enter email" name="phone">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control"
                   placeholder="enter city" name="email">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{route('managers.index')}}" class="btn btn-outline-dark">Back</a>
    </form>
    </body>
@endsection
