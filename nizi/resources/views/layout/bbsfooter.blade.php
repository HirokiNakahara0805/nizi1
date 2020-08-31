@section('footer')
<footer>
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
        <!-- SNS連携 -->
        <div class="footer-contents .align-middle">
            <a class="footer-logo">Sophia univ.</a>
            <div class="footer-sns d-flex justify-content-around" style="width: 200px;">
                <ul class="sns-lists .text-center	">

                    <li class="sns-item twitter list-inline-item">
                        <a target="_blank" href="https://mobile.twitter.com/8pilotis">

                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </li>


                    <li class="sns-item youtube list-inline-item">
                        <a target="_blank" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="sns-item instagram list-inline-item">
                        <a target="_blank" href="https://www.instagram.com/8pilotis">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
	

    </footer>
@endsection