<!--https://bootstrapious.com/p/bootstrap-sidebar-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Changed Laravel to DCRSMS --> 
    <title>{{ config('app.name', 'ICARE') }}</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


    <style>
        .wrapper {
            display: flex;
            align-items: stretch; /*height of navbar influenced by content*/
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
        /*Media query for customizing sidebar behaviour for smaller screens*/
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }

        /*Additional styling*/
        body {
            font-family: 'Poppins', sans-serif;
            background: #FEFFDE;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        #sidebar {
            /* don't forget to add all the previously mentioned styles here too */
            background: #7C9473;/*7386D5*/
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar .sidebar-header { /*sidebar menu title*/
            padding: 20px;
            background: #CFDAC8;/*6d7fcc*/
            color:darkolivegreen;
            text-align: center;
            font-family: "Arcena";
        }

        #sidebar ul.components { /*underline*/
            padding: 20px 0;
            border-bottom: 1px solid #7C9473;/*47748b*/
        }

        #sidebar ul p { /*sidebar name*/
            color: #fff;
            padding: 10px;
            font-family: "Arcena";
            font-size: 30px;
        }

        #sidebar ul li a {/*sidebar content width*/
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {/*sidebar content hover*/
            color: #C7CFB7;/*7386D5*/
            background: #fff;
        }

        #sidebar ul li.active > a, a[aria-expanded="true"] { /*current active page*/
            color: #fff;
            background: #ADC2A9;/*6d7fcc*/
        }

        ul ul a { /*dropdown content*/
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #E8EAE6;/*6d7fcc*/
            color:darkolivegreen;
        }

        #content, h2{
            margin: 10px;
            font-family: "Lucida Fax";
            color: #52734D;
        }
        
        h4{
            text-align: left;
            font-family: 'ZCOOL XiaoWei' ;
        }

        .header{
            font-size: 40px;
        }
        
        .main-btn{
            font-family: 'ZCOOL XiaoWei' ;
            font-size: 20px;
            color: white;
            border-radius: 35px;
            border: none;
            padding: 10px 70px;
            background-color: black;
            /* background-color: #91C788; */
            align-items: center;
        }
        .main-btn:hover{
            background-color: #77a66f;
        }

        .shadow {
            -moz-box-shadow:    3px 3px 5px 6px #ccc;
            -webkit-box-shadow: 3px 3px 5px 6px #ccc;
            box-shadow:         3px 3px 5px 6px #ccc;
        }
        
        .caption{
            font-size: 15px; 
            color: #263624; 
            margin:10px;
        }
    </style>
</head>
        
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4>Hello </h4>
                <img id="logo" src="images/profile/{{ Auth::user()->picture }}" name="picture" alt="profile picture" width="100" height="100">
            </div>
    
            <ul class="list-unstyled components">
                <h3 id="username" style="text-align: center">{{ Auth::user()->name }}</h3>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a> <!--data-toggle for the dropdown effect; droptown-toggle: arrow icon-->
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <!-- <li>
                            <a href="#">Profile</a>
                        </li> -->
                        <li>
                            <a href="home">Home</a>
                        </li>
                        <li>
                        <a href="{{route('logout') }}" onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit(); alert('You have logout!!');">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Exercise</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="exercise">Exercise & Stretching</a>
                        </li>
                        <li>
                            <a href="correctSitting">Correct Sitting Posture</a>
                        </li>
                        <li>
                            <a href="tips">Tips</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="recognition">Recognition</a>
                </li>
                <li>
                    <a href="timer">Timer</a>
                </li>
                <li>
                    <a href="about">About</a>
                </li>
            </ul>
        </nav>
        
        <!--SIDE TOGGLE BUTTON-->
        <br>
        <div id="content">
        <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light"> -->
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn" style="background-color: #7C9473;color: white;" >
                    <i class="fas fa-align-left"></i><!--Menu button icon-->
                </button> @yield('content')
            </div>
        </div>
    </div>
    
    

    <!--Script for the sidebar animation -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    
</body>
</html>