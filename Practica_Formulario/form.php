<?php
    
    if(isset($_POST['submit'])){

        /* recoger variable del input radio */
        $title = $_POST['title'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthdate = $_POST['birthdate'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $postcode = $_POST['postcode'];
        $regionalCode = $_POST['regionalCode'];
        $subscriptionType = $_POST['subscriptionType'];
        $subscriptionCode = $_POST['subscriptionCode'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cardType = $_POST['cardType'];
        $cardNumber = $_POST['cardNumber'];
        $discount = $_POST['discount'];
        $feedback = $_POST['feedback'];


        echo "<h1>Data has been sent</h1>";
        

        /* imprimir en tabla */
        echo "<table border='1'>";
        echo "<tr><td>Title</td><td>$title</td></tr>";
        echo "<tr><td>First Name</td><td>$firstName</td></tr>";
        echo "<tr><td>Last Name</td><td>$lastName</td></tr>";
        echo "<tr><td>Birthdate</td><td>$birthdate</td></tr>";
        echo "<tr><td>City</td><td>$city</td></tr>";
        echo "<tr><td>Region</td><td>$region</td></tr>";
        echo "<tr><td>Postcode</td><td>$postcode</td></tr>";
        echo "<tr><td>Regional Code</td><td>$regionalCode</td></tr>";
        echo "<tr><td>Subscription Type</td><td>$subscriptionType</td></tr>";
        echo "<tr><td>Subscription Code</td><td>$subscriptionCode</td></tr>";

        /* imprimir en lista */
        echo "<tr><td>Interest</td><td><ul>";
        if(!empty($_POST['interest'])){
            foreach($_POST['interest'] as $value){
                echo "<li>$value</li>";
            }
        }
        echo "</ul></td></tr>";

        echo "<tr><td>Username</td><td>$username</td></tr>";

        /* guardar contraseña encriptada*/
        $password = md5($password);
        echo "<tr><td>Password</td><td>$password</td></tr>";
        echo "<tr><td>Card Type</td><td>$cardType</td></tr>";
        echo "<tr><td>Card Number</td><td>$cardNumber</td></tr>";
        echo "<tr><td>Discount</td><td>$discount</td></tr>";
        echo "<tr><td>Feedback</td><td>$feedback</td></tr>";
        echo "</table>";

        
        
    }
?>