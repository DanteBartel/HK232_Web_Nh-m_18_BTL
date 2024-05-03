<?php
function is_fav_book($id, $ids) {
    if (in_array($id, $ids)) {return true;} else {return false;}
}
?>