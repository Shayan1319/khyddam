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
        <div class="row">
       </nav>  
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