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
        'helpwizard' => false,
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
        'helpwizard' => false,
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

// Wrapper Start/Stop palettes
$GLOBALS['TL_DCA']['tl_content']['palettes']['swwe_wrapper_start'] =
    '{type_legend},type,swwe_wrapper_tag,swwe_wrapper_id,swwe_wrapper_classes,swwe_wrapper_attributes;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['palettes']['swwe_wrapper_stop'] =
    '{type_legend},type;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

// Wrapper fields
$GLOBALS['TL_DCA']['tl_content']['fields']['swwe_wrapper_tag'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['swwe_wrapper_tag'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['div','section','article','span','p','ul','ol','li','nav','header','footer','main','aside'],
    'eval' => [
        'includeBlankOption' => false,
        'mandatory' => true,
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(16) NOT NULL default 'div'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['swwe_wrapper_id'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['swwe_wrapper_id'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'maxlength' => 128,
        'tl_class' => 'w50',
    ],
    'sql' => 'varchar(128) NULL',
];

$GLOBALS['TL_DCA']['tl_content']['fields']['swwe_wrapper_classes'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['swwe_wrapper_classes'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'maxlength' => 255,
        'tl_class' => 'w50',
    ],
    'sql' => 'varchar(255) NULL',
];

$GLOBALS['TL_DCA']['tl_content']['fields']['swwe_wrapper_attributes'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['swwe_wrapper_attributes'],
    'exclude' => true,
    'inputType' => 'textarea',
    'eval' => [
        'decodeEntities' => true,
        'preserveTags' => true,
        'tl_class' => 'clr long',
        'helpwizard' => false,
    ],
    'sql' => 'text NULL',
];

// Register backend callback to auto-create stop element
$GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'][] = [\SolidWork\ContaoExtraElementsBundle\Backend\ContentCallbacks::class, 'onSubmitAutoAddStop'];
