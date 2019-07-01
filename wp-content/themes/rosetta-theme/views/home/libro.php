<!-- L I B R O -->
<div class="libro__bg" style="background-image: url(<?php echo THEMEURL ?>images/ilustracion-4.png);">
    <section class="libro" id="libro">

        <h3 class="libro__titulo"><?php the_field('titulo_libro'); ?></h3>

        <div class="libro__flex">
            <div class="card__one">
                <div class="libro__extracto">
                    <?php the_field('extracto_libro'); ?>
                </div>

                <div class="libro__parrafo">
                    <?php the_field('parrafo_libro'); ?>
                </div>

                <div class="libro__cita">
                    <?php the_field('cita_libro'); ?>
                </div>

            </div>

            <div class="card__two">
                <ul class="libro__slider">
                    <?php

                    $images_libro = get_field('paginas_libro');

                    if( $images_libro ): ?>
                        <?php foreach( $images_libro as $image ): ?>
                            <li class="">
                                <img class="" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </ul>
                <div class="galeria-anterior"></div>
                <div class="galeria-siguiente"></div>

                <div class="pagos">
                    <form class="pagos__form" method="post" target="_top">
                        <div class="row">
                            <div id="prices" class="card-info">
                                $890.00 MXN + <span id="costo">$300.00 MXN</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="card">
                                <span style="text-transform:none;font-size:15px;" class="label"><?php _e("Ship to:","rosetta-theme")?></span>
                                <select id="country-select" class="border-right-remove" onChange="changeCountry(this.value);" name="country">
                                    <option value="mx"><?php _e("Mexico","rosetta-theme")?></option>
                                    <option value="eu"><?php _e("USA","rosetta-theme")?></option>
                                    <option value="cad"><?php _e("Canada","rosetta-theme")?></option>
                                </select>
                                <select id="language-select" name="language">
                                    <option value="Español"><?php _e("spanish","rosetta-theme")?></option>
                                    <option value="Inglés"><?php _e("english","rosetta-theme")?></option>
                                </select>
                                <!-- <input id="phone" type="text" maxlength="200" placeholder="Teléfono" class="phone" autocomplete="off">
                                <span id="label-error" ></span> -->
                                <span id="send" onclick="pay(this)" data-value="mx" class="comprar"><?php _e("Buy","rosetta-theme")?> </span>
                            </div>

                            <div class="card">
                                <!--<span class="label"><?php _e("Edition","rosetta-theme")?></span>-->

                            </div>
                        </div>

                        <div class="row">

                        </div>
                    </form>

                    <!--Forms de paypal -->
                    <div class="form-paypal">
                        <form id="form-mx" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="Z7EQTXCZTBLMG">

                            <input type="hidden" name="on0" value="Opciones de envío">

                            <select id="country-select-mx" name="os0">
                                <option selected value="México">México </option>
                                <option value="Estados Unidos">Estados Unidos </option>
                                <option value="Canadá">Canadá </option>
                            </select>

                            <input type="hidden" name="on1" value="Idioma">

                            <select id="language-select-mx" name="os1">
                                <option value="Español">Español </option>
                                <option value="Inglés">Inglés </option>
                            </select>

                            <input type="hidden" name="on2" value="Teléfono">
                            <input id="phone-mx" value="" type="hidden" name="os2" maxlength="200">

                            <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>

                    <div class="form-paypal">
                        <form id="form-eu" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="67868DEXUTH4E">

                            <input type="hidden" name="on0" value="Opciones de envío">

                            <select id="country-select-eu" name="os0">
                                <option value="México">México </option>
                                <option selected value="Estados Unidos">Estados Unidos </option>
                                <option value="Canadá">Canadá </option>
                            </select>

                            <input type="hidden" name="on1" value="Idioma">

                            <select id="language-select-eu" name="os1">
                                <option value="Español">Español </option>
                                <option value="Inglés">Inglés </option>
                            </select>

                            <input type="hidden" name="on2" value="Teléfono">
                            <input id="phone-eu" value="" type="hidden" name="os2" maxlength="200">

                            <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>

                    <div class="form-paypal">
                        <form id="form-cad" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="KQ6ZB75RN5586">

                            <input type="hidden" name="on0" value="Opciones de envío">

                            <select id="country-select-cad" name="os0">
                                <option value="México">México </option>
                                <option value="Estados Unidos">Estados Unidos </option>
                                <option selected value="Canadá">Canadá </option>
                            </select>

                            <input type="hidden" name="on1" value="Idioma">

                            <select id="language-select-cad" name="os1">
                                <option value="Español">Español </option>
                                <option value="Inglés">Inglés </option>
                            </select>

                            <input type="hidden" name="on2" value="Teléfono">
                            <input id="phone-cad" value="" type="hidden" name="os2" maxlength="200">

                            <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
                <p class="pagos__mail">
                    <?php _e("International shippings","rosetta-theme");?>  <a href="mailto:libro@rrosetta.com.mx">libro@rrosetta.com.mx</a>
                </p>
            </div>
        </div>
    </section>
</div>

<script>
    function changeCountry(el){
        var selected = '$300.00 MXN';
        var country = document.getElementById('country-select').value;

        document.getElementById('send').setAttribute('data-value', el);
        document.getElementById('prices').style.display = 'block';

        if(el === 'mx'){
            selected = '$300.00 MXN';
        }

        if(el === 'eu'){
            selected = '$900.00 MXN';
        }

        if(el === 'cad'){
            selected = '$1400.00 MXN';
        }

        document.getElementById('costo').innerHTML = selected;
    }

    function pay(el){
        //Verificamos que no esté vacio
        /*var phone = document.getElementById('phone').value.replace(/\s/g,'');

        //Mostramos el error
        if(phone == ''){
            document.getElementById('label-error').innerHTML = 'El teléfono es obligatorio.';
            document.getElementById('label-error').style.display = 'block';
            return;
        }

        if(phone.match(/^\d+$/) == null || phone.length != 10){
            document.getElementById('label-error').innerHTML = 'El teléfono no tiene el formato adecuado.';
            document.getElementById('label-error').style.display = 'block';
            return;
        }
        */

        var code = el.getAttribute("data-value");
        var select = document.getElementById("language-select");
        var value = select.options[select.selectedIndex].value;

        //Ponemos el teléfono en el formulario correspondiente
        //document.getElementById('phone-' + code).value = document.getElementById('phone').value;

        //Ponemos el idioma en el form correspondiente
        document.getElementById("language-select-" + code).value = value;

        document.getElementById("form-" + code).submit();
    }

</script>
