

{{--<!-- Footer -->--}}
{{--<footer class="page-footer font-small unique-color-dark pt-4">--}}

{{--    <!-- Footer Elements -->--}}
{{--    <div class="container">--}}

{{--        <!-- Call to action -->--}}
{{--        <ul class="list-unstyled list-inline text-center py-2">--}}
{{--            <li class="list-inline-item">--}}
{{--                <h5 class="mb-1">Register for free</h5>--}}
{{--            </li>--}}
{{--            <li class="list-inline-item">--}}
{{--                <a href="/register" class="btn btn-outline-white btn-rounded">Sign up!</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <!-- Call to action -->--}}

{{--    </div>--}}
{{--    <!-- Footer Elements -->--}}

{{--    <!-- Copyright -->--}}
{{--    <div class="footer-copyright text-center py-3">© 2019 Copyright:--}}
{{--        <a href="https://mdbootstrap.com/education/bootstrap/">Local Guide.com</a>--}}
{{--    </div>--}}
{{--    <!-- Copyright -->--}}

{{--</footer>--}}
{{--<!-- Footer -->--}}

    <style>
        #footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            /*text-align: center;*/
        }
    </style>

<body>



{{--<div class="footer">--}}

{{--    <ul class="list-unstyled list-inline text-center py-2">--}}
{{--        <li class="list-inline-item">--}}
{{--            <h5 class="mb-1">Register for free</h5>--}}
{{--        </li>--}}
{{--        <li class="list-inline-item">--}}
{{--            <a href="/register" class="btn btn-outline-white btn-rounded">Sign up!</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--    <div >© 2019 Copyright:--}}
{{--        <a href="">Local Guide.com</a>--}}
{{--    </div>--}}
{{--</div>--}}
<footer id="footer" class="py-2 bg-dark text-white-30">


    <div class="container text-center">
        <small>Copyright &copy; Local Guide</small>
    </div>
</footer>


<main class="py-4">
    @yield('footer')
</main>
</body>
</html>
