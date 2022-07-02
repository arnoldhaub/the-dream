<?php
// All countries and information put in arrays
// Rate based on https://www.xe.com/fr/currencyconverter/convert/
$countries = array("Australia","Brasil","Canada","China","Congo","India","Japan","Russia","UK","US");
$rates = array(1.5344173,5.4894405,1.3513112,7.0008099,2086.228,82.650629,141.55171,56.735507,0.86541814,1.045472);
$moneySign = array("AUD", "BRL","CAD","CNY","CDF","INR","JPY","RUB", "GPB","USD" );

// Empty message to show nothing when the visitor haven't pushed something yet.
$message = "";


// "Script" to display the amount converted.
if(isset($_POST['submitButton'])){ // If form submitted
    $whatCurrency = $_POST["countries"]; // Get the country
    $amount = $_POST['toConvert']; // Get the amount that need to be converted 

    for($i=0; $i < count($moneySign); $i++) { // Try to find the good currency and change the value of "$message"
        if($whatCurrency == $moneySign[$i]){
            
            $message = "<p>$amount EUR → <b>".number_format((float)$amount*$rates[$i], 2,'.', '')." ".$moneySign[$i]. "</b>.</p>";
        }
    }
    
} 
?>

<!-- Now let's code the website like pro's. -->

<html lang="en">
 <head>
  <title>TheBestRate - Welcome on board !</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="styles.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
 </head>
 <body class="bg-light d-flex align-items-center justify-content-center mw-100">
     <div class="bg-white col-11 col-lg-6 text-center rounded-3 px-3"> <!-- website container -->

        <div class="row bg-danger text-white rounded-3 mb-3 p-1">
            <h1 >Change your money<br>at the best rate ?</h1>
        </div>
        
<!-- F O R M -->

        <div class="row d-flex align-items-center justify-content-center">
            <form action="" method="post" class="w-100" >
                <p><label for="countries" class="form-label lead">c u r r e n c y </label><br>
                <select id="countries" name="countries" class="form-control text-center">

                    <?php 

                        for($i=0; $i <= count($countries); $i++){
                            if($i < count($countries)) {
                                echo "<option value='$moneySign[$i]'>$countries[$i] - ($moneySign[$i])</option>";
                                // OLD MANUAL VERSION => <option value="AUD">Australia (AUD)</option>
                            }
                            else{
                                
                                echo "</select></p>";
                            }
                        }
                    ?>
                   
                <p><label for="toConvert" class="form-label lead">a m o u n t</label> <br>
                <input type="number" id="toConvert" name="toConvert" placeholder='Euro you want to exchange' class="form-control text-center" required="required"></p>
                <input type="submit" name="submitButton" class="btn btn-secondary text-white btn-lg text-uppercase w-100" value="s u b m i t">
            </form>
            <?php echo "<div id='message'>$message</div>"; ?>
        </div>

<!-- T A B L E - Exchange rate -->

        <h2 class="text-dark">Exchange rate</h2>
         <table class="w-100 border border-light mb-3 text-center text-secondary">
             <tr class="bg-light text-uppercase">
                 <th>Country</td>
                 <th>1 € equal :</td>
            </tr>
            <?php 

                for($i=0; $i <= count($countries); $i++){
                    if($i < count($countries)) {
                        echo "<tr><td>$countries[$i]</td><td>$rates[$i] $moneySign[$i]</td></td>";
                    }
                    else{
                        
                        echo "</table>";
                    }
                }

            ?>
    </div>
 </body>
</html>