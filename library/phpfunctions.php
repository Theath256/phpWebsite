<?php
/// library functions ... version 1

function footer()
{
    echo "</hr><center>";
    echo "<a href='purchaseOne.php'>Purchase #1</a>";
    echo " &nbsp; | &nbsp; ";
    echo "<a href='purchaseTwo.php'>Purchase #2</a>";
    echo " &nbsp; | &nbsp; ";
    echo "<a href='purchaseThree.php'>Purchase #3</a>";
    echo " &nbsp; | &nbsp; ";
    echo "<a href='purchaseFour.php'>Purchase #4</a>";
    echo "</center>";
}

function secure_startup()
{
    session_star();

    if ( !isset( $_SESSION['user'] ) )
    {
    // bounce on invalid login
    header("Location: logIn.php");
    }
}


?>
