<?php
 include('links/conn.php');
if(isset($_POST['submit'])){
  $file =$_FILES['file'];
  $detail =$_POST['detail'];
  $image =$_FILES['image'];
  $heading =$_POST['haeding'];
  $date =$_POST['date'];
  $filename = $file['name'];
  $tempname = $file['tmp_name'];
  $errorname = $file['error'];
  $imgname = $image['name'];
  $tempimg = $image['tmp_name'];
  $errornameimg = $image['error'];
  if ($errorname==0 && $errornameimg==0){
    $distina="img/".$filename;
    move_uploaded_file($tapname,$destina);
    $distina2="img/".$imgname;
    move_uploaded_file($tapimg,$destina2);
  }
  $insert=mysqli_query($conn , "INSERT INTO `project`( `file`, `detail`, `image`, `haeding`, `date`) VALUES ( '$filename',' $detail','$imgname','$heading','$date')");
  if($insert){
    echo
    ("data inaserted");
  }
  else{echo  
    ("data not inserted");
  
   
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <?php include('links/links.php')?>
    <title>Document</title>
</head>
<div class="container-fluid">
    <?php include('links/sidbar.php')?>
    <div id="main">
      <?php include('links/navbar.php')?>
    <div class="container p-5">

      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row w-100">
          <div class="col-md-6 col-sm-12 p-5 bg-primary" style="border-radius: 50px 0 0 50px;">
              <div class="my-3">
                <label class="form-label" for="">file</label>
                <input class="form-control" type="file" name="file" id="">
              </div>
              <div class="my-3">
                <label class="form-label" for="">datail</label>
                <br>
                <textarea name="detail" placeholder="detail" id="" cols="30" rows="10"></textarea>
              </div>
              <div class="my-3">
                <label class="form-label" for="">image</label>
                <input class="form-control" type="file" name="image" id="">
              </div>
          </div>
          <div class="col-md-6 col-sm-12 p-5 border border-primary" style="border-radius: 0px 50px 50px 0px;">
                <div class="my-3">
                    <label for="">haeding</label>
                    <input class="form-control" type="text" name="haeding" id="">
                </div>
                <div class="my-3">          
                    <label class="form-label" for="">date</label>
                  <input class="form-control" type="date" name="date" id="">
                </div>
                <div class="my-3">
                  <br>
                <button type="submit" name="submit" class="btn btn-primary">submit</button>

                 
                </div>
          </div>

        </form>
        </div>
        <table>
          <tr>
            <th>file</th>
            <th>detail</th>
            <th>image</th>
            <th>heading</th>
            <th>date</th>
          </tr>
          <?php
          include('links/conn.php');
          $select = mysqli_query($conn,"SELECT * FROM `project`" );
          while($fatch = mysqli_fetch_array($select)){

          
          ?>
          <tr>
            <td><?php echo $fatch['id']?></td>
            <td><?php echo $fatch['file']?></td>
            <td><?php echo $fatch['detail']?></td>
            <td><?php echo $fatch['image']?></td>
            <td><?php echo $fatch['haeding']?></td>
            <td><?php echo $fatch['date']?></td>
            <td> <a href="conn..php?id=<?php echo $fatch ['id']?> &dlef=delet"> <i class= 
            "fa-solid fa-trash"></i></a></td>
          </tr>

          <?php }
          if($_GET['dlef']){
            $dle = $_GET['id'];
            $qwery=mysqli_query($conn, "DELETE FROM `project`WHRE `id`) = '$dle'");
            if($qwery){
              echo 'inserted';
              echo  "<script>location.replace('see.php)</script>";
            }
          }
          ?>
        </table>
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