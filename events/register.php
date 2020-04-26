
        <html>

<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

        <script>

function validate(){

var err=0;

var name=document.getElementById('name').value;

var contact=document.getElementById('contact').value;

var email=document.getElementById('email').value;

var regno=document.getElementById('regno').value;

var p1 = /^[A-Za-z\s']+$/g;

var p2 = /^[0-9]+$/g;

var p3 = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;

var p4 = /^[0-9]+$/g;

var r1 = p1.test(name);

var r2 = p2.test(contact);

var r3 = p3.test(email);

var r4 = p4.test(regno);

var a="";



if(r1==false){

    err++;

    a = a+"\nInvalid Name";

}

if(r2==false){

    err++;

    a = a + "\nInvalid Contact Number";

}

if(r3==false){

    err++;

    a = a+"\nInvalid Email";

}

if(r4==false){

    err++;

    a = a+"\nInvalid Registration Number";

}



if(err>0){

    alert(a);
    document.getElementById('error').value="1";
} 



}


</script>

        

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
    
    

.fa {
             padding: 5px;
             font-size: 20px;
             width: 20px;
             text-align: center;
             text-decoration: none;
             margin: 5px 5px;
             border-radius: 50%;
            }
            .fa-facebook {
            background: #3B5998;
            color: white;
            
}
.fa-facebook:hover {
background: black;
color: white;

}
.fa-google {
background: #dd4b39;
color: white;
}
.fa-google:hover {
background: black;
color: #dd4b39 ;

}
.fa-linkedin {
background: #007bb5;
color: white;
}
.fa-linkedin:hover {
background: black;
color: yellow ;

}
.fa-instagram {
background: #125688;
color: white;
}
.fa-instagram:hover {
background: black;
color: rgb(6, 228, 6) ;

}

        body,html{

            
            
            background-attachment: fixed;

            background-size: cover;

            background-repeat: no-repeat;

            background-position: center;

                 margin:0;

            }

        @font-face{

                src : url('../fonts/google/google_sans.ttf');

                font-family: google_sans;

            }

        @font-face{

                src : url('fonts/trajan/trajan.ttf');

                font-family: trajan;

            }

        @media screen and (max-width: 640px){
            .mat{
                display:block;
            }

            body,html{

background-color: silver;

background-attachment: fixed;

background-size: cover;

background-repeat: no-repeat;

background-position:center;

 margin:0;

}

            input[type=text],input[type=tel],input[type=email],input[type=number],select,input[type=radio],.btn{

                padding-left:30px;

                padding-right:30px;

                padding-top:10px;

                padding-bottom:10px;

                outline:none;

                font-size:20px;

                border-radius:25px;

                text-align:center;

                border:none;

                font-family:google_sans;
                width: 60%;

                color:black;
                background:white;

            }
            input[type=file]{
               padding-left:30px;

                padding-right:30px;

                padding-top:10px;

                padding-bottom:10px;

                outline:none;

                font-size:20px;

                border-radius:25px;

                text-align:center;

                border:none;

                font-family:google_sans;
                width: 80%;
                 font-size: 10px;
                color:black;
                background:white; 
            }

            .girl,.boy{

                display:block;

            }

            input[type=submit]{

                border-radius:25px;

                background:white;

                padding-left:30px;

                padding-right:30px;

                padding-top:10px;

                padding-bottom:10px;

                font-family:google_sans;

                font-size:20px;

                border:none;

            }

            .line{

                display: none;

            }

            .grid-container {

                display: grid;

                grid-template-columns: auto auto;

                grid-gap: 15px;

                padding: 10px;

                width:80%;

            }

            .tiles{

                color:black;

                background-color:white;

                border-radius: 6px;

                padding-top: 40px;

                padding-bottom: 40px;

                padding-right: 5px;

                padding-left: 5px;

                font-size: 20px;

                font-family: google_sans;

                text-align: center;

            }

            .tiles:hover{

                color:white;

                background-color: crimson;

            }

        .header{    

            

            text-align: center;

            width:100%;

            position:fixed;

            left:50%;

            transform: translate(-50%, 0);

            color:black;

            background-color: rgb(255, 255, 255);

            padding-left: 0px;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;

            font-family:  google_sans;
            font-size:25px;
            

        }

        .elements{

            

            font-size: 20px;

            padding: 10px;

        }

        .content{

            width:100%;

            height:100%;

            

        }

        .card{

            width:80%;

            background-color:rgba(0,0,0,0.1);

            padding-left:20px;

            padding-right:20px;

            padding-top:10%;

            padding-bottom:10%;

            color:white;

            font-size:20px;

            font-family:google_sans;

            border-radius:10px;

        }

        .card:hover{

            background-color:rgba(0,0,0,0.4);

            transition : all 0.3s ease;

        }

        .title{

            color:white;

            font-size:55px;

            font-family:google_sans;

            margin: 5% 5%;

        }

        }

        @media screen and (min-width: 640px){
            input[type=text],input[type=tel],input[type=email],input[type=number],select,input[type=radio],.btn{

padding-left:30px;

padding-right:30px;

padding-top:10px;

padding-bottom:10px;

outline:none;

font-size:20px;

border-radius:25px;

text-align:center;

border:none;

font-family:google_sans;
width: 80%;

color:black;
background:white;
                

}
            input[type=file]{
               padding-left:30px;

                padding-right:30px;

                padding-top:10px;

                padding-bottom:10px;

                outline:none;

                font-size:20px;

                border-radius:25px;

                text-align:center;

                border:none;

                font-family:google_sans;
                width: 80%;
                 font-size: 10px;
                color:black;
                background:white; 
            }
            
            .mat,i,.material-icons{
                display:none;
            }

            .grid-container {

                display: grid;

                grid-template-columns: auto auto;

                grid-gap: 15px;

                padding: 10px;

                width:75%;

            }

            .tiles{

                background-color:white;

                border-radius: 6px;

                padding-top: 40px;

                padding-bottom: 40px;

                padding-right: 5px;

                padding-left: 5px;

                font-size: 20px;

                font-family: google_sans;

                text-align: center;

            }

            .tiles:hover{

                color:white;

                background-color: crimson;

            }

        .header{



            text-align: center;

            width:100%;

            position:fixed;

            left:50%;

            transform: translate(-50%, 0);

            color:black;

            background-color: white;

            padding: 15px;

            font-family:  google_sans;
            font-size:25px;

            

            

        }

        .elements{

            

            font-size: 40px;

            padding: 10px;

        }

        .content{

            width:100%;

            height:100%;

            background: url("images/background.svg");

            background-attachment: fixed;

            background-size: cover;

            background-repeat: no-repeat;

            background-position: center;

        }

        .card{

            width:80%;

            background-color:rgba(0,0,0,0.1);

            padding-left:20px;

            padding-right:20px;

            padding-top:5%;

            padding-bottom:5%;

            color:white;

            font-size:30px;

            font-family:google_sans;

            border-radius:10px;

        }

        

        .title{

            

            display: none;

        }

        .line{

            display: block;

        }
        body,html{

        background:url('../images/background.svg');
            
background-attachment: fixed;

background-size: cover;

background-repeat: no-repeat;

background-position: center;

     margin:0;

}

        

        }

    </style>

    <title>

        ItoI

    </title>

</head>

<body>



        <center><div class="header"><div class="mat" style="display:block;"><a href="../"><i class="material-icons" style="color:black;cursor:pointer;padding-left:15px;float:left;font-size:30px;">arrow_back</i></a></div></div></center>

        <br><br><br><br>

        

        <br>

        <div class="line" >

            <br><br><br><br>

        </div>

        <center>

            

            <form name="form" method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

            <input id=name type=text name="name" placeholder="Full name" required value=<?php if(isset($_POST['name']))echo $_POST['name']; ?>><br><br>

            <input id=contact type="tel" name="contact" placeholder="Paytm No." maxlength=10 required value=<?php if(isset($_POST['contact']))echo $_POST['contact']; ?>><br><br>

            <input id=email type="email" name="email" placeholder="Email ID" value=<?php if(isset($_POST['email']))echo $_POST['email']; ?>><br><br>

            <input id=regno type="tel" name="regno" placeholder="Registration no." maxlength=8 required value=<?php if(isset($_POST['regno']))echo $_POST['regno']; ?>><br><br>
            <select name="gender">
                <option>Female</option>
                <option>Male</option>

            </select><br><br>
                <input type="radio" value="Online"><input type="radio" value="Offline">
            <input required  id="fileid" type="file" name="uploadfile" value="Screen Shot" />


            <br><br>




      

            <input type="hidden" name="error" value="0" id=error>
            <br>

            <input class=btn onclick="validate()" type=submit name=submit value="Submit">

            

        </form>
            
            <br><br>
        <div class="card">PAYMENT INSTRUCTIONS:<br> Payment has to be done via paytm on the paytm no <b>8757813491</b>. When the payment is successful take a screen shot of the confirmation page and upload. On confirmation of your payment from our side we would approve your payment and will send you the invitation email for the event. You can also check your payment status on the payment status section on the events page. If you face any issue regarding payment you can call on the above paytm no. to clear your issues.</div>

        <br><br>

        </center>

    </center>

    

    <script>
    window.onload = () => {
let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
bannerNode.parentNode.removeChild(bannerNode);
}
    </script>
    
</body>

</html>
