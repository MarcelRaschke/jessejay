<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Contact zu JesseJay</title>
	<link href="_css/jessejay.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		body
		{
			background-image:url(/_images/img_contact_sound.gif);
			background-repeat:no-repeat;
		}
	</style>
</head>

<body bgcolor="#CCCCCC" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<form action="/contact.php" method="POST" name="contact" id="contact" onSubmit="return checkemail()">
<table width="450" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td colspan="2" height="60"><img src="_images/spacer.gif" width="40" height="60" alt="" border="0"></td>
</tr>
<tr>
	<td colspan="2" valign="top">
	
	<table width="390" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td width="20"><img src="_images/spacer.gif" width="20" height="1" alt="" border="0"></td>
		<td width="120"><img src="_images/spacer.gif" width="120" height="1" alt="" border="0"></td>
		<td width="250"><img src="_images/spacer.gif" width="250" height="1" alt="" border="0"></td>
	</tr>
	<tr>
		<td width="20" rowspan="10">&nbsp;</td>
		<td valign="top" colspan="2" height="60" class="txt">For bookings please call: +41 (0)76 322 52 62, use this form or email me at: <a href="mailto:info@jessejay.ch" class="linkhi">info@jessejay.ch</a>.</td>
	</tr>
	<tr>
		<td width="160" class="txt">Name*</td>
		<td align="left"><input type="text" size="16" maxlength="256" name="name" class="txt250"></td>
	</tr>
	<tr><td height="5" colspan="2">&nbsp;</td></tr>
						
	<tr>
		<td class="txt">Email*</td>
		<td align="left"><input type="text" size="16" maxlength="256" name="email" class="txt250"></td>
	</tr>
	<tr><td height="5" colspan="2">&nbsp;</td></tr>
						
	<tr>
		<td class="txt">Betreff</td>
		<td align="left"><input type="text" size="16" maxlength="256" name="betreff" class="txt250"></td>
	</tr>
	<tr><td height="5" colspan="2">&nbsp;</td></tr>
						
	<tr>
		<td class="txt" valign="top">Nachricht</td>
		<td align="left"><textarea rows="5" name="nachricht" class="txt250" style="width:250px;" wrap="physical"></textarea></td>
	</tr>
	<tr><td height="5" colspan="2">&nbsp;</td></tr>
						
	<tr>
		<td class="txt" valign="top">&nbsp;</td>
		<td align="right">
			<input type="submit" name="action" value="send" class="button">
		    <input type="reset" value="reset" class="button">
		</td>
	</tr>
	</table>
	
	</td>
</tr>
</table>
</form>

<script language="JavaScript1.2">
var testresults

function checkemail()
{
	var strEmail = document.contact.email.value;
	var testEmail = /^.+@.+\..{2,3}$/;
	var strName = document.contact.name.value;
	var testresults = true;
	
	if (testEmail.test(strEmail) == false && strName.length > 3)
	{
		alert("Please input a valid email address!");
		testresults = false;
	}
	else if (testEmail.test(strEmail) == true && strName.length < 3)
	{
		alert("Please input your name!");
		testresults = false;
	}
	else if (testEmail.test(strEmail) == false && strName.length < 3)
	{
		alert("Please enter your name and email!");
		testresults = false;
	}
	
	return (testresults);
}
</script>
