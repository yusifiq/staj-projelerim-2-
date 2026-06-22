<?php
session_start();

if (isset($_POST['not']) && !empty($_POST['not'])) {
    $_SESSION['notlar'][] = htmlspecialchars($_POST['not']);
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Not Defteri</title>
</head>
<body>

<h2> 📝 Not Defteri</h2>

<form method="POST">
    <textarea name="not" rows="4" cols="50" placeholder="Notunu yaz..."></textarea><br>
    <button type="submit">Kaydet</button>
</form>

<hr>

<h3>Kayıtlı Notlar:</h3>

<?php
if (!empty($_SESSION['notlar'])) {
    foreach ($_SESSION['notlar'] as $n) {
        echo "• " . $n . "<br>";
    }
} else {
  echo "Henüz Not yok.";
}

?>

</body>
</html>
