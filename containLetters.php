<?php

function containLetters($firstWord, $secondWord)
{
    $chr = strtolower($firstWord);
    $second = strtolower($secondWord);

    $length = str_split($chr);
    $status = false;

    foreach ($length as $huruf) {
        if (str_contains($second, $huruf)) {
            $status = true;
        } else {
            $status = false;
            break;
        }
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Reza Kurnia - Task 1</title>
</head>

<body>
    <div class="container mt-2">
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
                    <button type="submit" class="btn btn-success" id="btn-check">Cek</button>
               
                    <?php if($boolean != null): ?>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        <?php echo $boolean; ?>
                    </div>
                </div>
            <?php endif; ?>
                </div>
          

            </div>
            
  </div>
</div>
               
           
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>