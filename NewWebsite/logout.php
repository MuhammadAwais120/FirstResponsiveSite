<?php
session_start();
session_destroy();

session_start();

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']  == true  )  {

}else{?> 
    <script>
        window.location.href = "http://localhost/NewWebsite/login.php";
    </script>
    <?php
    
}