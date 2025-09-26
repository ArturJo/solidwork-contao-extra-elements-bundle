<?php

namespace SolidWork\ContaoExtraElementsBundle\Backend;

use Contao\DataContainer;
use Contao\System;

class ContentCallbacks
{
    /**
     * Auto-create a matching stop element after a saved start element.
     */
    public function onSubmitAutoAddStop(DataContainer $dc): void
    {
        if (!$dc->activeRecord || $dc->activeRecord->type !== 'swwe_wrapper_start') {
            return;
        }

        $start = $dc->activeRecord;
        $conn = System::getContainer()->get('database_connection');

        // Check if the next element is already a stop belonging to this start (simple heuristic)
        $next = $conn->fetchAssociative('SELECT id, type FROM tl_content WHERE pid = ? AND ptable = ? AND sorting > ? ORDER BY sorting ASC LIMIT 1', [
            (int) $start->pid,
            (string) $start->ptable,
            (int) $start->sorting,
        ]);

        if ($next && ($next['type'] ?? '') === 'swwe_wrapper_stop') {
            return; // already present
        }

        // Determine insertion sorting just after the start element
        $insertSorting = (int) $start->sorting + 1;

        $conn->insert('tl_content', [
            'pid' => (int) $start->pid,
            'ptable' => (string) $start->ptable,
            'type' => 'swwe_wrapper_stop',
            'sorting' => $insertSorting,
            'tstamp' => time(),
        ]);
    }
}
