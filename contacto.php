<?php include 'includes/top.php' ?>
<?php include 'includes/header.php' ?>

<div class="contenedor">
    <h3 class="centrar-texto">Contáctanos</h3>
    <div class="contacto-bg"></div>
    <form class="formulario">
        <div class="campo">
            <label class="campo__label" for="nombre">
                Nombre
            </label>
            <input class="campo__field" id="nombre" type="text" placeholder="Tu nombre">
        </div>
        <div class="campo">
            <label class="campo__label" for="email">
                E-mail
            </label>
            <input class="campo__field" id="email" type="email" placeholder="marc@example.com">
        </div>
        <div class="campo">
            <label class="campo__label" for="mensaje">
                Mensaje
            </label>
            <textarea name="mensaje" id="mensaje" class="campo__field campo__field--textarea"></textarea>
        </div>
        <div class="campo">
            <input type="submit" value="Enviar" class="boton boton--primario">
        </div>
    </form>
</div>

<?php include 'includes/footer.php' ?>
<?php include 'includes/bottom.php' ?>