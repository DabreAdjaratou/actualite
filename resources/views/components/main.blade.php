<main>

      @yield('content')
 @component('components.alert')
    @slot('title')
        Forbidden
    @endslot

    You are not allowed to access this resource!
@endcomponent
</main>
