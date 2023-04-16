<?php
function containLetters($firstWord, $secondWord){
    $total_found = 0;
    $length = strlen($firstWord);
    for ($x = 0; $x < $length; $x++) {
        $chr = substr($firstWord, $x, 1);            
        if(strpos(strtolower($secondWord), $chr) !== false){
            $total_found = $total_found + 1;
        }  
    }

    $status = false;
    if($total_found < 3){
        $status = false;
    }else{
        $status = true;
    }
    return $status;
}

$boolean = null;
$firstWord = null;
$secondWord = null;

if (isset($_POST['first_word']) && isset($_POST['second_word'])) {

    $firstWord = $_POST['first_word'];

    $secondWord = $_POST['second_word'];

    if (containLetters($firstWord, $secondWord)) {
        $boolean = "True";
    } else {
        $boolean = "False";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reza Kurnia - Task 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-2">
  <h1>Contain Letters</h1>
        <form action="" method="POST">
            <div class="row">
            <div class="card" style="width: 100%;">
  <div class="card-body">
  <div class="col-md-6">
                    <div class="form-group">
                        <label>firstWord</label>
                        <input type="text" class="form-control" name="first_word" value="<?= $firstWord ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>secondWord</label>
                        <input type="text" class="form-control" name="second_word" value="<?= $secondWord ?>" required>
                    </div>
                </div>
              
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success mt-3">Cek</button>
               
                    <?php if($boolean != null): ?>
            <div class="row mt-2">
                <div class="col-md-12">
                    <?php if($boolean == "True") : ?>
                <div class="alert alert-success" role="alert">
                     <?php echo $boolean; ?>
                    </div>
                    <?php else :?>
                        <div class="alert alert-danger" role="alert">
                     <?php echo $boolean; ?>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
                </div>
          

            </div>
            
  </div>
</div>
               
           
        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>