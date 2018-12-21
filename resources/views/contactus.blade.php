@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .invalid-feedback {
            display: block;
        }
    </style>

</head>
<body>
<div class="container">
    <h1>Contact Us</h1>
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="{{route('contact.store')}}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" name="name">
                    @if($errors->has('name'))
                        <small class="form-tect invalid-feedback">{{$errors->first('name')}}}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email Address:</label>
                    <input type="text" class="form-control" name="email">
                    @if($errors->has('email'))
                        <small class="form-tect invalid-feedback">{{$errors->first('email')}}}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label>Message:</label>
                    <textarea name="message" class="form-control"></textarea>
                    @if($errors->has('message'))
                        <small class="form-tect invalid-feedback">{{$errors->first('message')}}}</small>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>

</div>
</body>
</html>
@endsection