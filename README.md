<p>
  <img src="logo.svg" alt="SolidWork Contao Extra Elements" width="160">
</p>

# SolidWork Contao Extra Elements Bundle

Dieses Bundle erweitert Contao um zusätzliche Inhaltselemente auf Basis von Twig-Templates. Ziel ist es, häufig benötigte Bausteine schlank, konsistent und updatefreundlich bereitzustellen. Weitere Inhaltselemente und ggf. Frontend‑Module sind geplant.

Kompatibilität: getestet mit Contao 5.3 (siehe composer.json).

## Features
- Neues Inhaltselement „Titel + Untertitel“ (`sowo_title_subtitle`).
- Saubere Twig-Templates mit leicht überschreibbaren Blöcken/Klassen.

## Enthaltenes Inhaltselement: Titel + Untertitel
- Felder: `sowo_title` (HTML erlaubt), `sowo_subtitle` (HTML erlaubt)
- Optionen: `sowo_subtitle_position` (`above`|`below`, Default: `below`), `sowo_headline_level` (`h1`–`h6`, Default: `h2`)
- Template-Key: `sowo_title_subtitle` (interner Name: `content_element/sowo_title_subtitle`)
- Original-Template-Datei (im Bundle): `templates/content_element/sowo_title_subtitle.html.twig` (alternativ vorhanden unter `contao/templates/content_element/sowo_title_subtitle.html.twig`)
- Backend-Kategorie: „solidwork“

### Ausgabe (CSS-Klassen im Standard-Template)
- Kein eigener Wrapper-Container: Das Bundle fügt lediglich die Klasse `swts-title-subtitle-wrapper` zu den bestehenden CE-Wrapper-Attributen hinzu (über den `wrapper`-Block des Contao-Basis-Templates).
- Titel: `content-headline swts-headline-title`
- Untertitel oben: `swts-headline-subline swts-headline-subline--top` (Text: `swts-headline-subline--top-text`)
- Untertitel unten: `swts-headline-subline swts-headline-subline--bottom` (Text: `swts-headline-subline--bottom-text`)

## Installation
```bash
composer require solidwork/contao-extra-elements-bundle
```
Danach den Contao Cache leeren (bzw. im Contao Manager aktualisieren) und – falls erforderlich – die Datenbank aktualisieren.

## Verwendung
1. In einem Artikel ein neues Inhaltselement anlegen.
2. Als Typ in der Kategorie „solidwork“ das Element „Titel + Untertitel“ auswählen.
3. Felder befüllen und speichern – die Ausgabe erfolgt über das Twig-Template.

## Template überschreiben/anpassen
Um die Ausgabe anzupassen, kann das Template projektseitig überschrieben werden:

1. Name des Templates (Key): `sowo_title_subtitle`.
2. Datei im Projekt anlegen: `templates/contao/content_element/sowo_title_subtitle.html.twig`.
3. Gewünschte Anpassungen vornehmen; Contao verwendet automatisch das projektseitige Template.

> Tipp: Die Twig-Blöcke `subtitle_top`, `title`, `subtitle_bottom` und die jeweiligen `*_class`-Blöcke erlauben feine Anpassungen ohne das komplette Markup kopieren zu müssen.


## Anforderungen
- PHP `>= 8.1`
- Contao `^5.3`

## Roadmap
- Weitere Inhaltselemente
- Optionale Frontend-Module

## Support und Quellen
- Projekt-Homepage/Quellcode: https://github.com/ArturJo/solidwork-contao-extra-elements-bundle
- Issues/Bugtracker: https://github.com/ArturJo/solidwork-contao-extra-elements-bundle/issues

## Lizenz
GNU Lesser General Public License v2.1 (LGPL-2.1). Siehe LICENSE im Repository.

### Lizenz-Variante: -only vs -or-later
- "-only" bedeutet, dass die Software ausschließlich unter genau dieser Lizenzversion (hier: 2.1) steht. Neuere Lizenzversionen sind nicht automatisch eingeschlossen.
- "-or-later" bedeutet, dass wahlweise auch jede spätere Version der Lizenz verwendet werden darf (z. B. 2.1 oder jede spätere Version).

Dieses Bundle verwendet aktuell die SPDX-Angabe "LGPL-2.1-or-later" in der composer.json, d. h. Version 2.1 oder jede spätere Version ist zulässig.
