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
   
    $subject = "Web Development Consultation" . $myFirst . " " . $myLast . " " . date("F j, Y, g:i a");
    /*
    $myText = "The user has entered the following information:" . PHP_EOL . PHP_EOL; //double newlines 
    $myText .= $FirstName . " " . $LastName . PHP_EOL;
    $myText .= $Comments . PHP_EOL;
*/
   $myText = process_post();
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
Landing Page
Online Store front
Other Application
Multi Page Site
Website Management
Website Repairs

	";
    */

}else{//show form
 


    echo '
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">Book
        <strong>Appointment</strong>
    </h2>
    <hr class="divider">
    <form action="" method="post">
        <div class="row">
            <div class="form-group col-lg-3">
                <label class="text-heading">First Name</label>
                <input type="text" name="FirstName" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="text-heading">Last Name</label>
                <input type="text" name="LastName" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label class="text-heading">Email Address</label>
                <input type="email" name="Email" class="form-control">
            </div>
             <div class="form-group col-lg-3">
                <label class="text-heading">Phone#</label>
                <input type="tel" name="Phone" class="form-control">
            </div>

            <div class="clearfix"></div>
            
            <div class="form-group col-lg-4">
                
                <p>
<label class="text-heading">Appointment Type</label><br />
 <input type="radio" name="Appointment_Type" value="Phone Call" />Phone Call <br/>
 <input type="radio"  name="Appointment_Type" value="Email" /> Email<br/>

 <input type="radio"  name="Appointment_Type" value="Google Hangouts" />Website Management<br/>
 <input type="radio"  name="Appointment_Type" value="Facebook" />Facebook <br/>
 </p>
         </div>
      
      
      <div class="form-group col-lg-4">
                
                <p>
<label class="text-heading">What do you want to know about?</label><br />
 <input type="checkbox"  name="Interests[]" value="Landing Page" />Landing Page and Email<br/>
 <input type="checkbox"  name="Interests[]" value="Store" /> Digital Store Front<br/>
 <input type="checkbox"  name="Interests[]" value="Application" />Original Idea For Application <br/>
 <input type="checkbox"  name="Interests[]" value="Multiple Pages" />Multiple Pages and Email<br/>
 <input type="checkbox"  name="Interests[]" value="Website Management" />Website Management <br/>
 </p>
         </div>
                  <div class="form-group col-lg-4">
                <label class="text-heading">Apointment Date</label>
                <input type="text" name="ApointmentDate" class="form-control">
            </div>

            <div class="form-group col-lg-12">
                <label class="text-heading">Comments</label>
                <textarea name="Comments" class="form-control" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </div>
    </form>
    '; } ?>
    <?php get_footer()?>
    <?php 



function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(", ",$_POST[$varName]) . PHP_EOL . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL . PHP_EOL;
         }
    }
    return $myReturn;
}
