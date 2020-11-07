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
    <h2>napiši rimski broj</h2>
  </div>

  <div class="romanNumber">
    <?php echo $number; ?>
  </div>

  <form action="index.php?page=arabic" method="post">
    <div class="input"><input type="text" name="romanValue" autofocus required/></div>
    <input type="hidden" name="i" value="<?php echo $i; ?>">
    <input type="hidden" name="romanNumber" value="<?php echo $converterAR->romanNumber; ?>">
    <div class="button"><input type="submit" name="submit" value="POŠALJI" /></div>
  </form>
<?php
  }
  else
  {
?>
  <div class="title">
    <h2>rezultat</h2>
  </div>

<?php
  $results = new App\GetResult();
  $niz = $results->getResult();

  $i=1;
  $pogodak = 0;

  foreach($niz as $object)
  {
    echo $i . '. ' . $object->table_key . ' || ' . $object->table_value . '<br />';

    if($object->table_key == $object->table_value)
    {
      $pogodak += 1;
      $procenat = $pogodak/20 * 100;
    }

    $i++;
  }

  echo '<br />Procenat uspešnosti je ' . $procenat . '%';
  }
?>

</div>
