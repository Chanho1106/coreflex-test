<? session_start(); 
$Dir_name="nayaboard";
$Dir_path="../";					
$logingroup="1";
$loginskin="basic" ;
include $Dir_path.$Dir_name."/out.php";
?>
<html>
	<head>
		<title>Experience COREFLEX</title>
		<meta http-equiv="imagetoolbar" content="no">
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
		<link rel="stylesheet" type="text/css" href="<?=$Dir_path.$Dir_name?>/class/css/style.css">
	</head>
	<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
		<table width="942" height="700" border="1" cellspacing="0" bordercolordark="#FFFFFF" bordercolorlight="#CCCCCC" align="center">
			<tr height="40">
				<td width="222" bgcolor="#E7E7E7" align="center"><b>���ߺ��� VER. PHP</b></td>
				<td width="120" bgcolor="#E7E7E7" align="center">�޴�1</td>
				<td width="120" bgcolor="#E7E7E7" align="center">�޴�2</td>
				<td width="120" bgcolor="#E7E7E7" align="center">�޴�3</td>
				<td width="120" bgcolor="#E7E7E7" align="center">�޴�4</td>
				<td width="120" bgcolor="#E7E7E7" align="center">�޴�5</td>
				<td width="120" bgcolor="#E7E7E7" align="center">�޴�6</td>
			</tr>
			<tr>
				<td width="222" align="center" valign="top" style="padding:5 5 0 5">
				<?   

				?>
				<? include $Dir_path.$Dir_name."/out_login.php" ?>
				</td>
				<td colspan="6" valign="top" style="padding:10 10 10 10">
					<table width="720" border="0" cellpadding="0" cellspacing="0">
						<tr height="30">
							<td width="360" >&nbsp;<b>��������</b></td>
							<td>&nbsp;&nbsp;</td>
							<td width="360" >&nbsp;<b>�����Խ���</b></td>
						</tr>
						<tr>
							<td height="1" bgcolor="#DDDDDD"></td>
							<td></td>
							<td height="1" bgcolor="#DDDDDD"></td>
						</tr>
						<tr height="100">
							<td valign="top">
							<?out_basic('notice', 'basic', 5, 30)?>
							</td>
							<td>&nbsp;&nbsp;</td>
							<td valign="top">
							<?out_basic('notice', 'basic', 5, 30)?>
							</td>
						</tr>
						<tr height="10">
							<td colspan="3"></td>
						</tr>
						<tr height="30">
							<td colspan="3">&nbsp;<b>�����Խ���</b></td>
						</tr>
						<tr>
							<td height="1" bgcolor="#DDDDDD" colspan="3"></td>
						</tr>
						<tr height="100">
							<td colspan="3" valign=top>
							<?out_gallery('notice', 'gallery', 5, 40, 120, 85, 5)?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr height="20">
				<td width="100%" bgcolor="#E7E7E7" colspan=7>&nbsp;</td>
			</tr>
		</table>
	</body>
</html>
