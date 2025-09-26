<p>
  <img src="logo.svg" alt="SolidWork Contao Extra Elements" width="160">
</p>

# SolidWork Contao Extra Elements Bundle

Dieses Bundle erweitert Contao um zusätzliche Inhaltselemente auf Basis von Twig-Templates. Ziel ist es, häufig benötigte Bausteine schlank, konsistent und updatefreundlich bereitzustellen. Weitere Inhaltselemente und ggf. Frontend‑Module sind geplant.

Kompatibilität: getestet mit Contao 5.3 (siehe composer.json).

## Features
- Neues Inhaltselement „Titel + Untertitel“ (`sowo_title_subtitle`).
- Saubere Twig-Templates mit leicht überschreibbaren Blöcken/Klassen.
- Kleine Backend-Verbesserungen: IDs in Listenansichten (Seiten, Artikel, Module) sichtbarer machen.

## Enthaltenes Inhaltselement: Titel + Untertitel
- Felder: `sowo_title` (HTML erlaubt), `sowo_subtitle` (HTML erlaubt)
- Optionen: `sowo_subtitle_position` (`above`|`below`, Default: `below`), `sowo_headline_level` (`h1`–`h6`, Default: `h2`)
- Template-Key: `sowo_title_subtitle`
- Original-Template-Datei: `src/Resources/contao/templates/content_element/sowo_title_subtitle.html.twig`
- Backend-Kategorie: „solidwork“

### Ausgabe (CSS-Klassen im Standard-Template)
- Wrapper: `swts-title-subtitle-wrapper`
- Titel: `swts-headline-title`
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

## Backend-Verbesserungen (ID-Anzeige)
Dieses Bundle liefert optionale Label-Callbacks, die in Listenansichten die jeweilige ID anhängen (z. B. nützlich zur schnellen Referenz):
- Seiten (tl_page)
- Artikel (tl_article)
- Module (tl_module)

Hinweis: Die Callbacks befinden sich in `src/Backend/LabelCallbacks.php`. Je nach Projekt-Setup können sie in eigenen DCA-Dateien eingebunden/aktiviert werden.

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
MIT-Lizenz. Siehe LICENSE im Repository.
