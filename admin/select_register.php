<div class='column'>
  <div class='btn_config'><a href="#info" id="info">Profesor</a></div>
  <div class='btn_config'><a href="#style" id="style">Estudiante</a></div>
  <div class='btn_config'><a href="#account" id="account">Administrador</a></div>
</div>
<iframe class='box_config' id="box_config" src="" style="border: transparent"></iframe>
<script type="text/javascript">
  $(document).ready(function(e) {
    $('#info').on('click', function() {
      document.getElementById("box_config").src="../selection.php?config=info";
    });
    $('#style').on('click', function() {
      document.getElementById("box_config").src="../selection.php?config=style";
    });
    $('#account').on('click', function() {
      document.getElementById("box_config").src="../selection.php?config=account";
    });
    $('#delete').on('click', function() {
      document.getElementById("box_config").src="../selection.php?config=delete";
    });
  });
</script>
