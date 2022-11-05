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
        $interest = $_POST['interest'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cardType = $_POST['cardType'];
        $cardNumber = $_POST['cardNumber'];
        $discount = $_POST['discount'];
        $feedback = $_POST['feedback'];

        /* meter todo en un array */
        $data = array(
            'title' => $title,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthdate' => $birthdate,
            'city' => $city,
            'region' => $region,
            'postcode' => $postcode,
            'regionalCode' => $regionalCode,
            'subscriptionType' => $subscriptionType,
            'subscriptionCode' => $subscriptionCode,
            'interest' => $interest,
            'username' => $username,
            'password' => $password,
            'cardType' => $cardType,
            'cardNumber' => $cardNumber,
            'discount' => $discount,
            'feedback' => $feedback
        );


        echo "<h1>Data has been submitted</h1>";

        /* imprimir en tabla */
        echo "<table border='1'>";
        foreach($data as $key => $value){
            $firstLetter = ucfirst($key);
            echo "<tr>";
            echo "<td>$firstLetter</td>";

            /* guardar password encriptada */
            if($key == 'password'){
                $value = md5($value);
            }

            if($key == 'interest'){
                echo '<td>';
                foreach($interest as $value){
                    echo "<ul>";
                    echo "<li>$value</li>";
                    echo "</ul>";
                }
                echo '</td>';
            }else{
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        
    }
?>