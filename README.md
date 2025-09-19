<p>
  <img src="logo.svg" alt="SolidWork Contao Extra Elements" width="160">
</p>

# SolidWork Contao Extra Elements Bundle

Dieses Bundle erweitert Contao (getestet mit 5.3) um zusätzliche Inhaltselemente auf Basis von Twig-Templates. Ziel ist es, häufig benötigte Bausteine schlank, konsistent und updatefreundlich bereitzustellen. Weitere Inhaltselemente und ggf. Frontend‑Module sind geplant.

## Enthaltene Inhaltselemente
- Titel + Untertitel (`sowo_title_subtitle`)
  - Felder: `sowo_title` (HTML erlaubt), `sowo_subtitle` (HTML erlaubt)
  - Optionen: `sowo_subtitle_position` (`above`|`below`), `sowo_headline_level` (`h1`–`h6`)
  - Template: `content_element/sowo_title_subtitle.html.twig`
  - Backend-Kategorie: „solidwork“

## Installation
```bash
composer require solidwork/contao-extra-elements-bundle
```
Anschließend den Contao Manager/Cache aktualisieren und – falls erforderlich – die Datenbank aktualisieren.

## Verwendung
1. In einem Artikel ein neues Inhaltselement anlegen.
2. Als Typ in der Kategorie „solidwork“ das Element „Titel + Untertitel“ auswählen.
3. Felder befüllen und speichern – die Ausgabe erfolgt über das Twig-Template.

## Template anpassen/überschreiben
Um die Ausgabe anzupassen, kann das Template projektseitig überschrieben werden:

1. Name des Templates: `sowo_title_subtitle` (Datei liegt im Bundle unter `src/Resources/contao/templates/content_element/sowo_title_subtitle.html.twig`).
2. Eine gleichnamige Datei im Projekt anlegen: `templates/contao/content_element/sowo_title_subtitle.html.twig`.
3. Anpassungen vornehmen; Contao verwendet automatisch das projektseitige Template.

Hinweis zu CSS-Klassen im Standard-Template:
- Wrapper: `swts-title-subtitle-wrapper`
- Titel: `swts-headline-title`
- Untertitel oben: `swts-headline-subline swts-headline-subline--top` (Text: `swts-headline-subline--top-text`)
- Untertitel unten: `swts-headline-subline swts-headline-subline--bottom` (Text: `swts-headline-subline--bottom-text`)

## Anforderungen
- PHP `>= 8.1`
- Contao `^5.3`

## Support und Quellen
- Projekt-Homepage/Quellcode: https://github.com/ArturJo/solidwork-contao-extra-elements-bundle
- Issues/Bugtracker: https://github.com/ArturJo/solidwork-contao-extra-elements-bundle/issues

## Lizenz
MIT-Lizenz. Siehe LICENSE im Repository.
