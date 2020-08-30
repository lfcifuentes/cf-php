<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="2-form.php" method="post">
      <table>
        <?php
          $data = [
            'name' => "Name",
            'lastName'=> "Last Name",
            'address'=> "Address",
            'phone'=> "Phone",
          ];
          foreach ($data as $key => $value):?>
        <tr>
          <td><?php echo $value ?>:</td>
          <td>
            <input type="text" name="<?php echo $key ?>" value="">
          </td>
        </tr>
      <?php endforeach;?>
        <tr>
          <td>Sex:</td>
          <td>
            <input type="radio" name="sex" value="Woman">
            Woman
            <input type="radio" name="sex" value="Man">
            Man
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="Guardar">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
