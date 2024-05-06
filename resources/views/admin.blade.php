@extends('layout')
@section('title','Admin Dashboard')
    @section('content')
        <div class="container">

            @if(Auth::user()->role=='admin')
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">named</th>
                        <th scope="col">email</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user?->name}}</td>
                            <td>{{$user?->email}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h1>back</h1>
            @endif

        </div>
    @endsection
