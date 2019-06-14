<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<title>결제 정보(Payment Info) - 랭톡(LangTalk)</title>
    <!-- NoIndex, NoFollow -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="랭톡(LangTalk)은 외국인과 직접 교류하며 영어, 중국어, 일본어 등 외국어를 학습하고 현지 문화를 경험할 수 있는 온오프라인 커뮤니티 프로그램입니다.">
    <meta name="keywords" content="LangTalk, 랭톡, 외국어, 학습, 커뮤니티, 클래스, 살롱, 스쿨, 중국어, 영어, 일본어">
		<link rel="shortcut icon" type="image/x-icon" href="./../assets/img/favicon.ico"/>
		<link rel="canonical" href="https://www.langtalk.kr/pay/"/>
		<meta property="og:title" content="결제 정보(Payment Info) - 랭톡(LangTalk)"/>
		<meta property="og:description" content="랭톡(LangTalk)은 외국인과 직접 교류하며 영어, 중국어, 일본어 등 외국어를 학습하고 현지 문화를 경험할 수 있는 온오프라인 커뮤니티 프로그램입니다."/>
		<meta property="og:url" content="https://www.langtalk.kr/pay/"/>
		<meta property="og:image" content="./../assets/img/img-langtalk-default-800x400.jpg"/>
		<meta property="og:site_name" content="랭톡(LangTalk)"/>
		<meta property="og:type" content="website"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/nanumbarungothic.css">
    <link rel="stylesheet" href="./assets/css/bootstrap/4.1/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/all.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="./assets/js/jquery/3.2.1/jquery.min.js"></script>
    <script src="./assets/js/bootstrap/4.1.1/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <!-- Google Analytics( gtag.js / LANGTALK.KR ): Start -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109412408-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-109412408-2');
		</script>
    <!-- Naver Analytics(LANGTALK.KR): Start -->
		<script type="text/javascript" src="http://wcs.naver.net/wcslog.js"></script>
		<script type="text/javascript">
			if(!wcs_add) var wcs_add = {};
			wcs_add["wa"] = "7e9f4e3e5ca770";
			wcs_do();
		</script>
    <!-- Naver Analytics: End -->
  </head>
  <body style="font-family:inherit;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

       <a class="navbar-brand" href="./../" style="font-weight:bold;letter-spacing:1px;">
         <!-- <img src="https://hellotblog.files.wordpress.com/2018/07/startchina-favicon-100x100.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
         LANG<span style="color:#d6c7a7;">TALK</span>
       </a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-md-auto">
           <!-- <li class="nav-item">
             <a class="nav-link" href="https://news.trendtalk.kr/" target="_blank">매거진</a>
           </li> -->
           <li class="nav-item active">
             <a class="nav-link" href="./../kakao/" target="_blank">카카오톡 문의</a>
           </li>
         </ul>
       </div>
     </div>
    </nav>

    <?php require './modal.php';?>

    <main role="main" class="mt-5 pt-2">
      <div class="jumbotron jumbotron-fluid text-white text-center" style="background-image: linear-gradient(-225deg, #FF3CAC 0%, #562B7C 52%, #2B86C5 100%);">
        <div class="container">
          <h2 class="display-5 font-weight-bold "><a style="color:white;text-decoration:none;" href="./">Lang<span style="color:#d6c7a7;">Talk</span></a></h2>
          <p class="">랭톡 - 소셜 외국어 학습 커뮤니티</p>
          <a href="#transfer"><button type="button" class="btn btn-dark btn-sm mt-1">계좌 이체</button></a>
          <a href="#kakaopay"><button type="button" class="btn btn-dark btn-sm mt-1">카카오페이</button></a>
          <a href="#toss"><button type="button" class="btn btn-dark btn-sm mt-1">토스</button></a>
          <a href="#alipay"><button type="button" class="btn btn-dark btn-sm mt-1">알리페이</button></a>
          <a href="#paypal"><button type="button" class="btn btn-dark btn-sm mt-1">페이팔</button></a>
          <a href="#bitcoin"><button type="button" class="btn btn-dark btn-sm mt-1">비트코인</button></a>
        </div>
      </div>

      <div class="container pb-4">

        <div class="text-center pt-3 pb-3">
          <h3 class="font-weight-bold"><i class="fas fa-dollar-sign mr-2"></i>결제 정보</h3>
          <p>원하시는 결제 방식을 선택해 주세요</p>
        </div>

        <div class="row pt-2">

          <a id="transfer"></a>
          <div class="card col-6 col-lg-4 px-0 text-center">
            <img class="card-img-top" src="https://hellotblog.files.wordpress.com/2018/07/bank-transfer-logo-800x400.jpg" alt="Card image cap">
            <h5 class="card-header font-weight-bold">계좌 이체</h5>
            <div class="card-body px-2">
              <p class="card-title" style="margin-bottom:.5rem;"><i class="fas fa-globe-asia"></i> KB국민은행</p>
              <input class="card-text w-100" id="bank" onClick="SelectAll('bank');" value="4651-0101-2363-49" style="text-align:center; margin-bottom:.5rem;">
              <p style="margin-bottom:0;">수취인 : 레덴벤처스 (이상호)</p>
              <!-- <a href="#" style="width:100%; display:block;" target="_blank" class="btn btn-secondary">바로 가기</a> -->
            </div>
          </div>

          <a id="kakaopay"></a>
          <div class="card col-6 col-lg-4 px-0 text-center">
            <img class="card-img-top" src="https://hellotblog.files.wordpress.com/2018/07/kakaopay-logo-800x400.jpg" alt="Card image cap">
            <h5 class="card-header font-weight-bold">카카오페이 (KakaoPay)</h5>
            <div class="card-body px-2">
              <p class="card-text"><i class="fas fa-globe-asia"></i> 수취인 : LEE SANG HO</p>
            </div>
            <div class="card-footer">
              <a href="https://www.ttmkt.com/pay/kakaopay/" style="width:100%;" style="width:100%; display:block;" target="_blank" class="btn btn-secondary">
                <i class="fas fa-link mr-1"></i>바로 가기 <div class="d-none d-sm-inline">(모바일)</div>
              </a>
            </div>
          </div>

          <a id="toss"></a>
          <div class="card col-6 col-lg-4 px-0 text-center">
            <img class="card-img-top" src="https://hellotblog.files.wordpress.com/2018/07/toss-logo-800x400.jpg" alt="Card image cap">
            <h5 class="card-header font-weight-bold">토스 (Toss)</h5>
            <div class="card-body px-2">
              <p class="card-text"><i class="fas fa-globe-asia"></i> 수취인 : 레덴벤처스 (이상호)</p>
            </div>
            <div class="card-footer">
              <a href="https://www.ttmkt.com/pay/toss/" style="width:100%; display:block;" target="_blank" class="btn btn-secondary">
                <i class="fas fa-link mr-1"></i>바로 가기 <div class="d-none d-sm-inline">(모바일)</div>
              </a>
            </div>
          </div>

          <a id="alipay"></a>
          <div class="card col-6 col-lg-4 px-0 text-center">
            <img class="card-img-top" src="https://hellotblog.files.wordpress.com/2018/07/alipay-logo-800x400.jpg" alt="Card image cap">
            <h5 class="card-header font-weight-bold">알리페이 (AliPay)</h5>
            <div class="card-body px-2">
              <p class="card-text"><i class="fas fa-globe-asia"></i> 수취인 : LangTalk (hello@ledenchina.com)</p>
            </div>
            <div class="card-footer">
              <a href="https://www.ttmkt.com/pay/alipay/" style="width:100%; display:block;" target="_blank" class="btn btn-secondary">
                <i class="fas fa-link mr-1"></i>바로 가기 <div class="d-none d-sm-inline">(모바일)</div>
              </a>
            </div>
          </div>

          <a id="paypal"></a>
          <div class="card col-6 col-lg-4 px-0 text-center">
            <img class="card-img-top" src="https://hellotblog.files.wordpress.com/2018/07/paypal-logo-800x400.png" alt="Card image cap">
            <h5 class="card-header font-weight-bold">페이팔 (Paypal)</h5>
            <div class="card-body px-2">
              <p class="card-text"><i class="fas fa-globe-asia"></i> 수취인 : LEDEN (finance@ledenx.com)</p>
            </div>
            <div class="card-footer">
              <a href="https://www.ttmkt.com/pay/paypal/" style="width:100%; display:block;" target="_blank" class="btn btn-secondary">
                <i class="fas fa-link mr-1"></i>바로 가기 <div class="d-none d-sm-inline">(웹/모바일)</div>
              </a>
            </div>
          </div>

          <a id="bitcoin"></a>
          <div class="card col-6 col-lg-4 px-0 text-center">
            <img class="card-img-top" src="https://hellotblog.files.wordpress.com/2018/07/bitcoin-logo-800x400.jpg" alt="Card image cap">
            <h5 class="card-header font-weight-bold">비트코인 (Bitcoin)</h5>
            <div class="card-body px-2">
              <p class="card-text"><i class="fas fa-globe-asia"></i> 수취인 : 링크 참조</p>
            </div>
            <div class="card-footer">
              <a href="https://www.ttmkt.com/pay/bitcoin/" style="width:100%; display:block;" target="_blank" class="btn btn-secondary">
                <i class="fas fa-link mr-1"></i>바로 가기 <div class="d-none d-sm-inline">(웹/모바일)</div>
              </a>
            </div>
          </div>
          <!-- <div class="card col-6 col-lg-4 px-0 text-center">
            <div class="card-body px-2">
              <h5 class="card-title">위챗 공중 계정 개설</h5>
              <p class="card-text">중국 마케팅에 필수적으로 필요한 위챗 공중(공식) 계정의 개설을 도와 드립니다.</p>
              <a href="https://news.trendtalk.kr/why-wechat-official-account-important/" style="width:100%; display:block;" target="_blank" class="btn btn-secondary">자세히 보기</a>
              <a href="https://www.ttmkt.com/wechat/" target="_blank" class="btn btn-dark">바로 가기</a>
            </div>
          </div> -->
        </div>

        <!-- <hr style="margin: 0 0 2em;"> -->

      </div>

      <div class="container-fluid text-center px-0">
        <img style="width:100%;" src="https://hellotblog.files.wordpress.com/2018/03/langtalk-cover-966x200.png" alt="랭톡(LangTalk)">
      </div>

      <hr>

      <a id="back-to-top" href="#" class="btn btn-danger btn-lg back-to-top" role="button" title="Go To Top"><span class="fas fa-angle-up"></span></a>

      <footer class="container text-center">
        <p>&copy; <?php echo date("Y") ?> <a style="color:initial;" href="./../" target="_blank">LangTalk</a>. All Rights Reserved.</p>
      </footer>

    </main>
  </body>
</html>
