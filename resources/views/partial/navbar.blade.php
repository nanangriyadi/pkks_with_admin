 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <nav class="main-nav">
                     <!-- ***** Logo Start ***** -->
                     <a href="/" class="logo" class="additive-symbols:(text-shadow: #09dceb 2px 2px 2px)" ;>
                         SLBN BADEGAN
                     </a>
                     <!-- ***** Logo End ***** -->
                     <!-- ***** Menu Start ***** -->
                     <ul class="nav">
                         <li><a class="nav-link {{ Request::is('about') ? 'active' : '' }}"
                                 href="/about">about</a></li>
                         <li><a class="nav-link {{ Request::is('portofolio') ? 'active' : '' }}"
                                 class="nav-link" href="/portofolio">portofolio</a></li>
                         <li><a class="nav-link {{ Request::is('team') ? 'active' : '' }}"
                                 href="/team">team</a></li>
                         <li><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}"
                                 href="/contact">Contact</a></li>
                     </ul>
                     <a class='menu-trigger'>
                         <span>Menu</span>
                     </a>
                     <!-- ***** Menu End ***** -->
                 </nav>
             </div>
         </div>
     </div>
 </header>
