{$menu = [
'Home' => 'index.php',
'De Leden' => 'leden.php',
'Het huis' => 'huis.php',
'Beerpong' => 'beerpong.php',
'Contact' => 'contact.php'
]}

{foreach $menu as $entry}
    <li><a href="{$entry}">{$entry@key}</a></li>
{/foreach}