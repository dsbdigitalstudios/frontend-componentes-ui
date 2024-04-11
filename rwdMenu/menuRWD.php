<aside class="rwdMenu">

    <div class="mask menuRwdFX"></div>

    <div class="palcoRWD container-fluid">

        <div class="mask menuRwdFX"></div>

        <div class="row justify-content-end">

            <div class="mask menuRwdFX"></div>

            <div class="col-12 col-sm-7 col-md-5 contentMenu">

                <a href="javascript:void(0);" title="Menu" class="menuSanduiche ativo paraFechar menuRwdFX d-flex d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>

                <nav>

                    <h3>
                        <a href="<?php echo $wp_url;?>" title="ST Importações">
                            <img src="<?php echo $wp_dir;?>/lib/img/logo-st-importacoes.svg" alt="">
                        </a>
                    </h3>

                    <ul class="menuMain">
                        <li><a href="<?php echo $wp_url;?>/quem-somos/" title="Quem Somos ">Quem Somos </a></li>
                        <li><a href="<?php echo $wp_url;?>/solucoes/" title="Nossas Soluções">Nossas Soluções</a></li>
                        <li><a href="<?php echo $wp_url;?>/blog/" title="Blog">Blog</a></li>
                        <li><a href="<?php echo $wp_url;?>/contato/" title="Fale conosco">Fale conosco</a></li>
                        <li><a href="<?php echo $wp_url;?>/" title="Portal do Cliente">Portal do Cliente</a></li>
                    </ul>

                </nav>

                <nav>
                    <h3>Informações:</h3>
                    <p class="endereco">
                        <a href="<?php echo $linkComochegar?>" title="Escritório em Santa Catarina">Escritório em <br> Santa Catarina:<br> SC-281, 2951
                        Picadas do Sul <br> São José - SC,
                        CEP: 88106-115 <br> </a>
                        <a href="tel:<?php $onlyNumber = preg_replace('/\D/', '', $numTel); echo $onlyNumber;?>" title="Entre em contato conosco: <?php echo $numTel;?>"><?php echo $numTel;?></a>
                    </p>
                </nav>

                <nav>

                    <ul class="socialRWD d-flex flex-wrap flex-row justify-content-start align-items-center">
                        <li>
                            <a href="<?php echo $linkedinLink;?>" target=_blank title="LinkednIn">
                                <svg class="icon icon-18" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="<?php echo $wp_dir;?>/lib/img/uikit-sti.svg#linkedin"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $instagramLink;?>" target=_blank title="Instagram">
                                <svg class="icon icon-18" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="<?php echo $wp_dir;?>/lib/img/uikit-sti.svg#instagram"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $facebookLink;?>" target=_blank title="Facebook">
                                <svg class="icon icon-18" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="<?php echo $wp_dir;?>/lib/img/uikit-sti.svg#facebook"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>

                </nav>

            </div>

        </div>

    </div>

</aside>
<!-- rwdMenu -->
