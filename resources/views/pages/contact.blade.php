@extends('layouts.layout')

@section('content')

    <div class="container">

        <h1>Contact</h1>
        <p class="lead">Please fill up following to contact us:</p>

    </div>

    <form action="?contact" method="post">

        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Full Name</label>
            <input name="name" type="name" class="form-control" id="name" placeholder="FirstName Surname">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="example@email.com">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" type="text" class="form-control" id="message" rows="3" placeholder="Enter message here."></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>

    </form>

@endsection
