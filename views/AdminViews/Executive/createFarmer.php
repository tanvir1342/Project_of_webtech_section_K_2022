<!DOCTYPE html>
<html>
<!-- center table creation -->
<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
                <!-- center menubar -->
                <tr style ="font-size:20px;">
                    <td><a href="Home.php">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="#"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
   <tr  height = 700px>
        <td width =10%; valign = top; style ="background-color:#C1BCBC; font-size:20px;">
            <a href="listOfuser.php">user Account</a><br><br>
            <a href="verifyDocument.php">verfiy ducument</a><br><br>
            <a href="controlDeaL.php">control deal</a><br><br>
            <a href="approvePost.php">Approve post</a><br><br>
            <a href="EditProfile.php">Edit profile</a><br><br>
        </td>
        <!-- output of user -->
        <td valign = top style ="background-color:#F5F2F1 ">

            <h3 align = center>Farmer user List</h3>
            <table border="1px" align="center" width="80%">
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone number</td>
                    <td>Farmer type</td>
                    <td>NID</td>
                </tr>
                <tr>
                    <td>Tomal</td>
                    <td>tomal@gmail.com</td>
                    <td>01777777777777</td>
                    <td>Plantetion</td>
                    <td>441341564445q36626</td>
                </tr>
                <tr>
                    <td>Tomal</td>
                    <td>tomal@gmail.com</td>
                    <td>01777777777777</td>
                    <td>Plantetion</td>
                    <td>441341564445q36626</td>
                </tr>
                <tr>
                    <td>Tomal</td>
                    <td>tomal@gmail.com</td>
                    <td>01777777777777</td>
                    <td>Plantetion</td>
                    <td>441341564445q36626</td>
                </tr>
            </table><br>

            <!-- creat new user account  -->
            <h3 align="center">Creat new user</h3><br>
            <form method="POST">
               <table align="center" style="font-size:20px;">
                <tr>
                    <td>Name:</td>
                    <td width="300px "><input type="name" name="name" value=""></td>
                    <td>Email:</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <br>
                <tr>
                    <td>phone number:</td>
                    <td width="300px "><input type="number" name="phoneNumber" value=""></td>
                    <td>Adress:</td>
                    <td><input type="text" name="adress" value=""></td>
                </tr>
                <br>
                <tr>
                    <td>Farmer type:</td>
                    <td width="300px "><input type="text" name="farmerType" value=""></td>
                    <td>NID number:</td>
                    <td><input type="number" name="nidNumber" value=""></td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
                <tr align="center">
                    <td colspan="3">
                      <input type="submit" name="submit" value="submit">   
                    </td>
                </tr>
            </table>
                    
            </form>
            


        </td>
    </tr>
    <!-- footer section -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


</html>