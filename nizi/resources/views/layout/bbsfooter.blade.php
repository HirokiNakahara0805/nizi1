@section('layout.bbsfooter')

<footer>
        <!------------------------------------------------------------------------------------ SNS連携 -->
        <div class="footer-contents .align-middle" id="all-bbs">

            <a class="footer-logo" href="{{ url('/') }}">∞piotis</a>

               <!-- SNSリスト-->
            <div class="footer-sns justify-content-around footer-logo" >
                <div class="sns-lists">
                     <!-- TWITTER　(fontawesomeでアイコン読み込み)-->
                    <div class="sns-item twitter list-inline-item">
                        <a target="_blank" href="https://mobile.twitter.com/8pilotis">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </div>
                     <!-- youtube　(fontawesomeでアイコン読み込み)-->
                    <div class="sns-item youtube list-inline-item">
                        <a target="_blank" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                   <!-- facebook　(fontawesomeでアイコン読み込み)-->
                    <div class="sns-item instagram list-inline-item">
                        <a target="_blank" href="https://www.instagram.com/8pilotis">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div class="link-list">
                    <div class="form-group col-sm-1"><a href="terms">利用規約</a></div>
                    <div class="form-group col-sm-2"><a href="beginnersguide">初めての方へ</a></div>
                    <div class="form-group col-sm-1"><a href="beginnersguide#organization">運営組織</a></div>
                    <div class="form-group col-sm-2"><a href="contentpolicy">コンテンツポリシー</a></div>
                    <div class="form-group col-sm-2"><a href="privacypolicy">プライバシーポリシー</a></div>
                    <div class="form-group col-sm-2"><a href="beginnersguide#faq">よくある質問</a></div>
                    <div class="form-group col-sm-2"><a href="beginnersguide#inquiry">お問い合わせ</a></div>
                </div>
            </div>

        </div>

</footer>
@endsection