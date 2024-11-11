<div>
   <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 my-2 ps bg-gradient-dark bg-white" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href=" {{ route('paginaInicial') }}">
        {{-- <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo"> --}}
        <span class="ms-1 text-sm text-white">{{ Auth::user()->name }}</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse py-8 w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active bg-gradient-dark text-white" href=" {{ route('paginaInicial')}}">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Página Inicial</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('explorar')}}">
            {{-- <i class="material-icons md-48"></i> --}}
            <i class="material-symbols-rounded opacity-5">manage_search</i>
            <span class="nav-link-text ms-1">Explorar</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('biblioteca')}}">
            <i class="material-symbols-rounded opacity-5">library_books</i>
            <span class="nav-link-text ms-1">Biblioteca</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('meusLivros')}}">
            <i class="material-symbols-rounded opacity-5">collections_bookmark</i>
            <span class="nav-link-text ms-1">Meus Livros</span>
          </a>
        </li>
        <li class="nav-item mt-8">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-5">Pessoal</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href=" {{ route('profile.edit')}}"> 
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Perfil</span>
          </a>
        </li>
        <li class="nav-item">
          <form id="form" method="POST" action="{{ route('logout') }}">
            @csrf
              <a class="nav-link text-white" onclick="document.getElementById('form').submit();">
                <i class="material-symbols-rounded opacity-5">assignment</i>
                <span class="nav-link-text ms-1">Sign Out</span>
              </a>  
          </form>
          
        </li>
      </ul>
      {{-- <div class="mt-2 d-flex">
        <h3 class="mb-0">Light / Dark</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
        </div>
      </div>
    </div> --}}
    
    <div class="sidenav-footer position-relative w-100">
      <div class="my-10 mx-3">
        <a class="btn bg-gradient-dark w-100" href="" type="button">Escrever</a>
      </div>
    </div>
  </aside>
</div> 