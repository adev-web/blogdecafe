<?php include 'includes/top.php' ?>
<?php include 'includes/header.php' ?>


<div class="contenedor contenido-principal">
    <main class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada">
            <picture class="entrada__imagen">
                <source loading="lazy" srcset="img/blog1.webp" type="image/webp">
                <img width="200" height="300" loading="lazy" src="img/blog1.webp" alt="imagen blog1">
            </picture>


            <div class="entrada__contenido">
                <h4 class="no-margin">Tipos de Grano de Café</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit
                    consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea
                    excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
                <a href="entrada.php" class="boton boton--primario">Leer Entrada</a>
            </div>
        </article>

        <article class="entrada">
            <picture class="entrada__imagen">
                <source width="200" height="300" loading="lazy" srcset="img/blog2.webp" type="image/webp">
                <img width="200" height="300" loading="lazy" src="img/blog2.webp" alt="imagen blog2">
            </picture>


            <div class="entrada__contenido">
                <h4 class="no-margin">3 Deliciosas Recetas de Café</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit
                    consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea
                    excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
                <a href="entrada.php" class="boton boton--primario">Leer Entrada</a>
            </div>
        </article>

        <article class="entrada">
            <picture class="entrada__imagen">
                <source width="200" height="300" loading="lazy" srcset="img/blog3.webp" type="image/webp">
                <img width="200" height="300" loading="lazy" src="img/blog3.webp" alt="imagen blog3">
            </picture>


            <div class="entrada__contenido">
                <h4 class="no-margin">Beneficios del Café</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit
                    consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea
                    excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
                <a href="entrada.php" class="boton boton--primario">Leer Entrada</a>
            </div>
        </article>
    </main>
    <aside class="sidebar">
        <h3>Nuestros Cursos y Talleres</h3>

        <ul class="cursos no-padding">
            <li class="widget-curso">
                <h4 class="no-margin">Técnicas de Extracción de Café</h4>
                <p class="widget-curso__label">Precio:
                    <span class="widget-curso__info">Gratis</span>
                </p>
                <p class="widget-curso__label">Cupo:
                    <span class="widget-curso__info">20</span>
                </p>
                <a href="entrada.php" class="boton boton--secundario">Más Información sobre nuestros cursos</a>
            </li>

            <li class="widget-curso">
                <h4 class="no-margin">4 Recetas de Café para Principiantes</h4>
                <p class="widget-curso__label">Precio:
                    <span class="widget-curso__info">Gratis</span>
                </p>
                <p class="widget-curso__label">Cupo:
                    <span class="widget-curso__info">20</span>
                </p>
                <a href="entrada.php" class="boton boton--secundario">Más Información sobre nuestros cursos</a>
            </li>
        </ul>
    </aside>
</div>

<?php include 'includes/footer.php' ?>
<?php include 'includes/bottom.php' ?>