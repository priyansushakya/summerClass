<header>
    <div class="logo">🌟 DemoSite</div>
    <nav>
      <a href="{{route('home')}}" class="@if(request()->is('/')) active @endif">Home</a>
      <a href="{{route('about')}}" class="@if(request()->is('aboutus')) active @endif">About</a>
      <a href="{{route('news')}}" class="@if(request()->is('news')) active @endif">News</a>
      <a href="{{route('contact')}}" class="@if(request()->is('contact')) active @endif">Contact</a>
    </nav>
</header>