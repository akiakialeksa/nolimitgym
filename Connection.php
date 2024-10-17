<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "nolimit_gym";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Konekcija nije uspela".$conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ime = $_POST['Ime'];
        $prezime = $_POST['Prezime'];
        $brojTelefona = $_POST['broj-telefona'];
        $tip = strtolower(trim($_POST['Tip']));
        $dan = $_POST['Dan'];
        $vreme = $_POST['Vreme'];
    
        $sql = "INSERT INTO termini (`Ime`, `Prezime`, `Broj telefona`, `Tip vežbe`, `Dan`, `Vreme`)
                VALUES ('$ime', '$prezime', '$brojTelefona', '$tip', '$dan', '$vreme')";
    
        if($conn->query($sql) === TRUE) {
            echo "Uspešno ste zakazali termin za vežbu!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }   
    $conn->close();    
    
?>