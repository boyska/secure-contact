<?php $text=<<<EOD
<script language="Javascript" type="text/javascript">

/*
var keytyp = 0;      // 0=RSA, 1=Elgamal
var keyid = '02044b001cd7a551';
var pubkey = 'BADelitpUqMZLn+bryZR5rK9J3eu+pRVFP5tpboOlIwO2vqO/rCi8VvT2TPzEJarWhyZ465NIohYCiia9vaGUEp4rsDzFnVNgpON47yPew1zCmOOofituf+X6Qlaxylm5NnO4vnRcmoF4IbGwSCqyGgGor29D75Hovwlj1q6BWHYWwAGKQ==';
 */

var keytyp = 1;      // 0=RSA, 1=Elgamal
var keyid = '07c580d5a08e26a1'
var pubkey = 'CAC8SVUD1d/K1kjQyjl0/frItuBRqiZ58dKDW9KHiCGjJOjCXSzgBAPD63iqpxDSOzldoiOFLVJEbHUMphq4QWq42W70R9OxVPJaKi/ywSHhy7bxQwbMOZPWjB+R8o97eP3pQGpfcT5CyinpwxolZRkQc7Q2teJoYx3lyPoomnJbD3iRYLV6Z036tfInJAanIL1r32/1khe+Ka6IoQYYwlehr4/cfrywqNLULHkhlZgSJm1vLhEHeK8FUg5C/DFC2uAH4qSVvmOoPv8wICD09DBdPWYgw6cgMTE7eF4Zgxkz53pTUR/nFXb84yiKRC95SiWo3Xud18vd/RgDS0fHcTSLAAMFB/9qjczu2uUEpDxFFo9VU6RH26bkin8Rz4c6w98hnIcsUexgZhEcVo+xxx6LNiFImbF1JySe4838Vcow2y5Y3HLovkZVjl9QyEBzDpKL2RsMu23qt+eog9ecdhVSVYd47SIO7NN3Qj971YJpU5PdVd+JWdEWylOR1t791Xy4gEgvnoEo3NjiuasPh+Pr9mG649Ip1747OGDBynHsPzhbtbAqhDT+8D0SNAAUSbfgu6QCSvzzOC4v/i29LCUBWZvNZmrA16tDh3U32QzpaR2uQSVFgRRAqGH6KCrHB0MTY8l7gRDx93YvQMKJQuCufFIVa/CSvnyhd6Phuf4qbrX+AcWc'

function load()
{
	return;
}


function encrypt()
{
 var startTime=new Date();

 var text=document.t.text.value+'\\r\\n';
 document.t.text.value=doEncrypt(keyid, keytyp, pubkey, text);
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