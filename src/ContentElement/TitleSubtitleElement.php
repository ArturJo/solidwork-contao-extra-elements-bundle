<?php
// src/ContentElement/TitleSubtitleElement.php
namespace SolidWork\ContaoExtraElementsBundle\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(
    category: 'solidwork',
    type: 'sowo_title_subtitle'
)]
class TitleSubtitleElement extends AbstractContentElementController
{
    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {
        $template->sowo_title = $model->sowo_title ?? '';
        $template->sowo_subtitle = $model->sowo_subtitle ?? '';
        $template->sowo_subtitle_position = $model->sowo_subtitle_position ?? 'below';
        $template->sowo_headline_level = $model->sowo_headline_level ?? 'h2';

        return $template->getResponse();
    }
}