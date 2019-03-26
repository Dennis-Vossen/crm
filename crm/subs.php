<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>subscription</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
   <?php include 'includes/header.php'?>
    <div class="content">
       <form action="">
         <div class="subscribtion">
           <i class="fas fa-scroll"></i>
           <label for="sub01">gratis abbonoment</label><br>
           <input type="radio" name="sub01">
         </div>
         <div class="subscribtion">
           <i class="fas fa-scroll"></i>
           <label for="sub01">€ 5.00 abbonoment</label><br>
           <input type="radio" name="sub02">
         </div>
         <div class="subscribtion">
          <i class="fas fa-scroll"></i>
           <label for="sub01">€ 10.00 abbonoment</label><br>
           <input type="radio" name="sub03">
         </div>
       </form>
    </div>
    <?php include 'includes/footer.php'?>

</body>
</html>