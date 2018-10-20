<?php
    $enviado = isset($_GET['enviado']) ? $_GET['enviado'] : -1;
    $erro = isset($_GET['erro']) ? $_GET['erro'] : '';
?>

<section class="probootstrap-section" data-section="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-center probootstrap-animate">
                <div class="probootstrap-heading dark">
                    <h1 class="primary-heading">Contato</h1>
                    <h3 class="secondary-heading">Fale Conosco</h3>
                </div>
                <p>
                    Aqui você pode: Enviar suas sujestões, tirar dúvidas, mandar depoimentos 
                    e até mesmo fazer seus pedidos! <br>
                    <strong>Não perca tempo, mande-nos sua mensagem!</strong>
                </p>
                <div> <span class="seperator">* * *</span></div>
                <p>
                    <img src="img/logo/whats.png" alt="WhatsApp" class="logo-contato" id="logo-whats">
                    <span><strong>(51) 99965-6393</strong></span>
                </p>
                <p>
                    <img src="img/logo/mail.png" alt="e-Mail" class="logo-contato">
                    <span><strong>contato@cnfit.com.br</strong></span>
                </p>
                <a href="https://www.facebook.com/cnfitvsaudavel/">
                    <img src="img/logo/face.ico" alt="Facebook"/>
                </a>
            </div>
            <div class="col-md-6 col-md-push-1 probootstrap-animate">
                <?php
                    if ($enviado == 1) {
                        echo '<div class="alert alert-success" role="alert">
                                    E-mail enviado com sucesso!
                                </div>';
                    } else if ($enviado == 0) {
                        echo '<div class="alert alert-danger" role="alert">
                                E-mail Não pode ser enviado! <br> '.$erro.'
                            </div>';
                    }
                ?>
                <div class="mensagem-retorno"></div>
                <form action="php/email.php" method="POST" data-nav-section="contact" class="probootstrap-form" id="form-contact">
                    <div class="form-group">
                        <label for="c_name">Qual seu nome?</label>
                        <div class="form-field">
                            <input type="text" id="c_name" name="nome" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c_email">e-mail</label>
                        <div class="form-field">
                            <input type="text" id="c_email" name="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c_message">Diga-nos alguma coisa</label>
                        <div class="form-field">
                            <textarea name="mensagem" id="c_message" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="c_submit" id="c_submit" value="Enviar Mensagem" class="btn btn-primary btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>