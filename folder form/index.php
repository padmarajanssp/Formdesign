<?php
if(isset($_POST['subm']))
{
$fi=$_FILES['fil']['name'];
$tf=$_FILES['fil']['tmp_name'];
$upl="img/".$fi;
move_uploaded_file($tf,$upl);
}
?>
<html>
	<head>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">

	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body style="padding:6px;">
<div class="modal" id="mymodal1" >
     <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
             <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>

            <h3 class="modal-title" style="float:right;">Choose profile</h3>
          </div>

          <div class="modal-body">
          <form action="form.php" id="myf" method="post" enctype="multipart/form-data">
            <input type="file" name="fil" id="imf" onchange="fipre(event)">
            <img src="img/userd.png" id="prf">
          </div>

          <div class="modal-footer">
            <button type="submit"  class="btn btn-info" name="sub" id="save">Save</button>
            </form>
          </div>

        </div>
  </div>
</div>
         <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" style="float:left;">Change Background color</h4>
        <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <input type="color" id="cc">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="cl"data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>
	 <section class="container">
	    <section class="row justify-content-center">
          <section class="col-sm-8 col-md-6 col-lg-6 offset-lg-12">
          <form  autocomplete="off">
             <div class="box-body">
                <button type="button" class="btn btn-warning" style="margin-top:-8%;" data-toggle="modal" data-target="#mymodal1">Choose</button>
             <button type="button" class="btn btn-success" style="float:right;margin-top:-8%;"  data-toggle="modal" data-target="#myModal">
              Change
             </button>
                 
                <center> <h3 class="page-header">Registration</h3></center>
             <div class="form-group">
                <label for="user">UserName</label>
                   <input name="user" class="form-control" type="text" placeholder="Enter Username" >
              </div>

            <div class="form-group">
             <label for="pass">Password</label>
               <input name="pass" class="form-control"  type="password" placeholder="Enter Password" >
            </div>
            <div class="form-group">
             <label for="email">Email</label>
               <input name="email" class="form-control"  type="text" placeholder="Enter Email" >
            </div>
            <div class="form-group">
             <label for="phone">Phone</label>
               <input name="phone" type="number" class="form-control"  placeholder="Enter phone">
            </div>
            <!--<div class="form-group">
             <label for="clr">Background color</label>
               <input name="clr" type="color" id="chc"  placeholder="Enter phone">
               <button id="selc" class="btn btn-info right-justify">change</button>
            </div>-->
             <div class="form-group">
             <label for="db">DOB</label>
                  
               <input name="db" type="date" class="form-control" id="dob" placeholder="Enter dob" >
               </div>
            
             <center><button  id="bts" class="btn btn-success">SAVE</button></center>
            </div>
           </form>
          </section>
	   </section>
	</section>
	</body>
	<style>
  body
  {
    background:url('back.jpg');
    background-size:cover;
    background-repeat:no-repeat;

  }
  input[type=number]::-webkit-inner-spin-button,
   input[type=number]::-webkit-outer-spin-button
   {
     -webkit-appearance:none;
     margin:0;
   }
   #prf
   {
     height:20%;
     width:30%;
     top:14%;
     left:-5%;
     border-radius:60%;
     border-color:2px solid black;
   }
  #bts
  {
    width:56%;
    border-radius:80px;
    background-color:#546cb3d1;
    outline:none;
    border:none;
  }
  #bts:hover
  {
    width:64%;
    border:none;
     outline:none;
    background-color:purple;
  }
	.box-body
	{
		background:#369ae9;
		
       margin-top:8%;
		padding:12%;
		box-shadow:10px 10px 15px;
	}
  .box-body input[type="text"]
  {
    border-radius:1px;
    background:none;
    border:none;
    outline:none;
    font-size:66px solid black;
    border-width:0 0 2px;
    border-bottom:2px solid white;
    margin:none;
    width:100%;
  }
  .box-body input[type="password"]
  {
   border-radius:1px;
    background:transparent;
    border:none;
    outline:none;
    font-size:66px solid black;
    border-width:0 0 2px;
    border-bottom:2px solid white;
    margin:none; 
     width:100%; 
  }
   .box-body input[type="number"]
  {
   border-radius:1px;
    background:transparent;
    border:none;
    outline:none;
     font-size:66px solid black;
    border-width:0 0 2px;
    border-bottom:2px solid white;
    margin:none;  
     width:100%;
  }
  input[type="color"]
  {
    border-radius:50px;
  }
   
	</style>
	<script type="text/javascript">

function fipre(event)
{
img=document.getElementById('prf');
img.src=URL.createObjectURL(event.target.files[0]);
}
  $("#save").click(function()
  {
     /*var isrc="<?php echo $upl;?>";
     $("#prf").attr('src',isrc);*/

    /*var but=$('#save').attr('name');
    var fi=$("imf").attr('name');
    $.ajax({
        url:"form.php",
        type:"POST",
        data:{subm:but,fil:fi},
        });*/
    });
  /*$('input[type="file"]').change(function(di)
    {
    srci=d.target.files[0].name;
    $("#prf").attr('src',srci);
  });
  });

  
 $("#cb").click(function()
  {
    $("#mymo1").modal('show');
  });*/
//$("#dob").datepicker();
  
 $("#cl").click(function()
 {
  var col=$("#cc").val();
  $(".box-body").css('background',col);

});
	$("#chc").click(function()
	{
	  var col=$('#chc').val()
	   $(".form-container").css('background-color',col);
    });
	</script>
	</html>