<?php
/*
====================
PAGE - PAGO-OK
====================
@package javiergarval-theme

*/

get_header(); ?>

<div class="container">
    <div class="row text-center">
        <h2>Gracias por su compra.</h2>
        <h3>Redirigiendo a <strong>www.javiergarval-oea.com</strong>...</h3>
        <script>
            var url = 'http://www.javiergarval-oea.com/wordpress';
            var timer = setTimeout(function() { window.location = url }, 3000);
        </script>
</div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
