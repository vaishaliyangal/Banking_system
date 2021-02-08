<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>History</title>
    
</head>
<style>
    
    a{
        width:6%;
        height:10%;
        text-decoration:None;
        background-color:#f2f2f2;

    }
    
   h2{
       color:#d96459;
       margin-top:5%;
       margin-bottom:5%;
       text-decoration:none;
   }
    table{
        border-collapse:collapse;
        width:50%;
        color:#d96459;
        font-family:monospace;
        font-size:25px;
        text-align:left;
        
    }
    th{
        background-color:#d96459;
        color:white;

    }
    tr:nth-child(even) {background-color:#f2f2f2}
    </style>
    
<body>
   <a class="back" href="login.php">👈</a>
    <h2>TRANSACTION DETAILS</h2>
    <table>
     <tr>
        <th>From</th>
        <th>To</th>
        <th>Amount</th>
     </tr>
     
     <?php
$server="localhost";
$username="id16098555_root";
$password="Vaishali@123";
$db="id16098555_customer";
$conn=mysqli_connect($server,$username,$password,$db);

if($conn)
{
    echo"";
}   
else{
 die("connection failed".mysqli_connect_error());
}
$sql="SELECT * from history";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["sender"]."</td><td>".$row["receiver"]."</td><td>".$row["amount"]."</td><tr>";
    }
    echo "</table>";
    
}

else{
    echo "0 result";
}
$conn->close()

?>
</table>

</body>
</html>
