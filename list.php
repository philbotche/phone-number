<?php

/**
 * List mobile operator numbers found
 */
 /**
  * Inclusion
  */
 include_once 'inc/PhoneNumber.php' ;

 /**
  * Data processing
  */
 $num = new PhoneNumber($_POST);

$nums = $num->generate_numbercall();
?>
<?php if(empty($nums ) ): ?>

    <p> vous n'avez pas selectionné de numero </p>

<?php else: ?>


    <?php if(isset($_POST['Orange'])): ?>

        <div class="num-orange num-op">
            <h3>Orange</h3>
            <ol>
                <?php foreach($nums['Orange'] as $nbr):?>
                    <li><?php echo $nbr ;?></li>
                <?php endforeach;?>
            </ol>
        </div>
    <?php endif ?>
    <?php if(isset($_POST['Mtn'])): ?>

        <div class="num-mtn num-op">
            <h3>Mtn</h3>
            <ol>
                <?php foreach($nums['Mtn'] as $nbr):?>
                    <li><?php echo $nbr ;?></li>
                <?php endforeach;?>
            </ol>
        </div>
    <?php endif ?>
    <?php if(isset($_POST['Moov'])): ?>
        <div class="num-moov num-op">
            <h3>Moov</h3>
            <ol>
                <?php foreach($nums['Moov'] as $nbr):?>
                    <li><?php echo $nbr ;?></li>
                <?php endforeach;?>
            </ol>
        </div>
    <?php endif ?>
<?php endif ?>