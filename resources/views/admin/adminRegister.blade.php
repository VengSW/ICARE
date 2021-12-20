<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration Page</title>
    
</head>
<body>
    <center>
    <form method="post" action="adminCreate">
        @csrf
        <div class="col-md-6">
            <input id="adminname" type="text" class="form-control @error('username') is-invalid @enderror" name="adminname" value="{{ old('adminname') }}" required autocomplete="adminname" autofocus placeholder="Username">
            
            @error('adminname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!--PASSWORD SLOT-->
        <div class="col-md-6">
            <input id="adminpassword" type="password" class="form-control @error('password') is-invalid @enderror" name="adminpassword" required autocomplete="new-password" placeholder="Password">

            @error('adminpassword')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary shadow">
                    {{ __('Register as Admin') }}
                </button>
            </div>
        </div>
    </form>
</center>
</body>
</html>