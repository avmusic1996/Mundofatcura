<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">MundoFactura</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header{{ $activePage == 'dashboard' ? ' active' : '' }}">Inicio</li>
      <li class="dropdown active">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>{{ __("Home") }}</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('home')}}">Reportes General</a></li>
          <li class=active><a class="nav-link" href="#">Reportes especificos</a></li>
        </ul>
      </li>
      <li class="menu-header">Empresa</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Inventario</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link{{ $activePage == 'users' ? ' active' : '' }}" href="{{ route('users.index') }}">Usuarios</a></li>
          <li><a class="nav-link{{ $activePage == 'clientes' ? ' active' : '' }}" href="{{ route('clientes.index') }}">Clientes</a></li>
          <li><a class="nav-link{{ $activePage == 'productos' ? ' active' : '' }}" href="{{ route('post.index') }}">Productos / Categorias</a></li>
          <li><a class="nav-link{{ $activePage == 'proveedor' ? ' active' : '' }}" href="{{ route('proveedor.index') }}">Proveedores</a></li>
        </ul>
      </li>
      <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Creditos</span></a></li>
    </ul>
    
  </aside>
</div>