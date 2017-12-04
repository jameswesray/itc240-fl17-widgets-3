`
<?php include 'includes/config.php'?>
<?php get_header()?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:posters.php');
}


$sql = "select * from posters where CustomerID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $Name = stripslashes($row['Name']);
        $Price = stripslashes($row['Price']);

        $title = "Title Page for " . $Name;
        $pageID = $Name;
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>This customer does not exist</p>';
}

?>

    <h1>
        <?=$pageID?>
    </h1>
    <?php
    
    
if($Feedback == '')
{//data exists, show it
echo'<h1 style="align: center;">' . $Name.' Poster</h1>';
    echo '<div class="col-md-3">';
    echo 'Poster Name: <b>' . $Name . '</b> </br>';
    echo 'Price: <b>' . $Price . '</b> ';
 echo '</div>';
    echo '<div class = "col-md-9">';
    echo '<img src="uploads/poster' . $id . '.jpeg" alt="No poster preview available" height="420" width="420" />';
    
    echo '</div>'; 
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="posters.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
        <?php get_footer()?>
