
<?php

include 'sessions.php';
include '../includes/autoloader.inc.php';
include '../functions.php';



 $users = new Users;

$errormsg = "";
$infomesg = "";


?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | ຮ້ານຄົບວົງຈອນ</title>

    <?php
    include '../includes/header.inc.php';
    ?>
    
    
</head>
<body>


    <?php

    include '../includes/hometop.inc.php'

    ?>





    <!-- ======================================================== -->




    <div class="img-navigation">

    </div>



    <section class="navigation-text">
        <div class="navigation-text-1"><b>ຄຸນລັກສະນະທາງຮ້ານ</b></div>
    </section>

    <section class="show-motorcycles2">
        <div class="show-motorcydles-2">           
            <img class="show-motorcydles-1-photor" src="../mystyle/potor/aaaeat-2834549__340.jpg" alt="click">            
            <div class="show-motorcycles-1-texy">
                <div class="show-motorcycles-1-texy-title"><b></b></div>
                <p class="show-motorcycles-1-text1">ອາຫານເເຊບຫຼາຍໆ ມາເລີຍຈຮາທຸກທ່ານທາງຫຼາຍ </p>
            </div>            
            <div class="show-motorcycles-1-price">
                <div class="show-motorcycles-1-texy-title"><b></b></div>
                <button class="button-green">By now</button>
            </div>            
        </div>

        <div class="show-motorcydles-2">
            <img class="show-motorcydles-1-photor" src="../mystyle/potor/aaaFood-Innovation.jpg" alt="HONDA">
            <div class="show-motorcycles-1-texy">
                <div class="show-motorcycles-1-texy-title"><b></b></div>
                <p class="show-motorcycles-1-text1">ອາຫານເເຊບຫຼາຍໆ ມາເລີຍຈຮາທຸກທ່ານທາງຫຼາຍ</p>
            </div>
            <div class="show-motorcycles-1-price">
                <div class="show-motorcycles-1-texy-title"><b></b></div>
                <button class="button-green">By now</button>
            </div>
        </div>

        <div class="show-motorcydles-2">
            <img class="show-motorcydles-1-photor" src="../mystyle/potor/aaap04tx3m6.jpg" alt="HONDA">
            <div class="show-motorcycles-1-texy">
                <div class="show-motorcycles-1-texy-title"><b></b></div>
                <p class="show-motorcycles-1-text1">ອາຫານເເຊບຫຼາຍໆ ມາເລີຍຈຮາທຸກທ່ານທາງຫຼາຍ.</p>
            </div>
            <div class="show-motorcycles-1-price">
                <div class="show-motorcycles-1-texy-title"><b></b></div>
                <button class="button-green">By now</button>
            </div>
        </div>
    </section>


    <section class="about-website">
        <div class="about-website1">
            <div class="about-website-1">
                <p class="show-motorcycles-1-texy-title"><b>ກ່ຽວກັບຮ້ານ</b></p>
                <p class="show-motorcycles-1-text1">    ຮ້ານຂອງພວກເຮົາຈະມີການເປີດລຸ້ນໂຊກທຸກໆ
                    ວັນທີ 1 ເດືອນທັນວາຂອງແຕ່ລະປີ ເພາະເປັນການຕ້ອນຮັບປີໃໝ່ຟ້າໃໝ່ ແລະ ແມ່ນວັນ ຮ້ານຂອງພວກເຮົາເປີດຢ່າງເປັນທາງການໃນວັນທີ1ເດືອນທັນວາປີ2013 ດັ່ງນັ້ນຖືວ່າເປັນວັນສຳຄັນຂອງທາງຮ້ານເຮົາອີກໂດຍ.</p>
                <p class="show-motorcycles-1-text1">ຖ້າຜູ້ໃດຢາກໄດ້ຮັບລາງວັນຈາກທາງຮ້ານເຮົາແມ່ນມາເລິຍ ທາງຮ້ານເຮົາຈະຕ້ອນຮັບທ່ານເປັນຢ່າງດີ ທ່ານສາມາດອ່ານເພີ່ມຕື່ມໄດ້.</p>
                <center><button class="button-navy">ເພີ່ມເຕີມ</button></center>
            </div>
            <div class="aubot-website-photor">
                <img src="../mystyle/potor/aaapexels-ash-376464.jpg" alt="#" class="aubot-website-photor1">
            </div>
        </div>
    </section>


    <section class="partner">
        <div class="partner1">
            <div class="partner-1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLy93MzIYBz4xQ69j4E0J9OojvHwFx0HLnZg&usqp=CAU" alt="partner" class="partner-1-photor">
                <p class="partner-1-text">ຄູ່ຮ່ວມງານ</p>
                <center><button class="button-green">ເພີ່ມເຕີມ</button></center>
            </div>

            <div class="partner-1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUo-yAelOtqe5mqFEWYr-03sxJTOxIXQqtbQ&usqp=CAU" alt="partner" class="partner-1-photor">
                <p class="partner-1-text">ຄູ່ຮ່ວມງານ</p>
                <center><button class="button-green">ເພີ່ມເຕີມ</button></center>
            </div>

            <div class="partner-1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHLgTnztYfdiRQy4rwbft0ZdDJp4McuGZwFQ&usqp=CAU" alt="partner" class="partner-1-photor">
                <p class="partner-1-text">ຄູ່ຮ່ວມງານ</p>
                <center><button class="button-green">ເພີ່ມເຕີມ</button></center>
            </div>     
        </div>
    </section>

    <section class="information">
        <div class="information1">
            <div class="information1-text">
                <p class="navigation-text-1"><b>ຂ່າວຮ້ານ</b></p>
                <p class="navigation-text-2">ອາຫານເເຊບຫຼາຍໆ ມາເລີຍຈຮາທຸກທ່ານທາງຫຼາຍ</p>
            </div>
            <div class="information1-whow-car">
                <div class="information1-show-car-1">
                    <img src="../mystyle/potor/aaapizza-3010062__340.jpg" alt="CBR" class="information1-show-car-img">
                    <p class="information1-show-car-title"><b></b></p>
                    <p class="show-motorcycles-1-text1">ອາຫານເເຊບຫຼາຍໆ ມາເລີຍຈຮາທຸກທ່ານທາງຫຼາຍ</p>
                    <button class="button-navy">ອ່ານເພີ່ມເຕີມ=></button>
                </div>

                <div class="information1-show-car-1">
                    <img src="../mystyle/potor/aaastrawberries-3359755__340.jpg" alt="MSX" class="information1-show-car-img">
                    <p class="information1-show-car-title"><b></b></p>
                    <p class="show-motorcycles-1-text1">ອາຫານເເຊບຫຼາຍໆ ມາເລີຍຈຮາທຸກທ່ານທາງຫຼາຍ</p>
                    <button class="button-navy">ອ່ານເພີ່ມເຕີມ=></button>
                </div>

                <div class="information1-show-car-2">
                    <img src="../mystyle/potor/bbbTopOfTheRock_94.jpg" alt="CLICK" class="information1-show-car-img">
                    <p class="information1-show-car-title"><b></b></p>
                    <p class="show-motorcycles-1-text1">ອາຫານເເຊບຫຼາຍໆ ມາເລີຍຈຮາທຸກທ່ານທາງຫຼາຍ</p>
                    <button class="button-navy">ອ່ານເພີ່ມເຕີມ=></button>
                </div>
            </div>
        </div>
    </section>


    

    <










    <!-- ======================================================== -->

    
     <!-------------------PAGE Content---------------------->



     <div class="container" style="margin-top:50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>
                <?php if(isset($_SESSION['messeage_d'])){ ?>
                <div class="alert alert-success" style="text-align: center;">               
                  <?php 

                        echo $_SESSION['messeage_d'];

                        unset($_SESSION['messeage_d']);

                   ?>
                </div>
                <?php } ?>

                <?php if($infomesg != ""){ ?>
                <div class="alert alert-success" style="text-align: center;">               
                  <?php echo $infomesg; ?>        
                </div>
                <?php } ?>

                <?php if($errormsg != ""){ ?>
                <div class="alert alert-danger" style="text-align: center;">               
                  <?php echo $errormsg; ?>        
                </div>
                <?php } ?>
                <div class="card-body">


                        Welcome, <?php echo $_SESSION['idis']; ?>


                </div>
            </div>
        </div>
    </div>
</div>


     <!----------------------------------------->



     
    <?php

    include '../includes/footer.inc.php';

    ?>


</body>
</html>