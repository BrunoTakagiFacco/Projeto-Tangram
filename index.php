<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tangram Interativo e Educativo</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap"
    rel="stylesheet"
  />
    <link rel="icon" href="images\icon.png" type="image/png" />
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f8f9fa;
    }
    .hero {
      background: linear-gradient(135deg, #ffd6d6, #fff2cc);
      padding: 60px 20px;
      text-align: center;
    }
    .section {
      padding: 40px 20px;
      border-bottom: 1px solid #dee2e6;
    }
    .section h2 {
      margin-bottom: 20px;
      text-align: center;
    }
    .img-fluid {
      max-width: 100%;
      height: auto;
    }
    button:focus,
    a:focus {
      outline: 3px solid #000;
      outline-offset: 2px;
    }
    img.clickable {
      cursor: pointer;
    }
    /* Ajuste para igualar altura das imagens */
    .equal-height {
      height: 300px;
      object-fit: cover;
      border-radius: 8px;
    }
    .rowimg{
        text-align: center;
    }
    .pcseparada{
        border-radius: 16px;
    }
  </style>
</head>

<body>
  <!-- Plugin VLibras -->
  <div vw class="enabled">
    <div vw-access-button class="active" aria-label="Ativar tradução em Libras"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>new window.VLibras.Widget("https://vlibras.gov.br/app");</script>

  <!-- Cabeçalho -->
  <header class="hero" role="banner">
    <h1 class="display-4 fw-bold" tabindex="0">
      Descubra o Tangram: Aprenda Brincando!
    </h1>
    <p class="lead" tabindex="0">
      O Tangram é mais do que um simples quebra-cabeça. Ele é uma ferramenta
      educativa que mistura geometria, criatividade e diversão! Neste site, você
      vai conhecer a história por trás do Tangram, aprender como jogar e descobrir
      como ele pode ajudar no seu desenvolvimento lógico e visual — com
      acessibilidade para todos!
    </p>
    <figure>
      <img
        src="images\peças tangram.png"
        alt="Ilustração do Tangram inteiro com suas peças encaixadas"
        class="img-fluid my-4"
      />
      <figcaption class="visually-hidden">
        Imagem representando o Tangram completo
      </figcaption>
    </figure>
    <button
      class="btn btn-dark mt-2"
      onclick="
        document.body.classList.toggle('bg-dark');
        document.body.classList.toggle('text-light');
        document.querySelector('.hero').style.background = 
          document.body.classList.contains('bg-dark') ? '#000' : 'linear-gradient(135deg, #ffd6d6, #fff2cc)';
        document.querySelector('.pcseparada').style.background = 
        document.body.classList.contains('bg-light') ? '#000' : '#fafafa';
      "
      aria-label="Alternar modo noturno"
    >
      <i class="fas fa-adjust" aria-hidden="true"></i> Modo Noturno
    </button>
  </header>

  <!-- Conteúdo -->
  <main class="container my-5" role="main">
    <section class="section" id="o-que-e">
      <h2>O Que é o Tangram?</h2>
      <p>
        O Tangram é um jogo antigo formado por 7 peças geométricas chamadas de
        “tans”. Com essas peças, é possível criar diferentes figuras como
        animais, pessoas, casas, letras e tudo o que a imaginação permitir. O
        desafio está em usar todas as peças, sem sobrepor, para formar uma
        imagem. É muito usado em escolas para desenvolver habilidades
        matemáticas, espaciais e criativas.
      </p>
    </section>

    <section class="section" id="pecas">
      <h2>Conheça as Peças do Jogo</h2>
      <p>O Tangram é formado por:</p>
      <ul>
        <li>2 triângulos grandes – usados para formar a base de várias figuras.</li>
        <li>1 triângulo médio – ótimo para partes intermediárias da figura.</li>
        <li>2 triângulos pequenos – ideais para detalhes e finalizações.</li>
        <li>1 quadrado – encaixa bem em diversas posições.</li>
        <li>1 paralelogramo – a peça mais “diferente”, traz equilíbrio ao conjunto.</li>
      </ul>
      <p>Cada peça é importante e tem seu papel na montagem das figuras.</p>
        <div class="row rowimg">
        <figure>
        <img
          src="images\tangram-triangular.png"
          alt="Peças do Tangram separadas"
          class="img-fluid mt-3 pcseparada"
        />
        <figcaption class="visually-hidden">
          Ilustração mostrando todas as sete peças do Tangram separadas
        </figcaption>
      </figure>
        </div>
    </section>

    <section class="section" id="como-brincar">
      <h2>Como Brincar com o Tangram?</h2>
      <p>Passo a passo:</p>
      <ol>
        <li>Separe as 7 peças do Tangram.</li>
        <li>Escolha uma imagem ou silhueta para montar (como um gato, casa, barco).</li>
        <li>Use todas as peças, sem sobrepor nenhuma.</li>
        <li>Gire, vire e teste posições até conseguir formar a figura desejada.</li>
        <li>Não tem só uma solução! Use a criatividade para inventar novas formas.</li>
      </ol>
      <div
        class="row text-center"
        role="group"
        aria-label="Exemplos de figuras com Tangram"
      >
        <div class="col-md-4">
          <figure>
            <img
              src="images\WhatsApp Image 2025-06-18 at 10.10.42.jpeg"
              alt="Tangram formando um gato"
              class="img-fluid clickable equal-height"
              data-bs-toggle="modal"
              data-bs-target="#imageModal"
              data-full="images\WhatsApp Image 2025-06-18 at 10.10.42.jpeg"
            />
            <figcaption class="visually-hidden">
              Figura de gato feita com peças do Tangram
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4">
          <figure>
            <img
              src="images\WhatsApp Image 2025-06-18 at 10.10.54.jpeg"
              alt="Tangram formando uma casa"
              class="img-fluid clickable equal-height"
              data-bs-toggle="modal"
              data-bs-target="#imageModal"
              data-full="images\WhatsApp Image 2025-06-18 at 10.10.54.jpeg"
            />
            <figcaption class="visually-hidden">
              Figura de casa feita com peças do Tangram
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4">
          <figure>
            <img
              src="images\WhatsApp Image 2025-06-18 at 10.11.09.jpeg"
              alt="Tangram formando um barco"
              class="img-fluid clickable equal-height"
              data-bs-toggle="modal"
              data-bs-target="#imageModal"
              data-full="images\WhatsApp Image 2025-06-18 at 10.11.09.jpeg"
            />
            <figcaption class="visually-hidden">
              Figura de barco feita com peças do Tangram
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <section class="section" id="acessibilidade">
      <h2>Acessibilidade para Todos com VLibras</h2>
      <p>
        Este site conta com o plugin do VLibras, um recurso que permite a tradução
        do conteúdo em Língua Brasileira de Sinais (Libras). Assim, pessoas surdas
        ou com deficiência auditiva podem acessar todo o conteúdo de forma
        inclusiva e participativa. Acreditamos que a educação deve ser para todos!
      </p>
    </section>
  </main>

  <!-- Modal para imagem ampliada -->
  <div
    class="modal fade"
    id="imageModal"
    tabindex="-1"
    aria-labelledby="imageModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-dark">
        <div class="modal-header border-0">
          <h5 class="modal-title text-light" id="imageModalLabel">
            Visualização da Imagem
          </h5>
          <button
            type="button"
            class="btn-close btn-close-white"
            data-bs-dismiss="modal"
            aria-label="Fechar"
          ></button>
        </div>
        <div class="modal-body p-0 text-center">
          <img
            src=""
            alt=""
            id="modalImage"
            class="img-fluid"
            style="max-height: 80vh; margin: auto;"
          />
        </div>
      </div>
    </div>
  </div>

  <!-- Rodapé -->
  <footer
    class="bg-dark text-light text-center py-4 mt-5"
    role="contentinfo"
  >
    <div class="container">
      <p class="mb-1"> 2025 - Projeto Educacional Tangram</p>
      <p class="mb-0">
        <a href="https://apppublico.com.br/educacao_cristais/pdf/20200918160119_DG%206%20E%207.pdf" target="_blank" class="text-light" role="link">Download PDF com peças</a> |
        <a href="https://www.instagram.com/brunohtakagi/" target="_blank" class="text-light" role="link">Criador do Site</a>
      </p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Script para abrir modal com a imagem clicada
    const imageModal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");

    imageModal.addEventListener("show.bs.modal", (event) => {
      const triggerImg = event.relatedTarget; // Imagem que acionou o modal
      const fullImgSrc = triggerImg.getAttribute("data-full");
      const altText = triggerImg.alt;
      modalImage.src = fullImgSrc;
      modalImage.alt = altText;
    });
  </script>
</body>

</html>
