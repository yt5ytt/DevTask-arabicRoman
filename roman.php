<div class="romanPage">

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
    $broj = $_POST['number'];
    $i++;
    $arabicNumber = $_POST['arabicNumber'];

    $input = new App\InputData($broj, $arabicNumber);
    $input->inputData();
  }

  if($i<=20)
  {
?>
  <div class="title">
    <h2>koji je ovo rimski broj?</h2>
  </div>

  <div class="romanNumber">
    <?php echo $converterAR->romanNumber; ?>
  </div>

  <form action="index.php?page=roman" method="post">
    <div class="input"><input type="text" name="arabicNumber" autofocus required/></div>
    <input type="hidden" name="i" value="<?php echo $i; ?>">
    <input type="hidden" name="array" value="<?php $chain; ?>">
    <input type="hidden" name="number" value="<?php echo $number; ?>">
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
  }
?>

</div>
