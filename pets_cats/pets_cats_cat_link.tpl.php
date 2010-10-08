<?php
// $Id$
?>

<div>
<?php print l($catinfo->name, 'cats/' . $catinfo->name); ?> <?php if(user_access('administer pets_cats')) print l("(delete)", 'cats/' . $catinfo->name . "/delete"); ?>
</div>