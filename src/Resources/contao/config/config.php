<?php

// Register wrapper start/stop types so that the Contao backend indents
// elements placed between them and applies wrapper logic.
$GLOBALS['TL_WRAPPERS']['start'][] = 'swwe_wrapper_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'swwe_wrapper_stop';
