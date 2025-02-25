<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Woodenfloor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('assets\css\style.css')}}">

    <style>
    
    </style>
</head>

<body>
    <!-- 導覽列 nav -->
    <div class="container-fluid">
        <!-- navbar-expand-sm 響應式 -->
        <!-- position-fixed 固定在頂端 -->
        <!-- w-100 寬度滿版 -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top w-100">
            <div class="container-fluid">
                <!-- 品牌 -->
                <a class="navbar-brand" href="#">
                    <img src="{{asset('assets\image\logo.png')}}" width="30" height="30" alt="New York" class="d-block">
                    <!-- Shop -->
                </a>
                <a class="navbar-brand" href="#">
                    Woodenfloor
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#story">品牌故事</a>
                        </li>

                        <!-- 下拉選單 -->
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link dropdown-toggle" href="#product" id="product" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                找地板
                            </a>
                            <!-- 子選單 -->
                            <ul class="dropdown-menu" aria-labelledby="subproduct">
                                <li><a class="dropdown-item" href="#popular">最受歡迎</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#laminate">超耐磨木地板</a></li>
                                <li><a class="dropdown-item" href="#wood">德國實木地板</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#good">好評推薦</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#shop">展示中心</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" aria-current="page" href="#contact">聯絡我們</a>
                        </li>
                    </ul>
                    <form class="d-flex me-5">

                        <a href="https://www.facebook.com/?locale=zh_TW"><img
                                src="https://cdn.pixabay.com/photo/2017/10/04/11/58/facebook-2815970_1280.jpg" alt=""
                                width="40" height="40" class="me-2"></a>
                        <a href="https://www.instagram.com/"><img
                                src="https://cdn.pixabay.com/photo/2021/05/04/11/13/instagram-6228340_1280.jpg" alt=""
                                width="35" height="35" class="me-2 mt-1"></a>
                        <a href="https://www.line.me/tw/"><img
                                src="https://e7.pngegg.com/pngimages/130/743/png-clipart-line-messaging-apps-logo-sticker-line-text-rectangle-thumbnail.png"
                                alt="" width="40" height="40" class="me-1"></a>

                        <!-- 搜尋框 -->
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <main>
        <!-- 輪播圖 -->
        <div>
            <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner h-100">
                    <div class="carousel-item active">
                        <img src="{{asset('assets\image\c1.jpg')}}" alt="Los Angeles" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets\image\c2.jpg')}}" alt="Chicago" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets\image\c3.jpg')}}" alt="New York" class="d-block w-100">
                    </div>
                </div>
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
        <!-- 木地板介紹 -->
        <div class="vh-75 mt-5 mb-5 mt-5">
            <div class="" id="">
                <h2 class="fw-bold text-center">
                    {{-- <span class="test"> --}}
                        為何選用Woodenfloor
                    {{-- </span> --}}
                </h2>
                <hr class="mx-auto" style="width: 15%; border-top: 2px solid #999;">
                <div class="row why">
                    <div class="col-sm-3 text-center mb-4 mt-5 whyBox">
                        <p class="mb-5 fw-bold fs-4">Woodenfloor原料純粹自然，獨家天然塗層技術</p>
                        <img src="https://www.haroflooring.com.tw/wp-content/uploads/laminate-100-square.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col-sm-3 text-center mb-4 mt-5 whyBox">
                        <p class="mb-5 fw-bold fs-4">採用可持續林業的 PEFC 認證木材</p>
                        <img src="https://www.mingjyun.com.tw/cdn/shop/articles/PEFC.jpg?v=1590737489" alt=""
                            class="img-fluid">

                    </div>
                    <div class="col-sm-3 text-center mb-4 mt-5 whyBox">
                        <p class="mb-5 fw-bold fs-4">擁有國際認證建康環保標章共12個</p>
                        <img src="https://www.kronotex.com.tw/USER/Userfile/file/ff240223114538417672.png" alt=""
                            class="img-fluid">
                    </div>

                </div>

            </div>
        </div>
        <!-- <hr class="featurette-divider"> -->

        <div class="container">
            <div class="row">
                <div class="col-sm-5 whyBox mx-auto text-center">
                    <h2 class="fw-bold">木地板環保特性比較</h2>
                    <canvas id="ecoChart"></canvas>
                </div>
                <div class="col-sm-5 text-center mx-auto whyBox">
                    <h2 class="fw-bold">木地板種類市場分佈</h2>
                    <canvas id="floorChart"></canvas>
                </div>

            </div>
        </div>
        <br>
        <hr class="featurette-divider">
        <!-- 品牌故事 story -->
        <div class="vh-75 mt-5 mb-5 mt-5">
            <div class="story" id="story">
                <div class="row">
                    <div class="col-sm-7 text-center mb-4 mt-5">
                        <h2 class="fw-bold"><i class="fa-solid fa-tree me-3 text-secondary"></i>品牌故事</h2>
                        <hr class="mx-auto" style="width: 15%; border-top: 2px solid #999;">
                        <p>全球最大德國第一品牌</p>
                        <p>建於1897年，120餘年歷史，全球最大木業集團生產商，</p>
                        <p>Kronotex由奧地利隆歐茲區的Kaindl家族經營的鋸木廠開始</p>
                        <p>發展，60年後於薩爾斯堡興建生產木地板的工廠，時至今日，</p>
                        <p>已成為全球最大、設備最先進的強化複合木地板品牌。</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{asset('assets\image\wooden-3264500_1920.jpg')}}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </div>
        <hr class="featurette-divider">
        
        
        
        <!-- 找地板 product -->
        <div class="vh-75">
            <div class="product" id="product">
                <!-- 最受歡迎 popular -->
                <div class="container mb-5 mt-5" id="popular">
                    <div class="row">
                        <div class="col-sm-3">
                            <h2 class="fw-bold mt-5"><i class="fa-solid fa-fire me-3 text-danger"></i>最受歡迎</h2>
                        </div>
                        <div class="col-sm-3 mouseenter">
                            <div id="pic1">
                                <img src="{{asset('assets\image\A01公主橡.jpg')}}" alt="" class="img-fluid" data-bs-toggle="tooltip"
                                    title="點我看實景">
                            </div>
                            <p class="text-center fw-bold">A01公主橡</p>
                        </div>
                        <div class="col-sm-3 mouseenter">
                            <div id="pic2">
                                <img src="{{asset('assets\image\A02貝多芬橡木.jpg')}}" alt="" class="img-fluid" data-bs-toggle="tooltip"
                                    title="點我看實景">
                            </div>
                            <p class="text-center fw-bold">A02貝多芬橡木</p>
                        </div>
                        <div class="col-sm-3 mouseenter">
                            <div id="pic3">
                                <img src="{{asset('assets\image\A03琥珀色橡木.jpg')}}" alt="" class="img-fluid" data-bs-toggle="tooltip"
                                    title="點我看實景">
                            </div>
                            <p class="text-center fw-bold">A03琥珀色橡木</p>
                        </div>
                    </div>
                    <hr class="featurette-divider">

                    <!-- 超耐磨木地板 laminate -->
                    <div class="container h-50 mb-5 mt-5" id="laminate">
                        <div class="row">
                            <div class="col-sm-3 mouseenter">
                                <h2 class="fw-bold mt-5">超耐磨木地板</h2>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic4">
                                    <img src="{{asset('assets\image\A01公主橡.jpg')}}" alt="" class="img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">A01公主橡</p>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic5">
                                    <img src="{{asset('assets\image\A02貝多芬橡木.jpg')}}" alt="" class=" img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">A02貝多芬橡木</p>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic6">
                                    <img src="{{asset('assets\image\A03琥珀色橡木.jpg')}}" alt="" class=" img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">A03琥珀色橡木</p>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <img src="./image/.jpg" alt="" class=" img-fluid">
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic7">
                                    <img src="{{asset('assets\image\A04海德堡橡木.jpg')}}" alt="" class="img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">A04海德堡橡木</p>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic8">
                                    <img src="{{asset('assets\image\A05巴登灰橡木.jpg')}}" alt="" class="img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">A05巴登灰橡木</p>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic9">
                                    <img src="{{asset('assets\image\A06挪威深橡木.jpg')}}" alt="" class="img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">A06挪威深橡木</p>
                            </div>
                        </div>
                    </div>
                    <hr class="featurette-divider">
                    
                    <!-- 德國實木地板 wood -->
                    <div class="container mb-5 mt-5" id="wood">
                        <div class="row">
                            <div class="col-sm-3 mouseenter">
                                <h2 class="fw-bold mt-5">德國實木地板</h2>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic10">
                                    <img src="{{asset('assets\image\B01黃石橡木.jpg')}}" alt="" class="img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">B01黃石橡木</p>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic11">

                                    <img src="{{asset('assets\image\B02古典橡木.jpg')}}" alt="" class=" img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">B02古典橡木</p>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic12">

                                    <img src="{{asset('assets\image\B03峽谷橡木.jpg')}}" alt="" class=" img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">B03峽谷橡木</p>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <img src="./image/.jpg" alt="" class=" img-fluid">
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic13">

                                    <img src="{{asset('assets\image\B04阿拉摩橡木.jpg')}}" alt="" class=" img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">B04阿拉摩橡木</p>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic14">

                                    <img src="{{asset('assets\image\B05奢華灰橡木.jpg')}}" alt="" class=" img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">B05奢華灰橡木</p>
                            </div>
                            <div class="col-sm-3 mouseenter">
                                <div id="pic15">

                                    <img src="{{asset('assets\image\B06精選白橡木.jpg')}}" alt="" class=" img-fluid" data-bs-toggle="tooltip"
                                        title="點我看實景">
                                </div>
                                <p class="text-center fw-bold">B06精選白橡木</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">

            <!-- 好評推薦 good-->
            <div class="vh-75">
                <div class="good" id="good">
                    <div class="contact mb-5 mt-5">

                        <div class="row">
                            <!-- 圖片 -->
                            <div class="col-sm-1">
                            </div>

                            <div class="col-sm-8">
                                <img src="{{asset('assets\image\goods.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-sm-2 mx-auto">
                                <h2 class="fw-bold mt-5 text-center">
                                    <p class="mt-5"><i class="fa-solid fa-thumbs-up me-3 text-danger"></i>好評推薦</p>
                                </h2>
                                <hr class="mx-auto" style="width: 55%; border-top: 2px solid #999;">
                                <p class="mt-5 text-center"><span class="fs-5 fw-bold">100+</span> 位網紅
                                    真<span class="fs-5 fw-bold text-danger">心</span>推薦</p>
                            </div>
                            <div class="col-sm-1">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <hr class="featurette-divider"> -->

            <!-- 展示中心 shop -->
            <div class="vh-75 mb-5">
                <div class="shop" id="shop">
                    <div class="contact mb-5 mt-5">
                        <div class="row">
                            <!-- 展示中心 -->
                            <div class="col-sm-6 text-center mb-4">
                                <h2 class="fw-bold mt-5"><i class="fa-solid fa-shop me-3 text-warning"></i>展示中心</h2>
                                <hr class="mx-auto" style="width: 15%; border-top: 2px solid #999;">
                                <p class="fw-bold mt-5">Woodenfloor-泰山門市</p>
                                <p>地址：新北市泰山區貴子里致遠新村55之1號</p>
                                <p>營業時間：週二~週六 10：00~19：00</p>
                                <p>電話：(02)2345-6789</p>
                                <p class="fw-bold mt-5">Woodenfloor-板橋門市</p>
                                <p>地址：新北市板橋區縣民大道2段7號</p>
                                <p>營業時間：週二~週日 10：00~19：00</p>
                                <p>電話：(02)2222-8888</p>
                            </div>

                            <!-- 圖片 -->
                            <div class="col-sm-5">
                                <img src="https://www.web66.com.tw/_file/C1/14252/AB/1324374966354pic1.jpg"
                                    class="img-fluid" alt="">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <hr class="featurette-divider">

            <!-- 聯絡我們 contact -->
            <div class="vh-75">
                <div class="contact" id="contact">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold mt-5"><i class="fa-solid fa-comment-dots me-3 text-success"></i>聯絡我們</h2>
                        <hr class="mx-auto mb-5" style="width: 15%; border-top: 2px solid #999;">
                        <div class="container">
                            <div class="row">

                                <div class="col-sm-6 mb-4 mx-auto text-start">
                                    <form>
                                        <!-- 姓名 -->
                                        <div class="mb-3 mt-3">
                                            <label for="name" class="form-label">姓名：</label>
                                            <input type="text" class="form-control" id="name" placeholder="您的大名"
                                                name="name">
                                        </div>
                                        <!-- 電話 -->
                                        <div class="mb-3 mt-3">
                                            <label for="mobile" class="form-label">電話：</label>
                                            <input type="text" class="form-control" id="mobile"
                                                placeholder="09xx-xxxxxx" name="mobile">
                                        </div>

                                        <!-- 地址 -->

                                        <label for="city" class="form-label">地址</label>
                                        <div class="mb-3 d-flex">
                                            <!-- 縣市 -->
                                            <select class="form-select" id="city" name="city">
                                                <option value="">請選擇縣市</option>
                                            </select>
                                            <!-- 區域 -->
                                            <label for="district" class="form-label"></label>
                                            <select class="form-select" id="district" name="district" disabled>
                                                <option value="">請選擇區域</option>
                                            </select>
                                            <!-- 地址 -->
                                            <label for="add" class="form-label"></label>
                                            <input type="text" class="form-control" id="add" placeholder="請輸入地址"
                                                name="add">
                                        </div>


                                        <!-- Email -->
                                        <div class="mb-3 mt-3">
                                            <label for="email" class="form-label">Email：</label>
                                            <input type="email" class="form-control" id="email" placeholder="email@.com"
                                                name="email">
                                        </div>

                                        <!-- 想諮詢的產品 -->
                                        <div class="mb-3 mt-3">
                                            <label for="photo" class="form-label">檔案上傳
                                                (可放欲詢問的地板照片、空間照片等，檔案大小2MB以下)</label>
                                            <input type="file" class="form-control" id="photo" name="photo">
                                        </div>

                                        <!-- 如何知道我們 -->
                                        <div class="mt-3">
                                            <label for="location" class="form-label">如何知道我們</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="location1"
                                                    name="location1" value="location1">
                                                <label class="form-check-label">FB</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="location2"
                                                    name="location2" value="location2">
                                                <label class="form-check-label">IG</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="location3"
                                                    name="location3" value="location3">
                                                <label class="form-check-label">GOOGLE搜尋</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="location4"
                                                    name="location4" value="location4">
                                                <label class="form-check-label">GOOGLE MAP</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="location5"
                                                    name="location5" value="location5">
                                                <label class="form-check-label">親友介紹</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="location6"
                                                    name="location6" value="location6">
                                                <label class="form-check-label">設計師推薦</label>
                                            </div>
                                        </div>

                                        <!-- 留言 -->
                                        <div class="mt-3">
                                            <label for="note" class="form-label">留言</label>
                                            <textarea class="form-control" id="note" rows="3"></textarea>
                                        </div>
                                        <!-- 送出 -->
                                        <div class="mx-auto">
                                            <button type="submit" class="btn btn-secondary mt-5">送出</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-1 mb-4">
                                </div>
                                <div class="col-sm-5 mb-4">

                                    <img src="{{asset('assets\image\service.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- <hr class="featurette-divider"> -->

            <!-- iframe -->
            <div class="contact mb-5 mt-5" id="contact">
                <div class="row">
                    <!-- youtube -->
                    <div class="col-sm-5 mx-auto mb-3">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/f3_HzrWj0WA?si=yA5mf7FJ55PdlSPi"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- map -->
                    <div class="col-sm-5 mx-auto mb-3">
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7036493264513!2d121.41951560000001!3d25.044129299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bec9ad74b1%3A0xa639904a89f26435!2z5Yue5YuV6YOo5Yue5YuV5Yqb55m85bGV572y5YyX5Z-65a6c6Iqx6YeR6aas5YiG572y5rOw5bGx6IG35qWt6KiT57e05aC0!5e0!3m2!1szh-TW!2stw!4v1734592093236!5m2!1szh-TW!2stw"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>

            <!-- form -->

            <!-- top button -->
            <button type="button"
                class="btn btn-light position-absolute bottom-0 end-0 translate-middle-y position-fixed border"
                id="backToTopBtn">Back
                to
                top</button>

            <!-- FOOTER -->
            <footer class="footer position-relative highlight-block pt-3 mx-0 pb-0 mb-0">
                <div class="row">
                    <div class="col-sm-1 text-crnter">
                    </div>
                    <div class="col-sm-6 text-crnter mt-5">
                        <p> Copyright &copy; 2024 woodenfloor.all rights reserved.&middot; <a href="#">Privacy</a>
                            &middot;
                            <a href="#">Terms</a>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p class="fw-bold">Woodenfloor</p>
                        <hr>
                        <p>營業時間：週二~週六 10：00~19：00</p>
                        <p>email：woodenfloor@woodenfloor.com.tw</p>
                    </div>
                </div>

        </div>


        </footer>
    </main>

    <!-- js include 順序 1.bs 2.jq 3.self -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- font awesome free icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- mouseenter圖片放大效果 -->
    <script>
    $(document).ready(function() {
        $("mouseenter").mouseenter(function() {
            $("mouseenter").css("class", "big col-sm-3 img-fluid");
        });
        $("mouseenter").mouseleave(function() {
            $("mouseenter").css("class", "col-sm-3 img-fluid");
        });
    });
    let pic1 = document.getElementById('pic1');
    let pic2 = document.getElementById('pic2');
    let pic3 = document.getElementById('pic3');
    let pic4 = document.getElementById('pic4');
    let pic5 = document.getElementById('pic5');
    let pic6 = document.getElementById('pic6');
    let pic7 = document.getElementById('pic7');
    let pic8 = document.getElementById('pic8');
    let pic9 = document.getElementById('pic9');
    let pic10 = document.getElementById('pic10');
    let pic11 = document.getElementById('pic11');
    let pic12 = document.getElementById('pic12');
    let pic13 = document.getElementById('pic13');
    let pic14 = document.getElementById('pic14');
    let pic15 = document.getElementById('pic15');

    // mouseenter
    pic1.addEventListener('mouseenter', function() {
        console.log('pic1 mouseenter ok');
        pic1.setAttribute('class', 'big');
    })
    pic2.addEventListener('mouseenter', function() {
        console.log('pic2 mouseenter ok');
        pic2.setAttribute('class', 'big');
    })
    pic3.addEventListener('mouseenter', function() {
        console.log('pic3 mouseenter ok');
        pic3.setAttribute('class', 'big');
    })
    pic4.addEventListener('mouseenter', function() {
        console.log('pic4 mouseenter ok');
        pic4.setAttribute('class', 'big');
    })
    pic5.addEventListener('mouseenter', function() {
        console.log('pic5 mouseenter ok');
        pic5.setAttribute('class', 'big');
    })
    pic6.addEventListener('mouseenter', function() {
        console.log('pic6 mouseenter ok');
        pic6.setAttribute('class', 'big');
    })
    pic7.addEventListener('mouseenter', function() {
        console.log('pic7 mouseenter ok');
        pic7.setAttribute('class', 'big');
    })
    pic8.addEventListener('mouseenter', function() {
        console.log('pic8 mouseenter ok');
        pic8.setAttribute('class', 'big');
    })
    pic9.addEventListener('mouseenter', function() {
        console.log('pic9 mouseenter ok');
        pic9.setAttribute('class', 'big');
    })
    pic10.addEventListener('mouseenter', function() {
        console.log('pic10 mouseenter ok');
        pic10.setAttribute('class', 'big');
    })
    pic11.addEventListener('mouseenter', function() {
        console.log('pic11 mouseenter ok');
        pic11.setAttribute('class', 'big');
    })
    pic12.addEventListener('mouseenter', function() {
        console.log('pic12 mouseenter ok');
        pic12.setAttribute('class', 'big');
    })
    pic13.addEventListener('mouseenter', function() {
        console.log('pic13 mouseenter ok');
        pic13.setAttribute('class', 'big');
    })
    pic14.addEventListener('mouseenter', function() {
        console.log('pic14 mouseenter ok');
        pic14.setAttribute('class', 'big');
    })
    pic15.addEventListener('mouseenter', function() {
        console.log('pic15 mouseenter ok');
        pic15.setAttribute('class', 'big');
    })
    </script>

    <!-- 全台灣各縣市及區域資料 -->
    <script>
    const cityDistrictMap = {
        "台北市": ["中正區", "大同區", "松山區", "信義區", "大安區", "南港區", "北投區", "內湖區", "士林區", "文山區"],
        "新北市": ["板橋區", "新莊區", "三重區", "中和區", "永和區", "土城區", "蘆洲區", "樹林區", "三峽區", "鶯歌區", "淡水區", "金山區", "萬里區", "林口區",
            "八里區", "平溪區", "雙溪區", "貢寮區", "新店區", "深坑區", "石碇區", "坪林區", "烏來區"
        ],
        "桃園市": ["桃園區", "中壢區", "平鎮區", "八德區", "楊梅區", "蘆竹區", "大溪區", "龍潭區", "龜山區", "大園區", "觀音區", "新屋區", "復興區"],
        "台中市": ["中區", "東區", "南區", "西區", "北區", "西屯區", "南屯區", "東屯區", "大里區", "太平區", "豐原區", "大甲區", "清水區", "沙鹿區", "龍井區",
            "大肚區", "烏日區", "和平區", "大雅區", "神岡區", "潭子區", "大安區"
        ],
        "台南市": ["東區", "北區", "南區", "安平區", "安南區", "永康區", "歸仁區", "新化區", "左鎮區", "玉井區", "楠西區", "南化區", "仁德區", "關廟區",
            "龍崎區", "官田區", "麻豆區", "佳里區", "西港區", "七股區", "將軍區", "學甲區", "北門區", "新營區", "鹽水區", "後壁區", "白河區", "東山區",
            "六甲區", "下營區", "柳營區", "大內區", "山上區", "新市區", "安定區"
        ],
        "高雄市": ["苓雅區", "左營區", "楠梓區", "三民區", "鳳山區", "林園區", "大寮區", "大樹區", "旗山區", "美濃區", "六龜區", "內門區", "杉林區", "甲仙區",
            "桃源區", "那瑪夏區", "茂林區", "茄萣區", "小港區"
        ],
        "基隆市": ["仁愛區", "信義區", "中正區", "中山區", "安樂區", "暖暖區", "七堵區"],
        "宜蘭縣": ["宜蘭市", "羅東鎮", "蘇澳鎮", "冬山鄉", "五結鄉", "員山鄉", "大同鄉", "南澳鄉", "頭城鎮", "礁溪鄉", "三星鄉"],
        "新竹縣": ["竹北市", "湖口鄉", "新豐鄉", "新埔鎮", "關西鎮", "芎林鄉", "寶山鄉", "竹東鎮", "五峰鄉", "橫山鄉", "尖石鄉", "北埔鄉", "峨眉鄉"],
        "苗栗縣": ["苗栗市", "頭份市", "竹南鎮", "三灣鄉", "南庄鄉", "獅潭鄉", "後龍鎮", "通霄鎮", "苑裡鎮", "大湖鄉", "埔心鄉", "五福鄉", "冷水鄉", "三義鄉",
            "西湖鄉", "卓蘭鎮"
        ],
        "彰化縣": ["彰化市", "芬園鄉", "花壇鄉", "秀水鄉", "鹿港鎮", "福興鄉", "線西鄉", "和美鎮", "伸港鄉", "員林市", "社頭鄉", "永靖鄉", "埔心鄉", "大村鄉",
            "溪湖鎮", "大雅鄉", "河東鄉", "草湖鄉", "鶴壁鄉", "北斗鎮"
        ],
        "南投縣": ["南投市", "埔里鎮", "草屯鎮", "竹山鎮", "集集鎮", "名間鄉", "水里鄉", "魚池鄉", "信義鄉", "仁愛鄉"],
        "雲林縣": ["斗六市", "斗南鎮", "虎尾鎮", "西螺鎮", "土庫鎮", "褒忠鄉", "東勢鄉", "臺西鄉", "崙背鄉", "麥寮鄉", "四湖鄉", "元長鄉", "口湖鄉", "水林鄉",
            "西山鄉"
        ],
        "嘉義縣": ["太保市", "朴子市", "布袋鎮", "大林鎮", "民雄鄉", "溪口鄉", "阿里山鄉", "中埔鄉", "竹崎鄉", "梅山鄉", "番路鄉", "大埔鄉", "五峰鄉"],
        "屏東縣": ["屏東市", "三地門鄉", "霧台鄉", "瑪家鄉", "九如鄉", "里港鄉", "高樹鄉", "鹽埔鄉", "長治鄉", "麟洛鄉", "竹田鄉", "內埔鄉", "萬丹鄉", "潮州鎮",
            "東港鎮", "恆春鎮", "滿州鄉", "車城鄉", "三和鄉", "牡丹鄉"
        ],
        "台東縣": ["台東市", "成功鎮", "關山鎮", "海端鄉", "池上鄉", "東河鄉", "長濱鄉", "鹿野鄉", "緣分村", "達仁鄉", "太麻里鄉", "金峰鄉", "大武鄉", "太平洋鄉",
            "蘭嶼鄉"
        ],
        "花蓮縣": ["花蓮市", "鳳林鎮", "玉里鎮", "光復鄉", "豐濱鄉", "瑞穗鄉", "富里鄉", "卓溪鄉", "吉安鄉", "新城鄉", "秀林鄉", "萬榮鄉"],
        "澎湖縣": ["馬公市", "湖西鄉", "白沙鄉", "西嶼鄉", "望安鄉", "七美鄉"],
        "金門縣": ["金城鎮", "金湖鎮", "金寧鄉", "烈嶼鄉", "烏坵鄉"],
        "馬祖縣": ["南竿鄉", "北竿鄉", "莒光鄉", "東引鄉"]
    };

    // 載入縣市選項
    const citySelect = document.getElementById('city');
    for (let city in cityDistrictMap) {
        const option = document.createElement('option');
        option.value = city;
        option.textContent = city;
        citySelect.appendChild(option);
    }

    // 當城市選擇改變時，更新區域選項
    document.getElementById('city').addEventListener('change', function() {
        const city = this.value;
        const districtSelect = document.getElementById('district');

        // 清空區域選項
        districtSelect.innerHTML = '<option value="">請選擇區域</option>';

        // 如果選擇了城市，顯示相應的區域
        if (city && cityDistrictMap[city]) {
            const districts = cityDistrictMap[city];
            districts.forEach(function(district) {
                const option = document.createElement('option');
                option.value = district;
                option.textContent = district;
                districtSelect.appendChild(option);
            });
            districtSelect.disabled = false; // 啟用區域選擇
        } else {
            districtSelect.disabled = true; // 禁用區域選擇
        }
    });
    </script>

    <!-- back to top btn -->
    <script>
    $(document).ready(function() {
        // 滾動事件，顯示或隱藏按鈕
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#backToTopBtn').fadeIn(); // 顯示按鈕
            } else {
                $('#backToTopBtn').fadeOut(); // 隱藏按鈕
            }
        });

        // 點擊按鈕時，平滑滾動到頁面頂部
        $('#backToTopBtn').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 'smooth');
        });
    });

    // 創建雷達圖
    var ctx = document.getElementById('ecoChart').getContext('2d');
    var ecoChart = new Chart(ctx, {
        type: 'radar', // 使用雷達圖
        data: {
            labels: ['可再生資源', '環保認證', '碳足跡計算', '低揮發性有機化合物', '材料回收利用'], // 環保指標
            datasets: [{
                label: '超耐磨地板',
                data: [80, 90, 85, 95, 90], // 超耐磨地板在各指標的得分
                backgroundColor: 'rgba(217, 174, 171, 0.3)', // 奶油色（超耐磨木地板）
                borderColor: 'rgba(175, 132, 129, 1)', // 深奶油色邊框
                borderWidth: 1,
                hoverBorderColor: 'rgba(175, 132, 129, 1)', // 滑鼠懸停時的邊框顏色
                hoverBackgroundColor: 'rgba(175, 132, 129, 0.3)', // 滑鼠懸停時的背景顏色
            }, {
                label: '實木地板',
                data: [75, 85, 70, 65, 80], // 實木地板在各指標的得分
                backgroundColor: 'rgba(243, 207, 185, 0.2)', // 淺粉色（實木地板）
                borderColor: 'rgba(193, 159, 135, 1)', // 深粉色邊框
                borderWidth: 1,
                hoverBorderColor: 'rgba(193, 159, 135, 1)', // 滑鼠懸停時的邊框顏色
                hoverBackgroundColor: 'rgba(193, 159, 135, 0.3)', // 滑鼠懸停時的背景顏色
            }, {
                label: '復合木地板',
                data: [65, 70, 60, 60, 75], // 復合木地板在各指標的得分
                backgroundColor: 'rgba(179, 157, 174, 0.1)', // 淺灰紫色（復合木地板）
                borderColor: 'rgba(148, 134, 142, 1)', // 深灰紫色邊框
                borderWidth: 1,
                hoverBorderColor: 'rgba(148, 134, 142, 1)', // 滑鼠懸停時的邊框顏色
                hoverBackgroundColor: 'rgba(148, 134, 142, 0.3)', // 滑鼠懸停時的背景顏色
            }, {
                label: '竹地板',
                data: [60, 65, 55, 70, 65], // 竹地板在各指標的得分
                backgroundColor: 'rgba(204, 194, 178, 0.1)', // 淺黃褐色（竹地板）
                borderColor: 'rgba(179, 170, 154, 1)', // 深黃褐色邊框
                borderWidth: 1,
                hoverBorderColor: 'rgba(179, 170, 154, 1)', // 滑鼠懸停時的邊框顏色
                hoverBackgroundColor: 'rgba(179, 170, 154, 0.3)', // 滑鼠懸停時的背景顏色
            }]
        },
        options: {
            responsive: true,
            scale: {
                ticks: {
                    beginAtZero: true,
                    max: 100, // 設定得分最大值為 100
                    stepSize: 20 // 每步長為 20
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: '',
                    font: {
                        size: 18,
                        weight: 'bold'
                    },
                    color: '#333'
                },
                tooltip: {
                    callbacks: {
                        // 自訂工具提示顯示方式
                        label: function(tooltipItem) {
                            return tooltipItem.dataset.label + ': ' + tooltipItem.raw + '%';
                        }
                    }
                }
            }
        }
    });

    // 創建圓餅圖
    var ctx = document.getElementById('floorChart').getContext('2d');
    var floorChart = new Chart(ctx, {
        type: 'pie', // 使用圓餅圖
        data: {
            labels: ['超耐磨木地板', '實木地板', '復合木地板', '竹地板'], // 木地板種類
            datasets: [{
                label: '',
                data: [42, 31, 16, 11], // 市場佔有率數據
                backgroundColor: [
                    'rgba(217, 174, 171, 0.8)', // 奶油色（超耐磨木地板）
                    'rgba(243, 207, 185, 0.8)', // 淺粉色（實木地板）
                    'rgba(179, 157, 174, 0.8)', // 淺灰紫色（復合木地板）
                    'rgba(204, 194, 178, 0.8)', // 淺黃褐色（竹地板）
                    // 'rgba(184, 178, 195, 0.8)'   // 淺薰衣草紫色（其他）
                ],
                borderColor: [
                    'rgba(175, 132, 129, 1)', // 深奶油色（超耐磨木地板）
                    'rgba(193, 159, 135, 1)', // 深粉色（實木地板）
                    'rgba(148, 134, 142, 1)', // 深灰紫色（復合木地板）
                    'rgba(179, 170, 154, 1)', // 深黃褐色（竹地板）
                    // 'rgba(158, 150, 161, 1)'   // 深薰衣草紫色（其他）
                ],
                borderWidth: 2, // 增加邊框寬度
                // 加入陰影效果
                hoverOffset: 4,
                shadowOffsetX: 3,
                shadowOffsetY: 3,
                shadowBlur: 5,
                shadowColor: 'rgba(0, 0, 0, 0.3)' // 陰影顏色
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: ''
                },
                tooltip: {
                    callbacks: {
                        // 自訂工具提示顯示方式
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                        }
                    }
                },
                legend: {
                    position: 'top',
                    labels: {
                        fontSize: 14
                    }
                }
            }
        }
    });
    </script>
</body>

</html>