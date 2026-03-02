<?php include('config.php'); ?>
<!DOCTYpE html>
<html>
<head>
<title> liste des contacts</title>
</head>
<body> 
<h2>recherche contacts</h2>
<from method="GET">
   <input type ="text" name="search" placeholder="taper ici pour chercher">
   <button type="submit">recherche</button>
   </from>
   <table border ="1" width='80%"
   style="margin_top:20px; border-collapse: collapse;">
   <tr>
       <th>Nom</th>
       <th>telephone</th>
       <th>EMail</th>
       <th>actions</th>
       </tr>
    <?php
    $search = isset($_GET['search'])?
    $_GET ['search'] :'';
    $query = "SELECT * FROM TContact WHERE Nom LIKE '$search%'";
    $result = mysqli_query($conn,$query );
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['Nom'] . "</td>";
        echo "<td>" . $row['Telephone'] . "</td>"; // 'T' majuscule
        echo "<td>" . $row['Email'] . "</td>";     // 'E' majuscule
        echo "<td>
                <a href='modifier.php?id=" . $row['IDC'] . "'>Modifier</a> | 
                <a href='supprimer.php?id=" . $row['IDC'] . "' onclick='return confirm(\"Supprimer ?\")'>Supprimer</a>
              </td>";
        echo "</tr>";
    }
        ?>
        </table>
        </body>

     