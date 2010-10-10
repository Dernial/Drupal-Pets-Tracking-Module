<?php
// $Id$
?>

<div>
<?php print l($catinfo->name, 'cats/' . $catinfo->pet_id); ?> <?php if(user_access('administer pets_cats')) print l("(delete)", 'cats/' . $catinfo->pet_id . "/delete"); ?>
</div>