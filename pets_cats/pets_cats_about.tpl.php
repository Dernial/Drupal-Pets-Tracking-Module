<?php
// $Id$
?>

<div>
<?php print $catinfo->name; ?><br />
<?php print $catinfo->description; ?><br />
<br />
Breed: <?php print $catinfo->breed; ?><br />
Sex: <?php print $catinfo->sex; ?> <br />
Date Born: <?php print format_date($catinfo->born, "custom", "F j, Y"); ?> <br />
Date Aquired: <?php print format_date($catinfo->recieved, "custom", "F j, Y"); ?> <br />
Aquired From: <?php print $catinfo->aquiredfrom; ?> <br />
</div>