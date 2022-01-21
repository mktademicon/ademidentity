<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://ademicon.com.br/wp-content/themes/ademicon/assets/images/favicon-ademicon.png" />
  <title>Ademidentity</title>

  <!-- Estilos css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/salesgrowthademicon/ademidentity@latest/css/theme.css" />

  <!-- JavaScript necessário para alguns recursos -->
  <script src="https://cdn.jsdelivr.net/gh/salesgrowthademicon/ademidentity@latest/js/scripts.js" type="text/javascript"></script>

  <!-- JavaScript necessário para carousel -->
  <script src="https://cdn.jsdelivr.net/gh/salesgrowthademicon/ademidentity@latest/js/plugin-scroll.js" type="text/javascript"></script>
  
  <!-- JQuery 3.5.1 compilado e minimizado necessário para alguns recursos -->
  <script src="https://cdn.jsdelivr.net/gh/salesgrowthademicon/ademidentity@latest/js/library.js" type="text/javascript"></script>
  
  <!-- Font Awesome necessário para alguns recursos -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
  <header class="adt-text--center adt-padding-2-8-4">header HEADER</header>
  <main>
    <section class="adt-row adt-padding-2-8-4">
      <div class='adt-col-6 adt-text--center'>col 6</div>
      <div class='adt-col-6 adt-text--center'>col 6</div>
    </section>
    <section class="adt-row adt-text--center adt-padding-2-8-4">
      <div class='adt-col-8 adt-col--sm-12'>
        <p>Padrão de botões '.adt-btn'</p>
        <div class='adt-row adt-justify-content--center'>
          <button class='adt-btn adt-btn--lead'>--lead</button>
          <button class='adt-btn adt-btn--green'>--green</button>
          <button class='adt-btn adt-btn--yellow'>--yellow</button>
          <button class='adt-btn adt-btn--blue'>--blue</button>
          <button class='adt-btn adt-btn--red'>--red</button>
        </div>
        <div class='adt-row adt-justify-content--center'>
          <button class='adt-btn adt-btn--red_reversed'>--red_reversed</button>
          <button class='adt-btn adt-btn--blue_reversed'>--blue_reversed</button>
          <button class='adt-btn adt-btn--lead_reversed'>--lead_reversed</button>
          <div style="background-color: #c1c1c1;">
            <button class='adt-btn adt-btn--transparent'>--transparent</button>
          </div>
        </div>
      </div>
      <div class='adt-col-4 adt-col--sm-12'>
        <p>Padrão de botões group '.adt-btn'</p>
        <div class='adt-btn--group'>
          <a class='adt-btn adt-btn--group_left adt-btn--blue'>text</a>
          <a class='adt-btn adt-btn--group_right adt-btn--red'>text</a>
        </div>
      </div>
    </section>
    <section class='adt-padding-2-8-4 adt-row'>
      <div class='adt-col-3 adt-text--center'>col 3</div>
      <div class='adt-col-6 adt-col--sm-12'>
        <form class='adt-form adt-row adt-hidden'>
          <div class='adt-col-3 adt-padding--left-0'>
            <label class='adt-form--label'>Texto:</label>
            <input class='adt-form--input' type='text' placeholder='Texto' />
          </div>
          <div class='adt-col-9 adt-padding--right-0'>
            <label class='adt-form--label'>Texto:</label>
            <input class='adt-form--input' type='text' placeholder='Texto' />
          </div>
          <label class='adt-form--label'>Texto:</label>
          <input class='adt-form--input' type='text' placeholder='Texto' />
          <label class='adt-form--label'>Texto:</label>
          <input class='adt-form--input' type='text' placeholder='Texto' />
          <label class='adt-form--label'>Select</label>
          <select class='adt-form--select' placeholder="Select">
            <option value="" disabled selected hidden>Select</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
          <div class='adt-row'>
            <div class='adt-col-6 adt-flex adt-align--items_center adt-justify--content_center'>
              <span id='checkbox' class="adt-form--check" data-status="false" onclick="check()">
                <i class="fas fa-check"></i>
              </span>
            </div>
            <div class='adt-col-6'>
              <label class='adt-form--label'>Anexar Arquivo:</label>
              <div class='adt-form--input adt-form--input_file' >
                <i class="fas fa-plus"></i>
                <div class='msg-file' onclick="triggerFile()">Nenhum arquivo</div>
                <div class='input-file'>
                  <input id="upload" type="file"/>
                </div>
              </div>
            </div>
          </div>
          <p class='adt-form--info'><i class="fas fa-asterisk"></i> Campos obrigatórios</p>
          <button class='adt-btn adt-btn--red adt-btn-30'>Enviar</button>
        </form>
      </div>
      <div class='adt-col-3 adt-text--center'>col 3 </div>
    </section>
    <section class='adt-row adt-padding-4-8'>
      <div class='adt-col-3 adt-col--sm-7 adt-spacing-sm--bottom-8 adt-flex adt-flex--column adt-justify--content_center adt-align--items_center'>
        <p>Animate</p></br>
        <div class='adt-animate'></div>
      </div>
      <div class='adt-col-3 adt-col--sm-5 adt-spacing-sm--bottom-8 adt-flex adt-flex--column adt-justify--content_center adt-align--items_center'>
        <p>Right to Left</p></br>
        <div class='adt-animate--right_to_left'></div>
      </div>
      <div class='adt-col-3 adt-col--sm-5 adt-flex adt-flex--column adt-justify--content_center adt-align--items_center'>
        <p>Left to Right</p></br>
        <div class='adt-animate--left_to_right'></div>
      </div>
      <div class='adt-col-3 adt-col--sm-7 adt-flex adt-flex--column adt-justify--content_center adt-align--items_center'>
        <p>Scala</p></br>
        <div class='adt-animate--scale'></div>
      </div>
    </section>
    <section class='adt-row adt-padding-4-8 adt-hidden'>
      <div class='adt-col-1 adt-col--sm-none'></div>
      <div class='adt-col-2 adt-col--sm-5 adt-flex adt-flex--column adt-justify--content_center adt-align--items_center'>
        <p>Top to Bottom</p></br>
        <div class='adt-animate--top_to_bottom'></div>
      </div>
      <div class='adt-col-2 adt-col--sm-4 adt-flex adt-flex--column adt-justify--content_center adt-align--items_center'>
        <p>Bottom to Top</p></br>
        <div class='adt-animate--bottom_to_top'></div>
      </div>
      <div class='adt-col-2 adt-col--sm-12 adt-spacing-sm--top-80 adt-spacing-sm--bottom-8 adt-flex adt-flex--column adt-justify--content_center adt-align--items_center'>
        <p>Escala em Cinza</p></br>
        <div class='adt-animate--grayscale'></div>
      </div>
      <div class='adt-col-2 adt-col--sm-6 adt-flex adt-flex--column adt-justify--content_center adt-align--items_center'>
        <p>Gradiente</p></br>
        <div class='adt-animate--style_gradient'></div>
      </div>
      <div class='adt-col-2 adt-col--sm-6 adt-flex adt-flex--column adt-justify--content_center adt-align--items_center'>
        <p>Border Radius</p></br>
        <div class='adt-animate--style_radius'></div>
      </div>
      <div class='adt-col-1 adt-col--sm-none'></div>
    </section>
    
    <script>
      $(document).ready(() => {
        setTimeout(() => {
          animateScroll('planos')
          animateScroll('dif_planos','dif_planos',4)
        }, 500)
      })
    </script>

    <section class='adt-row adt-padding-4-8'>
      <div class='adt-col-12 adt-text--center'>Carousel</div>
      <div class='adt-col-2'></div>
      <div class='adt-relative adt-col-8'>
        <a class="item-left planos-nav-prev disabled" href="javascript:;" onclick="navigateScroll('planos','prev')"><i class="fas fa-chevron-left"></i></a>
        <a class="item-right planos-nav-next" href="javascript:;" onclick="navigateScroll('planos','next')"><i class="fas fa-chevron-right"></i></a>
        <div class="planos-itens itens adt-col--sm-10">
          <div class="planos-box box" ontouchstart="touchStart(event)" ontouchmove="touchMove(event)" ontouchend="touchEnd(event,'planos')">
            <?php
              for ($i=0; $i < 5; $i++) { 
            ?>
                <div class="planos-item item">
                  <div class='img' style='background: var(--color-red) center center / contain no-repeat;width:90%;height:100px;margin:0 auto;'></div>
                </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <section class='adt-row adt-padding-4-8'>
      <div class='adt-col-12 adt-text--center'>Carousel Personalizando Exibição</div>
      <div class='adt-col-2'></div>
      <div class='adt-relative adt-col-8'>
        <a class="item-left dif_planos-nav-prev disabled" href="javascript:;" onclick="navigateScroll('dif_planos','prev')"><i class="fas fa-chevron-left"></i></a>
        <a class="item-right dif_planos-nav-next" href="javascript:;" onclick="navigateScroll('dif_planos','next')"><i class="fas fa-chevron-right"></i></a>
        <div class="dif_planos-itens itens adt-col--sm-10">
          <div class="dif_planos-box box" ontouchstart="touchStart(event)" ontouchmove="touchMove(event)" ontouchend="touchEnd(event,'dif_planos')">
            <?php
              for ($i=0; $i < 5; $i++) { 
            ?>
                <div class="dif_planos-item item">
                  <div class='img' style='background: var(--color-red) center center / contain no-repeat;width:90%;height:100px;margin:0 auto;'></div>
                </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>footer</footer>
</body>
</html>