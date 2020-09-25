<?php
if (COCKPIT_API_REQUEST) {
  if(!function_exists("gravatar")){

    function gravatar($email, $size=70, $d = 'mm', $r = 'g') {
      // Définition des paramètres utiles...
      // $email = md5($email);
      // Détermination de l'url paramétrée
      $url = 'http://www.gravatar.com/avatar/';
      $url .= md5( strtolower( trim( $email ) ) );
      $url .= "?s=$size&amp;d=$d&amp;r=$r";
      // $url.= '&amp;default=%s';
      // Création de l'url
      return  $url;
    }

    $app->renderer->extend(function($content){
      return preg_replace('/(\s*)@gravatar\((.+?)\)/', '$1<?= gravatar($2) ?>', $content);
    });
  }
  if(!function_exists("reformatDate")){
    function reformatDate($date, $from_format = 'd/m/Y', $to_format = 'Y-m-d') {
      $date_aux = date_create_from_format($from_format, $date);
      return date_format($date_aux,$to_format);
    }
    $app->renderer->extend(function($content){
      return preg_replace('/(\s*)@reformatDate\((.+?)\)/', '$1<?= reformatDate($2) ?>', $content);
    });
  }
  $app->on('forms.submit.before', function($form, &$data, $frm, &$options) use($app) {
      if ($template = $app->path("#config:forms/submit/{$form}.php")) {
        include($template);
      }
  });

  $app->on('forms.submit.after', function($form, &$data, $frm) use($app) {  
    if ($template = $app->path("#config:forms/submited/{$form}.php")) {
      $options = [];
      if ($reponse = $app->path("#config:forms/emails/{$form}.receipt.php")) {
       $body = $app->renderer->file($reponse, ['data' => $data, 'frm' => $frm], false);
      // Prepare template manually
      } else {
        $body = [];
        foreach ($data as $key => $value) {
            $body[] = "<b>{$key}:</b>\n<br>";
            $body[] = (is_string($value) ? $value:json_encode($value))."\n<br>";
        }
        $body = implode("\n<br>", $body);
      }
        include($template);
    }
  });
}