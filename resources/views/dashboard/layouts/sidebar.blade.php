<div class="iq-sidebar  sidebar-default  ">
    <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
        <a href="/" class="header-logo">
            <img src="{{asset('assets/images/logo.png')}}" class="img-fluid rounded-normal light-logo" alt="logo">
            <span>CHELSEA TKD</span>
        </a>
        <div class="side-menu-bt-sidebar-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="side-menu">
                <li class="active sidebar-layout">
                    <a href="/" class="svg-icon">
                        <i class="fa-solid fa-house"></i>
                        <span class="ml-2">Dashboard</span>
                    </a>
                </li>
                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">ADMINISTRATION</span>
                </li>

                <li class="sidebar-layout">
                    <a href="#app1" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-users-line"></i>
                        <span class="ml-2">Pratiquants</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout mt-2">
                            <a href="/pratiquants" class="svg-icon">
                                <i class="fa-solid fa-user-plus"></i>
                                <span class="">Inscription</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="#" class="svg-icon">
                                <i class="fa-solid fa-print"></i>
                                <span class="">Imprimer des cartes</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="#" class="svg-icon">
                                <i class="fa-solid fa-check-double"></i>
                                <span class="">Passage de grade</span>
                            </a>
                        </li>


                    </ul>
                </li>

                {{-- <li class=" sidebar-layout">
                    <a href="#" class="svg-icon">

                        <span class="ml-2">Icon</span>
                    </a>
                </li> --}}


                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">ARTICLE</span>
                </li>
                <li class="sidebar-layout">
                    <a href="#app2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-newspaper"></i>
                        <span class="ml-2">Publication</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app2" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout mt-2">
                            <a href="#" class="svg-icon">
                                <i class="fa-solid fa-plus"></i>
                                <span class="">Ajouter</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="#" class="svg-icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span class="">Modifier</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">PARAMETRAGE</span>
                </li>
                <li class="sidebar-layout">
                    <a href="#app3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-fingerprint"></i>
                        <span class="ml-2">Accès Utilisateur</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app3" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout mt-2">
                            <a href="#" class="svg-icon">
                                <i class="fa-solid fa-plus"></i>
                                <span class="">Ajouter</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="#" class="svg-icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span class="">Modifier</span>
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        </nav>
        <div class="pt-5 pb-5"></div>
    </div>
</div>
