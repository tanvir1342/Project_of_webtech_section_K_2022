<?php 
    require('header.php');
?>
<html>
<head>
	<title>Blogger</title>
</head>
<body>

<table border="1" width="100%">
	<tr height="100px" style="background-color:#C1BCBC">
		<td width="10%" align="center">
			<img width="100px" height="100px" src="logo.png">
		</td>
		<td align="right">
			<a href="bloggerHome.php">Home</a>
			<a href="0">| About Us</a>
			<a href="../../controllers/bloggerControllers/logout.php">">| Logout</a>
		</td>
		

	</tr>
	<tr height="700px"> 
		<td width="10%" valign="top" align="center" bgcolor="C1BCBC">
		
		<a href="EditAccount.php">Edit Account</a><br><br>
		<a href="WritePost.php">Write a Post</a><br><br>
		<a href="ReadPost.php">Read Posts</a><br><br>
		<a href="PublishResearchPaper.php">Research Paper</a><br><br>
		
		</td>
		<td valign="top">
			<h1 align="center">Publish Your Research Paper</h1><hr>
			<form method="POST" action="../../controllers/bloggerControllers/BloggerResearchPaperPendingCheck.php">

			<label><b>Blogger Username:</b></label><br>
			<input type="text" name="blogger_username"><br><br>

			<label for="domain"><b>Domain Name:</b></label><br>
			<input type="text" name="domain_name" required><br><br>

			<label for="thesis"><b>Thesis Topic:</b></label><br>
			<input type="text" name="thesis_topic" required><br><br>

			<label for="researchpaper"><b>Publish Your Research Paper:</b></label><br>
			<textarea name="research_paper" rows="8" cols="100">
				
			</textarea><hr>
			
			
				<input type="submit" name="submit" value="Submit">   
                <input type="reset" name="reset" value="Cancel">

            </form>
			
			







		</td>
		

	</tr>
    <!-- Footer Part -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           All Copyrights @2022 Reserved by Gallant ltd.
        </td>
    </tr>
</table>


</html>