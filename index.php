<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Capstone Evaluation</title>
  </head>
  <body>
    
<?php
      session_start();

      if (isset($_SESSION)) {
                print"<nav><a href=\"log_out.php\">Log Out</a>";
                print" <a href=\"rubric.php\">Rubric</a></nav>";}
       else {
                print"<nav><a href=\"sign_in.php\">Sign In</a>";
                print" <a href=\"rubric.php\">Rubric</a></nav>";}
?>

<h1>Projects</h1>

<?php
    print"<table><tr><th>Projects</th><th>Status</th></tr></table>";

    $serverName = "csc354eval.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "rubric", // update me
        "Uid" => "csc354admin", // update me
        "PWD" => "GoldenBear19" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * FROM rubric";
    $getResults= sqlsrv_query($conn, $tsql);
    //echo ("Reading data from table" . PHP_EOL);
    //if ($getResults == FALSE)
    //    echo (sqlsrv_errors());
    //while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    //echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    //}
    print_r($getResults);
    print(" Test1 ");
    //for each $getResults as $name
    //{
     // print($name)
    //}
    //sqlsrv_free_stmt($getResults);

//        $db = new PDO("sqlite:rubric.db");
//        $sql = "SELECT * FROM proj_name ASC";
//        $stmt = $db->query($sql);
//        $names = $stmt->fetchall(PDO::FETCH_ASSOC);

//        print"<form action='eval.php' method='post'>";
//        foreach($names as $name)
//        {
//                $group = $name['group_name'];
//                print"<tr><td><a href=\"http://csitrd.kutztown.edu/~mperr017/ev$
//                if($_SESSION[$group])
//                {
//                        print"<td>Complete</td></tr>";
//                }
//                else
//                        print"<td></td></tr>";
//        }
//        print"<form>";
?>

  </body>
</html>





