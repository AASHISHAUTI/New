





<!DOCTYPE html>
<html>
    <head>
        <title>DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>






<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `studup` WHERE CONCAT(`name`, `dt`, `ctime`,`Message`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `studup`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include("config.inc.php");
    $connect = mysqli_connect($server, $username, $password,'Daily_Report_Interns');

    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
session_start();
if(isset($_SESSION['user'])){
	echo '<link rel="stylesheet" href="Des.css"
  </head>
    <body><center>

        <form action="showuserdata.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

            <table class="blueTable">
                <tr>

                    <th>Name</th>
                     <th>Date</th>
                     <th>Time</th>
                     <th>Message</th>
                </tr>

'
?>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["dt"];?></td>
                    <td><?php echo $row["CTime"];?></td>
                    <td><?php echo $row["message"];?></td>

                </tr>
                <?php endwhile;?>
            </table>
        </form>
        </center>

    </body>';

<?php
}
else {
	echo"<script>location.href='choose.php'</script>";
}

?>


    <?php
echo '<a href="adminmain.php"><h2 align = "center">Back</h2></a>';
    ?>
</html>
