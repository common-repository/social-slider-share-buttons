<?php
//define all variables the needed alot
if($_POST["action"] == 'update')
{
	//----------------------------------------------------list the options array values
	$single_posts_social = $_POST["single_posts_social"];
	$pages_social = $_POST["pages_social"];
	$homepage_social = $_POST["homepage_social"];
	$home_page_protection = $_POST["home_page_protection"];
	$show_social_info = $_POST["show_social_info"];
	//----------------------------------------------------Get the  options array values
	$super_social_settings = 
	Array (
			'single_posts_social' => $single_posts_social, // prevent content copy, take 2 parameters
			'pages_social' => $pages_social, // Prevent Right Click By Mouse
			'homepage_social' => $homepage_social, // PROTECTION BY CSS TECHNIQUES
			'home_page_protection' => $home_page_protection, // PROTECT THE HOME PAGE OR NOT
			'show_social_info' => $show_social_info // about the plugin
		);
		if ($super_social_settings != '' ) {
		    update_option( 'super_social_settings' , $super_social_settings );
		} else {
		    $deprecated = ' ';
		    $autoload = 'no';
		    add_option( 'super_social_settings', $super_social_settings, $deprecated, $autoload );
		}
}else //no update action
{
	$super_social_settings = ss_read_options();
}

?>
<style>
#aio_admin_main {
text-align:left;
direction:ltr;
padding:10px;
margin: 10px;
background-color: #ffffff;
border:1px solid #EBDDE2;
display: relative;
overflow: auto;
}
.inner_block{
height: 370px;
display: inline;
min-width:770px;
}
#donate{
    background-color: #EEFFEE;
    border: 1px solid #66DD66;
    border-radius: 10px 10px 10px 10px;
    height: 58px;
    padding: 10px;
    margin: 15px;
    }
</style>
<div id="aio_admin_main">
<form method="POST">
<input type="hidden" value="update" name="action">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td width="77%">

<div class="inner_block">
	<h2>Social Slider Share Buttons Options:<?php echo "<img src='$pluginsurl/images/logo.png' align='center' />";?></h2>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="60%">
		<div><font color="#C47500"><b>Change Options As You Like:</b></font></div>
	<div style="width: 603px; height: 284px; float: left; border: 1px solid #E9E9E9; padding: 4px" id="layer3">
		<table border="0" width="100%" height="270" cellspacing="0" cellpadding="0">
			<tr>
				<td width="221">Active for posts</td>
				<td>
				<select size="1" name="single_posts_social">
				<?php 
				if ($super_social_settings['single_posts_social'] == 'Enabled')
					{
						echo '<option selected>Enabled</option>';
						echo '<option>Disabled</option>';
					}
					else
					{
						echo '<option>Enabled</option>';
						echo '<option selected>Disabled</option>';
					}
				?>
				</select>
				</td>
				<td width="212">
				<p align="center"><font color="#008000">For single posts content</font></td>
			</tr>
			<tr>
				<td width="221">Active for pages</td>
				<td><select size="1" name="pages_social">
				<?php 
				if ($super_social_settings['pages_social'] == 'Enabled')
					{
						echo '<option selected>Enabled</option>';
						echo '<option>Disabled</option>';
					}
					else
					{
						echo '<option>Enabled</option>';
						echo '<option selected>Disabled</option>';
					}
				?>
				</select></td>
				<td width="212">
				<p align="center"><font color="#008000">For pages like &quot;about&quot; 
				page</font></td>
			</tr>
			<tr>
				<td width="221">Active for Home page</td>
				<td>
				<select size="1" name="homepage_social">
				<?php 
				if ($super_social_settings['homepage_social'] == 'Enabled')
					{
						echo '<option selected>Enabled</option>';
						echo '<option>Disabled</option>';
					}
					else
					{
						echo '<option>Enabled</option>';
						echo '<option selected>Disabled</option>';
					}
				?>
				</select>
				</td>
				<td width="212">
				<p align="center"><font color="#008000">Just for the main page</font></td>
			</tr>
			<tr>
				<td width="221">Active for posts</td>
				<td>
				<select size="1" name="home_page_protection">
				<?php 
				if ($super_social_settings['home_page_protection'] == 'Enabled')
					{
						echo '<option selected>Enabled</option>';
						echo '<option>Disabled</option>';
					}
					else
					{
						echo '<option>Enabled</option>';
						echo '<option selected>Disabled</option>';
					}
				?>
				</select>
				</td>
				<td width="212">
				<p align="center"><font color="#008000">Dont copy any thing! 
				even from my homepage</font></td>
			</tr>
			<tr>
				<td width="221">&nbsp;</td>
				<td>
				&nbsp;</td>
				<td width="212">&nbsp;</td>
			</tr>
			</table></div>

				<p>&nbsp;</td>
			</tr>
	</table>
<?php $checkvalue = ''; if ($super_social_settings['show_social_info'] == 'yes') { $checkvalue = 'checked';}?>
	<p><font face="Share Buttons"><input type="checkbox" name="show_social_info" value="yes" <?php echo $checkvalue ?>></font>Show 
	credit link to support us</p>

	<p align="left">
				<input type="submit" value="     Save all Settings     " name="B4" style="width: 193; height: 29; border: 1px solid #008000; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px">&nbsp;&nbsp;
	</p>

	<p>&nbsp;</p>
</div>
&nbsp;</td>
	</tr>
</table>

<p>
	</li></p>
</form></div>
<p>&nbsp;</p>