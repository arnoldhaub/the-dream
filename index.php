<?php

$countries = array("Australia","Brasil","Canada","China","Congo","India","Japan","Russia","UK","US");
$rates = array(1.5344173,5.4894405,1.3513112,7.0008099,2086.228,82.650629,141.55171,56.735507,0.86541814,1.045472);
// Based on https://www.xe.com/fr/currencyconverter/convert/
$moneySign = array("AUD", "BRL","CAD","CNY","CDF","INR","JPY","RUB", "GPB","USD" );

$message = "";

if(isset($_POST['submitButton'])){ //check if form was submitted
    $whatCurrency = $_POST["countries"];
    $amount = $_POST['toConvert']; //get input text
    // $message = "<p>For $amount, you will get <b>$converted</b>.</p>";

    for($i=0; $i < count($moneySign); $i++) {
        if($whatCurrency == $moneySign[$i]){
            
            $message = "<p>For $amount EUR, you will get <b>".number_format((float)$amount*$rates[$i], 2,'.', '')." ".$moneySign[$i]. "</b>.</p>";
        }
    }
    
} 



?>
<html>
 <head>
  <title>TheBestRate - Welcome on board !</title>
 </head>
 <body>
     <div class="websiteContainer">
         <h1>Change your money at the best rate ?</h1>
         <p>No need to speak, use our converter.</p>

        <h2>Converter</h2>
        <form action="" method="post">
            <?php echo $message;?>
            <label for="countries">Choose a country:</label>
            <select id="countries" name="countries">
                <option value="AUD">Australia (AUD)</option>
                <option value="BRL">Brasil (BRL)</option>
                <option value="CAD">Canada (CAD)</option>
                <option value="CNY">China (CNY)</option>
                <option value="CDF">Congo, D.R.C. (CDF)</option>
                <option value="INR">India (INR)</option>
                <option value="JPY">Japan (JPY)</option>
                <option value="RUB">Russia (RUB)</option>
                <option value="GPB">United Kingdom, UK (GPB)</option>
                <option value="USD">United States, USA (USD)</option>
            </select>

            <label for="toConvert">Enter the amount you want to convert:</label>
            <input type="number" id="toConvert" name="toConvert">
            <input type="submit" name="submitButton">
        </form>

        <h2>Rate's table</h2>
         <table style="border: 1px solid; width: 400px; text-align:center;";>
             <tr>
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