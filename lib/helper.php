<?php

function includeFile($fileName, $variables) {
    extract($variables);
    include($fileName);
 }

?>