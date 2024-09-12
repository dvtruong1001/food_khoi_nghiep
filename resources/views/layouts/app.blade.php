@include("layouts.header") 
@if (!View::hasSection('only-header'))
    @include("layouts.nav")
    
    @yield("content")
    @include("layouts.sidebar")
@else 
    @yield("content")
@endif

@include("layouts.footer") 
@include("layouts.end")
