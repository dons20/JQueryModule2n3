<?php
if (!empty($_POST["name"]) && is_array($_POST)) {
    echo "Post success!";
} else {
    echo "Post Unsuccessful";
}
