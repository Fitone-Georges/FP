@extends('layout')
@section('title','Admin Dashboard')
    @section('content')
        <div class="container">


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
        </div>
    @endsection
