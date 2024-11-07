<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "nolimit_gym";  

    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Konekcija nije uspela".$conn->connect_error);
    }

    $conn->set_charset("utf8");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ime = mysqli_real_escape_string($conn, $_POST['Ime']);
            $prezime = mysqli_real_escape_string($conn, $_POST['Prezime']);
            $brojTelefona = mysqli_real_escape_string($conn, $_POST['broj-telefona']);
            $tip = mysqli_real_escape_string($conn, $_POST['Tip']);
            $dan = mysqli_real_escape_string($conn, $_POST['Dan']);
            $vreme = mysqli_real_escape_string($conn, $_POST['Vreme']);

            $dateObj = DateTime::createFromFormat('d/m/Y', $dan);
            $dan = $dateObj->format('Y-m-d');

            $sql = "INSERT INTO termini (`Ime`, `Prezime`, `Broj telefona`, `Tip vežbe`, `Dan`, `Vreme`)
                    VALUES ('$ime', '$prezime', '$brojTelefona', '$tip', '$dan', '$vreme')";

        if($conn->query($sql) === TRUE) {
            echo json_encode(["status" => "success", "message" => "Uspešno ste zakazali termin za vežbu!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Greška: " . $sql . "<br>" . $conn->error]);
        }
    }   
    $conn->close();    

?>