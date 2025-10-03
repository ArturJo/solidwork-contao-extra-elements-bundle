<?php

declare(strict_types=1);

namespace SolidWork\ContaoExtraElementsBundle\EventListener;

use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\DataContainer;
use Contao\System;

class LabelCallbackListener
{
    /**
     * Decorate the core tl_page label callback and append the ID.
     *
     * Signature must match tl_page::addIcon.
     */
    #[AsCallback(table: 'tl_page', target: 'list.label.label')]
    public function pageLabelWithId($row, $label, DataContainer $dc = null, $imageAttribute = '', $blnReturnImage = false, $blnProtected = false, $isVisibleRootTrailPage = false): string
    {
        // Call the original callback to keep icons and states
        $base = System::importStatic('tl_page')->addIcon($row, $label, $dc, $imageAttribute, $blnReturnImage, $blnProtected, $isVisibleRootTrailPage);

        // If only the image should be returned, do not append anything
        if ($blnReturnImage) {
            return $base;
        }

        return $base . ' <span class="tl_gray">[ID: ' . (int) ($row['id'] ?? 0) . ']</span>';
    }

    /**
     * Decorate the core tl_article label callback (addIcon) and append the ID.
     */
    #[AsCallback(table: 'tl_article', target: 'list.label.label')]
    public function articleLabelWithId($row, $label): string
    {
        $base = System::importStatic('tl_article')->addIcon($row, $label);
        return $base . ' <span class="tl_gray">[ID: ' . (int) ($row['id'] ?? 0) . ']</span>';
    }

    /**
     * Decorate the core tl_module child_record_callback (listModule) and append the ID.
     */
    #[AsCallback(table: 'tl_module', target: 'list.sorting.child_record')]
    public function moduleChildWithId(array $row): string
    {
        $base = System::importStatic('tl_module')->listModule($row);
        return $base . ' <span class="tl_gray">[ID: ' . (int) ($row['id'] ?? 0) . ']</span>';
    }
}
