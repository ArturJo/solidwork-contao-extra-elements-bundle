<?php

namespace SolidWork\ContaoExtraElementsBundle\ContentElement;

use Contao\ContentElement;

class TitleSubtitleElement extends ContentElement
{
    protected $strTemplate = 'ce_title_subtitle';

    protected function compile(): void
    {
        $this->Template->title = (string)($this->title ?? '');
        $this->Template->subtitle = (string)($this->subtitle ?? '');
        $this->Template->subtitle_position = (string)($this->subtitle_position ?? 'below'); // 'above'|'below'
        $this->Template->headline_level = (string)($this->headline_level ?? 'h2');          // 'h1'..'h6'
    }
}