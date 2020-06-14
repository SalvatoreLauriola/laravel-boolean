<footer class="main-footer">
    <nav class="nav-footer">
        <div class="footer-brand">Boolean</div>

        <ul>
        <li><a href="{{ route('static-pages.home') }}">Home</a></li>
            <li><a href="{{ route('static-pages.faq') }}">Domande frequenti</a></li>
            <li><a href="{{ route('static-pages.privacy') }}">Privacy</a></li>
        </ul>
    </nav>
</footer>

{{-- Js --}}

{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
@yield('scripts')

</body>
</html>