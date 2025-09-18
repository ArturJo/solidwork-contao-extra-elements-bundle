<?php

// Palette für den Typ registrieren
$GLOBALS['TL_DCA']['tl_content']['palettes']['sowo_title_subtitle'] =
    '{type_legend},type,sowo_title,sowo_subtitle,sowo_subtitle_position,sowo_headline_level;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

// Felder definieren
$GLOBALS['TL_DCA']['tl_content']['fields']['sowo_title'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['sowo_title'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'textarea',
    'eval' => [
        'helpwizard' => true,
        'decodeEntities' => true,
        'allowHtml' => true,
        'preserveTags' => true,
        'tl_class' => 'clr long',
    ],
    'sql' => 'mediumtext NULL',
];
$GLOBALS['TL_DCA']['tl_content']['fields']['sowo_subtitle'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['sowo_subtitle'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'textarea',
    'eval' => [
        'helpwizard' => true,
        'decodeEntities' => true,
        'allowHtml' => true,
        'preserveTags' => true,
        'tl_class' => 'clr long',
    ],
    'sql' => 'mediumtext NULL',
];

$GLOBALS['TL_DCA']['tl_content']['fields']['sowo_subtitle_position'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['sowo_subtitle_position'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['above', 'below'],
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['sowo_subtitle_position_ref'],
    'eval' => [
        'includeBlankOption' => false,
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(16) NOT NULL default 'below'",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['sowo_headline_level'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['sowo_headline_level'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
    'eval' => [
        'includeBlankOption' => false,
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(3) NOT NULL default 'h2'",
];