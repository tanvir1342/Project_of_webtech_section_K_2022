<?php 
    require('header.php');
    require('../../models/guidline_eco.php');
    $guidline = getallguidline();
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Costing Guidelines</title>
    <link rel="stylesheet" type="text/css" href="farmercreateedit.css">
    <link rel="stylesheet" type="text/css" href="farmer.css">

    <style>
    .button_area_of_2nd_side_panel{
        color: white;
        align-items: center;
        position: absolute;
        margin-left:25px;
        margin-top: 30px;
    }
    .button_area_of_2nd_side_panel button{
        width: 200px;
        height: 30px;
        font-size: 16px;
        margin: 10px;

    }
    .function_area{
        margin-left:250px;
    }
    </style>
</head>
<body>
       <!--  menubar start from here -->

    <div class="menubar">
        <div class="menubar-icon">
            <img src="images/logo.png">
        </div>
        <div class="menubar-link">
            <a href="farmerHome.php">Home |</a>
            <a href="#"> About us |</a>
            <a href="#"> Contact us |</a>
            <a href="../../controllers/farmerControllers/logout.php"> Logout </a>
        </div>
        
    </div>

       <!--  main panel -->
    <div height="100%" class="main_panle">
       <!--  side panel div start from here -->
       <div  class="side_panel">      
        
            <div class="button_area_of_2nd_side_panel">
            <button onclick="location.href='farmerPosttype.php';">Post For Problem</button>
            <button onclick="location.href='veterinarianSupport.php';">Veterinarian Support</button>
            <button onclick="location.href='farmerMachinariesGuidelines.php';">Machinaries Guideline</button>
            <button onclick="location.href='farmingGuideline.php';">Farming Guideline</button>
            <button onclick="location.href='farmerBankingGuideline.php';">Get Support From Bank</button>
            <button onclick="location.href='farmerMarketPrices.php';" >Market Price</button>
            <!-- <button onclick="location.href='farmerCheckWeather.php';">Check Weather</button> -->
            <button onclick="location.href='farmerWaterPayments.php';">Water Payments</button>
            <button onclick="location.href='farmerGeneralPayments.php';">General Payments</button>        


        </div>
    </div>

    <!-- feature page -->

    <div class="daynamic_area">
        <h2 class="daynamic_area_heading_text">Costing Guidelines</h2><hr>
          <table border="1px" align="center" width="80%" id="userTable">
                <tr>
                    <th>Adviser Username</th>
                    <th>Guidline</th>
                </tr>
                <?php
                if ($guidline!=null) {
                    foreach($guidline as $guidline){

                ?>
                <tr>
                    <td width="20%"><?=$guidline[0]?></td>
                    <td><?=$guidline[1]?></td>
                </tr>
                <?php

                }
                }
                ?>
            </table>















<!-- <!DOCTYPE html>
<html>

<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
            
                <tr style ="font-size:20px;">
                    <td><a href="farmerHome.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="../../controllers/farmerControllers/logout.php"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>

  <tr  height = 700px>
        <td width =15% bgcolor="C1BCBC" valign="top" align="center">
            <a href="farmerEditAccount.php"> Edit Account </a><br><br> 
            <a href="farmerPosttype.php"> Post For Problem </a><br><br>
            <a href="farmerMachinariesGuidelines.php"> Machiniaries Guidelines </a><br><br>
            <a href="veterinarianSupport.php"> Veterinarian Support </a><br><br>
            <a href="farmingGuideline.php"> Farming Guidelines </a><br><br>
            <a href="farmerMarketPrices.php"> Market Prices </a><br><br>
            <a href="farmerCheckWeather.php"> Check Weather </a><br><br>
            <a href="farmerDealsWithRetailer.php"> Deal With Retailers </a><br><br>
            <a href="farmerBankingGuideline.php"> Get Support From Bank </a><br><br>
            <a href="farmerGeneralPayments.php"> General Payments </a><br><br>
            <a href="farmerWaterPayments.php"> Water Payments </a><br>       
        </td>
     
        <td valign="top">
           
            <h1 align="center">Farming Guideline</h1> <hr>
            
            <table align="center" border="1px" width="100%">
                <tr>
                    <td width="20%">Adviser username</td>
                    <td>Guidline</td>
                </tr>
                <?php
                if ($guidline!=null) {
                    foreach($guidline as $guidline){



                    ?>
                <tr>
                    <td width="20%"><?=$guidline[0]?></td>
                    <td><?=$guidline[1]?></td>
                </tr>
                    <?php

                    }
                }
                ?>
            </table>
        
        </td>
    </tr>
   
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
</table>


</html> -->