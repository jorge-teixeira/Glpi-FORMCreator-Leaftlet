<?php
function plugin_mymapform_install() {
   global $PLUGIN_HOOKS;

   // Registrar novo tipo de questão para o FormCreator
   $PLUGIN_HOOKS['plugin_formcreator_question_types']['mymapform'] = [
      'map' => 'PluginMymapformMapQuestion'
   ];

   return true;
}

function plugin_mymapform_uninstall() {
   return true;
}
