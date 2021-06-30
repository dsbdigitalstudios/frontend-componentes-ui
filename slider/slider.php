<section id="slider">

    <?php 

    // links Globais
    $wp_dir = get_template_directory_uri();
    $wp_url = get_site_url();

    
    // controles
    $numSlidesTotal = 3;
    $videoID = '';
    ?>

    <div class="coverVideo">
    
        <?php 
            // Imagens do slider em função do numero total de slides publicados
            for ($i=0; $i < $numSlidesTotal; $i++) :
            // contador para:  
            // 1. sufixo das imagens. Exemplo slide1.jpg, slide2.jpg e assim por diante
            // 2. sufixo para o id do container
            $countImg++;
            ?>
        <div id="coverImg<?php echo $countImg;?>" class="imgItem" style="background-image: url(<?php echo $wp_dir;?>/lib/img/bg/slide<?php echo $countImg;?>.jpg); display:none;">
            <?php if ($videoID != '') : ?>
                <!-- aqui entra bg do video -->
            <?php endif;?>    
        </div>
        <!-- bg img -->
        <?php endfor?>
        </div>
        <!-- bg img -->
    </div>
    <!-- coverImg -->

    <div class="container">
    
        <div class="row justify-content-center align-items-center">
        
            <div class="col-12">

                <div class="row">

                    <div class="col-12 col-sm-9">
                        <?php 
                            // Imagens do slider em função do numero total de slides publicados
                            for ($i=0; $i < $numSlidesTotal; $i++) :
                            // contador para sufixo para o id do container
                            $countContent++;?>
                        <div id="contentSlide<?php echo $countContent;?>" class="contentBox" style="display:none;">
                            <h2>Bem-vindos a ST Importações</h2>
                            <h3>Soluções de <b>comércio exterior</b>, de forma <b>ágil</b> e <b>descomplicada</b>.</h3>
                            <nav class="d-flex flex-wrap flex-row justify-content-start">
                                <a class="cta mt-4 fz-14 padd-laranja-button beforeSlide border-verde color-verde text-bold" href="<?php echo $wp_url;?>/quem-somos/" title="Quem somos">Quem somos</a>
                                <?php 
                                    // se houver video
                                    if ($videoID != '') : ?>
                                    <a href="https://www.youtube.com/watch?v=<?php echo $videoID; ?>" data-fancybox="videoPlay" title="Assista ao video" class="cta mt-4 fz-14 padd-laranja-button border-verde color-verde text-bold" >Assista ao video</a>
                                <?php endif;?>    
                            </nav>
                        </div>
                        <?php endfor?>

                    </div>

                </div>
                <!-- content -->

            </div>

        </div>
        <!-- h 100% -->

    </div>
    <!-- content -->

    <aside class="navSlide">

        <div class="container">
        
            <div class="row">
            
                <div class="col-6">

                    <ul class="d-flex flex-wrap flex-row justify-content-start">
                        <?php 
                            // Imagens do slider em função do numero total de slides publicados
                            for ($i=0; $i < $numSlidesTotal; $i++) :
                            // contador para 
                            // 1. sufixo para o id do item do slide / marcador
                            // 2. id para a função js toslide();
                            $countSlideNav++?>
                        <li><a id="itemSlide<?php echo $countSlideNav;?>" class="itemSlideNav" href="javascript:void(0);" onclick="toslide(<?php echo $countSlideNav;?>)" title="Bem-vindos a ST Importações <?php echo $countSlideNav;?>"><span></span></a></li>
                        <?php endfor?>
                    </ul>

                </div>
                <div class="col-6">

                    <nav class="slideNav d-flex flex-wrap flex-row justify-content-end">
                        <a href="javascript:void(0);" onclick="slidego(-1)" title="anterior">
                            <svg class="icon icon-18" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="<?php echo $wp_dir;?>/lib/img/uikit.svg#prevSlide"></use>
                            </svg>
                        </a>
                        <a href="javascript:void(0);" onclick="slidego(1)" title="próximo">
                            <svg class="icon icon-18" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="<?php echo $wp_dir;?>/lib/img/uikit.svg#nextSlide"></use>
                            </svg>
                        </a>
                    </nav>

                </div>

            </div>

        </div>

    </aside>
    <!-- navSlide -->

    <aside class="marcador">

        <ul>
            <?php 
                // Imagens do slider em função do numero total de slides publicados
                for ($i=0; $i < $numSlidesTotal; $i++) :
                // contador para 
                // 1. sufixo para o id do item do slide / marcador
                // 2. id para a função js toslide();
                $countNavMarker++?>
            <li><a id="marcador<?php echo $countNavMarker;?>" onclick="toslide(<?php echo $countNavMarker;?>)" class="navMarker" href="javascript:void(0);">0<?php echo $countNavMarker;?></a></li>
            <?php endfor?>
        </ul>

    </aside>
    <!-- marcador -->

</section>
<!-- Slider -->

<script>

    // slider
    slideAtual = 0;
    slidesTotais = <?php echo $numSlidesTotal?>; // num slides
        
    function slidego(direction) {
        newSlide = slideAtual + direction;
        if (newSlide < 1) newSlide = slidesTotais;
        if (newSlide > slidesTotais) newSlide = 1;

        toslide(newSlide);
    }
    function toslide(id) {
        console.log( 'Qual o id ' + id );    
        if (id<1 || id>slidesTotais) return;
        if (slideAtual != 0) { //
            $(".imgItem").css('display','none').animate({
                opacity : 0
            }, 150);
            $(".contentBox").css('display','none').animate({
                opacity : 0
            }, 300);
            $(".itemSlideNav").removeClass('ativo');
            $(".navMarker").removeClass('ativo');
            
        }
        slideAtual = id;
        $(".imgItem#coverImg"+slideAtual).css('display','block').animate({
            opacity:1
        }, 150);
        $(".contentBox#contentSlide"+slideAtual).css('display','block').animate({
            opacity:1
        }, 300);
        $(".itemSlideNav#itemSlide"+slideAtual).addClass('ativo');
        $(".navMarker#marcador"+slideAtual).addClass('ativo');
        
    }
        
    toslide(1); 

</script>

<hr class="d-none">

