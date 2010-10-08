<?php
// $Id$
?>

<div>
<?php print l($catinfo->name, 'cats/' . $catinfo->id); ?> <?php if(user_access('administer pets_cats')) print l("(delete)", 'cats/' . $catinfo->id . "/delete"); ?>
</div>