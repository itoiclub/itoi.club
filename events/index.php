<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<head>
    <title>
        Events
    </title>
    <script>
            function code(){
                window.location = "register.php?event=CodeHunt";
            }
            function quiz(){
                window.location = "register.php?event=QuizMania";
            }
        window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
}
</script>
    <style>
        body {
            margin: 0px;
            background: linear-gradient(to right, #3F5EFB, #FC466B);
        }

        .signup {
            border: 1px solid gainsboro;
            background: #ffffff;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 4px;
            cursor: pointer;
            outline: none;
            color: black;
            text-decoration: none;
            font-family: google;
            font-size: 18px;
        }

        .signup:hover {
            border: 1px solid #00cc66;
            color: white;
            box-shadow: 0 4px 28px 0 rgba(0, 0, 0, 0.1);
            background: #00cc66;
        }

        .topbar {
            width: 100%;
            box-sizing: border-box;
            border: none;
            font-size: 20px;
            background-color: rgba(255, 255, 255, 1);
            background-image: url('searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 25px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
            text-align: center;
            font-family: google sans;
            color: black;
            padding-top: 10px;
            position: fixed;
            left: 50%;
            transform: translate(-50%, 0);

        }

        input[type=button] {
            font-family: google sans;
            background: #2b5ce3;
            border: 2px solid #2b5ce3;
            width: 40%;
            height: auto;
            color: white;
            font-size: 25px;
            border-radius: 100px;
            transition: 0.2s ease;
            outline: NONE;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            background-color: white;
            width: 85%;
            height: auto;
            font-family: google sans;
            color: dimgrey;
            border-radius: 10px;
            
        }

        img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
            text-align: left;
        }

    </style>

    <script>
        function goBack() {
            window.history.back();
        }

    </script>



</head>

<body>
    <div class="topbar">
        <div class="mat" style="display:block;"><a href="../"><i class="material-icons" style="color:black;cursor:pointer;padding-left:15px;float:left;font-size:30px;">arrow_back</i></a></div>Events
    </div><br><br><br><br><br><center><a style="text-decoration:none" href="../status/index.php"> <div class="card" style="width:80%; height:20px; padding:5px;">Check Payment Status</div></a>
    
    <br><br>
    <form>
        <div class="card">
            <img src="/images/codehunt.png" alt="Code Hunt" style="width:100%">
            <div class="container"><br>
                <font size="5">Code Hunt</font><br><br>
               One Round with 3 questions of simple, moderate and hard level.<br>
                1. This round is conducted differently for all the years. The questions for the first, second and third year will be different.<br>
                2.The selection criteria is dependent on passing all the test cases which are to be predefined.<br>
                3. The fastest, best and the simplest generic code is selected in such case if the actual test cases got passed by everyone<br>
                4. Event will be conducted on hacker rank.<br><b></b><br>
                <font size="4">Date: 19 FEB <br>Time: 5:30 to 8:00 PM<br>
                Fees: Rs. 30<br>
                Late entry for girls<br>
                Venue 34-213, 33-301<br>
                
                </font><br><br><center><input type="button" onclick="code()" value="APPLY"></center>
                <br>

            </div>
        </div><br><br><br><br>
        <div class="card">
            <img src="/images/quizmania.png" alt="Quiz Mania" style="width:100%">
            <div class="container"><br>
                <font size="5">Quiz Mania</font><br><br>
               Two Rounds in total.<br>
                1.First Round: Group and buzzer round. This round contains some generic questions of programming, recognizable logos, tag lines of famous brands, etc.<br>
                2.Second Round: This round is totally individual and based on questions totally related to programming that are asked during placements. <br><br>
                <font size="4">Date: 19 FEB <br>Time: 5:30 to 8:00 PM<br>
                Fees: Rs. 30 (1 Person), 50 (2 Persons)<br>
                Late entry for girls<br>
                Venue: 14-101L
                </font><br><br><center><input type="button" onclick="quiz()" value="APPLY"></center>
                <br>
            </div>
            </div>
        
            </form>
        <br><br>
    </center>
</body>

</html>
