<?php

use SolidWork\ContaoExtraElementsBundle\Backend\LabelCallbacks;

// Append the page ID to the label in the page tree without losing default icons/states
$GLOBALS['TL_DCA']['tl_page']['list']['label']['label_callback'] = [LabelCallbacks::class, 'pageLabelWithId'];
