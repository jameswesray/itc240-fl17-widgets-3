<?php 
$title ="Business Casual Questionair";


?>

<?php get_header()?>
<!--Header ends here --!>
<div class="container">
<div class="bg-faded p-4 my-4 text-center">
<h1>Questionair</h1>

</br>
<p> Please fill out all information to the best of your ability</p>


<?php
//form1.php

if(isset($_POST["FirstName"])){// show data
//use var dump() on the post data to view it
$fn= $_POST["FirstName"];
$ln= $_POST["LastName"];
$e=$_POST["Email"];
$c=$_POST["Comments"];
echo '<pre>';

    
echo '</pre>';
   //
}else{//show form
    echo '
<form action="" method="post">
<label>
First Name: <br/> <input 
type="text" 
name="FirstName" 
placeholder = "Enter your name here"
required="required"
tab="10"
autofocus

/><br/>
</label>
<br/>
<label>
First Name: <br/> <input 
type="text" 
name="LastName" 
placeholder = "Enter your last name here"
required="required"
tab="20"

/><br/>
</label>
<br/>
<label>
Email: <br/>
<input
type="email" 
name="Email" 
placeholder= "required" 
tab="25">

<br/>


</label>
<br/>
<div       class="form-group">
<label>Inline Checkboxes</label>
<label class="checkbox-inline">
        <input type="checkbox">1
            </label>
<label class="checkbox-inline">
        <input 
               type="checkbox"
               >
2
            </label>
 <label      class="checkbox-inline">
        <input 
              type="checkbox">
3
          </label>
            </div>
<br/>

<label>
Comments:<br/>
<textarea name= "Comments" placeholder = "comments go here" tab=30>  </textarea>


<input type="submit" />
    
</form>    
    ';
    
}
?>
</div>
    </div>
   <!--footer starts here --!>
    <?php get_footer()?>
