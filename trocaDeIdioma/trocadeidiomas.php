<ol class="listIdiomaBox d-none d-sm-flex flex-wrap flex-row justify-content-end align-items-center">
    <li><a id="idioma1" href="<?php echo wp_dir(0);?>/pt/" onclick="testeIdioma(1);"><img src="<?php echo wp_dir(2);?>/lib/img/flag/01.png" alt=""></a></li><!-- pt-br -->
    <li><a id="idioma2" href="<?php echo wp_dir(0);?>/es/" onclick="testeIdioma(2);"><img src="<?php echo wp_dir(2);?>/lib/img/flag/02.png" alt=""></a></li><!-- es -->
    <li><a id="idioma3" href="<?php echo wp_dir(0);?>/en/" onclick="testeIdioma(3);"><img src="<?php echo wp_dir(2);?>/lib/img/flag/03.png" alt=""></a></li><!-- en -->
</ol>

<script>

    linkesta = window.location.pathname.split('/');     
    testLinkIdioma = linkesta[3];

    console.log('está aqui:' + testLinkIdioma);

    if (testLinkIdioma == 'pt') {
        testeIdioma(1);
    }else if(testLinkIdioma == 'es') {
        testeIdioma(2);
    }else if(testLinkIdioma == 'en') {
        testeIdioma(3);
    }else {
        testeIdioma(0);
    }

    function testeIdioma(id){

        if(id == 1) {
            jQuery(".listIdiomaBox li a").removeClass('ativo');
            jQuery(".listIdiomaBox li a#idioma" + id).addClass('ativo');

        }else if(id == 2) {
            jQuery(".listIdiomaBox li a").removeClass('ativo');
            jQuery(".listIdiomaBox li a#idioma" + id).addClass('ativo');

        }else if(id == 3) {
            jQuery(".listIdiomaBox li a").removeClass('ativo');
            jQuery(".listIdiomaBox li a#idioma" + id).addClass('ativo');

        } else {
            jQuery(".listIdiomaBox li a").removeClass('ativo');
        }

    }

</script>