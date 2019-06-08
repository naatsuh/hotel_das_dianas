<!--Template Name: vacayhome
File Name: contact.php
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<?php
    $nomePagina = "Contato";
    include "views/header.php";
?>
            <!--end-->
            <section class="image-head-wrapper" style="background-image: url('images/banner4.jpg');">
                <div class="inner-wrapper">
                    <h1>Contate-nos</h1>
                </div>
            </section>
            <div class="clearfix"></div>


            <section class="contact-block">
                <div class="container">
                    <div class="col-md-6 contact-left-block">
                        <h3><span>Contate </span>-nos</h3>
                        <p class="text-left">Nulla pharetra eleifend tellus in molestie. In vel neque sit amet urna gravida blandit nec id massa. Phasellus eu aliquet augue. Quisque fringilla urna quam.</p>
                        <p class="text-right">Av. Goias, Bairro Novo Horizonte. <i class="fa fa-map-marker fa-lg"></i></p>
                        <p class="text-right"><a href="tel:+1-202-555-0100"> +55 (63) 3692-0000 <i class="fa fa-phone fa-lg"></i></a></p>
                        <p class="text-right"><a href="mailto:demo@info.com"> hotel.das.dianas@gmail.com <i class="fa fa-envelope"></i></a></p>
                    </div>
                    <div class="col-md-6 contact-form">
                        <h3>Entre em <span>contato</span></h3>
                        <form action="#" method="post">
                            <input type="text" class="form-control" name="Name" placeholder="Nome" required="">
                            <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                            <textarea class="form-control" name="Message" placeholder="Escreva sua mensagem aqui...." required=""></textarea>
                            <input type="submit" class="submit-btn" value="Enviar">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>

            <!---map--->
            <section class="offspace-70">
                <div class="map">
                    <div class="container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.972704094524!2d-46.811059685624166!3d-11.625295537367167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9336ffea03604a41%3A0xe1a97587dba06c63!2sAv.+Goi%C3%A1s%2C+Dian%C3%B3polis+-+TO%2C+77300-000!5e0!3m2!1spt-BR!2sbr!4v1559833692695!5m2!1spt-BR!2sbr"  frameborder="0" style="border:0; width: 100%; height: 400px" allowfullscreen></iframe>
                    </div>
                </div>
            </section>

<?php include "views/footer.php"; ?>
