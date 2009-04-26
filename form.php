<?php 
$config = parse_ini_file('config.ini');

$text=<<<EOD
<script language="Javascript" type="text/javascript">

function load()
{
	return;
}


function encrypt()
{
 var startTime=new Date();

 var text=document.t.text.value+'\\r\\n';
 document.t.text.value=doEncrypt({$config['gpg_id']}, {$config["gpg_type"]}, {$config['gpg_public_key']}, text);
 document.encrypted.message.value = document.t.text.value;

 var endTime=new Date();
 //document.t.howLong.value=(endTime.getTime()-startTime.getTime())/1000.0;
 alert(document.encrypted.message.value)
 document.encrypted.submit();
}

</script>

<form name="t" action="javascript:encrypt()">
<table align="center">


<tr>
<td>Write your message here</td>
</tr>
<tr>
<td colspan="2" width="100%"><textarea name="text" rows="16" cols="80"></textarea></td>
</tr>
<tr>
<td align="left"><input value="Send" type="submit"></td>
</tr>
<tr>
<td>Worried about <b>privacy</b>? Don't worry, this message can't be read by anyone else than me.</td>
</tr>
</tbody></table>
</form>

<form name="encrypted" action="formmail.php" method="post">
	<input type="hidden" name="message">
</form>

EOD;
echo ($text); ?>