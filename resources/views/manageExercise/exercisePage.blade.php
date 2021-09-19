@extends('layouts.main')

@section('content')
<?php	
	session_start();
	
?>
<html>
    <style>
        .card-header{
            font-family:forte;
            text-align:center;
            font-size: 30px;
            color:#104f15;
        }
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Exercise Page') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<body>
<center>
<iframe width="420" height="345" src="https://www.youtube.com/embed/2VuLBYrgG94" alt="How to relieve back pain"></iframe>
<iframe width="420" height="345" src="https://www.youtube.com/embed/R69mbvbEdUY" alt="How to relieve shoulder pain"></iframe>
<iframe width="420" height="345" src="https://www.youtube.com/embed/dYOF7xqzQgA" alt="Tips for sitting too long"></iframe>
<iframe width="420" height="345" src="https://www.youtube.com/embed/KPWBUYpsWSY" alt="4 office posture exercises"></iframe>
<iframe width="420" height="345" src="https://www.youtube.com/embed/2uGTQzgfUnk" alt="7 exercise for sitting all day"></iframe>
<iframe width="420" height="345" src="https://www.youtube.com/embed/JLOq-DRG0Zw" alt="10 strecthes and exercise"></iframe>
</center>
</body>
</html>
@endsection
