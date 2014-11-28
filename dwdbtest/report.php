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
		<td colspan="2"><a href="insert.php"><img src="images/index_06.jpg" width="94" height="46" alt=""></a></td>
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
    <td>&nbsp;
      <table width="1024" border="1" align="center">
        <tr>
          <td align="center" bgcolor="#2F82AE">รหัส</td>
          <td align="center" bgcolor="#2F82AE">ชื่อ-สกุล</td>
          <td align="center" bgcolor="#2F82AE">อายุ</td>
          <td align="center" bgcolor="#2F82AE">อีเมล์</td>
          <td align="center" bgcolor="#2F82AE">Option</td>
          <td align="center" bgcolor="#2F82AE">Option</td>
        </tr>
        <?php do { ?>
          <tr>
            <td align="center" bgcolor="#CCCCCC"><?php echo $row_Recordset1['id']; ?></td>
            <td bgcolor="#CCCCCC"><?php echo $row_Recordset1['name']; ?></td>
            <td align="center" bgcolor="#CCCCCC"><?php echo $row_Recordset1['age']; ?></td>
            <td bgcolor="#CCCCCC"><?php echo $row_Recordset1['email']; ?></td>
            <td align="center" bgcolor="#CCCCCC"><a href="delete.php?id=<?php echo $row_Recordset1['id']; ?>">ลบ</a></td>
            <td align="center" bgcolor="#CCCCCC"><a href="update.php?id=<?php echo $row_Recordset1['id']; ?>">แก้ไข</a></td>
          </tr>
          <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    </table>
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
