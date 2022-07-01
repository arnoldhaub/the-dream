<?php

$countries = array("Australia","Brasil","Canada","China","Congo","India","Japan","Russia","UK","US");
$rates = array(1.5344173,5.4894405,1.3513112,7.0008099,2086.228,82.650629,141.55171,56.735507,0.86541814,1.045472);
// Based on https://www.xe.com/fr/currencyconverter/convert/
$moneySign = array("AUD", "BRL","CAD","CNY","CDF","INR","JPY","RUB", "GPB","USD" )

?>
<html>
 <head>
  <title>The Dream - The best currencies converter</title>
 </head>
 <body>
     <div class="websiteContainer">
         <h1>Change your money at the best rate ?</h1>
         <p>We have got what you truly need ! No need to keep searching for the best place to exchange money. We have created a revolutionnary system that will give you the best rate on earth.</p>

         <h2>How so ?</h2>
         <p>Let's not speak. We prefer to show you directly. Use our converter and see by yourself, you will not be disapointed !</p>

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
           

        <h2>Converter</h2>
         <label for="countries">Choose a country:</label>
            <select id="countries" name="countries">
                <option value="australia">Australia</option>
                <option value="brasil">Brasil</option>
                <option value="canada">Canada</option>
                <option value="china">China</option>
                <option value="congo">Congo (D.R.C.)</option>
                <option value="india">India</option>
                <option value="japan">Japan</option>
                <option value="russia">Russia</option>
                <option value="uk">United Kingdom (UK)</option>
                <option value="us">United States (US)</option>
            </select>

            <label for="toConvert">Enter the amount you want to convert:</label>
            <input type="number" id="toConvert" name="toConvert">
            <input type="submit">
        <?php echo '<p>This is not a first paragraph.</p>'; ?> 
    </div>
 </body>
</html>