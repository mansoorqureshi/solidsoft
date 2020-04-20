<?php include('header.php')?>

<?php
function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    
     // validation expected data exists
    if(!isset($_POST['cname']) ||
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['num']) ||
        !isset($_POST['sub']) ||
        !isset($_POST['bug']) ||
        !isset($_POST['category']) ||
        !isset($_POST['message'])  ||
        !isset($_POST['radio-group']))
        
        
        {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    else{
        $companyName = ($_POST['cname']);
        $custName = ($_POST['name']);
        $custEmail = ($_POST['email']);
        $custTelNum = ($_POST['num']);
        $from_subject = ($_POST['sub']);
        $custBudget = ($_POST['bug']);
        $category = ($_POST['category']);
        $textAreaValue = ($_POST['message']);
        $selected = $_POST['radio-group'];



        if(!empty($_POST['radio-group'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['radio-group']);
echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.


   for($i=0; $i < $checked_count; $i++)
    {
      echo($selected[$i] . " ");
    }
    
    $_POST["radio-group"] = implode(",\n ", $_POST["radio-group"] );
$selected = $_POST['radio-group'];
  }
  

}

        
        
        
        
        $a="Company Name: " .$companyName."\n";
        $a.="Customer Name: " .$custName."\n";
        $a.="Email: ". $custEmail."\n";
        $a.="Customer Phone: " .$custTelNum."\n";
        $a.="Budget: " .$custBudget."\n";
        $a.="Category: " .$category."\n";
        $a.="Message: " .$textAreaValue."\n";
        $a.="Website Type: " .$selected."\n";
        
?>

<?php
$to      = 'mansoor_arshad@hotmail.com';
$subject = $from_subject;
$message = $a;
$headers = 'From: webmaster@weknow-it.co.uk' . "\r\n" .
'Reply-To: info@weknow-it.co.uk' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);?>

<?php include('choose.php') ?>
<?php include('footer.php') ?>