@extends('layouts.nav')

@section('content')
<?php	
	session_start();
	
?>
<style>
    .content{
        margin: 10px 100px;
    }
    .card{
        background-color: #7C9473 ;
        color:white;
        transform: translateX(400px) translateY(100px);
    }
    .img{
        width: 200px;
        height:200px;
    }
</style>
<title>Home</title>
<body>
<h2 class="header">Welcome back  {{ Auth::user()->name }}</h2>
<!-- <div class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class=".col-xs-12 .col-sm-6 .col-lg-8">
            <div class="card shadow">
            <div class="navbar-brand" style="font-size: 40px; color:white; ">Welcome back  {{ Auth::user()->name }}</div><br> 
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div> -->
</body>
@endsection
