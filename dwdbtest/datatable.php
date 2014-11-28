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
$query_showdata = "SELECT * FROM students";
$showdata = mysql_query($query_showdata, $myconnect) or die(mysql_error());
$row_showdata = mysql_fetch_assoc($showdata);
$totalRows_showdata = mysql_num_rows($showdata);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แสดงผล</title>
</head>

<body>
<p>&nbsp;</p>
<table border="1" align="center">
  <tr>
    <td align="center" bgcolor="#0099CC">รหัส</td>
    <td align="center" bgcolor="#0099CC">ชื่อ-สกุล</td>
    <td align="center" bgcolor="#0099CC">อายุ</td>
    <td align="center" bgcolor="#0099CC">อีเมล์</td>
  </tr>
  <?php do { ?>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><?php echo $row_showdata['id']; ?></td>
      <td bgcolor="#CCCCCC"><?php echo $row_showdata['name']; ?></td>
      <td align="center" bgcolor="#CCCCCC"><?php echo $row_showdata['age']; ?></td>
      <td bgcolor="#CCCCCC"><?php echo $row_showdata['email']; ?></td>
    </tr>
    <?php } while ($row_showdata = mysql_fetch_assoc($showdata)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($showdata);
?>
