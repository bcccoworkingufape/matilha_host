@extends('layout.base')

<head>
  <!-- Styles -->
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>

@section('content')
<header id="highlight">
  <div class="header-content">
    <div class="header-info">
      <h1>HOSPEDAGEM DE SITES</h1>
      <p class="header-sub">
        Tenha site e emails a partir
        de R$ 4,50 /mês
      </p>
      <p class="header-text">
        Mussum Ipsum é simplesmente uma
        simulação de texto da indústria tipográfica e
        de impressos, e vem sendo utilizado desde
        o século XVI.
      </p>
    </div>
  </div>
</header>

<section id="plans" class="plans-container">
  <div class="plans-title">
    Conheça os planos da <strong>Matilha.<span class="red">host</span></strong>
  </div>
  <div class="plans-content">
    <div class="plan-card bg-dark">
      <img src="img/img_dog_1.png" alt="plano pug" />
      <span class="title-card">Pug</span>
      <span>Solução ideal para iniciantes</span>
      <div class="separator"></div>
      <span class="card-price">
        <span class="simbol">R$ </span>
        <span class="price">4,99</span>
        /mês
      </span>
      <ul>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
      </ul>
      <div class="buy-btn" onclick="handleAlertDevelopment()">
        <span>Comprar</span>
      </div>
    </div>
    <div class="plan-card bg-dark">
      <img src="img/img_dog_4.png" alt="plano buldogue" />
      <span class="title-card">Buldogue</span>
      <span>Solução ideal para medianos</span>
      <div class="separator"></div>
      <span class="card-price">
        <span class="simbol">R$ </span>
        <span class="price">150,50</span>
        /mês
      </span>
      <ul>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
      </ul>
      <div class="buy-btn" onclick="handleAlertDevelopment()">
        <span>Comprar</span>
      </div>
    </div>
    <div class="plan-card bg-dark">
      <img src="img/img_dog_3.png" alt="plano doberman" />
      <span class="title-card">Doberman</span>
      <span>Solução ideal para avançados</span>
      <div class="separator"></div>
      <span class="card-price">
        <span class="simbol">R$ </span>
        <span class="price">550,50</span>
        /mês
      </span>
      <ul>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_bloqueado.svg" alt="bloqueado" /> Mussum Ipsum
        </li>
      </ul>
      <div class="buy-btn" onclick="handleAlertDevelopment()">
        <span>Comprar</span>
      </div>
    </div>
    <div class="plan-card bg-dark">
      <img src="img/img_dog_2.png" alt="plano pitbull" />
      <span class="title-card">Pitbull</span>
      <span>Solução ideal para experientes</span>
      <div class="separator"></div>
      <span class="card-price">
        <span class="simbol">R$ </span>
        <span class="price">950,50</span>
        /mês
      </span>
      <ul>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
        <li>
          <img src="img/icon_aprovado.svg" alt="check" /> Mussum Ipsum
        </li>
      </ul>
      <div class="buy-btn" onclick="handleAlertDevelopment()">
        <span>Comprar</span>
      </div>
    </div>
  </div>
</section>

<section id="domain" class="search-domain bg-dark">
  <span class="title">
    Encontre o <span class="red">domínio</span> perfeito
  </span>
  <span class="description">
    <p>
      Insira o nome de domínio de sua preferência e escolha a extensão em seguida <br />
      (escolha entre .com, .com.br, .xyz, .online, .tech, .site, .net e muitos outros)
    </p>
  </span>
  <form>
    <input name="domain" />
    <span class="search-btn" onclick="handleAlertDevelopment()">Pesquisar</span>
  </form>
</section>

<section id="systems" class="systems">
  <span class="title">
    Lorem Ipsum é simplesmente uma simulação de<br />
    texto da indústria tipográfica e de impressos
  </span>
  <p>
    Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de <br />
    impressos, e vem sendo utilizado desde o século XVI.
  </p>
  <div class="cards">
    <span class="card-system">
      <span class="box">
        <img src="img/icon_joomla.svg" />
      </span>
      <span class="description">Joomla</span>
    </span>
    <span class="card-system">
      <span class="box">
        <img src="img/icon_joomla.svg" />
      </span>
      <span class="description">Joomla</span>
    </span>
    <span class="card-system">
      <span class="box">
        <img src="img/icon_joomla.svg" />
      </span>
      <span class="description">Joomla</span>
    </span>
    <span class="card-system">
      <span class="box">
        <img src="img/icon_joomla.svg" />
      </span>
      <span class="description">Joomla</span>
    </span>
    <span class="card-system" onclick="handleAlertDevelopment()">
      <span class="box-more">
        <img src="img/icon_fechar.svg" />
      </span>
      <span class="description">Mais</span>
    </span>
  </div>
</section>

@endsection

<script>
  function handleAlertDevelopment() {
    alert("Em desenvolvimento!");
  }
</script>