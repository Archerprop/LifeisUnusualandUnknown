<?php
  include '../../../../connect.php';
  $sql = "SELECT * FROM usuario WHERE rango=2";
  $check = $mysqli->query($sql);
?>
<style media="screen">
  table.paleBlueRows {
    font-family: "Times New Roman", Times, serif;
    border: 1px solid #FFFFFF;
    width: 350px;
    height: 200px;
    text-align: center;
    border-collapse: collapse;
  }
  table.paleBlueRows td, table.paleBlueRows th {
    border: 1px solid #FFFFFF;
    padding: 3px 2px;
  }
  table.paleBlueRows tbody td {
    font-size: 13px;
  }
  table.paleBlueRows tr:nth-child(even) {
    background: #D0E4F5;
  }
  table.paleBlueRows thead {
    background: #0B6FA4;
    border-bottom: 5px solid #FFFFFF;
  }
  table.paleBlueRows thead th {
    font-size: 17px;
    font-weight: bold;
    color: #FFFFFF;
    text-align: center;
    border-left: 2px solid #FFFFFF;
  }
  table.paleBlueRows thead th:first-child {
    border-left: none;
  }

  table.paleBlueRows tfoot {
    font-size: 14px;
    font-weight: bold;
    color: #333333;
    background: #D0E4F5;
    border-top: 3px solid #444444;
  }
  table.paleBlueRows tfoot td {
    font-size: 14px;
  }
</style>
<table style="margin: 50px auto;" class="paleBlueRows">
  <thead>
    <tr>
      <th>numero de identificacion</th>
      <th>nombre</th>
      <th>apellido</th>
      <th>correo</th>
      <th>edad</th>
      <th>sexo</th>
    </tr>
  </thead>
  <tbody>
<?php
while ($value = $check->fetch(PDO::FETCH_ASSOC)) {
?>
    <tr>
      <td><?php echo  $value['id'];?></td>
      <td><?php echo  $value['nombre'];?></td>
      <td><?php echo  $value['apellido'];?></td>
      <td><?php echo  $value['correo'];?></td>
      <td><?php echo  $value['edad'];?></td>
      <td><?php echo  $value['sexo'];?></td>
    </tr>
<?php
  }
?>
 </tbody>
</table>
