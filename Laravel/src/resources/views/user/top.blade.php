<html>
    <head>
        <title>子どもの身体作りに必要な"基本動作"を育むトレーニング</title>
        <link rel="stylesheet" href="{{ asset('css/user/user_top.css') }}">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    </head>
    <body id="body">
        <div id="container">
            <x-menu></x-menu>
            <div class="main_div">
                <div class="wrapper">
                    <span id="prev" class="prev"></span>
                    <span id="next" class="next"></span>
                    <ul class="indicator">
                        <li id="list1"></li>
                        <li id="list2"></li>
                        <li id="list3"></li>
                    </ul>
                    <div id="slider" class="slider_content slider1">
                        <div class="slider_img slider_img1">
                            <img src="{{ asset('img/8zUCehAIc2Nlb7D10ErYNytwC4mku6bYNmOOUymL.jpg') }}" class="top_img" alt="勝てる体幹トレーニングオンラインレッスン">
                        </div>
                        <div class="slider_img slider_img2">
                            <img src="{{ asset('img/slider-test1.png') }}" class="top_img" alt="slider-test1">
                        </div>
                        <div class="slider_img slider_img3">
                            <img src="{{ asset('img/slider-test2.png') }}" class="top_img" alt="slider-test2">
                        </div>
                    </div>
                </div>
                <div class="news_div">
                    <div class="news_title">
                        <h1 style="font-family: Raleway, sans-serif;">NEWS</h1>
                        <img src="{{ asset("img/arrow.jpg") }}" class="news_img" alt="arrow">
                    </div>
                    <div class="news_contents">                    
                        @foreach ($news_lists as $news_list)
                            <div class="news_content">
                                <a href="#" class="news_link">
                                    <p>{{ $news_list->date->isoformat('YYYY/MM/DD(ddd)') }}</p>
                                    <p style="font-weight: 600;">{{ $news_list->title }}</p>
                                </a>
                            </div>
                        @endforeach
                        <div class="past_div">
                            <a href="#" class="past_list">過去の一覧<span style="color: #d30000;">▶︎</span></a>
                        </div>
                    </div>
                </div>
                    <div class="topdesign_center">
                        <div class="topdesign_left">
                            <div class="left_title">
                                <h1 style="margin-bottom: 0;">コンディショニングが</h1>
                                <h1 style="margin-top: 0;">子供たちの<span class="title_gradation">未来を変えていく。</span></h1>
                            </div>
                            <img src="{{ asset("img/pc_conditioning_topdesign.png") }}" class="left_img" alt="conditioning">
                            <div class="left_content">
                                <p style="margin-bottom: 0;">近年、幼少期からスポーツをはじめる<br>子供たちが増えています。</p>
                                <p style="margin-top: 0; margin-bottom: 0;">
                                    しかし、成長期の子供たちにとって、<br>スポーツによる身体への<span class="left_nowrap">負担は非常に大きく、<span class="line_marker">成長阻害や怪我のリスク</span>と<br>常に隣り合わせです。</span>
                                </p>    
                                <p style="margin-bottom: 0;">また、小さいころからの体への使い方の癖が、</p>
                                <p style="margin-top: 0; margin-bottom: 0;">大人になったときに邪魔をして、<br>思うように競技のパフォーマンスが上がらない<br>選手が大勢います。</p>
                                <p style="margin-bottom: 0;">いま、正しいトレーニングを学んでおくことで、<br>子供たちのこの先何十年の競技生活を<br>守ることができます</p>
                                <p>身体づくりは、<span class="line_marker">ジュニア期が勝負</span>です。</p>
                                <p style="margin-bottom: 0;">NCAジュニアアスリートクラブは</p>
                                <p class="left_content_p" style="margin-top: 0;">トップアスリートも実践する<br>"<span class="line_marker">コンディショニング</span>"<br>という<span class="left_nowrap">独自のトレニンーグ方法を通して<br>子どもたちの夢をサポートします。</span></p>
                            </div>
                        </div>
                        <div class="topdesign_right">
                            <img src="{{ asset("img/pc_conditioning.png") }}" class="right_img" alt="conditioning">
                        </div>
                    </div>
                <div class="point_div">
                    <div class="point_circle">
                        <svg class="circleText" viewBox="0 0 100 100">
                        <path id="circle" class="circleText__circle" d="M 0 50 A 50 50 0 1 1 0 51 z"/>
                        <text class="circleText__text">
                            <textPath xlink:href="#circle">
                            JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB
                            </textPath>
                        </text>
                        </svg>
                    </div>
                    <div class="point_title">
                        <h1 class="point_h1">01</h1>
                        <h2 class="point_h2">自宅でプロの指導が受けれる</h2>
                    </div>
                    <img src="{{ asset("img/point_01_top.jpg") }}" class="point_img" alt="自宅でプロの指導が受けれる">
                    <div class="point_contents">
                        <div class="point_top">
                            <p style="margin-top: 40; margin-bottom: 0;">五輪メダリストもサポートしている</p>
                            <p style="margin-top: 0;margin-bottom: 0;">一流のトレーナーが直接指導</p>
                        </div>
                        <div class="point_center">
                            <div class="point_left">
                                <img src="{{ asset("img/point_01_1.jpg") }}" class="point_content_img" alt="一人ひとりの姿勢や動きをチェック!">
                                <div class="point_content">
                                    <p class="point_p">一人ひとりの姿勢や</p>
                                    <p class="point_p">動きをチェック!</p>
                                    <p class="point_p">オンラインでも細やかな</p>
                                    <p class="point_p">指導を実現します</p>
                                </div>
                            </div>
                            <div class="point_right">
                                <img src="{{ asset("img/point_01_2.jpg") }}" class="point_content_img" alt="成長していく様子を間近で見られる。">
                                <div class="point_content">
                                    <p class="point_p">成長していく様子を</p>
                                    <p class="point_p">間近で見られる</p>
                                    <p class="point_p">時には保護者の</p>
                                    <p class="point_p">サポートも</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="point02_div">
                    <div class="point_circle02">
                        <svg class="circleText" viewBox="0 0 100 100">
                        <path id="circle" class="circleText__circle" d="M 0 50 A 50 50 0 1 1 0 51 z"/>
                        <text class="circleText__text">
                            <textPath xlink:href="#circle">
                            JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB
                            </textPath>
                        </text>
                        </svg>
                    </div>
                    <div class="point02_title">
                        <div class="point02_h2_div">
                            <h2 class="point02_h2">スポーツクラブでは 教えてくれない</h2>
                            <h2 class="point02_h2" style="white-space: nowrap;">身体づくりの基礎を学べる</h2>
                        </div>
                        <h1 class="point02_h1">02</h1>
                        <img src="{{ asset("img/point_02_top.jpg") }}" class="point02_img" alt="身体づくりの基礎を学べる">
                    </div>
                    <div class="point02_contents">
                        <div class="point02_top">
                            <p style="margin-top: 40;margin-bottom: 0;">知識がアスリートを強くする</p>
                            <p style="margin-top: 0;margin-bottom: 0;">学びと実践を繰り返すカリキュラム</p>
                        </div>
                        <div class="point_center">
                            <div class="point_left">
                                <img src="{{ asset("img/point_02_1.jpg") }}" class="point_content_img" alt="身体づくりは土台が大切！">
                                <div class="point_content">
                                    <p class="point_p">身体づくりは土台が大切！</p>
                                    <p class="point_p">基本の姿勢や動きが出来てこそ</p>
                                    <p class="point_p">技術が伸びます</p>
                                </div>
                            </div>
                            <div class="point_right">
                                <img src="{{ asset("img/point_02_2.jpg") }}" class="point_content_img" alt="身体の仕組みを知る">
                                <div class="point_content">
                                    <p class="point_p">身体の仕組みを知ることで</p>
                                    <p class="point_p">怪我の予防やパフォーマンス</p>
                                    <p class="point_p">アップに繋がる</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="point_div">
                    <div class="point_circle">
                        <svg class="circleText" viewBox="0 0 100 100">
                            <path id="circle" class="circleText__circle" d="M 0 50 A 50 50 0 1 1 0 51 z"/>
                            <text class="circleText__text">
                                <textPath xlink:href="#circle">
                                JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB JUNIOR A THLETE CLUB
                                </textPath>
                            </text>
                        </svg>
                    </div>
                    <div class="point_title">
                        <h1 class="point_h1">03</h1>
                        <h2 class="point_h2">子供の自主性を育む 卒業制度</h2>
                    </div>
                    <img src="{{ asset("img/point_03_top.jpg") }}" class="point_img" alt="子供の自主性を育む 卒業制度">
                    <div class="point_contents">
                        <div class="point_top">
                            <p style="margin-top: 40; margin-bottom: 0;">自分で自分の身体を整えられる</p>
                            <p class="point_top_p">それがコンディショニングのゴールです</p>
                            
                        </div>
                        <div class="point_center">
                            <div class="point_left">
                                <img src="{{ asset("img/point_03_1.jpg") }}" class="point_content_img" alt="小学生ひとりでもできる">
                                <div class="point_content">
                                    <p class="point_p">小学生ひとりでもできるので</p>
                                    <p class="point_p">自ら進んでトレーニングする</p>
                                    <p class="point_p">お子さんが多数！</p>
                                </div>
                            </div>
                            <div class="point_right">
                                <img src="{{ asset("img/point_03_2.jpg") }}" class="point_content_img" alt="成長していく様子を間近で見られる。時には保護者のサポートも">
                                <div class="point_content">
                                    <p class="point_p">セルフコンディショニングを</p>
                                    <p class="point_p">身につけたらクラブは卒業！</p>
                                    <p class="point_p">一生使えると知識と</p>
                                    <p class="point_p">手法が手に入ります</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 20%; margin-bottom: 10%;">
                </div>
                <div class="mobile_tag">
                    <div class="tag_div"></div>
                    <div class="tag_div">
                        <a href="#" class="tag_a"><p>NCAジュニアアスリートクラブとは</p></a>
                        <a href="#" class="tag_icon_a"><i class="material-icons arrow_icon">arrow_forward_ios</i></a>
                    </div>
                </div>
            </div>
            <x-inquiry></x-inquiry>
            <x-footer></x-footer>
        </div>
        <script src="{{ asset('/js/user_top.js') }}"></script>
    </body>
</html>