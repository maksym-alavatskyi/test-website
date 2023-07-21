
<?php
class inputData{
  private $moveTo;

  public function __construct($data) {
    $this->moveTo = $data === null ? "d" : $data;//default
  }

  public function __destruct(){
    unset($this);
  }
  public function getMoveTo(){
    return $this->moveTo;
  }

}

class divGenerator{

  public function __construct(){
    //null
  }

  public function generateMoveableDiv($divArr,$currentPick){
    $htmlStr =  "<div id='mover'>
    <p>I'm moveable</p>
    <code>Choose where to move me to</code>
    <br />
    <select class='selectDiv'>";
    $temp = "";
    foreach ($divArr as $value) {
      if ($currentPick === $value) {
        continue;
      }
      $temp .= '<option>';
      $temp .= $value;
      $temp .= '</option>';
    }
    $htmlStr .= $temp;
    $htmlStr .= "</select>
    <br />
    <br />
    <input type='button' id='positionChanger' value='Click me to change position' />
    </div>";

    return $htmlStr;
  }
}

$d = new inputData(isset($_GET['moveTo']) ?$_GET['moveTo'] : null );
$mD = new divGenerator();

//echo isset();

$divs = array("first","second","third","fourth");
?>



<!--  HTML page rendering from this part and on-->


<html>
<head>
  <title>EA Testing page</title>
  <link rel="stylesheet" href="./css/style_aviad_ea.css" media="screen" title="no title" charset="utf-8">
  <script src="//code.jquery.com/jquery-1.8.3.min.js"></script>
</head>
<body>
  <div class="content">
    <?php if ($d->getMoveTo() == "d"){
      echo $mD->generateMoveableDiv($divs,$d->getMoveTo());
    } ?>
    <div class="containerZone">

      <?php
      foreach ($divs as $divId) {
        $stub = "<div class='customContainer' id=' " . $divId  . " '>";
        if ($divId == $d->getMoveTo()){
          $stub.= $mD->generateMoveableDiv($divs,$d->getMoveTo());
        }else{
          $stub .= "<h1> this is # " . $divId . " </h1>";
        }
        $stub .= "</div>";
        echo $stub;
      }
      ?>
        <br />
        <code id="recorderVer"></code>
    </div>

  </div>


  <script src="js/script_aviad_ea.js"></script>
  <?php include 'ct_bottom.php'; ?>
  <a href="/">Go back to portal</a>
</body>
</html>
