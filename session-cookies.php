<?php
<<<<<<< HEAD
 if ($_SERVER['REQUEST_URI'] === '/favicon.ico') {
     exit;
 }
 session_start();
 
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     setcookie('user', $_POST['name'], time() + 3600, '/');
 }
 
 $hasCookie = isset($_COOKIE['user']);
 
 if (!$hasCookie) {
     $welcomeMessage = "Welcome back, user!";
 } else {
     $welcomeMessage = "Welcome back, " . htmlspecialchars($_COOKIE['user']);
 }
 
 if (!isset($_SESSION['visits'])) {
     $_SESSION['visits'] = 1;
 } else {
     $_SESSION['visits']++;
 }
 
 $visitsMessage = "This is your " . $_SESSION['visits'] . " visit.";
 ?>
 <html>
     <body>
         <?php if (!$hasCookie): ?>
             <form method="POST">
                 <label>Your name:</label>
                 <input type="text" name="name" />
                 <button>Track</button>
             </form>
         <?php endif;?>
         <p><?=$welcomeMessage?></p>
         <p><?=$visitsMessage?></p>
     </body>
 </html>
=======
// Stops the page from loading twice when it is
// trying to find the Favicon that is missing
if ($_SERVER['REQUEST_URI'] === '/favicon.ico') {
    exit;
}
// Start the Session to capture the COOKIE
session_start();

/************************
  * Sessions & Cookies
************************/

// Set the COOKIE if the form submit was a POST request
if ( $_SERVER['REQUEST_METHOD'] === "POST" ) {
    setcookie( 'user', $_POST['name'], time() + 3600, '/' );
}

// Checking if COOKIE exists
$hasCookie = isset( $_COOKIE['user'] );

if ( !$hasCookie ) {
    $welcomeMessage = "Welcome back, User!";
} else {
    $welcomeMessage = "Welcome back, " . htmlspecialchars( $_COOKIE['user'] );
}

// Session data saved on the server
if ( !isset($_SESSION['visits']) ) {
    $_SESSION['visits'] = 1;
} else {
    $_SESSION['visits']++;
}

$visitMessage = "This is your " . $_SESSION['visits'] . " visit.";
?>

<?php if ( !$hasCookie ) : ?>

<form method="POST" class="row g-2">
  <div class="col-auto">
    <label for="name" class="visually-hidden">your name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="enter your name">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Track</button>
  </div>
</form>

<?php endif; ?>

<div class="mt-5">
    <p><?= $welcomeMessage ?></p>
    <p><?= $visitMessage ?></p>
</div>
>>>>>>> refs/remotes/origin/main
