<div class="arabicPage">

<?php
  if(!@$_POST['submit'])
  {
    $i=1;
    $createTable = new App\CreateTable();
    $createTable->createTable();
  }
  elseif($_POST['submit'])
  {
    $i = $_POST['i'];
    $romanValue = $_POST['romanValue'];
    $i++;
    $romanNumber = $_POST['romanNumber'];

    $input = new App\InputData($romanValue, $romanNumber);
    $input->inputData();
  }

  if($i<=20)
  {
?>
  <div class="title">
    <h2>write roman number</h2>
  </div><!-- end of .title -->

  <div class="arabicNumber">
    <?php echo $number; ?>
  </div><!-- end of .arabicNumber -->

  <form action="index.php?page=arabic" method="post">
    <div class="input"><input type="text" name="romanValue" autofocus required/></div>
    <input type="hidden" name="i" value="<?php echo $i; ?>">
    <input type="hidden" name="romanNumber" value="<?php echo $converterAR->romanNumber; ?>">
    <div class="button"><input type="submit" name="submit" value="SUBMIT" /></div>
  </form><!-- end of form -->
<?php
  }
  else
  {
?>
  <div class="title">
    <h2>result</h2>
  </div><!-- end of .title -->

<?php
  $results = new App\GetResult();
  $niz = $results->getResult();

  $i=1;
  $pogodak = 0;

?>
  <div class="input">
    <table width="100%" border="1px dotted black">
      <tr> <th>No</th> <th>Key</th> <th>Value</th> </tr>
<?php
      foreach($niz as $object)
      {
?>
        <tr <?php if($object->table_key == $object->table_value){echo 'style="color: green;"';}else{ echo 'style="color: red;"';} ?>>
          <td><?php echo $i; ?></td>
          <td><?php echo $object->table_key; ?></td>
          <td><?php echo $object->table_value; ?></td>
        </tr>
<?php
        if($object->table_key == $object->table_value)
        {
          $pogodak += 1;
          $procenat = $pogodak/20 * 100;
        }
        $i++;
      }
?>
    </table><!-- end of table -->
<?php
    echo '<br />';
    echo '<br />Procenat uspešnosti je ' . $procenat . '%';
?>
</div><!-- end of input div -->
<?php
  }
?>
</div>
