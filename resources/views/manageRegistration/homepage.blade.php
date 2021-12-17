@extends('layouts.nav')

@section('content')
<?php	
	session_start();
	
?>
<style>
    .content{
        transform: translateX(30px);
    }
    .card{
        background-color: #7C9473 ;
        color:white;
        transform: translateX(430px) translateY(50px);
    }
    .img{
        width: 200px;
        height:200px;
    }
    button{
        font-family: "Lucida Fax";
        font-size: 15px;
        color: white;
        border: none;
        align-items: center;
        background-color: #597854;
        border-radius: 5px;
    }
    button:hover{
        background-color: #677a5f;
    }
    ::-webkit-input-placeholder {
        color:white;
    }
    input{
        color:white;
    }
</style>
<title>Home</title>
<body>
<p>@if(session()->get('success'))
      {{ session()->get('success') }}  
<br></p>
@endif
<h2 class="header" style="transform: translateX(650px);">Home Page</h2>
<!-- <img id="logo" src="/images/icare2.png" alt="logo" width="150" height="150" style="transform: translateX(700px);"> -->
<div class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class=".col-xs-12 .col-sm-6 .col-lg-8">
            <div class="card shadow">
            <div class="navbar-brand" style="font-size: 40px; color:white; text-align:center; "> Welcome Back  To ICARE</div><br> 
                <div class="card-header">{{ __('User Profile') }}</div>
                    <div class="card-body">
                        <table>
                            <tr colspan="3">
                                <form action="/updateName" method="POST">
                                    @csrf
                                    <td>Username:</td>
                                    <td><input type="text" name="name" value="{{ Auth::user()->name }}" style="border:none;;background-color:#7C9473;"></td>
                                    <td><button>Edit Name</button></td>
                                </form>
                            </tr>
                            <tr colspan="3">
                                <form action="/updatePic" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <td>Profile Picture</td>
                                    <td><input type="file" name="picture" id="picture" required></td>
                                    <td><button>Upload Image</button></td>
                                </form>
                            </tr>
                            <tr colspan="3">
                                <td>Email</td>
                                <td>:{{ Auth::user()->email }}</td>
                                <td><button onclick="location.href='/deleteAccount'">Delete Account</button></td>
                            </tr>
                            <tr colspan="3">
                                <td>Password</td>
                                <td>:Top Secret</td>
                                <td><button onclick="location.href='/password/reset'">Change Password</button></td>
                            </tr>
                        </table>
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
