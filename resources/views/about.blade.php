@extends('layout.base')

<head>
  <style>
    header {
      background: no-repeat center/cover url("banner1.jpg");
      height: calc(100vh - 200px);
    }

    .header-content {
      width: 100%;
      height: 100%;
      background: radial-gradient(rgba(0, 0, 0, 0.4), black);

      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-end;
      padding: 40px;
    }

    .header-content h1 {
      color: #fff;
      font-weight: bold;
    }

    .header-sub {
      color: #fff;
      font-size: 24px;
    }

    .header-text {
      color: #fff;
      font-size: 18px;
    }

    @media only screen and (min-width: 900px) {
      .header-content {
        padding: 0 100px 0 0;
      }

      .header-info {
        width: 35%;
      }

      .header-sub {
        font-size: 35px;
      }
    }

    .plans-container {
      display: flex;
      flex: 1;
      background-color: #000;
      padding: 100px 20px 0;
      margin: 0;
      color: white;
      height: 100vh;
    }
  </style>
</head>

@section('content')
<header id="highlight">
  <div class="header-content">
    <div class="header-info">
      <h1>HOSPEDAGEM DE SITES</h1>
      <p class="header-sub">
        Tenha site e emails a partir
        de R$ 4,50/mês
      </p>
      <p class="header-text">
        Lorem Ipsum é simplesmente uma
        simulação de texto da indústria tipográfica e
        de impressos, e vem sendo utilizado desde
        o século XVI.
      </p>
    </div>
  </div>
</header>
<section id="plans" class="plans-container">
  About
</section>
@endsection