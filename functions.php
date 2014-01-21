<?php

//function to remove the version from displaying in wordpress.
function responsiva_remove_version() {
return '';
}
add_filter('the_generator', 'responsiva_remove_version');



?>