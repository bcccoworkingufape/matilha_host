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

@include('home.plans')

@include('home.search_domain')

@include('home.systems')

@endsection

<script>
  function handleAlertDevelopment() {
    alert("Em desenvolvimento!");
  }
</script>