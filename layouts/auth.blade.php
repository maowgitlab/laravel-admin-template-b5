@include('layouts.partials.auth.header')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
    @include('layouts.partials.auth.footer')
