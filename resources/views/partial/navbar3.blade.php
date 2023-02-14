 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <nav class="main-nav">
                     <!-- ***** Logo Start ***** -->
                     <a href="index.html" class="logo">
                         SLBN BADEGAN
                     </a>
                     <!-- ***** Logo End ***** -->
                     <!-- ***** Menu Start ***** -->
                     <ul class="nav">
                         <li><a class="nav-link" href="/about">about</a></li>
                         <li><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}"
                                 href="/contact">Contact</a></li>
                         <form action="/logout" method="post">
                             @csrf
                             <button type="submit">logout</button>
                         </form>
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
