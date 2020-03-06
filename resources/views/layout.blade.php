<html>
    <head>
        <title>Examen - @yield('title')</title>
        
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        <nav   class="fixed-bottom navbar-light bg-light">
      <div class="text-center">
        <div class="socials">
          <div class="socials-inner">
            <h5>Mis redes sociales</h5>
            
              <a href="https://www.facebook.com/Karenrgz2398?ref=bookmarks" class="facebook-ico"><span></span>Facebook</a>
              
            </ul>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
  </nav>
    </body>

</html>