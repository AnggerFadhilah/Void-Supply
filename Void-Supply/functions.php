<?php
    $conn = mysqli_connect("localhost", "root", "", "Void-Supply");

    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }


    function register($data){
        global $conn;

        $nama = $data["nama"];
        $email = stripslashes($data["email"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);

        //cek email dah ada ato blm
        $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

        //tambahan
        if(mysqli_fetch_assoc($result)){
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                var modal = new bootstrap.Modal(document.getElementById('modalEmailIsUsed'));
                modal.show();
            });
            </script>";
            return false;
        }

        //encrypt password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //tambahkan user ke database
        mysqli_query($conn, "INSERT INTO user VALUES('','$email','$password','$nama')");
        
        return mysqli_affected_rows($conn);

    }

?>