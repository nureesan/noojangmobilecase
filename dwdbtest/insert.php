<?php require_once('Connections/myconnect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO students (name, age, email) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['age'], "int"),
                       GetSQLValueString($_POST['email'], "text"));

  mysql_select_db($database_myconnect, $myconnect);
  $Result1 = mysql_query($insertSQL, $myconnect) or die(mysql_error());

  $insertGoTo = "report.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_myconnect, $myconnect);
$query_Recordset1 = "SELECT * FROM students";
$Recordset1 = mysql_query($query_Recordset1, $myconnect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<html>
<head>
<title>yru</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (pic1.jpg) -->
<table id="Table_01" width="1260" height="564" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="12">
			<img src="images/index_01.jpg" width="1260" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/index_02.jpg" width="590" height="29" alt=""></td>
		<td colspan="2"><a href="index.html"><img src="images/index_03.jpg" width="80" height="29" alt=""></a></td>
		<td colspan="8">
			<img src="images/index_04.jpg" width="590" height="29" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/index_05.jpg" width="539" height="489" alt=""></td>
		<td colspan="2">
			<img src="images/index_06.jpg" width="94" height="46" alt=""></td>
		<td rowspan="2">
			<img src="images/index_07.jpg" width="37" height="489" alt=""></td>
		<td>
			<img src="images/index_08.jpg" width="94" height="46" alt=""></td>
		<td rowspan="2">
			<img src="images/index_09.jpg" width="26" height="489" alt=""></td>
		<td>
			<img src="images/index_10.jpg" width="96" height="46" alt=""></td>
		<td rowspan="2">
			<img src="images/index_11.jpg" width="39" height="489" alt=""></td>
		<td>
			<img src="images/index_12.jpg" width="95" height="46" alt=""></td>
		<td rowspan="2">
			<img src="images/index_13.jpg" width="41" height="489" alt=""></td>
		<td>
			<img src="images/index_14.jpg" width="94" height="46" alt=""></td>
		<td rowspan="2">
			<img src="images/index_15.jpg" width="105" height="489" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/index_16.jpg" width="94" height="443" alt=""></td>
		<td>
			<img src="images/index_17.jpg" width="94" height="443" alt=""></td>
		<td>
			<img src="images/index_18.jpg" width="96" height="443" alt=""></td>
		<td>
			<img src="images/index_19.jpg" width="95" height="443" alt=""></td>
		<td>
			<img src="images/index_20.jpg" width="94" height="443" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="539" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="51" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="43" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="37" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="94" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="26" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="96" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="39" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="95" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="41" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="94" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="105" height="1" alt=""></td>
	</tr>
</table>
<table width="1260" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">&nbsp; <p>เพิ่มข้อมูลพื้นฐานนักศึกษาชั้นปีที่ 4 สาขา คอมพิวเตอร์ธุรกิจ</p>
    <p>&nbsp;</p>
    <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
      <table align="center">
        <tr valign="baseline">
          <td nowrap align="right">ชื่อ-สกุล </td>
          <td><input type="text" name="name" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">อาย </td>
          <td><input type="text" name="age" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">อีเมล์ </td>
          <td><input type="text" name="email" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">&nbsp;</td>
          <td><input type="submit" value="เพิ่มข้อมูล"></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1">
    </form>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td><img src="pic2.jpg" width="1260" height="264"></td>
  </tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
