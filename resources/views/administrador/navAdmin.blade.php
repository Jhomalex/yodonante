<div class="ks-column ks-sidebar ks-info">
   <div class="ks-wrapper ks-sidebar-wrapper">
         <ul class="nav nav-pills nav-stacked">
            <li class="nav-item ks-user dropdown">
               <a class="nav-link"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                     <img src="/img/usuarios/{{ auth()->user()->foto }}" width="36" height="36" class="ks-avatar rounded-circle">
                     <div class="ks-info">
                        <div class="ks-name">{{ auth()->user()->name }}</div>
                        <div class="ks-text">Chief Technology Officer</div>
                     </div>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link"  href="{{ route('admin.estadisticas') }}" role="button" aria-haspopup="true" aria-expanded="false">
                     <span class="ks-icon la la-dashboard"></span>
                     <span>Estadísticas</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link"  href="{{ route('admin.donantes') }}" role="button" aria-haspopup="true" aria-expanded="false">
                     <span class="ks-icon la la-user"></span>
                     <span>Donantes</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                     <span class="ks-icon la la-cubes"></span>
                     <span>Casos</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                     <span class="ks-icon la la-envelope-o"></span>
                     <span>Mensajes</span>
               </a>
            </li>
            <!--li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                     <span class="ks-icon la la-cubes"></span>
                     <span>Layouts</span>
               </a>
               <div class="dropdown-menu">
                     <a class="dropdown-item" href="../default-primary/index.html">Default</a>
                     <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                           <span>Sidebar</span>
                        </a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="../sidebar_sections-primary/index.html" target="_blank">Sections</a>
                           <a class="dropdown-item" href="../sidebar_compact-primary/index.html" target="_blank">Compact</a>
                           <a class="dropdown-item" href="../sidebar_iconbar-primary/index.html" target="_blank">Iconbar</a>
                           <a class="dropdown-item" href="../sidebar_iconbar_compact-primary/index.html" target="_blank">Iconbar Compact</a>
                        </div>
                     </div>
                     <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                           <span>Navigation</span>
                        </a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="../horizontal_navbar-primary/index.html" target="_blank">Horizontal</a>
                           <a class="dropdown-item" href="../horizontal_navbar_iconbar-primary/index.html" target="_blank">Horizontal Iconbar</a>
                        </div>
                     </div>
               </div>
            </li-->
         </ul>
         <div class="ks-sidebar-extras-block">
            <div class="ks-sidebar-copyright">© yodonante - 2018<p>Desarrollado por Jhonatan Malara</p></div>
         </div>
   </div>
</div>