<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table in html</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>sr.no</th>
                <th>name</th>
                <th>fathername</th>
                <th>address</th>
                <th>email</th>
                <th>student</th>
                <th>phoneNumber</th>
                <th>class</th>
                <th>section</th>
            </tr>
        </thead>
        <tbody>

            <?php

            include "conn.php";

            $query = "SELECT * FROM `data-analysis`";
            $result = $conn -> query($query);

            if ($result -> num_rows > 0) {
               $x = 1;
               while ($row = $result -> fetch_assoc()) {
                  echo "<tr>
                              <td>". $x++."</td>
                              <td>". $row['name'] ."</td>
                              <td>". $row['fathername'] ."</td>
                              <td>". $row['address'] ."</td>
                              <td>". $row['email'] ."</td>
                              <td>". $row['student'] ."</td>
                              <td>". $row['phoneNumber'] ."</td>
                              <td>". $row['class'] ."<sup>th</sup></td>
                              <td>". $row['section'] ."</td>
                           </tr>";
               }


            }

        
        
        
        
        ?>


        </tbody>
    </table>
</body>

</html>