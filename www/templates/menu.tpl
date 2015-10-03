{$menu = [
'Home' => 'index.php',
'De Leden' => 'leden.php',
'Het Huis' => 'huis.php',
'De Sage' => 'sage.php',
'Beerpong' => 'beerpong.php',
'Contact' => 'contact.php'
]}

{foreach $menu as $entry}
    <li><a href="{$entry}">{$entry@key}</a></li>
{/foreach}