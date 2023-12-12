@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
              @include('messages')
                <div class="card shadow-lg ">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="{{ route('login.post') }}" method="post">
                            @csrf
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
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-sm" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
