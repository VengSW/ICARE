@extends('layouts.nav')

@section('content')
<?php	
	session_start();
	
?>
<style>
    .content{
        margin: 10px 100px;
    }
</style>
<title>Home</title>
<body>
<br><br>
<div class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="navbar-brand" style="font-size: 40px; color: #263624; ">Welcome back  {{ Auth::user()->name }}</div><br> 
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
    </div>
</div>
</div>
</body>
@endsection
