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
    $username = clean_input($_POST["username"]);
    $email = clean_input($_POST["email"]);
    $password = clean_input($_POST["password"]);

    // Provera da li su sva polja popunjena
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL upit za proveru da li već postoji korisnik sa istim korisničkim imenom ili email adresom
        $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Korisnik već postoji, prikaži poruku
            echo "Username or email already registered.";
        } else {
            // Dodaj novog korisnika u bazu podataka
            $sql = "INSERT INTO users (username, email, password_hash) VALUES ('$username', '$email', '$hashed_password')";
            if ($conn->query($sql) === TRUE) {
                // Uspešno dodat korisnik, prikaži poruku
                echo "success";
            } else {
                // Greška prilikom dodavanja korisnika
                echo "Error: " . $conn->error;
            }
        }
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
