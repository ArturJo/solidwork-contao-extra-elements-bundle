<?php

namespace SolidWork\ContaoExtraElementsBundle\ContentElement;

use Contao\ContentElement;

class TitleSubtitleElement extends ContentElement
{
    protected $strTemplate = 'ce_title_subtitle';

    protected function compile(): void
    {
        $this->Template->title = (string)($this->sowoTitle ?? '');
        $this->Template->subtitle = (string)($this->sowoSubtitle ?? '');
        $this->Template->subtitle_position = (string)($this->sowoSubtitle_position ?? 'below'); // 'above'|'below'
        $this->Template->headline_level = (string)($this->sowoHeadline_level ?? 'h2');          // 'h1'..'h6'
    }
}