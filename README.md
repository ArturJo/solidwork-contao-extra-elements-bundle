# SolidWork Contao Extra Elements Bundle

Dieses Bundle erweitert Contao 5.3 um zusätzliche Inhaltselemente (und perspektivisch Frontend-Module) auf Basis von Twig-Templates. Ziel ist es, häufig benötigte Bausteine schlank, konsistent und updatefreundlich bereitzustellen.

## Enthaltene Elemente
Aktuell enthält das Bundle folgende Inhaltselemente:

- Titel + Untertitel (`ce_title_subtitle`)
  - Felder: `headline` (Level H1–H6), `subheadline`
  - Template: `ce_title_subtitle.html.twig`
  - Hinweis: Das Template kann projektspezifisch überschrieben werden (siehe Abschnitt „Templates überschreiben“).

Weitere Elemente und ggf. Frontend-Module sind geplant und werden nach und nach ergänzt.

## Installation
```bash
composer require solidwork/contao-extra-elements-bundle
```
Anschließend den Contao Manager/Cache aktualisieren und bei Bedarf die Datenbank aktualisieren.

## Verwendung
1. Neues Inhaltselement in einem Artikel anlegen.
2. Als Typ das gewünschte Element auswählen (z. B. „Titel + Untertitel“).
3. Felder befüllen und speichern – die Ausgabe erfolgt über das zugehörige Twig-Template.

## Templates überschreiben
Um die Ausgabe anzupassen, kann das Template im Projekt überschrieben werden:

1. Template-Datei aus dem Bundle ermitteln (z. B. `ce_title_subtitle.html.twig`).
2. Eine gleichnamige Datei im Projekt-Template-Verzeichnis anlegen (z. B. `templates/ce_title_subtitle.html.twig`).
3. Anpassungen vornehmen; Contao verwendet automatisch das projektseitige Template.

Tipp: Eigene CSS/JS separat organisieren und versionieren, um Updates des Bundles problemlos einspielen zu können.

## Anforderungen
- PHP `>= 8.1`
- Contao `^5.3`

## Support und Quellen
- Projekt-Homepage/Quellcode: https://github.com/ArturJo/solidwork-contao-extra-elements-bundle
- Issues/Bugtracker: https://github.com/ArturJo/solidwork-contao-extra-elements-bundle/issues

## Lizenz
MIT-Lizenz. Siehe LICENSE im Repository.
