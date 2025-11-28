<?php
function plugin_init_mymapform() {
   global $PLUGIN_HOOKS;

   $PLUGIN_HOOKS['csrf_compliant']['mymapform'] = true;
}

function plugin_version_mymapform() {
   return [
      'name'           => 'GLPI Forms Map Field type',
      'version'        => '1.0.0',
      'author'         => 'Jorge Teixeira',
      'license'        => 'GPLv2+',
      'homepage'       => 'https://madbox.pt',
      'minGlpiVersion' => '10.0'
   ];
}
