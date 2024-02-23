<?php
class reg {
    function openCon() {
        $conn = new mysqli("localhost", "root", "", "mydb");
        return $conn;
    }

    function registration($conn, $name, $email, $username, $password, $dob, $gender) {
        $check_query = "SELECT * FROM regusers WHERE username='$username'";
        $check_result = $conn->query($check_query);
        if ($check_result->num_rows > 0) {
            return "Username '$username' already exists";
        } else {
            // Insert the new record
            $sql = "INSERT INTO regusers(name, email, username, password, date, gender) VALUES ('$name', '$email', '$username', '$password', '$dob', '$gender')";
            $result = $conn->query($sql);
            return $result ;


        }

    }
}





?>