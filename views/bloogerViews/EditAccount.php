
<html>
<head>
	<title>Blogger</title>
</head>
<body>

<table border="1" width="100%">
	<tr height="100px">
		<td width="10%">Logo</td>
		<td align="right">
			<a href="bloggerHome.php">Home</a>
			<a href="0">| About Us</a>
			<a href="0">| Logout</a>
		</td>
		

	</tr>
	<tr height="700px"> 
		<td width="10%" valign="top" align="center">
		
		<a href="EditAccount.php">Edit Account</a><br><br>
		<a href="WritePost.php">Write a Post</a><br><br>
		<a href="ReadPost.php">Read Posts</a><br><br>
		<a href="ShareLink.php">Share Link</a><br><br>
		<a href="PublishResearchPaper.php">Research Paper</a><br><br>
		
		</td>
		<td valign="top">
			<h1 align="center">Edit Profile</h1><hr>

			<form action="0" style="border:1px solid">
<div class="container">

<p>Please fill in this form to update your account Information.</p>
<hr>

<label for="username"><b>Change Username:</b></label>
<input type="text" placeholder="Enter New Username" name="username" required><br><br>

<label for="email"><b>Change Email:</b></label>
<input type="text" placeholder="Enter New Email" name="email" required><br><br>

<label for="psw"><b>Change Password:</b></label>
<input type="password" placeholder="Enter New Password" name="psw" required><br><br>

<label for="psw-repeat"><b>Confirm Password:</b></label>
<input type="password" placeholder="Confirm New Password" name="psw-repeat" required><br><br>

<label>
<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
</label><br><br>



<div class="clearfix">
<button type="button" class="cancelbtn">Cancel</button>
<button type="submit" class="updatebtn">Update</button><br><br>
</div>
</form>
			






		</td>
		

	</tr>
	<tr height="50px" align="center">
		<td colspan="3"> Copyright@2022, Created By Team Gallant</td>
		

	</tr>



</table>

</body>



</html>