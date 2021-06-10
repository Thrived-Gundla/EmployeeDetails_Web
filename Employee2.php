<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmployeeDetails</title>

<style type = "text/css">
*{
    box-sizing:border-box;
    margin : 0
}
table {
    width:100%;
    text-align:center;
    margin-top:100px
}

th {
    background: powderblue;
    color : black;
    padding : 10px;
    font-size:40px;
}
tr:nth-child(odd) {background-color : #cccccc}

tr {
    font-size : 20px;
}

input {
    float:right;
    padding : 10px;
    margin : 15px 10px;
    border-radius : 20px
}

a {
    background : powderblue; 
    font-size : 30px;
    text-align : center;
    text-decoration : none;
    padding :10px 60px;
    font-style : bold;
    border : 5px solid black;
}

</style>

</head>
<body>
    <a href = "Employee1.php">HOME</a>
<form method = "get">
    <input type = "Submit" value ="Search" name = "submit">
    <input type = "search" placeholder = "Search location" name = "search"></input>
    
</form>
<table>
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Location</th>
        <th>currSalary</th>
        <th>prevSalary</th>
        <th>Organization</th>
    </tr>

<?php
    $conn = mysqli_connect("localhost", "root","","phpmyadmin");
    if(isset($_GET["submit"])) {
        $str = $_GET["search"];
        $sqh = "SELECT * from employeedata Where location = '$str'";

        $exe = mysqli_query($conn,$sqh);

        if($row = mysqli_num_rows($exe)> 0){
        while($row = mysqli_fetch_assoc($exe)){
                echo "<tr><td>".$row['ï»¿"firstName"']."</td><td>". $row["lastName"]. "</td><td>". $row["location"]."</td><td>". $row["prevSalary"]."</td><td>". $row["currSalary"]. "</td><td>".  $row["org"]. "</td></tr>";
            }
        }
}
    ?>
    </table>
</body>
</html>
