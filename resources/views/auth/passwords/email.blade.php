@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Forgot password?</h1>
                <form action="{{ route('password.email') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="email" class="label">Email Adress</label>
                        <p class="control">
                            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                        </p>
                        @if($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <button class="button is-success is-outlined is-fullwidth m-t-30">Get Reset Link</button>
                </form>
            </div><!-- end of card content -->
        </div> <!-- end of card -->
        <p class="has-text-centered"><a href="{{ route('login') }}" class="is-muted"><span class="icon"><i class="fa fa-caret-left"></i></span>Back to Login</a></p>
    </div>
</div>

@endsection
