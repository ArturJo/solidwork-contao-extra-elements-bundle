<?php

namespace SolidWork\ContaoExtraElementsBundle\ContentElement;

use Contao\ContentElement;

class TitleSubtitleElement extends ContentElement
{
    protected $strTemplate = 'ce_title_subtitle';

    protected function compile(): void
    {
        $this->Template->sowo_title = (string)($this->sowo_title ?? '');
        $this->Template->sowo_subtitle = (string)($this->sowo_subtitle ?? '');
        $this->Template->sowo_subtitle_position = (string)($this->sowo_subtitle_position ?? 'below'); // 'above'|'below'
        $this->Template->sowo_headline_level = (string)($this->sowo_headline_level ?? 'h2');          // 'h1'..'h6'
    }
}