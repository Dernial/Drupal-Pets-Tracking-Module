<?php
// $Id$
?>

<?php if(user_access('administer pets_cats')) print l("(add)", 'cats/' . $catinfo->id . "/maintnence/add") . "<br />"; ?>
<table>
	<tr>
		<td>
			Activity
		</td>
		<td>
			Type
		</td>
		<td>
			Next Date
		</td>
		<td>
			Schedule
		</td>
		<td>
			&nbsp;
		</td>
	</tr>
	
	<?php dvm($events); ?>
	
	<?php if($eventinfo) foreach($events as $event) print theme("cat_schedule_item", $event); ?>

</table>