<?php

/**
 * @license    GPL 2 (https://www.gnu.org/licenses/gpl.html)
 *
 * @author Michael Jahn <michael.jahn1990@gmail.com>
 */
$lang['default_sort']          = 'Standardsortierung';
$lang['hide_index']            = 'Seiten ausblenden, die als Indexseiten verwendet werden (Hauptseite eines Namensraums)';
$lang['index_priority']        = 'Prioritätsreihenfolge der Seiten, die als Indexseiten verwendet werden, zwischen Start, Innen und Außen. Beispiel mit dem Namensraum foo:bar: start= foo:bar:&lt;start&gt;; outside= foo:bar ; inside= foo:bar:bar	';
$lang['nocache']               = 'Seiten-Cache deaktivieren, wo catlist verwendet wird';
$lang['hide_acl_nsnotr']       = 'Namensräume ausblenden, für die der Benutzer keine ACL-Leseberechtigung hat';
$lang['show_acl']              = 'ACLs ignorieren (alles anzeigen, unabhängig vom Benutzer) und Benutzerberechtigungen für jedes Element anzeigen';
$lang['useheading']            = 'Verwende die erste Überschrift für Seitennamen (unabhängig von der Einstellung „useheading” in Dokuwiki).';
$lang['showhead']              = 'Überschrift standardmäßig anzeigen; individuelle Überschreibung mit -noHead und -showHead.';
$lang['show_leading_ns']       = 'Zeige führende Namespaces für eine Seite an, für die ein Benutzer ACL-Leserechte hat, unabhängig von den Benutzer-ACLs für den Namespace.';
$lang['nswildcards']           = 'Ersetzen Sie Platzhalter in der Namespace-Zeichenfolge wie bei Seitenvorlagen.';
$lang['pagename_sanitize']     = 'Seiten, die über die Schaltfläche „Seite hinzufügen” erstellt wurden, werden bereinigt. Wenn diese Option aktiviert ist, berücksichtigt die Funktion die Konfigurationsoptionen „deaccent”, „userewrite”, „useslash” und „sepchar”.';
$lang['sort_collator_locale']  = 'Lokalisierung, die zum Sortieren von Seitennamen verwendet wird. Wenn nicht leer, wird die PHP-Klasse „Collator“ verwendet; sollte ein gültiger Lokalisierungs-Kurzcode sein. Wenn leer, wird eine einfache alphanumerische Sortierung verwendet.	';
