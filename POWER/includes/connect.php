<?php
define("DB_HOST","localhost");
define("DB_USER","");
define("DB_PASS","");
define("DB_NAME","");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() . "(" . mysqli_connect_errno() . ")"
    );
} else {
//    echo "Success";
}

//mysqli_close($conn);
?>
