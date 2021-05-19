<!DOCTYPE html>
<html>
<head>
<?php
//include("auth.php");
//session_start();
  
if(!isset($_SESSION['username']) || !isset($_SESSION['userid']))
{
//echo 'active';
$mode=0;
//$mySessionName='';

}//$sname;  //sn
else
{
$mode=1;//echo 'session session time out';
}/**/
//echo $mode;
   //$status=$_SESSION['status'];
?>
<input id="session-mode-id" name="" type="hidden" value="<?php echo $mode; ?>" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>TROIKA | Authentication</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
   
<!--    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/ladda/dist/ladda-themeless.min.css" />
-->     <!--App styles 
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="vendor/sweetalert/lib/sweet-alert.css" />-->
   
   <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet"  href="styles/overlaybox.css">


<!-- Vendor scripts -->
  <script src="vendor/jquery/dist/jquery.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.js"></script>
    
    <script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
    <script src="vendor/iCheck/icheck.min.js"></script>
    <script src="vendor/peity/jquery.peity.min.js"></script>
<!--<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>
<script src="vendor/ladda/dist/spin.min.js"></script>
<script src="vendor/ladda/dist/ladda.min.js"></script>
<script src="vendor/ladda/dist/ladda.jquery.min.js"></script>
<!-- App scripts--> 
<!--<script src="vendor/sweetalert/lib/sweet-alert.min.js"></script>-->
<!--<script src="scripts/upd.js"></script>
<script src="scripts/vermin.js"></script>-->
<script src="scripts/homer.js"></script>
 <script src="vmin.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="scripts/overlaybox.js"></script>

</head>

<style>
</style>
<body class=""  style="background: rgb(244,241,241);
background: radial-gradient(circle, rgba(244,241,241,1) 5%, rgba(250,245,245,1) 27%, rgba(230,230,230,1) 59%, rgba(246,246,246,1) 100%);
" ><!--style="background-color:#FFBA75"-->
<div id="splah-top-id" style=" width:100%;position:fixed; left:0; top:0; z-index:1400;" ></div>

<!---->
<?php 
//if($mode==0)
//{
//if(!isset($_SESSION['username']) || !isset($_SESSION['userid']) ){
?>
<div id="overlay2-id" class="myOverlay2 " >
  <div id="myDialog2_box" style="width:35%;background-color:#fff; border:0px solid #fff; overflow:auto; ">
      <div class="myContainer2_box"   style="border-style:none;padding:10px;border:0px solid #fff;"><!--box-shadow:7px 7px 0 0px #999;-->
           <div style="text-align:center; color: #333;"><h2><b><span id="label-authenticate"><span></b></h2></div><!--<img src="images/troika.png" width="200" > IMG-20190214-WA0005.jpg-->

          <div id="elementContent2-id">
        <?php if($mode==0) {?>
          <div  class="header-bg" style="text-align:center; padding:10px; ">
          <h3 class="text-white" >System Timed Out!</h3><br>

<button id="submit_button" type="button"   onClick="location='login.php';"  class="btn btn-tm btn-sm  border-Radius2px button-uppercase  bg_transparent" data-style="zoom-in" style="   color:#fff;" >Login</button> 
         <!-- <a href="login.php">Click here to login</a>-->
          </div> 
      <?php } ?>

          <?php
/*       if($mode==0)//session timeout {
        echo '<h3 style="color:#F00; cursor:pointer;" onClick="location=\'login.php\';">Session Timed Out!</h3>';
      }
      else{
*/      ?>
          <?php // }?>
          </div>
          <div id="authenticate2-ajx" style=" width:100%; text-align:center; padding:0px;"></div>
      
      </div>
  </div>
</div>
<?php 
//}
?>
<!-- Simple splash screen-->
<!--<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>BELIVE - Real Time Energy Monitoring</h1><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>-->
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]

<div class="color-line"></div>-->

<!--<div class="back-link">
    <a href="index.html" class="btn btn-primary">Back to Dashboard</a>
</div>-->

<div style=" position:absolute;z-index:900;  width:100%; text-align:center; ">
    
    <div  style="  ">
    
    
    
    
        <div  style="width:100%; ">
            <div style=" z-index:1000; width:100%;border-style:none;padding:30px; border-top:0px solid #ff6501;background-color:transparent;"><!--box-shadow:0px 10px 150px #34495e;-->
             
                    <div id="troikalogo-container-id" style=" text-align:center; ">
                    <img src="images/troika.png" width="200" ><!--IMG-20190214-WA0005.jpg-->
                   </div>      
            </div>
            
            <div>
           
           


<style>
.boxpanel{
  text-align:center; border:0px solid #03F;
  
}
.boxAlign1{
  display:inline-block; border:0px solid #093; vertical-align:top; z-index:1100;}

.boxBorderOuter1{box-shadow:0 0 9px #777;margin:15px;border-radius:10px;   font-weight:  bold;
 opacity:0.95;  color: #006666; background: #ddd; border:1px solid #999; text-shadow: 1px 1px 2px #fff;
 

 
  }
.boxBorderOuter1:hover{box-shadow:0 0 6px #00cccc;transition:all 0.8s ease; color: #fff;font-weight:  bold;opacity:1.0;
   background: #666;  border:1px solid #006666;  text-shadow: 1px 1px 2px #666;       
                       
  }

.boxBorder1{
  border:0px solid #eee;  border-radius:10px;  width:250px;  height:110px;  
  padding:20px;background-color:#fff;}/*box-shadow:7px 7px 0 0px #999;   box-shadow:7px 7px 0 0px #34495e;*/
.boxBorder1:hover{/*box-shadow:7px 7px 0 0px #ff6501;opacity:1.0; cursor:pointer;opacity:1.0; transition:all 0.9s ease;*/

}


.authInputBox{
    background-color:#fff;color:#006666;text-align:left; font-size:14px;
    border-radius:3px; border:1px solid #999;width:100%;box-shadow: 0 0  4px #bbb;
}
.authInputBox:hover, authInputBox:active{
    transition:all 0.8s ease;box-shadow: 0 0  6px #00cccc;
    background-color:#fff;border:1px solid #006666; color: #006666;
    
}
.authcolor{
  color: #006666; font-weight:  bold;transition:all 0.8s ease; font-size: 14px;  
}
</style>
     <div class="row boxpanel" style="text-align:center;">
         <div id="thumnailConsole-id">
         
<!--           <div class="boxAlign" >
                  <div class="boxBorder contact-panel" onClick="location='frame.php';">
                 <img src="images/IMG-20190214-WA0001.jpg" width="131">

                    </div>
               
            </div>
            
            <div  class="boxAlign">
                    <div class="boxBorder contact-panel">
                       <img src="images/IMG-20190214-WA0003.jpg"  width="131">
                        
                    </div>
               
            </div>
-->            
         </div><!--console thumnail-->   
    </div><!--row-->      
          


         
<br>
<br>
<br>
<br>
<br><br>
         
            </div>
        </div>
        
        
   </div>
</div>




<script>


var sendajx = '<img src="images/ajax-loader-big.gif">';



var sendajxBar =  '<div >'+
                    '<div class="progress m-t-xs full progress-striped progress-small active" style=" padding-top:0; margin-top:0;border-radius:0px; ">'+
                        '<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class=" progress-bar progress-bar-warning">'+
                        '</div>'+
                    '</div>'+
              '</div>';


   
$(window).resize(function(){

resizeOverlayBoxLogin('35%');
});

$(document).ready(function() {
  

   
   if($('#session-mode-id').val()=='1')  //session active
   {
       OpenConsole('');
       thumbnail($('#session-mode-id').val());
             $('#bottom-panel-id').css('display','block');
             $('#NewPaginationContainer').css('display','block');
   }
   else if($('#session-mode-id').val()=='0') //session timeout
   {
             OverlayElem('1'); 
             $('#bottom-panel-id').css('display','none');
             $('#NewPaginationContainer').css('display','none');
   }

    $('#password').keypress(function(e) { 
  if (e.which == 13)
   {
         
       authenticate();
  }
     
});

      $('#username').click(function(){
        
        $('#usernameTitle').addClass('authcolor');
        
        });
       $('#password').click(function(){
         
       $('#passwordTitle').addClass('authcolor');
        });
        
        $('#username').focus(function(){
        
        $('#usernameTitle').addClass('authcolor');
        
        });
       $('#password').focus(function(){
         
       $('#passwordTitle').addClass('authcolor');
        });  
        
        
        
        
      $('#username').blur(function(){
        
        $('#usernameTitle').removeClass('authcolor');
        
        });
       $('#password').blur(function(){
         
         $('#passwordTitle').removeClass('authcolor');
        });




resizeOverlayBoxLogin('35%');

 });
  

function OverlayElem(elem) //mode
{
OpenConsole('block'); 

var elem1='<div class="" style="padding:10px; text-align:center;border-radius:0px; background: rgb(244,241,241);background: radial-gradient(circle, rgba(244,241,241,1) 5%, rgba(250,245,245,1) 27%, rgba(230,230,230,1) 59%, rgba(246,246,246,1) 100%);">'+
           //'<div class="" style="padding:10px;color:#999;"><i class="fa fa-unlock-alt fa-3x"></i></div>'+
       '<form>'+ 
          '<div  class="" style="margin-top:10px; margin-bottom:15px;color:#333;"><h5><b>Provide your User ID and Password to log into the system</b></h5></div>'+      
            
            
                '<div style="width:60%;margin: auto;border:0px solid #ccc;">'+ 
      '<div class="form-group" >'+
                    '<div style="text-align:left;"><small id="usernameTitle">User ID</small></div>'+    
        '<input type="text" placeholder=""   value="" name="username" id="username" class="AutBox btn-block font-extra-bold  authInputBox" style="   ">'+
                  '</div>'+
      
      '<div class="form-group" >'+
                   '<div style="text-align:left;"><small id="passwordTitle">Password</small></div>'+  
        '<input type="password"   placeholder="*******"  value="" name="password" id="password" class="AutBox btn-block  font-extra-bold  authInputBox" style="   ">'+
            //'<button id="btn_login"  type="button"  class="AutBox" data-style="zoom-in" style=" background-color:#ff6501;  color:#fff;" >Authenticate</button>'+           
                  '</div>'+
       
       '<div class="form-group" style=""  ><br>'+
       '<button id="btn_login2" onclick="authenticate();" type="button"  class="AutBox btn-block " data-style="zoom-in" style=" color:#fff;background-color:#ff6501; border-radius:25px;font-size:14px;width:100%;" ><b>AUTHENTICATE</b></button>'+           
       '</div>'+
                   '<div style="padding:10px; ">'+  //003399
                    '<font color="#999999" style="font-size:11px;font-weight:  bold; ">Innovation by</font> <font color="999999" style="font-weight:bold;font-size:11px;">TM R&D</font>'+
                   '</div>'+
                '</div>'+   
                   
                   
     '</form></div>';

var elem2='<div class="header-bg" style="padding:10px; text-align:center;">'+
          '<div style="padding:10px;color:#fff;"><i class="fa fa-lock fa-3x"></i></div>'+
      '<form>'+
          '<div  class="text-white" style=" margin-bottom:10px;"><h5><b>Are you sure you want to proceed to logout?</b></h5></div>'+    
       
       
       // '<button id="btn_no" onclick="OpenConsole(\'\');" type="button"  class="AutBox bg_transparent no-borders" data-style="zoom-in" style=" color:#fff; width:150px; " >No</button>'+           
      //'<button id="btn_logout" onclick="Logout()" type="button"  class="AutBox bg_transparent no-borders" data-style="zoom-in" style=" color:#fff;width:150px;" >Yes</button>'+           
    
        '<button id="btn_no" onclick="OpenConsole(\'\');" type="button"  class="btn btn-tm btn-sm  border-Radius2px button-uppercase  bg_transparent" data-style="zoom-in" style="color:#fff;" >No</button>'+           
      '<button id="btn_logout" onclick="Logout()" type="button"  class="btn btn-tm btn-sm  border-Radius2px button-uppercase  bg_transparent" data-style="zoom-in" style="color:#fff;">Yes</button>'+           
    
    
     '</form></div>';
     
  


//alert(elem);
  if(elem=='1')
  {       
                $('#label-authenticate').html('LOGIN');
    $('#elementContent2-id').html(elem1);$('#username').focus();//login
                
  }
  else if(elem=='2')
  {
    resizeOverlayBoxLogin('35%');
                $('#label-authenticate').html('LOGOUT');
    $('#elementContent2-id').html(elem2);$('#btn_no').focus(); //logout
  }
  else{
    //$('#elementContent-id').html(elem1);$('#username').focus();//login
    }
}
  
function OpenConsole(displayOverlay)
{
  var disp;
  if(displayOverlay=='block')
  {
  disp='block';  }
  else
  {
  disp='none';  } 

 // alert(disp);


  $('#overlay2-id').css('display',disp);
  $('#elementContent2-id').empty();
} 


</script>


<div id="screen_over" style="position:fixed;top:0px;left:0px;height:100%;width:100%;background:rgba(255,255,255,0.7);z-index: 20;display:none;" >
<!--<div id="popup_over" style="position:fixed; top:50%;left:50%;margin-top:-30px;margin-left:-300px;z-index:25;display:none;" ><img src="/images/xxx.png" alt="" /></div>-->
</div>

<style>
.myDiv1 {
    width: 100%;
    height: 500px;
    background-color:#ff6501;/*C5DFE2  */
    border: 0px solid black;
  
    -ms-transform: matrix(0.9, -0.5, 0, 1, 0, 0); /* IE 9 */
    -webkit-transform: matrix(0.9, -0.5, 0, 1, 0, 0); /* Safari */
    transform: matrix(0.9, -0.5, 0, 1, 0, 0); /* Standard syntax */
    
     -ms-transform: skew(25deg,-10deg); /* IE 9 */
    -webkit-transform: skew(25deg,-10deg); /* Safari */
    transform: skew(25deg,-10deg); /* Standard syntax */
}

.mydivSkew {
    width: 80%;
    height: 500px;
    background-color:#33ff00;  /*        ffff00 FFD1A4 00cc00 0000ff  ff0000    990099      ff6501   */
  
    -ms-transform: skew(70deg,-35deg); /* IE 9 */
    -webkit-transform: skew(70deg,-35deg); /* Safari */
    transform: skew(70deg,-35deg); /* Standard syntax */
}

.mydivSkew2 {
    width: 100%;
    height: 450px;
    background-color:#34495e;
  
    -ms-transform: skew(45deg,-15deg); /* IE 9 */
    -webkit-transform: skew(45deg,-15deg); /* Safari */
    transform: skew(45deg,-15deg); /* Standard syntax */
}

.mydivSkew3 {
    width: 80%;
    height: 450px;
    background-color:#ccc;  /*00cccc*/
  
    -ms-transform: skew(45deg,-25deg); /* IE 9 */
    -webkit-transform: skew(45deg,-25deg); /* Safari */
    transform: skew(45deg,-25deg); /* Standard syntax */
}



</style>



<!----><div id="myDiv" class="myDiv1" style="position:fixed; bottom:-350px;left:200px; z-index:850; opacity:0.2; ">

</div>

<div id="myDiv2" class="mydivSkew" style="position:fixed; bottom:-400px; z-index:600; left:50px;opacity:0.2;
     
     ">

</div>


<div id="myDiv3" class="mydivSkew2" style="position:fixed; left:250px; bottom:-200px; z-index:800; opacity:0.4; ">

</div>

<div id="myDiv4" class="mydivSkew3" style="position:fixed; left:100px; bottom:-150px; z-index:700; opacity:0.5; ">

</div>




<br>


<!-- col-lg-6 col-lg-6 hpanelpanel-body hpanelpanel-body-->
<div style="position:fixed; bottom:50px;width:100%;z-index:1000; ">
    <div  >
 

<!--                <div  class=" text-center" style="width:100%">
                      <h4  id="displayRealTimeDate" style="color:#333333;font-weight:lighter; "></h4>
                </div>
-->
    
                <div id="bottom-panel-id"  class="text-center" style="width:100%; display:  none; ">
                    <button type="button" onClick="OverlayElem('2');" class="btn w-xs btn-danger2 btn-lg " style="   border-radius:25px; font-size: 14px;  "><b>LOGOUT</b></button><!--box-shadow: 0 0 10px #34495e;-->
                </div>


    </div>
</div>

<!---->

    <footer class="footer fixed-footer" style="bottom:0px; width:100%; background-color:transparent;   
    z-index:1200;border-top:0px solid #8B99A9;  position:fixed;"><!--box-shadow:  -1px -1px 2px #ccc;-->
     <div id="loadRequestPage-ajx" style="position:fixed; bottom:10px; left:10px;"></div>
     
    
     <div id="NewPaginationContainer" style=" text-align:center;padding-bottom:2px;padding-top:2px;display:  none; " ><!--box-shadow:1px 1px 0px #999;-->
      <span style="padding:5px;padding-left:10px;padding-right:10px; border-radius:15px;  border:0px solid #ff6501; ">
        <font color="#003399" style=" text-shadow:0px 0px #333;font-size:11px;font-weight:  bolder; ">Innovation by</font> <font color="ff6501" style="font-weight:bold;font-size:11px;">TM R&D</font>
      </span>  
      </div>   
     <div id="loadbgprocess-ajx" style="position:fixed; bottom:10px; right:10px;">
     
     </div>
    
     
    </footer>
<script>
function startTime() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yy = today.getFullYear();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('displayRealTimeDate').innerHTML =  getMonthStrheader(mm.toString()) +"&nbsp;"+dd+"&nbsp;"+yy+'&nbsp;&nbsp;'+ h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}


function getMonthStrheader(date)
{
  
  //alert(date);
  
    //var mSplit = date.split("/");
    var mStr;
    var len;
    len=date;
    if(len.length==1)
    {
      len='0'+len;
      }
    else
    {  
       len=len; 
      }/**/
    
    //alert(len);
    switch(len)
    {
      case '01': 
        mStr =  'JANUARY';
        break;
      case '02': 
        mStr =  'FEBUARY';
        break;
      case '03': 
        mStr =  'MARCH';
        break;
      case '04': 
        mStr =  'APRIL';
        break;
      case '05': 
        mStr =  'MAY';
        break;
      case '06': 
        mStr =  'JUNE';
        break;
      case '07': 
        mStr =  'JULY';
        break;
      case '08': 
        mStr =  'AUGUST';
        break;
      case '09': 
        mStr =  'SEPTEMBER';
        break;
      case '10': 
        mStr =  'OCTOBER';
        break;
      case '11': 
        mStr =  'NOVEMBER';
        break;
      case '12': 
        mStr =  'DECEMBER';
        break;
      }
  
        return mStr;  
}





</script>

</body>
</html>