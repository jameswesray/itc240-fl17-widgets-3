<?php include 'includes/config.php'?>
<?php get_header()?>
<?php

    
//Put clients email address here 
$to      = 'jameswesray@gmail.com';    

if(isset($_POST["FirstName"])){//show data

    
    //clean and process the post data
    $FirstName = clean_post('FirstName');
    $LastName = clean_post('LastName');
    $Email = clean_post('Email');
    $Comments = clean_post('Comments');
   
    $subject = "Contact From" . $myFirst . " " . $myLast . " " . date("F j, Y, g:i a");
    
    $myText = "The user has entered the following information:" . PHP_EOL . PHP_EOL; //double newlines 
    $myText .= $FirstName . " " . $LastName . PHP_EOL;
    $myText .= $Comments . PHP_EOL;
//change from to clients name of company or sender info
    $headers = 'From: James Ray <noreply@jameswesray.com>' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $myText, $headers);
    
    echo '
    <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Message Sent</strong>
        </h2>
        <hr class="divider">
    <p>Thank you for your information!</p>
    <p>We will get back to you within 48 hours</p>
    <p><a href="">Exit</a></p>
    ';
    
	//echo $FirstName;
	/*
    echo "
	<p>The user's name is $FirstName $LastName.</p>
	<p>$FirstName's email is $Email.</p>
	<p>Here's what $FirstName had to say:</p>
	<p>$Comments</p>
	";
    */

}else{//show form
  echo '
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Contact
          <strong>Form</strong>
        </h2>
        <hr class="divider">
        <form action="" method="post">
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="text-heading">First Name</label>
              <input type="text" name="FirstName" class="form-control">
            </div>
			<div class="form-group col-lg-4">
              <label class="text-heading">Last Name</label>
              <input type="text" name="LastName" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Email Address</label>
              <input type="email" name="Email" class="form-control">
            </div>

            <div class="clearfix"></div>
            <div class="form-group col-lg-12">
              <label class="text-heading">Comments</label>
              <textarea name="Comments" class="form-control" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
          </div>
        </form>
  ';  
    
}



?>
    <?php get_footer()?>
