@extends('layout')
@section('title','Admin Dashboard')
    @section('content')
        <div class="container">

            @if(Auth::user()->role=='admin')
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">role</th>
                        <th scope="col">post</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user?->name}}</td>
                            <td>{{$user?->email}}</td>
                            <td>{{$user?->role}}</td>
                            <td><a href="{{ route('show' )}}" class="btn btn-primary able" tabindex="-1" role="button" aria-abled="true">Show Post</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                
            @endif

            @if(Auth::user()->role=='user')
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">role</th>
                        <th scope="col">post</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($user as $post)
                        <tr>
                            <td>{{$user?->name}}</td>
                            <td>{{$user?->email}}</td>
                            <td>{{$user?->role}}</td>
                            <td>{{$posts?->title}}</td>
                            <td>{{$posts?->description}}</td>
                            <td><a href="{{ route('show' )}}" class="btn btn-primary disable" tabindex="-1" role="button" aria-disabled="true">Show Post</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
            @endif

        </div>
    @endsection

