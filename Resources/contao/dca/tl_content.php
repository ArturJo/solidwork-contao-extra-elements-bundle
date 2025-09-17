<?php

// Palette für den Typ registrieren
$GLOBALS['TL_DCA']['tl_content']['palettes']['title_subtitle'] =
    '{type_legend},type,headline;{text_legend},title,subtitle,subtitle_position,headline_level;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

// Felder definieren
$GLOBALS['TL_DCA']['tl_content']['fields']['title'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['title'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'textarea',
    'eval' => [
        'rte' => 'tinyMCE',
        'helpwizard' => true,
        'decodeEntities' => true,
        'tl_class' => 'clr long',
    ],
    'sql' => 'mediumtext NULL',
];
$GLOBALS['TL_DCA']['tl_content']['fields']['subtitle'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['subtitle'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'textarea',
    'eval' => [
        'rte' => 'tinyMCE',
        'helpwizard' => true,
        'decodeEntities' => true,
        'tl_class' => 'clr long',
    ],
    'sql' => 'mediumtext NULL',
];

$GLOBALS['TL_DCA']['tl_content']['fields']['subtitle_position'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['subtitle_position'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['above', 'below'],
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['subtitle_position_ref'],
    'eval' => [
        'includeBlankOption' => false,
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(16) NOT NULL default 'below'",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['headline_level'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['headline_level'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
    'eval' => [
        'includeBlankOption' => false,
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(3) NOT NULL default 'h2'",
];