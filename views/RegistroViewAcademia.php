<?php require 'head.php'; ?>
<?php require 'navguestbasic.php'; ?>
<?php require 'ValRegistroViewAcademia.php'; ?>

<div class="col-lg-8 mt-5 mt-lg-0">

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" role="form" class="php-email-form">
        <div class="row">
            <div class="col-md-6 form-group">
                <input type="text" name="login" class="form-control" id="login" placeholder="Introduzca su login: " required>
                <?php echo mostrar_error($errors, "login"); ?> 
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="password" id="password" placeholder="Introduzca su contraseña: " required>
                <?php echo mostrar_error($errors, "password"); ?> 
            </div>
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
            <?php echo mostrar_error($errors, "name"); ?> 
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required>
            <?php echo mostrar_error($errors, "apellidos"); ?> 
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="nif" id="nif" placeholder="NIF" required>
            <?php echo mostrar_error($errors, "nif"); ?> 
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
            <?php echo mostrar_error($errors, "email"); ?> 
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
            <?php echo mostrar_error($errors, "telefono"); ?> 
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name=direccion" id="direccion" placeholder="Dirección" required>
            <?php echo mostrar_error($errors, "direccion"); ?> 
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="imagen" id="imagen" placeholder="Imagen" required>
            <?php echo mostrar_error($errors, "imagen"); ?> 
        </div>
       
        <!-- <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div> -->
        <div class="text-center"><button type="submit" name="submit">Enviar</button></div>
    </form>

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

</form>

</div>

<?php //require 'footer.php'; 
?>