@extends('layouts.nav')

<title>About</title>
    <style>
        p{
            border-radius: 25px;
            margin: 10px 150px;
            text-align: justify;
            font-family: Goudy Old Style;
            font-size: 25px;
        }
        .effects{
            margin: 10px 150px;
            text-align: justify;
        }
        .card-header{
            font-family:Mongolian;
            margin: 10px;
            text-align:center;
            font-size: 30px;
            color:#104f15;
        }
        #pic1{
            width: 400px;
            height: 250px;
            transform: translateX(300px);
        }
        #pic2{
            width: 400px;
            height: 250px;
            transform: translateX(350px);
        }
        .a-title{
            margin: 10px 150px;
            font-size: 20px;
            font-weight: 600;
        }
    </style>

    @section('content') 
    <!-- <h2 class="header">What we do?</h2> -->
    <div>
        <article class="article">
            <article class="para1">
                <div class="a-title">Our system</div>
                <p>This is a system that recognize the <b>sitting posture</b> of the user to avoid back pain and strains as sitting for a long period
                which will leads to many <b>health issues</b> such as spine misaligned, back muscle pain and strains. The project will help to 
                <b>remind users to keep in a correct sitting posture by sending alert notifications</b> 
                and some exercise videos to remind users to refresh their body after a long period of sitting. 
                Once the wrong sitting posture is recognized the system will also send alert notifications too.
                </p>
            </article>
            <article>
                <div class="a-title">What is computer vision syndrome?</div>
                <p>Computer vision syndrome also known as digital eye strain where this condition can cause specific vision and eye problems such as eye strain, eye fatigue, dry eyes, neck pain, shoulder pain and blurry vision. 
                This condition is caused by high concentration on digital screen of computers or e-readers for a prolonged time.
                Circumstances such as poor posture while sitting and <b>incorrect viewing distance or angle</b> will also risk the eyes to have computer vision syndrome.
                Posture recognition is the <b>ability of the computer to detect movement or alignment of the body</b>. 
                This system will raise alert to the user to keep in a good sitting posture and record the poor sitting posture as the a record for the user to refer.
                </p>
            </article>
            <article>
                <div class="a-title">How to sit correctly?</div>
                <p>Figures below are the examples of good sitting posture and poor sitting posture. A good sitting posture require sitting up straight 
                    and allow your shoulders and neck to relax into a natural position. Feets need to be flat on the surface while knee should be slightly lower than your hips.
                    Keep distance of your monitor approximately an arm's length away and ensure the top of the screen is level with your eyes and now you are in a good sitting posture!
                </p>
            </article>
            <img id="pic1" src="/images/pic1.png" alt="Correct sitting">
            <img id="pic2" src="/images/pic2.png" alt="Incorrect sitting">
            <article>
                <div class="a-title">Effects of Poor Sitting Posture</div>
                <div class="effects">
                    <li>Back, Neck, Shoulder Pain: Poor sitting posture can result in muscle tension and stiffness.</li>
                    <li>Poor Blood Circulation: When you are having poor sitting posture your body will be kept from neccessary blood circulation required.</li>
                    <li>Poor Digestion: When you are slouching adominal organ including the disgestive track will be compressed and affect your ability to digest food.</li>
                    <li>Spine Misaligned: Poor posture will give a negative impact to your spine and cause it misaligned.</li>
                </div>
            </article>
        </article>
        
        
        <p style="font-family: style; color: #1e4729; font-weight: bold; text-align: center;">
            Thank you for joining us and have a nice day!
        </p>
        
        
    </div>
@endsection
