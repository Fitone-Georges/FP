@extends('layout')
@extends('header')
@section('title','login')
@section('content')
    <div class="container">

        <form>
            <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">example henryjohn@gmail.com.</div>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Click</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    @endsection
