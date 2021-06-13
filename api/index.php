<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Weatherapi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    
</head>
<body>

<div class="glavni">
    <div class="jumbotron bg-primary">
        <form method="GET" action="">
            <div class="form-group">
                <label for="formGroupExampleInput" style="margin-left:590px"><b><kbd>Unesi geografsku duzinu</kbd></b></label>
                <input type="text" style="Width:250px;margin-left:550px" class="form-control" name="lon" id="formGroupExampleInput" placeholder="Unesi geografsku duzinu" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2" style="margin-left:590px"><b><kbd>Unesi geografsku sirinu</kbd></b></label>
                <input type="text" style="Width:250px;margin-left:550px" class="form-control" name="lat" id="formGroupExampleInput2" placeholder="Unesi geografsku sirinu" required>
            </div>
                <button type="submit" style="margin-left:640px" name="btn" class="btn btn-success">Prihvati</button>
        </form>
    </div>
    
    <div class="donji">

    <?php

    require_once("functions.php");
    require_once("validacija.php");

     ?>
    
    </div>

</div>
    
</body>
</html>
 


