@extends('layouts.app')

@section('content')
    <form action="{{route('managers.search')}}" method="get">
    <td><input type="text" name="search"></td>
    <td><input type="submit" value="Search"></td><br>
    <table class="table">
        <a href="{{route('managers.create')}}" class="btn btn-outline-primary">CREATE</a>
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        @foreach($dataSearch as $key => $people)
            <tbody>
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$people->name}}</td>
                <td>{{$people->phone}}</td>
                <td>{{$people->email}}</td>
                <td><a href="{{route('managers.edit',$people->id)}}" class="btn btn-light">EDIT</a></td>
                <td><a href="{{route('managers.delete',$people->id)}}" class="btn btn-light">DELETE</a></td>
            </tr>
            </tbody>
        @endforeach
    </table>
    {{$dataSearch->links()}}
    </form>
@endsection
