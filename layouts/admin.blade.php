@include('layouts.partials.header')
@include('layouts.partials.navbar')
<div id="layoutSidenav">
    @include('layouts.partials.sidebar')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">@yield('title')</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
                @yield('content')
            </div>
        </main>
        @include('layouts.partials.footer')
