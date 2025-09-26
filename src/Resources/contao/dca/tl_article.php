<?php

use SolidWork\ContaoExtraElementsBundle\Backend\LabelCallbacks;

// Append the article ID to the label in the article list without losing default icon
$GLOBALS['TL_DCA']['tl_article']['list']['label']['label_callback'] = [LabelCallbacks::class, 'articleLabelWithId'];
