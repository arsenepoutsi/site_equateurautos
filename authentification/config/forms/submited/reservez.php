<?php
  try {
      $response = $app->mailer->mail($data['mail'], "Notification demande de RDV", $body, $options);
  } catch (\Exception $e) {
      $response = $e->getMessage();
  }