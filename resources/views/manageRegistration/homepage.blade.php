@extends('layouts.main')

@section('content')
<?php	
	session_start();
	
?>
<title>Home</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    this is home page
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
