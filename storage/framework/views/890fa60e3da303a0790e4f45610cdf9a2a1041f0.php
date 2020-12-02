<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>

<body>
    
    <main>
    <form action="<?php echo e(action('Controlador@verificacion')); ?>" method = "POST">
        <?php echo e(csrf_field()); ?>

        <label for="user">Usuario</label>
        <input type="text" name = "user">
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" name = "pass">
        <br>
       
        <input type="submit" value = "Enviar datos">
    </form>
    </main>
    <?php echo $__env->yieldSection(); ?>
</body>

</html><?php /**PATH C:\laragon\www\loginXd\resources\views/formulario.blade.php ENDPATH**/ ?>