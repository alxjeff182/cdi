
@auth
<script>
    window.user = @json(auth()->user())   
</script>
    @endauth
<script src="{{asset('js/app.js')}}"></script>
@yield('script')
    