@extends('layouts.main')

@section('content')
<?php	
	session_start();
	
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Timer Page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    this is recognition page
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
