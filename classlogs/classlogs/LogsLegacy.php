<?php

class LogsLegacy extends LogsEditor{


  public function startLogs($startlogs){
    $startlogs = 'ceci est une surcharge de --> ' .  $startlogs;
    parent::startLogs($startlogs);
  }

  public function endLogs($endlogs){
    $endlogs = 'ceci est une surcharge de --> ' . $endlogs;
    parent::endLogs($endlogs);
  }

}
 ?>
