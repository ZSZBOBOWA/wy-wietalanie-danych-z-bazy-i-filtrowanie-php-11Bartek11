<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $conn=mysqli_connect('localhost','root','','szkola1');

    if(!$conn){
        die("Błąd połączenia: ".mysqli_connect_error());
    }
        $sql = "SELECT * FROM uczniowie";
    
        if(mysqli_num_rows($result)>0){
            echo"<table border='1'><tr><th>Imię</th>
            <th>Nazwisko</th><th>Wiek</th></tr>"
            while($row = mysqli_fetch+assoc($result)){
                echo "<tr><td>".$row['imie']"</td>
                <td>".$row['nazwisko']"</td>
                <td>".$row['wiek']"</td>
                </tr>";
            }
            echo"</table";
        }else{
            echo"Brak wyników";
        }
        mysqli_close($conn);

    ?>

</body>
</html>