<?php
// custom php

if ( $_SERVER["REQUEST_METHOD"] === "POST" )
{
    // var_dump($_POST);
    // echo "<br>";

    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    echo "Your email: $email was submitted!";
    die;
}

?>

<div class="row">
    <div class="col col-xl-4">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="form-email" aria-describedby="emailHelp" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>