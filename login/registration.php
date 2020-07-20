<?php


session_start();


$user = "sp2179"; //Enter the user name
$password = "Sweta1234"; //Enter the password
$host = "pluto.cse.msstate.edu"; //Enter the host
$dbase = "sp2179"; //Enter the database
$table = "users"; //Enter the table name

        $submitbutton= $_POST['submit'];

        $username= $_POST['username'];
        $password1= $_POST['password'];
        
        $connection= mysql_connect ($host, $user, $password, $dbase);
        if (!$connection)
        {
        die ('Could not connect:' . mysql_error());
        }
        
        mysql_select_db($connection, $dbase);
        
        $username_table= mysql_query( "SELECT username FROM $table WHERE username= '$username'" ) 
        or die("SELECT Error: ".mysql_error()); 
        
        
        $count= mysql_num_rows($username_table);
        
        
        if   ((!empty($username)) && (!empty($password)))
        {
        if ($count == 0)
        {
        mysql_query("INSERT INTO $table (username, password)
        VALUES ('$username', '$password')");
        $check= 1;
        }
        }
        
        mysql_close($connection);



?>