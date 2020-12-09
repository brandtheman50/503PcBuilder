<?php
include("C:/xampp/htdocs/pcbuilder/503PcBuilder/Includes/dbh.inc.php");

if(isset($_POST['edit'])) {
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $cdate = $_POST['pdate'];
    $category = $_POST['pcategory'];
    $enclosure = $_POST['enclosure'];
    $motherboard = $_POST['mobo'];
    $cpu = $_POST['cpu'];
    $cpu_cooler = $_POST['cpucooler'];
    $memory_ram = $_POST['memory'];
    $storage = $_POST['mainstorage'];
    $power_supply = $_POST['powersupply'];
    $graphics_card = $_POST['gpu'];

    $qry = " UPDATE projects SET pname=' $pname ', cdate=' $cdate ', category=' $category ', enclosure=' $enclosure ', motherboard=' $motherboard ', cpu=' $cpu ', cpu_cooler=' $cpu_cooler ', memory_ram=' $memory_ram ', storage=' $storage ', power_supply=' $power_supply ', graphics_card=' $graphics_card ' WHERE pid=$pid ";
    $result= mysqli_query($conn, $qry);
    
    header('location:projects.php');
}
?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Previous Projects</title>
    <style>
             body {
             background-image: url('Background.jpg');
            }

            #input {
                width: 100%;
                background-color: aliceblue;
                margin-left: auto;
                margin-right: auto;
            }
            form { 
                margin-left: auto;
                margin-right: auto; 
                width:300px;
            }
            button{
                text-align: center;
                margin-left: auto;
                margin-right: auto;

            }
            .container {
                width: auto;
                clear: both;
            }

            .container input {
                width: 100%;
                clear: both;
            }
            img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: -35%;
            }
        </style>
    </head>

    <body>
       <h1 style="text-align: center; color: black ;", font="">Update Your PC</h1>

    <div class="container">
       <form action="/pcbuilder/503PcBuilder/Projectspage/edit_projects.php" method= "POST">
            <p>ID of Project: <input type= "text" name='pid' placeholder="ID of Project"/></p>
            <p>Name of Project: <input type= "text" name='pname' placeholder="Name of Project"/></p>
            <p>Date: <input type= "text" name="pdate" placeholder="Date"/></p>
            <p>Category: <input type= "text" name="pcategory" placeholder="Category"/></p>

            <?php

            $sql = "SELECT pname from enclosure";
            $result =  mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Case:<select name = 'enclosure'>";
        
            

            if( $resultcheck > 0){
                while( $row = mysqli_fetch_assoc($result)){

                     echo "<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from cpu";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> CPU:<select name = 'cpu'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from cpu_cooler";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> CPU Cooler:<select name = 'cpucooler'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from graphics_card";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Graphics Card:<select name = 'gpu'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from memory_ram";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> CPU Cooler:<select name = 'memory'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from motherboard";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Motherboard:<select name = 'mobo'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from power_supply";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Power Supply:<select name = 'powersupply'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from storage";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Storage:<select name = 'mainstorage'>";
            $insert;
            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            ?>
            
            <button type="submit" name="edit">Save Project</button>
        </form>
    </div>
          

            <form action="/pcbuilder/503PcBuilder/Projectspage/projects.php" method="get">
                 <h2 style="text-align: center;" >
                    <button>Previous Builds</button>
                </h2>
            </form>

            <form action="/pcbuilder/503PcBuilder/Homepage/homepage_layout.html" method="get">
                <h2 style="text-align: center;" >
                    <button>Cancel</button>
                </h2>
            </form>

    
    </body>
    
</html>

