@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-title"><h1>Contact</h1></div>
            <div class="card-body">
                <form role="form" id="contact-form" class="contact-form" method="POST"
                      action="{{route('contact.store')}}">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="FirstName Surname">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email"
                               placeholder="example@email.com">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" type="text" class="form-control" id="message"
                                  placeholder="Enter message here."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Submit</button>

                </form>
            </div>
        </div>
    </div>



@endsection
