

<nav id="nav-top">
    <div class="nav-wrapper">
      <a href="{{route('site.home')}}" class="brand-logo"><img align="center" src = "img/icone_search.png"></a>

      <!--Configuração Desktop-->
      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('site.home')}}"><i class="material-icons left"><img align="center" src = "img/icon_pc2.png"></i>Home</a></li>
        <!--Referenciando a rota pelo apelido-->
        <li><a href="{{route('site.contato')}}"><i class="material-icons right"><img align="center" src = "img/icon_pc2.png"></i>Contatos</a></li>
      </ul>
      
      <!--Configuração Mobile-->
      <ul class="side-nav">
        <li><a href="{{route('site.home')}}"><i class="material-icons left">search</i>Home</a></li>
        <li><a href="{{route('site.contato')}}"><i class="material-icons right">view_module2</i>Contatos</a></li>
      </ul>

    </div>
  </nav>

