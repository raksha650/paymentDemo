 <?php 
require('dbconnetion.php');
$sql="SELECT * FROM `course`";
$data = mysqli_query($con,$sql);

?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
  #header {
  background: url(https://images.unsplash.com/photo-1415795854641-f4a487a0fdc8?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80) center center / cover no-repeat ;
}
</style>
<nav class="bg-dark navbar-dark">
  <div class="container">
    <a href="" class="navbar-brand"><i class="fas fa-tree mr-2"></i>Forest</a>
  </div>
  </nav>
   <section id="header" class="jumbotron text-center">
     <h1 class="display-3">FOREST</h1>
     <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
     <a href="" class="btn btn-primary">Click</a>
     <a href="" class="btn btn-secondary">Click</a>
</section>
  
<section id="gallery">
  <div class="container">
    <div class="row">
      <?php
      if ($data) {
 // output data of each row
  while($row = mysqli_fetch_array($data)) {
      ?>
       <a href="index.php?id=<?php echo $row["id"];  ?>" class="btn btn-outline-danger btn-sm">
    <div class="col-lg-4 mb-4">
    <div class="card">
      <img hight="350" width="350" src="<?php echo $row["video"];  ?>" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row["title"];  ?></h5>
        <p class="card-text"><?php echo $row["description"];  ?></p>
       <a href="index.php?id=<?php echo $row["id"];  ?>" class="btn btn-outline-success btn-sm">Read More</a>
        <a href="" class="btn btn-outline-danger btn-sm"><?php echo $row["price"];  ?></a>
      </div>
     </div>
    </div>
  </a>
    <?php } } ?>
  </div>
</div>
</section>
