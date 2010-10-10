<?php
// $Id$
?>

		<?php dvm($item); ?>

	<tr>
		<td>
			<?php print $item->activity; ?>
		</td>
		<td>
			<?php print $item->type; ?>
		</td>
		<td>
			<?php print format_date($item->next_date, "custom", "F j, Y"); ?>
		</td>
		<td>
			<?php print $item->schedule; ?>
		</td>
		<td>
			<?php if(user_access('administer pets_cats')) print l("(edit)", 'cats/' . $catinfo->id . "/maintnence/" . $item->id . "/edit"); ?>
		</td>
	</tr>


</table>