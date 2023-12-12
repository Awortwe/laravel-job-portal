@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Looking for a job?</h1>
                <h3>Please create an account</h3>
                <img src="{{ asset('images/register.jpg') }}" style="margin-left: 70px"
                alt="" width="150px">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form action="{{ route('store.seeker') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                                @error('name')
                                    <span class="text-danger" style="font-size: 10px">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                                @error('email')
                                <span class="text-danger" style="font-size: 10px">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')
                                <span class="text-danger" style="font-size: 10px">{{ $message }}</span>
                            @enderror
                            </div><br>
                            <div class="form-group text-center ">
                                <button class="btn btn-primary btn-sm" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
