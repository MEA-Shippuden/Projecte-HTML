<php
    $nomError = $emailError = $telefonError = "";
    $nom = $email = $telefon = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nom"])) {
        $nomErr = "Se requiere que rellenes el campo";
    } else {
        $nom = test_input($_POST["nom"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Se requiere que rellenes el campo";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["telefon"])) {
        $telefonError = "Se requiere que rellenes el campo";
    } else {
        $telefon = test_input($_POST["website"]);
    }
}
?>