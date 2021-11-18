<?php require 'head.php'; ?>
<?php require 'navguestbasic.php'; ?>
<?php require 'ValLoginViewAcademia.php'; ?>

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Login</h2>
        <p>Autenticación del usuario/a </p>
      </div>
    </div><!-- End Breadcrumbs -->

    



<div class="col-lg-8 mt-5 mt-lg-0">

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" role="form" class="php-email-form">
        <div class="row">
            <div class="col-md-6 form-group " >
                <input text-align ="center"type="text" name="login" class="form-control" id="login" placeholder="Nombre" required>
                <?php echo mostrar_error($errors, "login"); ?> 
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-6 form-group ">
                    <input type="text" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                    <?php echo mostrar_error($errors, "password"); ?> 
                </div>
            </div>

        </div>
        <!-- <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div> -->
        <div class="text-center"><button type="submit" name="submit">Enviar</button></div>
    </form>

</div>

<?php //require 'footer.php'; 
?>