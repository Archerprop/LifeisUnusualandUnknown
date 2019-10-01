<?php
  $select = $_GET['config'];
  $name = $_SESSION['nickname'];
  if ($select=='info') {
    echo "info";
    echo "<center>";
    echo "<h1>Terminos y condiciones</h1>";
    echo "<br>";
    echo "<p>   </p>";
    echo "<h1>Información general</h1>";
    echo "<p>   </p>";
    echo "</center>";
  }elseif ($select=='style') {
    echo "style";
    echo "<center>";
    echo "<div>";
    echo "<iframe src='menu_bar.php' width='600px' height='70px'>";
    echo "</iframe>";
    echo "</div>";
    echo "<br>";
    echo "<div>";
    echo "<form action='style.php' method='POST'>";
    echo "<Label for='style'>Color principal:<input type='color' name='style' id='style' style='background-color: transparent; border: none; width: 500px;'></label>";
    echo "</form>";
    echo "</div>";
    echo "</center>";
  }elseif ($select=='account') {
    echo "account";
  }elseif ($select=='delete') {
    echo "delete";
  }elseif ($select==''||$select==null) {
    $_GET['config'] = 'none';
  }
?>
