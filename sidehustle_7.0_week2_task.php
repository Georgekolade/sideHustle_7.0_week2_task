<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boot 5/css/bootstrap.css">
    <title>SideHustle 7.0 Week 2 Task</title>
</head>
<body>

    <div class="card mx-auto w-50 p-5 shadow-sm border-end border-success my-5">
        <form action="" method="POST">
            <input type="text" placeholder="How old are you?" name="age" class="form-control my-3">
            <input type="text" placeholder="Do you have a voter's card | yes or no" name="vcard" class="form-control my-3">
            <input type="text" placeholder="Which ward are you" class="form-control my-3" name="ward">
            <button type="submit" class="btn btn-success my-2">Submit</button>
        </form>
    </div>

<?php

$age = filter_input(INPUT_POST, 'age');
$vcard = filter_input(INPUT_POST, 'vcard');
$ward = filter_input(INPUT_POST, 'ward');
if ($age < 18) {
    if ($vcard == "no") {
        if ($ward != 20) {
            echo "<br>";
            echo "<h4 class='display-5 mx-2 text-danger'>You are an underage, no voter's card, so you are literally not eligible</h4>";
        }
    }
}elseif ($age <> 18){
    if ($vcard == "yes") {
        if ($ward != 20) {
            echo "<br>";
            echo "<h4 class='display-5 mx-2 text-danger'>Not an eligible voter</h4>";
        }
    }
}else {
    if ($vcard == "yes") {
        if ($ward == 20) {
            echo "<br>";
            echo "<h4 class='display-5 mx-2 text-success'>Voter eligible to vote</h4>";
        }
    }
}
?>
    
</body>
</html>