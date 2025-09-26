<?php

namespace SolidWork\ContaoExtraElementsBundle\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(category: 'solidwork', type: 'swwe_wrapper_stop', template: 'swwe_wrapper_stop')]
class WrapperStopElementController extends AbstractContentElementController
{
    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {
        $template->swwe_close_tag = $this->determineClosingTag($model) ?: 'div';
        return $template->getResponse();
    }

    private function determineClosingTag(ContentModel $stopModel): ?string
    {
        // Try to find the matching start element above this element within the same parent
        $parentId = $stopModel->pid;
        $ptable = $stopModel->ptable;

        $siblings = ContentModel::findBy(
            ['pid=?', 'ptable=?'],
            [$parentId, $ptable],
            ['order' => 'sorting']
        );

        if (null === $siblings) {
            return null;
        }

        $counter = 0;
        $tag = null;
        foreach ($siblings as $sibling) {
            if ((int) $sibling->id === (int) $stopModel->id) {
                break; // stop scanning when we reached our stop element
            }

            if ($sibling->type === 'swwe_wrapper_start') {
                if ($counter === 0) {
                    // Potential tag to close if not shadowed by deeper nesting
                    $tag = (string) ($sibling->swwe_wrapper_tag ?: 'div');
                }
                $counter++;
            } elseif ($sibling->type === 'swwe_wrapper_stop') {
                $counter--;
                if ($counter < 0) {
                    // More stops than starts before us, reset
                    $counter = 0;
                    $tag = null;
                }
            }
        }

        // If counter > 0, $tag is from the nearest unmatched start
        return $tag ?: null;
    }
}
