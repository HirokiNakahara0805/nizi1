<DOCTYPE HTML>

<title>授業検索 - ∞pilotis</title>

    <html lang="ja">
    <head>
        <meta name="description" content=“上智大生向けの履修支援サイトです。このサイトでは授業のオススメ度や授業毎の掲示板機能などの有益な情報を得られるサイトになっております。”>
        <meta charset="UTF-8">
       <!-- <title>@yield('title')｜magicmissile.info</title> -->
        <meta name="description" itemprop="description" content="@yield('description')">
        <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- Custom styles for this template -->
        <link href="/css/bbs/sticky-footer.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- CSS(Bootstrap)読み込み -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!--CSS読み込み-->
        <link href="{{ asset('css/bbslayout.css') }}" rel="stylesheet">
        <link href="{{ asset('css/common.css') }}" rel="stylesheet">

        <!-- fontawesome 読み込み -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <!--  <link rel="stylesheet" href="{{  asset('css/style.css') }}" /> -->
        <!-- jQuery読み込み-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

         <!-- jquery slick -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!-- view point 読み込み-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- javascript  読み込み-->
    <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
        <!--　font awesome　CSS指定よう-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
          <!-- javascript  読み込み-->
      <script type="text/javascript" src="js/bbs_post.js"></script>
            <!-- googleアナリティクス本番だけ反応-->
        @if(env('APP_ENV') == 'production')
        @include('google.analytics')
        @endif

</head>

<!--ヘッダの上の白いとこー-->
<header class="u2-header">
    <div class="u2-header__container-inner">
      <a href="/" ><p class="u2-header-logo">∞pilotis</p></a>
    </div>
  </header>

<!--ヘッダの下の黒いとこー-->
  <div class="u2-global-navbar">
    <ul class="reset-ul row v2-global-navbar__links">
    <li class="u2-global-navbar__link"><a href="/">トップ</a><i class="fas fa-angle-double-down nav-arrows"></i></li>
    </ul>
  </div>

  <div class="container">
    <div class="row">


      <div class="col-md-12 mt-5 text-center">

        <h1 class="">検索条件を入力してください</h1>

        <form action="{{ url('/serchnew')}}" method="post">
        {{ csrf_field()}}
        {{method_field('get')}}
          <div class="form-group">
            <label>科目名</label>
              <input type="text" class="form-control col-md-5" placeholder="" name="name">
            <label>教授名</label>
              <input type="text" class="form-control col-md-5" placeholder="" name="teacher">
            <label>学部名</label>
              <select
                                name="department"
                                class="form-control col-md-5"
                                type="text"
                                placeholder="学部名"
                                size="1"
                                >
                            <option selected value="">検索したい学部名を選択してください</option>
                                @foreach($departmentcategories as $departmentcategorie)
　　　　　　　　　　　　　　　　　<option value="{{$departmentcategorie->name}}">{{$departmentcategorie->name}}</option>
                                @endforeach
　　　　　　　　 </select>
            <div class=" text-center common-btn-ikkoue ">
              <button type="submit" class="common-btn"><a href=""></a>検索</button>
            </div>
          </div>
        </form>
        @if(session('flash_message'))
        <div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
        @endif
      </div>
    </div>
  </div>

<footer>
        <!------------------------------------------------------------------------------------ SNS連携 -->
        <div class="footer-contents .a pgn-middle" id="all-bbs">

            <a class="footer-logo" href="{{ url('/') }}">∞piotis</a>

               <!-- SNSリスト-->

            <div class="footer-sns justify-content-around footer-logo" id="all-sns" >
                <div class="sns- psts">

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

                <div class="link-list" id="all-about">
                   <div class="text-center">
                        <div class="text-inline">
                            <p class=""><a href="terms">利用規約</a></p>
                            <p class=""><a href="beginnersguide">初めての方へ</a></p>
                            <p class=""><a href="beginnersguide#organization">運営組織</a></p>
                            <p class=""><a href="contentpolicy">コンテンツポリシー</a></p>
                        </div>
                        <div class="text-inline"> 
                            <p class=""><a href="privacypolicy">プライバシーポリシー</a></p>
                            <p class=""><a href="beginnersguide#faq">よくある質問</a></p>
                            <p class=""><a href="beginnersguide#inquiry">お問い合わせ</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</footer>
