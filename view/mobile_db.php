<?php 
include_once "../model/ConDB.php";
include_once "../model/mobile.php";
$obj_name = new mobile();
$rs2= $obj_name->getMobile();
print_r($rs2);
?>

<?php
foreach ($rs2 as $result2){
?>
<!-- Course section -->
<div class="col mb-5">
    <!-- <a href="./course/course_sci.php?cs_id=<?= $result2['id'] ?>" class="card-link"> -->
        <div class="card" style="width: 18rem;">
                <img src="<?= $result2['img']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?= $result2['name']?></p>
                <p class="card-text"><?= $result2['price']?></p>
            </div>
        </div>
    <!-- </a> -->
</div>
<!-- End Course section -->
<?php }?>