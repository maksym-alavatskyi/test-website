
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


<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta charset="UTF-8">

    <title>ClickTale | Testing Portal | EA Testing page </title>
    <link rel="stylesheet" href="style_aea.css" media="screen" title="no title" charset="utf-8">
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
    <![endif]-->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="script_aea.js"></script>
  </head>

  <body>

    <div  id="container">
      <!-- Begin Header Wrapper -->
      <div  id="page-top">
        <div  id="header-wrapper">
          <!-- Begin Header -->
          <div  id="header">
            <div  id="logo"><a href="index.php"><img src="style/images/logo.png" alt="Delphic" /></a></div>
            <!-- Logo -->
            <!-- Begin Menu -->
            <div  id="menu-wrapper">
              <div  id="smoothmenu1" class="ddsmoothmenu">
                <?php
                include 'menu.php'
                ?>
              </div>
            </div>
            <!-- End Menu -->
          </div>
          <!-- End Header -->
        </div>
      </div>
      <!-- End Header Wrapper -->

      <!-- Begin Wrapper -->
      <div id="wrapper" class=divwithid>
        <div class="content">

          <!------------------------------------------------------------------------------------------>


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

            </div>

          </div>

          <!-- EOF -->



        </div> <!-- End content -->
      </div>  <!-- End Wrapper -->

      <div class="clearfix"></div>
      <div class="push"></div>
    </div> <!-- End container-->

    <!-- Begin Footer -->
    <div id="footer-wrapper">
      <?php
      include 'footer.php'
      ?>
    </div>
    <!-- End Footer -->


    <?php
    include 'ct_bottom.php'
    ?>


  </body>
  </html>
