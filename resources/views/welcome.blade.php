<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ICARE</title>
        <style>
                h1{
                    font-size: 80px;
                    margin: 10px;
                    font-family: "Lucida Fax";
                    color: #354a32;
                }
                body{
                    padding-top: 100px;
                    background-color: #FEFFDE;
                }
                p{
                    font-size: 25px;
                }
                button{
                    font-family: 'ZCOOL XiaoWei' ;
                    font-size: 20px;
                    color: white;
                    border-radius: 15px;
                    border: none;
                    padding: 10px 70px;
                    background-color: black;
                    align-items: center;
                }
                button:hover{
                    background-color: #77a66f;
                }
                img{
                    width: 300px;
                    height: 120px;
                }
                a{
                    font-size: 20px;
                    text-decoration:none;
                    float: right;
                }
                a:visited{
                    color: #094711;
                }
        </style>
    </head>

    <body>
        <center>
            <div style="height: 10vh;"></div>
            <h1>Welcome To</h1>
            <div style="height: 20vh;">
                <img src="/images/icare3.png" alt="logo">
                <p><i>Computer Vision Syndrome Recognition For Sitting Posture<i><p>
            </div>
            <button onclick="location.href='/register'"><i>{{ __('Register Now') }}</button>
            <button onclick="location.href='/login'"><i>{{ __('Log In') }}</button>
    </body>
</html>




        


