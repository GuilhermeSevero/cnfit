<section class="probootstrap-section-bg overlay" style="background-image: url(img/principal_3.jpg);"  data-stellar-background-ratio="0.5"  data-section="menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Descubra</h2>
              <h3 class="secondary-heading">Nossos Pratos</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">

          <?php
            require_once('php/produto.php');
            $produtos = Produto::pratos();
            for ($i=0; $i < count($produtos); $i++) { 
              $prod = $produtos[$i];
              echo '<div class="col-md-6">
                      <ul class="menus">
                        <li>
                          <figure class="image"><img src="img/produtos/'.$prod->nome_imagem.'" alt=""></figure>
                          <div class="text">
                            <span class="price">R$ '.$prod->preco.'</span>
                            <h3>'.$prod->descricao.'</h3>
                            <p>'.$prod->observacao.'</p>
                          </div>
                        </li>
                      </ul>
                    </div>';
            }
          ?>
      </div>
    </section>