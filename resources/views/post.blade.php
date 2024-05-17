@extends('layout')
@section('title','Posts')
    @section('content')
     <div class="container">

        
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">description</th>

                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                @if(Auth::user()->id == $post->user_id)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        

                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
       
        

    </div>
@endsection

