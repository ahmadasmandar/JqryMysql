<?php
if (isset($_POST['name'])=== true && empty($_POST['name'])=== false){
    $name=$_POST['name'];
}
error_reporting(0);
if (!$db = new mysqli('127.0.0.1', 'root', '', 'ahmad')) {
    die("error connection-----");
}

if ($result = $db->query("SELECT * FROM people
")) {
    if ($num_rows = $result->num_rows) {
        while ($rows = $result->fetch_object()) {
            if($rows->first_name==$name)
            {
                echo$rows->last_name,' Created on : ',$rows->created;
                break;
            }
            
        }
    }
}
