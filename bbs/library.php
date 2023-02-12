<?php
/* htmlspecialcharsを短くする */
function h($vulue) {
    return htmlspecialchars($vulue, ENT_QUOTES);
}
?>