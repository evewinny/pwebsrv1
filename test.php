<?php
  require_once("Program03.data.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Program 3</title>
  </head>
  <body>
    <div class="container">
      <div class="row">

        <div class="col6">

          <table>
            <thead>
              <tr>
                <th>NIM</th>
                <th>Mahasiswa</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($mahasiswa as $mhs) {
                $link = $_SERVER['PHP_SELF'].'?nim='.$mhs['nim'];
                if (isset($_GET['pa'] ) ) {
                  if ($mhs['dosen_pa']['nidn'] == $_GET['pa'] ) {
                ?>
                <tr>
                  <td class="text-center">
                    <a href="<?= $link ?>"><?= $mhs['nim']?> </a>
                  </td>
                  <td>
                  <a href="<?= $link ?>"><?= $mhs['nama']?> </a>
                </td>
                </tr>
              <?php }} else {?>
              <tr>
                <td class="text-center">
                  <a href="<?= $link ?>"><?= $mhs['nim']?> </a>
                </td>
                <td>
                <a href="<?= $link ?>"><?= $mhs['nama']?> </a>
              </td>
              </tr>
            <?php }} ?>
            </tbody>
          </table>
        </div>

        <div class="col6">

        </div>

        </div

  </body>
</html>
