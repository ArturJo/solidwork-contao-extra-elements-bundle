<?php
// src/ContentElement/TitleSubtitleElement.php
namespace SolidWork\ContaoExtraElementsBundle\ContentElement;

use Contao\ContentElement;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;

#[AsContentElement(
    category: 'solidwork',
    type: 'sowo_title_subtitle',
    template: 'ce_title_subtitle'
)]
final class TitleSubtitleElement extends ContentElement
{
    protected function compile(): void
    {
        $this->Template->sowo_title = (string)($this->sowo_title ?? '');
        $this->Template->sowo_subtitle = (string)($this->sowo_subtitle ?? '');
        $this->Template->sowo_subtitle_position = (string)($this->sowo_subtitle_position ?? 'below');
        $this->Template->sowo_headline_level = (string)($this->sowo_headline_level ?? 'h2');
    }
}