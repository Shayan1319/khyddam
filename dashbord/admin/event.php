<?php
include('links/conn.php');
if(isset($_POST['submit'])){
  $_Image $_POST['image'];
  $_Heading $_POST['heading'];
  $_File $_POST['file'];
  $_Description $_POST['descripition'];
  $_Address $_POST['address'];
  $filename = $_FILE['name'];
  $tempname = $_FILE['tmp_name'];
  $errorname = $_FILE['error'];
  if ('error==0'){
    $destina=img/.$filename;
    move_uploaded_file($tapname,$destina;);
    $destina   = "img/".$filename;
    move_uploaded_file($tapimg,$destina2);
    $destina2 = "img/."$imgname;
    $insert =  mysqli_qurey($conn,"INSERT INTO `event`(`id`, `Image`, `Heading`, `File`, `Description`, `Address`) VALUES ('$Image', $Heading',  $File',  '$Description','$Address')");
    if($insert){
      echo
      ("Data insterd")
    }
    else{echo
    ("Data not insert")} 







    
    

  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <?php include('links/links.php')?>
    <title>Document</title>
</head>

<body>
<div class="container-fluid">
    <?php include('links/sidbar.php')?>
    <div id="main">
      <?php include('links/navbar.php')?>
      <div class="container">
        <form action=""method="POST">
            <div class="row m-5"  >
              <div class="col-sm-6 col-lg-6 col-md-6 p-5 border border-primary" style="border-radius:50px 0 0 50px  " >
                <h1>Event</h1>
                <div class="my-5">
                  <label for="">Image</label>
                  <input type="file" name="file" id="">
                </div>
                <div class="my-5">
                  <label  class="form-label" for="">Heading</label>
                  <input  class="form-control" placeholder="Enter heading" type="text" name="phonenumber" id="">
                </div>
                <div class="my-5">
                    <label class="form-label" for="">File</label>
                    <input type="file" name="file" id="">
                </div>
               
            </div>
            <div class="col-sm-6 col-lg-6 col-md-6 p-5 border border-primary" style="border-radius:0  50px   50px  0;  background-color:blue">
            <div class="my-5">
                    <label class="form-label" for="">Description</label>
                    <br>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
              <div class="my-5">
                <label class="form-label" for="">Address</label>
                <input class="form-control" placeholder="Enter address" type="text" name="address" id="">
              </div>
              <div class="my-5">
                <button type="button" class="btn btn-dark">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</div>
</body>

</html>