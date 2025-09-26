<?php

use SolidWork\ContaoExtraElementsBundle\Backend\LabelCallbacks;

// Append the module ID to each child record label in the modules list
$GLOBALS['TL_DCA']['tl_module']['list']['sorting']['child_record_callback'] = [LabelCallbacks::class, 'moduleChildWithId'];
