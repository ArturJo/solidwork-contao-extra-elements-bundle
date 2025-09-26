<?php

namespace SolidWork\ContaoExtraElementsBundle\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(category: 'solidwork', type: 'swwe_wrapper_start', template: 'swwe_wrapper_start')]
class WrapperStartElementController extends AbstractContentElementController
{
    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {
        // Field values
        $tag = (string) ($model->swwe_wrapper_tag ?: 'div');
        $id = (string) ($model->swwe_wrapper_id ?: '');
        $classes = (string) ($model->swwe_wrapper_classes ?: '');
        $attrsRaw = (string) ($model->swwe_wrapper_attributes ?: '');

        // Merge Contao cssID field [id, class]
        [$cssId, $cssClass] = (array) ($model->cssID ?? [null, null]);
        $id = $id ?: (string) ($cssId ?: '');
        $classes = trim(trim($classes . ' ' . (string) ($cssClass ?: '')));

        // Parse attributes from textarea lines, supporting key:"value" and key='value' or key=value and boolean attributes
        $attributes = $this->parseAttributes($attrsRaw);

        // Expose to template
        $template->swwe_tag = $tag;
        $template->swwe_id = $id;
        $template->swwe_classes = $classes;
        $template->swwe_attributes = $attributes;

        return $template->getResponse();
    }

    /**
     * Parse attributes text into associative array preserving order.
     */
    private function parseAttributes(string $raw): array
    {
        $result = [];
        $lines = preg_split('/\r?\n/', trim($raw));
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || str_starts_with($line, '#') || str_starts_with($line, '//')) {
                continue;
            }

            // Accept formats:
            // data-foo:"bar baz"
            // data-foo='bar baz'
            // data-foo=bar
            // disabled
            if (!str_contains($line, '=')) {
                $result[$line] = true; // boolean attribute
                continue;
            }

            [$name, $value] = array_map('trim', explode('=', $line, 2));
            $value = trim($value);
            if ((str_starts_with($value, '"') && str_ends_with($value, '"')) || (str_starts_with($value, "'") && str_ends_with($value, "'"))) {
                $value = substr($value, 1, -1);
            }
            $result[$name] = $value;
        }
        return $result;
    }
}
