<?php
include "control.php";
include "../header.php";
$action = $_POST["action"];
$show = "";
if ($action == "saveadminnotes")
{
$htmlcode= $_POST["htmlcode"];
$htmlcode = mysql_real_escape_string($htmlcode);
$q = "update adminnotes set htmlcode='".$htmlcode."'";
$r = mysql_query($q);
$show = "Admin Notes Saved";
} # if ($action == "saveadminnotes")
?>
<table cellpadding="4" cellspacing="4" border="0" align="center" width="100%">
<tr><td align="center" colspan="2"><div class="heading">Welcome <?php echo $adminname ?> To Your Admin Panel</div></td></tr>
<tr><td align="center" colspan="2"><br><a href="<?php echo $domain ?>/ViralMailerAndAdvertisingScript-BasicVersion-MANUAL.pdf" target="_blank">Download the Manual for this PHP Script</a></td></tr>
<tr><td align="center" colspan="2"><br></td></tr>
<?php
if ($show != "")
{
?>
<tr><td align="center" colspan="2"><br><?php echo $show ?></td></tr>
<?php
}
$q = "select * from adminnotes where name='Admin Notes'";
$r = mysql_query($q);
$rowz = mysql_fetch_array($r);
$htmlcode = $rowz["htmlcode"];
?>
<form action="controlpanel.php" method="post">
<tr><td align="center" colspan="2"><textarea rows="10" cols="65" name="htmlcode"><?php echo $htmlcode ?></textarea></td></tr>
<tr><td align="center" colspan="2"><br><input type="hidden" name="action" value="saveadminnotes"><input type="submit" value="SAVE" class="sendit">
</form></td></tr>

</table>
<br><br>
<?php
include "../footer.php";
exit;
?>