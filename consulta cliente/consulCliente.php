<body>
    <h1> Consulta de Cliente </h1>
    <table border="1">
        <tr>
            <td> Código </td>
            <td> Nome </td>
            <td> E-mail </td>
</tr>

<?php
  include ('conexao.php');
  $consulta="select * from cliente";
  $executar=mysqli_query($conexao,$consulta);
  while ($linha=mysqli_fetch_array($executar)){
      echo "<tr>";
      echo "<td>".$linha['cli_codigo'] ."</td>";
      echo "<td>".$linha['cli_nome'] ."</td>";
      echo "<td>".$linha['cli_email'] ."</td>";
      echo "</tr>";
  }

  mysqli_close($conexao);
  ?>
    </table>
</body>