<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Customers_Details</title>
</head>
<style>
    .home{
        width:10%;
        height:20%;
        text-decoration:None;
       

    }
    h2{

       margin-top:10%;
        color:#d96459;
        margin-bottom:2%;
    }
    .send{
        display:inline;
        margin:2%;
        margin-right:6%;
        background-color:#d96459;
        padding:21px;
        padding-left:25px;
        padding-right:25px;
        color:white;
        font-size:large;
       border-radius:7px;
       text-decoration:None
    }
    .history{
        background-color:#d96459;
        padding:20px;
        padding-left:40px;
        padding-right:40px;
        color:white;
        font-size:large;
        border-radius:7px;
        text-decoration:None
    }
    div{
        margin-top:5%;
    }
    

    table{
        border-collapse:collapse;
        width:60%;
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
    <a class=home href="index.html">⏏HOME</a>
    <div>
    <a class="send" href="send.html">SEND MONEY</a>
    <a class="history" href="history.php">HISTORY</a>

    <h2>COSTUMER DETAILS</h2>
    <table>
     <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>BALANCE</th>
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
$sql="SELECT * from payment";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["sr_no"]."</td><td>".$row["name"]."</td><td>".$row["balance"]."</td><tr>";
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
