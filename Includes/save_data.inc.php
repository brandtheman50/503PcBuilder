<?php
include_once 'C:/xampp/htdocs/pcbuilder/503PcBuilder/Includes/dbh.inc.php';

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


$sql = "INSERT INTO `projects` (`pid`, `pname`, `cdate`, `category`, `enclosure`, `motherboard`, `cpu`, `cpu_cooler`, `memory_ram`, `storage`, `power_supply`, `graphics_card`)
VALUES (' $pid ', ' $pname ', ' $cdate ', ' $category ', ' $enclosure ', ' $motherboard ', ' $cpu ', ' $cpu_cooler ', ' $memory_ram ', ' $storage ', ' $power_supply ', ' $graphics_card ');";


mysqli_query($conn, $sql);

header("Location: ../Homepage/homepage_layout.html?=Project Saved!=success");
?>
