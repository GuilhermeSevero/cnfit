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
      <h2 class="text-center mb30 mt0">Monte o seu cardápio, de acordo com o combo escolhido.</h2>
      <div class="row mb20" align="center">
        <div class="btn-group" role="group" aria-label="Tipos">
          <button id="filter-carnes" type="button" class="btn btn-primary">Carnes</button>
          <button id="filter-complementos" type="button" class="btn btn-primary">Complementos</button>
        </div>
      </div>
      <div class="container">
        <div class="row grid">
          <?php
            require_once('php/produto.php');
            $produtos = Produto::pratos();
            for ($i=0; $i < count($produtos); $i++) { 
              $prod = $produtos[$i];
              $tipo = $prod->complemento ? 'complemento' : 'carne';
              echo '<div class="col-md-6 element-item '.$tipo.'">
                      <ul class="menus">
                        <li>
                          <figure class="image"><img src="img/produtos/'.$prod->nome_imagem.'" alt=""></figure>
                          <div class="text">
                            <span class="price"></span>
                            <h3>'.$prod->descricao.'</h3>
                            <p>'.$tipo.'</p>
                          </div>
                        </li>
                      </ul>
                    </div>';
            }
          ?>
      </div>
    </section>