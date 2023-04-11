<form method="POST" action="cad-nome.php">
  <label for="nome">
    Novo Nome:
    <br />
    <input type="text" name="nome">
  </label>
  
  <input type="submit" value="Enviar">
</form>

<?php
session_start();

if (isset($_SESSION['error'])) {
  echo $_SESSION['error'];
}
?>

<h1>Lista de nomes</h1>

<ul>

  <?php
    $nomes = file_get_contents('nomes.txt');

    $nomes = explode("\n", $nomes);

    if ($nomes) {
      foreach ($nomes as $nome) {
        echo "<li>" . $nome . "</li>";
      }
    }
  ?>

</ul>