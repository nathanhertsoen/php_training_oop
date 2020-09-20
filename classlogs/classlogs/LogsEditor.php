<?php

class LogsEditor{

  private $_filepath;
  private $_filename;
  protected $_logsfile;
  protected $_openlogsfile;

  public function __construct($filepath, $filename){
    $this->_filename = $filename;
    $this->setFilePath($filepath);
  }

  private function repExists($filePath){
    return file_exists($filePath);
  }

  public function setFilePath($filepath){
    if(!$this->repExists($filepath)){
      throw new Exception('Directory does not exists');
    }
    $this->_filepath = $filepath;
  }

  public function getFilePath(){
    return $this->_filepath;
  }

  public function startLogs($text){
    $this->_openlogsfile = fopen($this->_filepath . $this->_filename, 'a');
    fwrite($this->_openlogsfile, $text);
  }

  public function addLogs($text){
    fwrite($this->_openlogsfile, $text);
  }

  public function endLogs($text){
    $logsfile = $this->_openlogsfile;
    fwrite($logsfile, $text);
    // rewind($logsfile);
    fclose($logsfile);
  }



  public function __destruct(){

  }

}


//----------------------------//
//PARTIE EXPERIENCE
//----------------------------//

//   public function fullLogs(){
//     $logsfile = $this->_openlogsfile;
//
//     $file = $this->_filename;
//     $fopen = fopen($file, "r");
//     $fread = fread($fopen,filesize($file));
//     fclose($fopen);
//
//     $remove = "\n";
//     $split = explode($remove, $fread);
//     $array[] = NULL;
//     $tab = "\t";
//
//     foreach ($split as $string)
//     {
//         $row = explode($tab, $string);
//         array_push($array,$row);
//     }
//
//     echo "<pre>";
//     var_dump($array);
//     echo "</pre>";
// }
