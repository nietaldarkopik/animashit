<script src="{{ url('frontend/animashit/assets/owlcarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
<script src="{{ url('frontend/animashit/assets/scripts/holderjs/holder.js') }}"></script>
<script src="{{ url('frontend/animashit/assets/scripts/script.js') }}"></script>
<script src="{{ url('frontend/animashit/assets/scripts/pages.js') }}"></script>
<script src="{{ url('frontend/animashit/assets/scripts/slick-1.8.1/slick/slick.js') }}"></script>
<script>
    var baseUrl = "{{ url('/') }}";
    var currentPage = "{{ $page?->slug }}";
    //var bsOffcanvasBottom = new bootstrap.Offcanvas('.offcanvas-bottom');
    var bsOffcanvasStart = new bootstrap.Offcanvas('.offcanvas-start');
    var bsOffcanvasEnd = new bootstrap.Offcanvas('.offcanvas-end');
    var modalPage = document.getElementById('modalPage');
    var loading_html = `
            <div class="row justify-content-center align-items-center w-100 h-100">
                <div class="overlay overlay1"></div>
                <div class="col-12 text-center">
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>
            </div>
        `;
</script>
@yield('script')
</body>

</html>