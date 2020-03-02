@extends('layouts.app')

@section('content')
    <form action="{{route('managers.search')}}" method="get">
        @csrf
    <td><input type="text" name="search"></td>
    <td><input type="submit" class="btn btn-primary" value="Search"></td><br>
    <table class="table">
        <a href="{{route('managers.create')}}" class="btn btn-outline-primary">CREATE</a>
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        @foreach($peoples as $key => $people)
            <tbody>
            <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$people->name}}</td>
            <td>{{$people->phone}}</td>
            <td>{{$people->email}}</td>
{{--            <td>{{$people->city}}</td>--}}
                <td><img src="{{asset('storage/'.$people->image)}}" width="60px" height="60px"></td>
            <td><a href="{{route('managers.edit',$people->id)}}" class="btn btn-light">EDIT</a></td>
            <td><a href="{{route('managers.delete',$people->id)}}" class="btn btn-light">DELETE</a></td>
            </tr>
            </tbody>
        @endforeach
    </table>
    {{$peoples->links()}}
    </form>
@endsection
