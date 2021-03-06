<?php
// File           adm_dbstat.php / ibWebAdmin
// Purpose        displays the gstat output for the selected database
// Author         Lutz Brueckner <irie@gmx.de>
// Copyright      (c) 2000, 2001, 2002, 2003, 2004, 2005 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details
// Created        <02/05/26 19:05:20 lb>
//
// $Id: adm_dbstat.php,v 1.5 2005/10/01 08:22:38 lbrueckner Exp $

if ($s_connected):

?>
<form method="post" action="<?php echo url_session($_SERVER['PHP_SELF']); ?>" name="db_stat_form">
<table cellpadding="3">
  <tr>
    <td>
      <?php 
            echo '<b>'.$adm_strings['Analyze']."</b><br>\n";
            echo get_indexed_selectlist('db_stat_option', database_statistic_options(), $s_dbstat_option); ?>
    </td>
    <td valign="bottom">
      <input type="submit" name="db_stat_select" value="<?php echo $button_strings['Select']; ?>">
    </td>
  </tr>
</table>
</form>
<div class="if">
  <iframe src="<?php echo url_session('./iframe_content.php?key='.$iframekey_dbstat); ?>" width="98%" height="<?php echo $s_cust['iframeheight']; ?>" name="adm_dbstat_iframe"></iframe>
</div>
<?php

endif;

?>
