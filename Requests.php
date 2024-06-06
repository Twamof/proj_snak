<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "carddba";
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

if (isset($_POST['send'])) {
   $firstname= $_POST['nom'];
   $lastname= $_POST['lestnom'];
   $email= $_POST['email'];
   $adddata = $pdo->prepare("INSERT INTO myguest(firstname, lastname, email) 
   VALUES('$firstname', '$lastname','$email')");
  
   if ( $adddata->execute()) {
    echo" ok ajout ";
  
   }else{
    echo" erorr ";
   }
   
}
?>
   

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/reqyests.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   
<form method="POST"  >

<div class="container text-center">
  <div class="row">
    <div class="col"><input  type="checkbox" class="form-check-input" id="check1" name="nom" value="Mortadella" checked>
<label class="form-check-label" for="check1"><img   src="phots/image/img1.jpg"></label></div>
    <div class="col"><input  type="checkbox" class="form-check-input" id="check1" name="nom" value="rice" checked>
<label class="form-check-label" for="check1"><img    src="phots/image/img2.png"></label></div>
    <div class="col"><input  type="checkbox" class="form-check-input" id="check1" name="nom" value="rice" checked>
<label class="form-check-label" for="check1"><img    src="phots/image/img2.png"></label></div>
    <div class="col"><input  type="checkbox" class="form-check-input" id="check1" name="nom" value="rice" checked>
<label class="form-check-label" for="check1"><img    src="phots/image/img2.png"></label></div>
  <div class="col"><input  type="checkbox" class="form-check-input" id="check1" name="nom" value="Mortadella" checked>
<label class="form-check-label" for="check1"><img   src="phots/image/img1.jpg"></label>
</div>
</div>
  </div>



  <div class="container text-center">
  <div class="row">

    <div class="col">
      <div class="p-3"><input  type="checkbox" class="form-check-input" id="check1" name="nom" value="rice" checked>
<label class="form-check-label" for="check1"><img src="phots/salad sandewix/rice.jpg"></label></div>
    </div>
    <div class="col">
      <div class="p-3"><input type="checkbox" class="form-check-input" id="check1" name="lestnom" value="Lettuce" checked>
<label class="form-check-label" for="check1"><img  src="phots/salad sandewix/Lettuce.webp"></label>
</div>
    </div>
    <div class="col">
      <div class="p-3"><input type="checkbox" class="form-check-input" id="check1" name="lestnom" value="carrot" checked>
<label class="form-check-label" for="check1"><img  src="phots/salad sandewix/carrot.jpg"></label>
</div>
    </div>
    <div class="col">
      <div class="p-3"><input type="checkbox" class="form-check-input" id="check1" name="lestnom" value="tomatoes" checked>
<label class="form-check-label" for="check1"><img  src="phots/salad sandewix/tomatoes.jpg"></label>
</div>
    </div>
    <div class="col">
      <div class="p-3"><input type="checkbox" class="form-check-input" id="check1" name="email" value="olive" checked>
<label class="form-check-label" for="check1"><img  src="phots/salad sandewix/olive.webp"></label>
</div>
    </div>
    <div class="col">
      <div class="p-3"><input type="checkbox" class="form-check-input" id="check1" name="email" value="onion" checked>
<label class="form-check-label" for="check1"><img  src="phots/salad sandewix/onion.jpg"></label>
</div>
    </div>
    <div class="col">
      <div class="p-3"><input type="checkbox" class="form-check-input" id="check1" name="email" value="olive" checked>
<label class="form-check-label" for="check1"><img  src="phots/salad sandewix/olive.webp"></label></div>
    </div>
    <div class="col">
      <div class="p-3"><input type="checkbox" class="form-check-input" id="check1" name="email" value="Cornichon" checked>
<label class="form-check-label" for="check1"><img  src="phots/salad sandewix/Cornichon.webp"></label></div>
    </div>
   
   
  </div>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col"><input  type="checkbox" class="form-check-input" id="check1" name="nom" value="frites" checked>
<label class="form-check-label" for="check1"><img   src="phots/salad sandewix/Potato frites.jpg"></label></div>
    <div class="col"><input  type="checkbox" class="form-check-input" id="check1" name="nom" value="anedlos" checked>
<label class="form-check-label" for="check1"><img    src="phots/salad sandewix/anedlos.jpg"></label></div>
    <div class="col"><input  type="checkbox" class="form-check-input" id="check1" name="nom" value="ketchup" checked>
<label class="form-check-label" for="check1"><img    src="phots/salad sandewix/ketchup.png"></label></div>
    <div class="col"><input  type="checkbox" class="form-check-input" id="check1" name="nom" value="mayons" checked>
<label class="form-check-label" for="check1"><img    src="phots/salad sandewix/mayons.jpg"></label></div>

</div>
</div>
  </div>


<button type="submit" name="send">envoyer</button>
</form>


</body>
</html>
<?php
// $select_databese = $pdo->prepare("SELECT * FROM `myguest`");
// $select_databese->execute();
// foreach($select_databese as $result){
// echo "<h1>".$result['email']."</h1>";
// echo "<h1>".$result['firstname']."</h1>";
// }
?>