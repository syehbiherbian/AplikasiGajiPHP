<<!DOCTYPE html>
<html>
<head>
	<title>hitung</title>
</head>
<script type=”text/javascript”>
<!–
function startCalculate(){
interval=setInterval("Calculate()",10);
}

function Calculate(){
var a=document.form1.harga_perunit.value;
var b=document.form1.diskon.value;
var c=document.form1.jml_barang.value;
document.form1.total.value=(a*c)-(a*c*(b/100));
}

function stopCalc(){
clearInterval(interval);
}
//–>
</script>
<body>
<form id="form1" name="form1" method="post" action="">
<table width="400" border="0" cellpadding="5" cellspacing="1" bgcolor="#333333">
<tr>
<td width="50%" bgcolor="#FFFFFF">Harga per unit </td>
<td bgcolor="#FFFFFF"><input name="harga_perunit" type="text" id="harga_perunit" style="text-align:right" onfocus="startCalculate()" onblur="stopCalc()" value="5000" /></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">Diskon</td>
<td bgcolor="#FFFFFF"><input name="diskon" type="text" id="diskon" size="10" onfocus="startCalculate()" onblur="stopCalc()"/>
%</td>
</tr>
<tr>
<td bgcolor="#FFFFFF">Jumlah barang </td>
<td bgcolor="#FFFFFF"><input name="jml_barang" type="text" id="jml_barang" size="10" onfocus="startCalculate()" onblur="stopCalc()"/></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">Total dibayar </td>
<td bgcolor="#FFFFFF"><input name="total" type="text" id="total" style="text-align:right" onfocus="startCalculate()" onblur="stopCalc()"/></td>
</tr>
</table>
</form>
</body>
</html>