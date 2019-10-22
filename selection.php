<?php
  $select = $_GET['config'];
  if ($select=='info') {
    echo "<center>";
    echo "<h1>Terminos y condiciones</h1>";
    echo "<br>";
    echo "<p>   </p>";
    echo "<h1>Información general</h1>";
    echo "<p>   </p>";
    echo "</center>";
  }elseif ($select=='style') {
    echo "<center>";
    echo "<div>";
    echo "<iframe src='menu_bar_model.php' width='600px' height='300px' style='border: transparent;'>";
    echo "</iframe>";
    echo "</div>";
    echo "<br>";
    echo "<div>";
    echo "<form action='style.php' method='POST'>";
    echo "<Label for='style'>Color principal:<input type='color' name='style' id='style' style='background-color: transparent; border: none; width: 500px;'></label>";
    echo "<hr>";
    echo "<Label for='type'>Tipo de barra: <select style='background-color: transparent; width: 500px;' name='theme'><option selected>Elige tema...</option><option value='dark'>Oscuro</option><option value='light'>Claro</option></select></label>";
    echo "<hr>";
    echo "<input type='submit' value='Guardar' class='btn_style' style='width: 100px; height: 20px; background-color: #1289A7; border: none; cursor: pointer; border-radius: 3px;'>";
    echo "</form>";
    echo "</div>";
    echo "</center>";
  }elseif ($select=='account') {
    echo "account";
  }elseif ($select=='delete') {
    echo "<center>";
    echo "<div>";
    echo "<h2 style='color: #ff0000;'>Advertencia</h2>";
    echo "<p>Esta a punto de eliminar su cuenta. No hay opcion de recuperación.</p>";
    echo "<input type='button' onclick='window.location.herf. 'https://www.w3schools.com value='Eliminar cuenta'>";
    echo "</div>";
    echo "</center>";
  }elseif ($select==''||$select==null) {
    $_GET['config'] = 'none';
  }
?>
