<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ICARE</title>
        <style>
                h1{
                    margin: 10px;
                    font-family: "Lucida Fax";
                    color: #52734D;
                    font-size: 50px;
                }
                body{
                    padding-top: 100px;
                    background-color: #FEFFDE;
                }
                div{
                    font-size: 30px;
                }
                p{
                    font-size: 25px;
                }
                button{
                    font-family: 'ZCOOL XiaoWei' ;
                    font-size: 20px;
                    color: white;
                    border-radius: 35px;
                    border: none;
                    padding: 10px 70px;
                    background-color: #91C788;
                    align-items: center;
                }
                button:hover{
                    background-color: #77a66f;
                }
                
                .shadow {
                    -moz-box-shadow:    3px 3px 5px 6px #ccc;
                    -webkit-box-shadow: 3px 3px 5px 6px #ccc;
                    box-shadow:         3px 3px 5px 6px #ccc;
                }

                /* .admin{
                    margin-right: 0;
                } */
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
    <div class="admin"><a href="/adminLogin">Admin</a></div>
        <center>
            <div style="height: 10vh;"></div>
            <h1>Welcome to</h1>
            <div style="height: 20vh;">
                ICARE
                <p><i>Computer Vision Syndrome Recognition For Sitting Posture<i><p>
                    
            </div>
            <button onclick="location.href='/register'"><i>{{ __('Register Now') }}</button>
            <button onclick="location.href='/login'"><i>{{ __('Log In') }}</button>
    </body>
</html>




        


