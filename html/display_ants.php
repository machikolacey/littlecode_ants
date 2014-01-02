<table width="75%" border="1">
  <tr> 
    <td>Queens</td>
    <td>Workers </td>
    <td>Soldiers </td>
  </tr>
  <tr> 
    <td> 
      <?php $ants->displayAnts("Queen", $ants->inst_queen  );	 ?>
    </td>
    <td> 
      <?php $ants->displayAnts("Worker", $ants->inst_worker );  ?>
    </td>
    <td> 
      <?php $ants->displayAnts("Soldier", $ants->inst_soldier  ); ?>
    </td>
  </tr>
  <tr>
    <td style=>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="text-align:right;"><form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="submit" name="submit" value="Attack Ants">
</form></td>
  </tr>
</table>
