<header class="page-header ">
    <!--header top start-->
@include('frontend::components.headers.header-top')

<!--ended header top-->

    <!--header mid start-->
@include('frontend::components.headers.header-mid')
<!--ended header mid section-->
    <!--main Navigation bar-->
@include('frontend::components.headers.header-end')
<!--ended main navigation bar-->
</header>
@push('scripts')
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                var sticky = $('.amnavnd'),
                    scroll = $(window).scrollTop();

                if (scroll >= 150) sticky.addClass('headerfixed');
                else sticky.removeClass('headerfixed');
            });
        });
    </script>
@endpush
