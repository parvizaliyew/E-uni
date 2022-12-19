  <!--Footer Start-->
  <footer>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <ul class="list">
                    <h4 class="list-head">
                        About
                    </h4>
                    <li class="list-item">
                        <a href="#">
                            History
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            About BA Programs
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            Leadership & Staff
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            Accreditation
                        </a>
                    </li>
                </ul>
                <div class="foot-logo">
                    <a href="./index.html">
                        <img src="{{ asset('front/') }}/./img/ba-logo.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-2">
                <ul class="list">
                    <h4 class="list-head">
                        Admission
                    </h4>
                    <li class="list-item">
                        <a href="{{ route('u_graduate.'.app()->getLocale()) }}">
                            Undergraduate
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            Graduate
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            Postgraduate
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            International Students
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-2">
                <ul class="list">
                    <h4 class="list-head">
                        Academics
                    </h4>
                    <li class="list-item">
                        <a href="#">
                            Bachelor degree
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            Master degree
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            PhD
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-2">
                <ul class="list">
                    <h4 class="list-head">
                        <a href="#">
                            Library
                        </a>
                    </h4>
                    <li class="list-head">
                        <a href="#">
                            Alumni
                        </a>
                    </li>
                    <li class="list-head">
                        <a href="#">
                            News & Events
                        </a>
                    </li>
                    <li class="list-head">
                        <a href="#">
                            Policies
                        </a>
                    </li>
                    <li class="list-head">
                        <a href="#">
                            Careers
                        </a>
                    </li>
                    <li class="list-head">
                        <a href="#">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <p class="location">
                    <img src="{{ asset('front/') }}/./img/loc-icon.svg" alt="">
                    Baku, Azerbaijan, Azadlig Ave. 34
                </p>
                <a class="mail" href="mailTo:elnur.guliev01@gmail.com">
                    <img src="{{ asset('front/') }}/./img/mail-icon.svg" alt="">
                    elnur.guliev01@gmail.com
                </a>
                <div class="phone-numbers">
                    <img src="{{ asset('front/') }}/./img/phone-icon.svg" alt="">
                    <a href="tel:+994124934538">
                        (+994) 12 493 4538
                    </a>
                    <a href="tel:+994124934538">
                        (+994) 12 493 4538
                    </a>
                </div>
                <div class="follow">
                    <p class="follow-text">
                        Follow us:
                    </p>
                    <a href="#">
                        <img src="{{ asset('front/') }}/./img/insta-icon.svg" alt="">
                    </a>
                    <a href="#">
                        <img src="{{ asset('front/') }}/./img/face-icon.svg" alt="">
                    </a>
                    <a href="#">
                        <img src="{{ asset('front/') }}/./img/twit-icon.svg" alt="">
                    </a>
                </div>
                <div class="join">
                    <p class="join-text">
                        Get in touch
                    </p>
                    <form action="#">
                        <input placeholder="Email" type="email">
                        <button class="join-btn">
                            Join
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="footer-text">
                    Copyright © 2022 BA Programs ASOIU. All rights reserved
                </p>
                <a href="#" class="adnsu-foot-logo">
                    <img src="{{ asset('front/') }}/./img/adnsu-logo.svg" alt="">
                </a>
                <p class="footer-text">
                    All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('front/') }}/./js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('front/') }}/./js/main.js"></script>
</body>

</html>