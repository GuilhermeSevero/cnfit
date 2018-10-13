<section class="probootstrap-section-bg overlay" style="background-image: url(img/principal_2.jpg);" data-stellar-background-ratio="0.5" data-section="specialties">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Descubra</h2>
              <h3 class="secondary-heading">Nossas Especialidades</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- probootstrap-bg-white -->
    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="probootstrap-cell-retro">
            <?php
              require_once('php/produto.php');
              $produtos = Produto::all();
              for ($i=0; $i < count($produtos); $i++) { 
                $prod = $produtos[$i];

                echo '<div class="half">
                        <div class="probootstrap-cell'.(($i / 2) % 2 == 0 ? ' ' : ' reverse ').'probootstrap-animate" data-animate-effect="fadeIn">
                          <div class="image" style="background-image: url(img/produtos/'.$prod->id.'.jpg);"></div>
                          <div class="text text-center">
                            <h3>'.$prod->descricao.'</h3>
                            <p>'.$prod->observacao.'</p>
                            <p class="price">R$ '.$prod->preco.'</p>
                          </div>
                        </div>
                      </div>';      
              }
            ?>
          </div>
        </div>
      </div>
    </section>