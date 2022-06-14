<?php
$messge="";
$message="";
if($_POST){
if($_POST['city'])=='cairo'{
    $Delivery=0;
}elseif($_POST['city']=='giza'){
    $Delivery=30;
}elseif($_POST['city']=='alex'){
    $Delivery=50;
  }else($_POST['city']=='others'){
    $Delivery=100;
  }   
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
         <div class="row">
             <div class="col-6 offset-3 mt-5">
                 <form method="post">
                 <div class="form-group">
                     <label for="my-input">Enter your name</label>
                     <input id="Number1" class="form-control" type="text" name="name" placeholder="Enter your name">
                 </div>
                     <div class="form-group">
                         <label for="my-select">city</label>
                         <select id="my-select" class="form-control" name="city">
                             <option>cairo</option>
                             <option>giza</option>
                             <option>alex</option>
                             <option>others</option>
                         </select>
                 </div>
                 <div class="form-group">
                     <label for="my-input">number of varaites</label>
                     <input id="Number1" class="form-control" type="number" name="number" placeholder="Enter your products">
                 </div>
               
                 <button class="btn btn-outline-dark btn-lg">Submit</button>
                 </form>
                 <div class="col-12">
                      <?php  ?>
                    <h2>  <?php echo $message; ?></h2>
                 </div>
             </div>
         </div>
     </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>