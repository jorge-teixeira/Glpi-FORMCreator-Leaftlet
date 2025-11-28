<?php
class PluginMymapformMapQuestion extends PluginFormcreatorQuestionType {

   public function getName() {
      return __('Mapa (Leaflet)', 'mymapform');
   }

   public function showFormField($question, $value = '') {
      echo '<div id="map" style="height:400px;"></div>';
      echo '<input type="text" name="'.$question->fields['name'].'_lat" id="latitude" placeholder="Latitude">';
      echo '<input type="text" name="'.$question->fields['name'].'_lng" id="longitude" placeholder="Longitude">';

      echo '<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />';
      echo '<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>';
      echo '<script src="../plugins/mymapform/scripts/leaflet_integration.js"></script>';
   }
}
