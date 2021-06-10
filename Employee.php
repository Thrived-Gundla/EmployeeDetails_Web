<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmployeeDetails</title>

<style type = "text/css">
*{
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
    font-size:50px;
    outline : 0px
}
tr:nth-child(odd) {background-color : #cccccc}

tr {
    font-size : 30px;
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
<table>
    <a href = "Employee1.php">HOME</a>
    <tr>
        <th>Location</th>
        <th>Salary</th>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root","","phpmyadmin");
    /*if($conn-> connection_error){
        die("Connected failed : ".$conn->connection_error);
    }*/
    $sql = "SELECT location,ROUND(AVG(currSalary),2),SUM(currSalary) from employeedata GROUP BY location";
    $result=$conn-> query($sql);

    if($result->num_rows>0){
        while ($row = $result->fetch_assoc()){
            echo "<tr><td>". $row["location"]. "</td><td>". $row["ROUND(AVG(currSalary),2)"]."</td></tr>";
        }
        echo "</table>";
        }
    else{
        echo "0 result";
    }
    $conn-> close();
    ?>
    
    </table>
</body>
</html>