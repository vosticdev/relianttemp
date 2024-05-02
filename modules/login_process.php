<?php
// Provera da li je zahtev poslat metodom POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Povezivanje sa bazom podataka
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reliant_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Provera konekcije
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prihvatanje i čišćenje podataka iz forme
    $email = clean_input($_POST["email"]);
    $password = clean_input($_POST["password"]);

    // SQL upit za proveru korisnika
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password_hash"])) {
            // Prijava uspešna
            echo "success";
        } else {
            // Pogrešna lozinka
            echo "☠️ Wrong password!";
        }
    } else {
        // Korisnik ne postoji
        echo "☠️ User not found!";
    }

    // Zatvaranje konekcije sa bazom podataka
    $conn->close();
}

// Funkcija za čišćenje korisničkog unosa
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
