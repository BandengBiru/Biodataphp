<html>
<body>
    <form action="" method="POST">
        <H1>Biodata</h1>
        Nama:<input type=text name="name"><br><br>
        Alamat: <textarea name=alamat> </textarea><br><br>
        Umur: <input type=text name=umur><br><br>
        No Hp: <input type=text name=nohp><br><br>
        Hobi : <input type=text name=hobi><br><br>
        Cita-cita:<input type=text name=cita><br><br>
        Email: <input type=text name=email><br><br>
        Status:<input type=text name=status><br>
        <input type=submit value=Tampilkan><br><br>
    </form>
</body>
</html>
<?php
if ($_POST) {
    echo "<h1>Biodata</h1>";
    echo "Nama: " . $_POST["name"] . "<br>";
    echo "Alamat: " . $_POST["alamat"] . "<br>";
    echo "Umur: " . $_POST["umur"] . "<br>";
    echo "Nomor HP: " . $_POST["nohp"] . "<br>";
    echo "Hobi: " . $_POST["hobi"] . "<br>";
    echo "Cita-cita: " . $_POST["cita"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Status: " . $_POST["status"] . "<br>";
}
?>