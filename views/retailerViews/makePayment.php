<?php 
    require('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- Table Creation -->
<table width = 100%; border = 1px>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width= 10%; align = center>
            <img width = 100px; height = 100px src = "logo.png">
        </td> 
        <!-- Top Menubar -->
        <td align="right">
            <table>
                <tr>
                    <td><a href="retailerHome.php">Home|</a></td>
                    <td><a href="#">  About US |</a></td>
                    <td><a href="../../controllers/retailerControllers/logout.php">  Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr height = "700px" valign="top" >
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
             <a href="retailerEditAccount.php"> Edit Account </a><br><br> 
            <a href="retailerUpdatePrice.php"> Update & Post Latest Prices </a><br><br>
            <a href="dealWithFarmer.php"> Deal With Farmers </a><br><br>
            <a href="retailerTransportHistory.php"> Transport Products </a><br><br>
            <a href="retailerDealHistory.php"> Deal History </a><br><br>
            <a href="govTax.php"> Payment For Tax </a><br><br>
            <a href="makePayment.php"> Payment For Any Issue </a><br><br>           
        </td>
       <td valign="top">
            <h1 align="center"> Payment for any issue </h1> <hr>
            <table border="1" align="center">
            <form method="POST" action="../../controllers/retailerControllers/govtextchechk.php">
               <table align="center" style="font-size:20px;">
                    <tr>
                        <td>Username:</td>
                        <td width="300px "><input type="username" name="username" value="" placeholder="Enter Username"></td>
                         <td>Payment Method:</td>
                        <td width="300px "><input type="radio" name="payment_method" value="Bkash" > Bkash <br> 
                            <input type="radio" name="payment_method" value="Dabit" > Dabit <br>
                            <input type="radio" name="payment_method" value="Credit" > Credit <br>
                            <input type="radio" name="payment_method" value="Bank" > Bank </td> <br>
                        
                    </tr>
                    <br>
                    <tr>
                        <td>Phone Number:</td>
                        <td width="300px "><input type="number" name="phone" value="" placeholder="Enter Phone Number"></td>
                        <td>Amount:</td>
                        <td><input type="number" name="amount" value=""placeholder="Enter Payment"></td>
                        
                    </tr>

                    <tr>
                        
                        <td>City/District:</td>
                        <td width="300px "><input type="text" name="cityORdistrict" value="" placeholder="Enter Your City Or District"></td>
                         <td>Pin/Pass:</td>
                        <td width="300px "><input type="number" name="pinORpass" value="" placeholder="Enter Your Pin Or Pass"></td>  
                    </tr>
                    <br>
                    <tr>
                        
                                    
                    </tr>
                    <br>
                   
                    
                    <!-- <table align="center" > -->
                            <tr align="center" width=100%>
                                <td colspan="3">
                                  <input type="submit" name="submit" value="submit">   
                                  <input type="reset" name="reset" value="Reset">
                                </td>
                            </tr>
                    <!-- </table> -->
                

                </table>
                    
            </form> 
        </td>
            
        </td>
    </tr>

    <!-- Footer Part -->
   <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights Reserve by Gallant ltd.
        </td>
    </tr>

</table>
</html>