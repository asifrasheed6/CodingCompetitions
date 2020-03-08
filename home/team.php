<?php
    include '../config.php';
    session_start();
    
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
        $id = $_SESSION['id'];
        $query = mysqli_query($database, "SELECT * FROM `USER` WHERE `id` = $id");
        if(mysqli_num_rows($query)==0 || time()-$_SESSION['last_activity']>=600){
            session_unset();
            session_destroy();
            header('location: ../');
        }
        $_SESSION['last_activity'] = time();
    }
    else header('location: ../');
?>
<html amp >
<head>
  <!-- website Front End made with Mobirise Website Builder v4.12.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo1.png" type="image/x-icon">
  <meta name="description" content="">
  
<title><?php echo $web_name; ?> - MANAGE MY TEAM</title>
  
<link rel="canonical" href="./">
 <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic&display=swap" rel="stylesheet">
 
 <style amp-custom> 
div,span,h1,h2,h3,h4,h5,h6,p,blockquote,a,ol,ul,li,figcaption{font: inherit;}*{-webkit-box-sizing: border-box;box-sizing: border-box;}body{position: relative;font-style: normal;line-height: 1.5;}section{background-color: #eeeeee;background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;}section,.container,.container-fluid{position: relative;word-wrap: break-word;}a.mbr-iconfont:hover{text-decoration: none;}h1,h2,h3{margin: auto;}h1,h3,p{padding: 10px 0;margin-bottom: 15px;}p,li,blockquote{color: #15181b;letter-spacing: 0.5px;line-height: 1.7;}ul,ol,pre,blockquote{margin-bottom: 0;margin-top: 0;}pre{background: #f4f4f4;padding: 10px 24px;white-space: pre-wrap;}p{margin-top: 0;}a{font-style: normal;font-weight: 400;cursor: pointer;}a,a:hover{text-decoration: none;}figure{margin-bottom: 0;}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6,.display-1,.display-2,.display-3,.display-4{line-height: 1;word-break: break-word;word-wrap: break-word;}b,strong{font-weight: bold;}blockquote{padding: 10px 0 10px 20px;position: relative;border-left: 3px solid;}input:-webkit-autofill,input:-webkit-autofill:hover,input:-webkit-autofill:focus,input:-webkit-autofill:active{-webkit-transition-delay: 9999s;transition-delay: 9999s;-webkit-transition-property: background-color,color;-o-transition-property: background-color,color;transition-property: background-color,color;}html,body{height: auto;min-height: 100vh;}.mbr-section-title{font-style: normal;line-height: 1.2;}.mbr-section-subtitle{line-height: 1.3;}.mbr-text{font-style: normal;line-height: 1.6;}.btn{font-weight: 400;border-width: 2px;border-style: solid;font-style: normal;letter-spacing: 2px;margin: .4rem .5rem;white-space: normal;-webkit-transition: all .3s ease-in-out,-webkit-box-shadow 2s ease-in-out;transition: all .3s ease-in-out,-webkit-box-shadow 2s ease-in-out;-o-transition: all .3s ease-in-out,box-shadow 2s ease-in-out;transition: all .3s ease-in-out,box-shadow 2s ease-in-out;transition: all .3s ease-in-out,box-shadow 2s ease-in-out,-webkit-box-shadow 2s ease-in-out;display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;word-break: break-word;-webkit-align-items: center;-webkit-justify-content: center;display: -webkit-inline-flex;}.btn-form{border-radius: 0;}.btn-form:hover{cursor: pointer;}form .btn{margin: 0;}input,textarea,select{padding: 15px 0.5rem;}.mbr-figure img,.mbr-figure iframe{display: block;width: 100%;}.card{background-color: transparent;border: none;}.card-wrapper{-webkit-box-flex: 1;-webkit-flex: 1;}.card-img{text-align: center;-ms-flex-negative: 0;flex-shrink: 0;-webkit-flex-shrink: 0;}.media{max-width: 100%;margin: 0 auto;}.mbr-figure{-ms-flex-item-align: center;-ms-grid-row-align: center;-webkit-align-self: center;align-self: center;}.media-container > div{max-width: 100%;}.mbr-figure img,.card-img img{width: 100%;}@media (max-width: 991px){.media-size-item{width: auto;}.media{width: auto;}.mbr-figure{width: 100%;}}section.slider .amp-carousel-button{cursor: pointer;}amp-image-lightbox a.control{position: absolute;width: 32px;height: 32px;right: 16px;top: 16px;z-index: 1000;}amp-image-lightbox a.control .close{position: relative;}amp-image-lightbox a.control .close:before,amp-image-lightbox a.control .close:after{position: absolute;left: 15px;content: ' ';height: 33px;width: 2px;background-color: #fff;}amp-image-lightbox a.control .close:before{-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);transform: rotate(45deg);}amp-image-lightbox a.control .close:after{-webkit-transform: rotate(-45deg);-ms-transform: rotate(-45deg);transform: rotate(-45deg);}.hidden{visibility: hidden;}.super-hide{display: none;}.inactive{-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;pointer-events: none;-webkit-user-drag: none;user-drag: none;}textarea[type="hidden"]{display: none;}#scrollToTop{display: none;}.popover-content ul.show{min-height: 155px;}.mbr-white{color: #ffffff;}.mbr-black{color: #000000;}.mbr-bg-white{background-color: #ffffff;}.mbr-bg-black{background-color: #000000;}.align-left{text-align: left;}.align-center{text-align: center;}.align-right{text-align: right;}@media (max-width: 767px){.align-left,.align-center,.align-right,.mbr-section-btn,.mbr-section-title{text-align: center;}}.mbr-light{font-weight: 300;}.mbr-regular{font-weight: 400;}.mbr-semibold{font-weight: 500;}.mbr-bold{font-weight: 700;}.mbr-section-btn{margin-left: -.25rem;margin-right: -.25rem;font-size: 0;}nav .mbr-section-btn{margin-left: 0rem;margin-right: 0rem;}.btn .mbr-iconfont,.btn.btn-sm .mbr-iconfont{cursor: pointer;margin-right: 0.5rem;}.btn.btn-md .mbr-iconfont,.btn.btn-md .mbr-iconfont{margin-right: 0.8rem;}[type="submit"]{-webkit-appearance: none;}.google-map{height: 400px;position: relative;width: 100%;}.google-map iframe{height: 100%;width: 100%;}.google-map [data-state-details]{color: #6b6763;font-family: Montserrat;height: 1.5em;margin-top: -0.75em;padding-left: 1.25rem;padding-right: 1.25rem;position: absolute;text-align: center;top: 50%;width: 100%;}.google-map[data-state]{background: #e9e5dc;}.google-map[data-state="loading"] [data-state-details]{display: none;}.map-placeholder{display: none;}.mbr-fullscreen .mbr-overlay{height: 100vh;}.mbr-fullscreen{display: -webkit-box;display: -ms-flexbox;display: flex;display: -moz-flex;display: -ms-flex;display: -o-flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-align-items: center;height: 100vh;-webkit-box-sizing: border-box;box-sizing: border-box;padding-top: 3rem;padding-bottom: 3rem;}.mbr-overlay{bottom: 0;left: 0;position: absolute;right: 0;top: 0;z-index: 0;}section.sidebar-open:before{content: '';position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,0.2);z-index: 1040;}amp-img img{max-height: 100%;max-width: 100%;}img.mbr-temp{width: 100%;}.is-builder .nodisplay + img[async],.is-builder .nodisplay + img[decoding="async"],.is-builder amp-img > a + img[async],.is-builder amp-img > a + img[decoding="async"]{display: none;}html:not(.is-builder) amp-img > a{position: absolute;top: 0;bottom: 0;left: 0;right: 0;z-index: 1;}.is-builder .temp-amp-sizer{position: absolute;}.is-builder section.slider .icon-wrap,.is-builder section[class*="gallery"] .icon-wrap{pointer-events: all;}.is-builder amp-youtube .temp-amp-sizer,.is-builder amp-vimeo .temp-amp-sizer{position: static;}.is-builder section.horizontal-menu .ampstart-btn{display: none;}@media (max-width: 991px){.is-builder section.horizontal-menu .navbar-toggler{display: block;}}.is-builder section.horizontal-menu .dropdown-menu{z-index: auto;opacity: 1;pointer-events: auto;}.is-builder section.horizontal-menu .nav-dropdown .link.dropdown-toggle[aria-expanded="true"]{margin-right: 0;padding: 0.667em 1em;}.mobirise-spinner{position: absolute;top: 50%;left: 40%;margin-left: 10%;-webkit-transform: translate3d(-50%,-50%,0);z-index: 4;}.mobirise-spinner em{width: 24px;height: 24px;background: #3ac;border-radius: 100%;display: inline-block;-webkit-animation: slide 1s infinite;}.mobirise-spinner em:nth-child(1){-webkit-animation-delay: 0.1s;}.mobirise-spinner em:nth-child(2){-webkit-animation-delay: 0.2s;}.mobirise-spinner em:nth-child(3){-webkit-animation-delay: 0.3s;}@-moz-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@-webkit-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@-o-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}.mobirise-loader .amp-active > div{display: none;}.mbr-container{max-width: 800px;padding: 0 10px;margin: 0 auto;position: relative;}.container{padding-right: 15px;padding-left: 15px;width: 100%;margin-right: auto;margin-left: auto;}@media (max-width: 767px){.container{max-width: 540px;}}@media (min-width: 768px){.container{max-width: 720px;}}@media (min-width: 992px){.container{max-width: 960px;}}@media (min-width: 1200px){.container{max-width: 1140px;}}.mbr-row,.mbr-form-row{display: -webkit-box;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-flex-wrap: wrap;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -1rem;margin-left: -1rem;}.mbr-form-row{margin-right: -0.5rem;margin-left: -0.5rem;}.mbr-form-row > [class*="mbr-col"]{padding-left: 0.5rem;padding-right: 0.5rem;}.mbr-justify-content-center{-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-justify-content: center;}@media (max-width: 767px){.mbr-col-sm-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 100%;}.mbr-row{margin: 0;}}@media (min-width: 768px){.mbr-col-md-3{-ms-flex: 0 0 25%;-webkit-box-flex: 0;flex: 0 0 25%;max-width: 25%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 25%;}.mbr-col-md-4{-ms-flex: 0 0 33.333333%;-webkit-box-flex: 0;flex: 0 0 33.333333%;max-width: 33.333333%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 33.333333%;}.mbr-col-md-5{-ms-flex: 0 0 41.666667%;-webkit-box-flex: 0;flex: 0 0 41.666667%;max-width: 41.666667%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 41.666667%;}.mbr-col-md-6{-ms-flex: 0 0 50%;-webkit-box-flex: 0;flex: 0 0 50%;max-width: 50%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 50%;}.mbr-col-md-7{-ms-flex: 0 0 58.333333%;-webkit-box-flex: 0;flex: 0 0 58.333333%;max-width: 58.333333%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 58.333333%;}.mbr-col-md-8{-ms-flex: 0 0 66.666667%;-webkit-box-flex: 0;flex: 0 0 66.666667%;max-width: 66.666667%;padding-left: 15px;padding-right: 15px;-webkit-flex: 0 0 66.666667%;}.mbr-col-md-10{-ms-flex: 0 0 83.333333%;-webkit-box-flex: 0;flex: 0 0 83.333333%;max-width: 83.333333%;padding-left: 15px;padding-right: 15px;-webkit-flex: 0 0 83.333333%;}.mbr-col-md-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 100%;}}@media (min-width: 992px){.mbr-col-lg-2{-ms-flex: 0 0 16.666667%;-webkit-box-flex: 0;flex: 0 0 16.666667%;max-width: 16.666667%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 16.666667%;}.mbr-col-lg-3{-ms-flex: 0 0 25%;-webkit-box-flex: 0;flex: 0 0 25%;max-width: 25%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 25%;}.mbr-col-lg-4{-ms-flex: 0 0 33.33%;-webkit-box-flex: 0;flex: 0 0 33.33%;max-width: 33.33%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 33.33%;}.mbr-col-lg-5{-ms-flex: 0 0 41.666%;-webkit-box-flex: 0;flex: 0 0 41.666%;max-width: 41.666%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 41.666%;}.mbr-col-lg-6{-ms-flex: 0 0 50%;-webkit-box-flex: 0;flex: 0 0 50%;max-width: 50%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 50%;}.mbr-col-lg-8{-ms-flex: 0 0 66.666667%;-webkit-box-flex: 0;flex: 0 0 66.666667%;max-width: 66.666667%;padding-left: 15px;padding-right: 15px;-webkit-flex: 0 0 66.666667%;}.mbr-col-lg-10{-ms-flex: 0 0 83.3333%;-webkit-box-flex: 0;flex: 0 0 83.3333%;max-width: 83.3333%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 83.3333%;}.mbr-col-lg-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 100%;}}@media (min-width: 1200px){.mbr-col-xl-7{-ms-flex: 0 0 58.333333%;-webkit-box-flex: 0;flex: 0 0 58.333333%;max-width: 58.333333%;padding-right: 15px;padding-left: 15px;-webkit-flex: 0 0 58.333333%;}.mbr-col-xl-8{-ms-flex: 0 0 66.666667%;-webkit-box-flex: 0;flex: 0 0 66.666667%;max-width: 66.666667%;padding-left: 15px;padding-right: 15px;-webkit-flex: 0 0 66.666667%;}}amp-sidebar{background: transparent;}#scrollToTopMarker{position: absolute;width: 0px;height: 0px;top: 300px;}#scrollToTopButton{position: fixed;bottom: 25px;right: 25px;opacity: .4;z-index: 5000;font-size: 32px;height: 60px;width: 60px;border: none;border-radius: 3px;cursor: pointer;}#scrollToTopButton:focus{outline: none;}#scrollToTopButton a:before{content: '';position: absolute;height: 40%;top: 36%;width: 2px;left: calc(50% - 1px);}#scrollToTopButton a:after{content: '';position: absolute;border-top: 2px solid;border-right: 2px solid;width: 40%;height: 40%;left: calc(30% - 1px);bottom: 30%;-ms-transform: rotate(-45deg);transform: rotate(-45deg);-webkit-transform: rotate(-45deg);}.is-builder #scrollToTopButton a:after{left: 30%;}.field{margin-bottom: 1rem;}.field-input{margin: 0;width: 100%;}form a.btn{margin: 0;}.mbr-col,.mbr-col-auto{padding-left: 1rem;padding-right: 1rem;}.mbr-col{flex-basis: 0;flex-grow: 1;max-width: 100%;}.mbr-col-auto{flex: 0 0 auto;width: auto;max-width: none;}.dots-wrapper .dots{margin: 4px 8px;}.dots-wrapper .dots span{cursor: pointer;border-radius: 12px;display: block;height: 24px;width: 24px;transition: 0.4s;border: 10px solid #cccccc;}.dots-wrapper .dots span:hover{opacity: 1;}.dots-wrapper .dots span.current{outline: none;width: 40px;opacity: 1;}.amp-carousel-button{outline: none;}.hidden-slide{display: none;}.visible-slide{display: flex;}
body{font-family: Roboto;}blockquote{border-color: #4ea2e3;}.display-1{font-family: 'Roboto',sans-serif;font-size: 4.5rem;}.display-2{font-family: 'Roboto',sans-serif;font-size: 2.2rem;}.display-4{font-family: 'Roboto',sans-serif;font-size: 0.9rem;}.display-5{font-family: 'Roboto',sans-serif;font-size: 1.8rem;}.display-7{font-family: 'Roboto',sans-serif;font-size: 1.1rem;}input,textarea{font-family: 'Roboto',sans-serif;font-size: 0.9rem;}.display-1 .mbr-iconfont-btn{font-size: 4.5rem;width: 4.5rem;}.display-2 .mbr-iconfont-btn{font-size: 2.2rem;width: 2.2rem;}.display-4 .mbr-iconfont-btn{font-size: 0.9rem;width: 0.9rem;}.display-5 .mbr-iconfont-btn{font-size: 1.8rem;width: 1.8rem;}.display-7 .mbr-iconfont-btn{font-size: 1.1rem;width: 1.1rem;}@media (max-width: 768px){.display-1{font-size: 3.6rem;font-size: calc( 2.225rem + (4.5 - 2.225) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (2.225rem + (4.5 - 2.225) * ((100vw - 20rem) / (48 - 20))));}.display-2{font-size: 1.76rem;font-size: calc( 1.42rem + (2.2 - 1.42) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.42rem + (2.2 - 1.42) * ((100vw - 20rem) / (48 - 20))));}.display-4{font-size: 0.72rem;font-size: calc( 0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20))));}.display-5{font-size: 1.44rem;font-size: calc( 1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20))));}}.btn{padding: 1rem 2rem;border-radius: 0px;}.btn-sm{border-width: 1px;padding: 0.6rem 0.8rem;border-radius: 0px;}.btn-md{font-weight: 600;padding: 1rem 2rem;border-radius: 0px;}.bg-primary{background-color: #4ea2e3;}.bg-success{background-color: #04854e;}.bg-info{background-color: #ff0000;}.bg-warning{background-color: #767676;}.bg-danger{background-color: #a0a0a0;}.btn-primary,.btn-primary:active,.btn-primary.active{background-color: #4ea2e3;border-color: #4ea2e3;color: #ffffff;}.btn-primary:hover,.btn-primary:focus,.btn-primary.focus{color: #ffffff;background-color: #1f7dc5;border-color: #1f7dc5;}.btn-primary.disabled,.btn-primary:disabled{color: #ffffff;background-color: #1f7dc5;border-color: #1f7dc5;}.btn-secondary,.btn-secondary:active,.btn-secondary.active{background-color: #4ea2e3;border-color: #4ea2e3;color: #ffffff;}.btn-secondary:hover,.btn-secondary:focus,.btn-secondary.focus{color: #ffffff;background-color: #1f7dc5;border-color: #1f7dc5;}.btn-secondary.disabled,.btn-secondary:disabled{color: #ffffff;background-color: #1f7dc5;border-color: #1f7dc5;}.btn-info,.btn-info:active,.btn-info.active{background-color: #ff0000;border-color: #ff0000;color: #ffffff;}.btn-info:hover,.btn-info:focus,.btn-info.focus{color: #ffffff;background-color: #b30000;border-color: #b30000;}.btn-info.disabled,.btn-info:disabled{color: #ffffff;background-color: #b30000;border-color: #b30000;}.btn-success,.btn-success:active,.btn-success.active{background-color: #04854e;border-color: #04854e;color: #ffffff;}.btn-success:hover,.btn-success:focus,.btn-success.focus{color: #ffffff;background-color: #023b22;border-color: #023b22;}.btn-success.disabled,.btn-success:disabled{color: #ffffff;background-color: #023b22;border-color: #023b22;}.btn-warning,.btn-warning:active,.btn-warning.active{background-color: #767676;border-color: #767676;color: #ffffff;}.btn-warning:hover,.btn-warning:focus,.btn-warning.focus{color: #ffffff;background-color: #505050;border-color: #505050;}.btn-warning.disabled,.btn-warning:disabled{color: #ffffff;background-color: #505050;border-color: #505050;}.btn-danger,.btn-danger:active,.btn-danger.active{background-color: #a0a0a0;border-color: #a0a0a0;color: #ffffff;}.btn-danger:hover,.btn-danger:focus,.btn-danger.focus{color: #ffffff;background-color: #7a7a7a;border-color: #7a7a7a;}.btn-danger.disabled,.btn-danger:disabled{color: #ffffff;background-color: #7a7a7a;border-color: #7a7a7a;}.btn-black,.btn-black:active,.btn-black.active{background-color: #333333;border-color: #333333;color: #ffffff;}.btn-black:hover,.btn-black:focus,.btn-black.focus{color: #ffffff;background-color: #0d0d0d;border-color: #0d0d0d;}.btn-black.disabled,.btn-black:disabled{color: #ffffff;background-color: #0d0d0d;border-color: #0d0d0d;}.btn-white,.btn-white:active,.btn-white.active{background-color: #ffffff;border-color: #ffffff;color: #808080;}.btn-white:hover,.btn-white:focus,.btn-white.focus{color: #808080;background-color: #d9d9d9;border-color: #d9d9d9;}.btn-white.disabled,.btn-white:disabled{color: #808080;background-color: #d9d9d9;border-color: #d9d9d9;}.btn-white,.btn-white:active,.btn-white.active{color: #333333;}.btn-white:hover,.btn-white:focus,.btn-white.focus{color: #333333;}.btn-white.disabled,.btn-white:disabled{color: #333333;}.btn-primary-outline,.btn-primary-outline:active,.btn-primary-outline.active{background: none;border-color: #1c6faf;color: #1c6faf;}.btn-primary-outline:hover,.btn-primary-outline:focus,.btn-primary-outline.focus{color: #ffffff;background-color: #4ea2e3;border-color: #4ea2e3;}.btn-primary-outline.disabled,.btn-primary-outline:disabled{color: #ffffff;background-color: #4ea2e3;border-color: #4ea2e3;}.btn-secondary-outline,.btn-secondary-outline:active,.btn-secondary-outline.active{background: none;border-color: #1c6faf;color: #1c6faf;}.btn-secondary-outline:hover,.btn-secondary-outline:focus,.btn-secondary-outline.focus{color: #ffffff;background-color: #4ea2e3;border-color: #4ea2e3;}.btn-secondary-outline.disabled,.btn-secondary-outline:disabled{color: #ffffff;background-color: #4ea2e3;border-color: #4ea2e3;}.btn-info-outline,.btn-info-outline:active,.btn-info-outline.active{background: none;border-color: #990000;color: #990000;}.btn-info-outline:hover,.btn-info-outline:focus,.btn-info-outline.focus{color: #ffffff;background-color: #ff0000;border-color: #ff0000;}.btn-info-outline.disabled,.btn-info-outline:disabled{color: #ffffff;background-color: #ff0000;border-color: #ff0000;}.btn-success-outline,.btn-success-outline:active,.btn-success-outline.active{background: none;border-color: #012214;color: #012214;}.btn-success-outline:hover,.btn-success-outline:focus,.btn-success-outline.focus{color: #ffffff;background-color: #04854e;border-color: #04854e;}.btn-success-outline.disabled,.btn-success-outline:disabled{color: #ffffff;background-color: #04854e;border-color: #04854e;}.btn-warning-outline,.btn-warning-outline:active,.btn-warning-outline.active{background: none;border-color: #434343;color: #434343;}.btn-warning-outline:hover,.btn-warning-outline:focus,.btn-warning-outline.focus{color: #ffffff;background-color: #767676;border-color: #767676;}.btn-warning-outline.disabled,.btn-warning-outline:disabled{color: #ffffff;background-color: #767676;border-color: #767676;}.btn-danger-outline,.btn-danger-outline:active,.btn-danger-outline.active{background: none;border-color: #6d6d6d;color: #6d6d6d;}.btn-danger-outline:hover,.btn-danger-outline:focus,.btn-danger-outline.focus{color: #ffffff;background-color: #a0a0a0;border-color: #a0a0a0;}.btn-danger-outline.disabled,.btn-danger-outline:disabled{color: #ffffff;background-color: #a0a0a0;border-color: #a0a0a0;}.btn-black-outline,.btn-black-outline:active,.btn-black-outline.active{background: none;border-color: #000000;color: #000000;}.btn-black-outline:hover,.btn-black-outline:focus,.btn-black-outline.focus{color: #ffffff;background-color: #333333;border-color: #333333;}.btn-black-outline.disabled,.btn-black-outline:disabled{color: #ffffff;background-color: #333333;border-color: #333333;}.btn-white-outline,.btn-white-outline:active,.btn-white-outline.active{background: none;border-color: #ffffff;color: #ffffff;}.btn-white-outline:hover,.btn-white-outline:focus,.btn-white-outline.focus{color: #333333;background-color: #ffffff;border-color: #ffffff;}.text-primary{color: #4ea2e3;}.text-secondary{color: #4ea2e3;}.text-success{color: #04854e;}.text-info{color: #ff0000;}.text-warning{color: #767676;}.text-danger{color: #a0a0a0;}.text-white{color: #ffffff;}.text-black{color: #000000;}a.text-primary:hover,a.text-primary:focus{color: #1c6faf;}a.text-secondary:hover,a.text-secondary:focus{color: #1c6faf;}a.text-success:hover,a.text-success:focus{color: #012214;}a.text-info:hover,a.text-info:focus{color: #990000;}a.text-warning:hover,a.text-warning:focus{color: #434343;}a.text-danger:hover,a.text-danger:focus{color: #6d6d6d;}a.text-white:hover,a.text-white:focus{color: #b3b3b3;}a.text-black:hover,a.text-black:focus{color: #4d4d4d;}.alert-success{background-color: #04854e;}.alert-info{background-color: #ff0000;}.alert-warning{background-color: #767676;}.alert-danger{background-color: #a0a0a0;}a,a:hover{color: #4ea2e3;}.mbr-plan-header.bg-primary .mbr-plan-subtitle,.mbr-plan-header.bg-primary .mbr-plan-price-desc{color: #feffff;}.mbr-plan-header.bg-success .mbr-plan-subtitle,.mbr-plan-header.bg-success .mbr-plan-price-desc{color: #11f895;}.mbr-plan-header.bg-info .mbr-plan-subtitle,.mbr-plan-header.bg-info .mbr-plan-price-desc{color: #ffcccc;}.mbr-plan-header.bg-warning .mbr-plan-subtitle,.mbr-plan-header.bg-warning .mbr-plan-price-desc{color: #b6b6b6;}.mbr-plan-header.bg-danger .mbr-plan-subtitle,.mbr-plan-header.bg-danger .mbr-plan-price-desc{color: #e0e0e0;}.mobirise-spinner em:nth-child(1){background: #4ea2e3;}.mobirise-spinner em:nth-child(2){background: #4ea2e3;}.mobirise-spinner em:nth-child(3){background: #04854e;}#scrollToTopMarker{display: none;}#scrollToTopButton{background-color: #4ea2e3;}#scrollToTopButton a:before{background: #ffffff;}#scrollToTopButton a:after{border-top-color: #ffffff;border-right-color: #ffffff;}.field-input{font-family: 'Roboto',sans-serif;font-size: 0.9rem;}.cid-rSzmRCjsUV{min-height: 80px;}.cid-rSzmRCjsUV .brand-name{color: #4ea2e3;margin: 0;}.cid-rSzmRCjsUV .nav-item:focus,.cid-rSzmRCjsUV .nav-link:focus{outline: none;}.cid-rSzmRCjsUV .navbar-nav{list-style-type: none;display: flex;-webkit-flex-direction: row;flex-direction: row;padding-left: 0;}.cid-rSzmRCjsUV .navbar-nav .nav-link{margin: .667em 1em;font-weight: normal;}@media (min-width: 992px){.cid-rSzmRCjsUV .dropdown-menu .dropdown-toggle:after{content: '';border-bottom: 0.35em solid transparent;border-left: 0.35em solid;border-right: 0;border-top: 0.35em solid transparent;margin-left: 0.3rem;margin-top: -0.3077em;position: absolute;right: 1.1538em;top: 50%;}}@media (max-width: 991px){.cid-rSzmRCjsUV ul.navbar-nav{-webkit-flex-direction: column;flex-direction: column;}.cid-rSzmRCjsUV ul.navbar-nav li{margin: auto;}.cid-rSzmRCjsUV .dropdown-toggle[data-toggle="dropdown-submenu"]:after{content: '';margin-left: .25rem;border-top: 0.35em solid;border-right: 0.35em solid transparent;border-left: 0.35em solid transparent;border-bottom: 0;top: 55%;}.cid-rSzmRCjsUV .nav-dropdown .dropdown-menu .dropdown-item{-webkit-justify-content: center;justify-content: center;display: flex;-webkit-align-items: center;align-items: center;}}.cid-rSzmRCjsUV .nav-dropdown .dropdown-menu{border-radius: 0;border: 0;left: 0;margin: 0;min-width: 10rem;padding-bottom: 1.25rem;padding-top: 1.25rem;position: absolute;}.cid-rSzmRCjsUV .nav-dropdown .dropdown-menu .dropdown-item{font-weight: 400;line-height: 2;display: flex;-webkit-align-items: center;align-items: center;width: 100%;padding: .25rem 1.5rem;clear: both;text-align: inherit;white-space: nowrap;background: 0 0;border: 0;}.cid-rSzmRCjsUV .nav-dropdown .dropdown-menu .dropdown{position: relative;}.cid-rSzmRCjsUV .nav-item.dropdown{position: relative;}.cid-rSzmRCjsUV .nav-item.dropdown .dropdown-menu{z-index: -1;opacity: 0;pointer-events: none;}.cid-rSzmRCjsUV .nav-item.dropdown:hover > .dropdown-menu{z-index: 1;opacity: 1;pointer-events: all;}.cid-rSzmRCjsUV .dropdown-menu .dropdown:hover > .dropdown-menu{z-index: 1;opacity: 1;pointer-events: all;}.cid-rSzmRCjsUV .link.dropdown-toggle:after{content: '';margin-left: .25rem;border-top: 0.35em solid;border-right: 0.35em solid transparent;border-left: 0.35em solid transparent;border-bottom: 0;}.cid-rSzmRCjsUV .nav-dropdown .dropdown-submenu{top: 0;}.cid-rSzmRCjsUV .navbar{z-index: 100;display: flex;-webkit-flex-direction: row;flex-direction: row;width: 100%;min-height: 80px;transition: all .3s;background: #ffffff;}.cid-rSzmRCjsUV .navbar .navbar-logo{margin-right: .8rem;}.cid-rSzmRCjsUV .navbar .navbar-logo img{height: auto;}.cid-rSzmRCjsUV .navbar.navbar-short{background: #ffffff;}.cid-rSzmRCjsUV .navbar.navbar-short .brand{padding: 0;}.cid-rSzmRCjsUV .navbar.opened{transition: all .3s;background: #ffffff;}.cid-rSzmRCjsUV .navbar .dropdown-item{padding: .25rem 1.5rem;}.cid-rSzmRCjsUV .navbar .navbar-collapse{display: flex;-webkit-justify-content: flex-end;justify-content: flex-end;z-index: 1;-webkit-flex-basis: 100%;flex-basis: 100%;-webkit-align-items: center;align-items: center;}@media (max-width: 991px){.cid-rSzmRCjsUV .navbar .navbar-collapse{display: none;position: absolute;top: 0;right: 0;min-height: 100vh;background: #ffffff;padding: 1rem 2rem 1rem 2rem;}.cid-rSzmRCjsUV .navbar.opened .navbar-collapse.show,.cid-rSzmRCjsUV .navbar.opened .navbar-collapse.collapsing{display: block;}.cid-rSzmRCjsUV .navbar.opened .dropdown-menu{top: 0;}.cid-rSzmRCjsUV .navbar .dropdown-menu{position: relative;background: transparent;}.cid-rSzmRCjsUV .navbar .dropdown-menu .dropdown-submenu{left: 0;}.cid-rSzmRCjsUV .navbar .dropdown-menu .dropdown-item:after{right: auto;}.cid-rSzmRCjsUV .navbar .dropdown-menu .dropdown-item{padding: .25rem 1.5rem;text-align: center;margin: 0;}.cid-rSzmRCjsUV .navbar .brand{-webkit-flex-shrink: initial;flex-shrink: initial;word-break: break-word;}}.cid-rSzmRCjsUV .brand{display: flex;-webkit-flex-shrink: 0;flex-shrink: 0;-webkit-align-items: center;align-items: center;margin-right: 0;padding: 0;transition: all .3s;word-break: break-word;z-index: 1;}.cid-rSzmRCjsUV .brand .navbar-caption{line-height: inherit;font-weight: normal;}.cid-rSzmRCjsUV .brand .navbar-logo a{outline: none;}.cid-rSzmRCjsUV .brand .navbar-caption-wrap{display: flex;}.cid-rSzmRCjsUV .dropdown-item.active,.cid-rSzmRCjsUV .dropdown-item:active{background-color: transparent;}.cid-rSzmRCjsUV .navbar-expand-lg .navbar-nav .nav-link{padding: 0;}.cid-rSzmRCjsUV .navbar.navbar-expand-lg .dropdown .dropdown-menu{background: #ffffff;}.cid-rSzmRCjsUV .navbar.navbar-expand-lg .dropdown .dropdown-menu .dropdown-submenu{margin: 0;left: 100%;}.cid-rSzmRCjsUV .navbar .dropdown.open > .dropdown-menu{display: block;}.cid-rSzmRCjsUV ul.navbar-nav{-webkit-flex-wrap: wrap;flex-wrap: wrap;}.cid-rSzmRCjsUV .navbar-buttons{text-align: center;}.cid-rSzmRCjsUV button.navbar-toggler{display: none;outline: none;width: 31px;height: 20px;cursor: pointer;transition: all .2s;position: relative;-webkit-align-self: center;align-self: center;}.cid-rSzmRCjsUV button.navbar-toggler .hamburger span{position: absolute;right: 0;width: 30px;height: 2px;border-right: 5px;background-color: #4ea2e3;}.cid-rSzmRCjsUV button.navbar-toggler .hamburger span:nth-child(1){top: 0;transition: all .2s;}.cid-rSzmRCjsUV button.navbar-toggler .hamburger span:nth-child(2){top: 8px;transition: all .15s;}.cid-rSzmRCjsUV button.navbar-toggler .hamburger span:nth-child(3){top: 8px;transition: all .15s;}.cid-rSzmRCjsUV button.navbar-toggler .hamburger span:nth-child(4){top: 16px;transition: all .2s;}.cid-rSzmRCjsUV nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(1){top: 8px;width: 0;opacity: 0;right: 50%;transition: all .2s;}.cid-rSzmRCjsUV nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(2){-webkit-transform: rotate(45deg);transform: rotate(45deg);transition: all .25s;}.cid-rSzmRCjsUV nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(3){-webkit-transform: rotate(-45deg);transform: rotate(-45deg);transition: all .25s;}.cid-rSzmRCjsUV nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(4){top: 8px;width: 0;opacity: 0;right: 50%;transition: all .2s;}.cid-rSzmRCjsUV .navbar-dropdown{padding: .5rem 1rem;position: fixed;}.cid-rSzmRCjsUV a.nav-link{display: flex;-webkit-align-items: center;align-items: center;-webkit-justify-content: center;justify-content: center;}.cid-rSzmRCjsUV .nav-link .mbr-iconfont,.cid-rSzmRCjsUV .dropdown-item .mbr-iconfont{margin-right: .2rem;}.cid-rSzmRCjsUV .ampstart-btn{display: flex;-webkit-align-self: center;align-self: center;}@media (min-width: 992px){.cid-rSzmRCjsUV .ampstart-btn{display: none;}}.cid-rSzmRCjsUV .ampstart-btn.hamburger{position: relative;right: 20px;margin-left: auto;width: 30px;height: 20px;background: none;border: none;cursor: pointer;z-index: 1000;}.cid-rSzmRCjsUV .ampstart-btn.hamburger:focus{outline: none;}.cid-rSzmRCjsUV .ampstart-btn.hamburger span{position: absolute;right: 0;width: 30px;height: 2px;border-right: 5px;background-color: #4ea2e3;}.cid-rSzmRCjsUV .ampstart-btn.hamburger span:nth-child(1){top: 0;transition: all .2s;}.cid-rSzmRCjsUV .ampstart-btn.hamburger span:nth-child(2){top: 8px;transition: all .15s;}.cid-rSzmRCjsUV .ampstart-btn.hamburger span:nth-child(3){top: 8px;transition: all .15s;}.cid-rSzmRCjsUV .ampstart-btn.hamburger span:nth-child(4){top: 16px;transition: all .2s;}.cid-rSzmRCjsUV amp-sidebar{min-width: 260px;z-index: 1050;background-color: #ffffff;}.cid-rSzmRCjsUV amp-sidebar.open:after{content: '';position: absolute;top: 0;left: 0;bottom: 0;right: 0;background-color: red;}.cid-rSzmRCjsUV .open{transform: translateX(0%);display: block;-webkit-transform: translateX(0%);}.cid-rSzmRCjsUV .builder-sidebar{background-color: #ffffff;position: relative;min-height: 100vh;z-index: 1030;padding: 1rem 2rem;max-width: 20rem;}.cid-rSzmRCjsUV .builder-sidebar .dropdown{position: relative;}.cid-rSzmRCjsUV .builder-sidebar .dropdown:hover > .dropdown-menu{position: relative;text-align: center;}.cid-rSzmRCjsUV .sidebar{padding: 1rem 0;margin: 0;}.cid-rSzmRCjsUV .sidebar > li{list-style: none;display: flex;-webkit-flex-direction: column;flex-direction: column;}.cid-rSzmRCjsUV .sidebar a{display: block;text-decoration: none;margin-bottom: 10px;}.cid-rSzmRCjsUV .close-sidebar{width: 30px;height: 30px;position: relative;cursor: pointer;background-color: transparent;border: none;}.cid-rSzmRCjsUV .close-sidebar:focus{outline: 2px auto #4ea2e3;}.cid-rSzmRCjsUV .close-sidebar span{position: absolute;left: 0;top: 14px;width: 30px;height: 2px;border-right: 5px;background-color: #4ea2e3;}.cid-rSzmRCjsUV .close-sidebar span:nth-child(1){-webkit-transform: rotate(45deg);transform: rotate(45deg);}.cid-rSzmRCjsUV .close-sidebar span:nth-child(2){-webkit-transform: rotate(-45deg);transform: rotate(-45deg);}.cid-rSzmRCjsUV amp-img{margin-right: 1rem;display: flex;-webkit-align-items: center;align-items: center;height: 45px;width: 45px;}@media (max-width: 767px){.cid-rSzmRCjsUV amp-img{max-height: 35px;max-width: 35px;}}.cid-rSCFVXG1Kn{padding-top: 60px;padding-bottom: 60px;background-color: #ffffff;}.cid-rSCFVXG1Kn .mbr-row{-webkit-flex-direction: row-reverse;flex-direction: row-reverse;}.cid-rSCFVXG1Kn .btn-container{display: flex;-webkit-align-items: center;align-items: center;-webkit-justify-content: center;justify-content: center;}@media (min-width: 768px){.cid-rSCFVXG1Kn .mbr-section-subtitle{margin-bottom: 0;}}.cid-rSCFVXG1Kn .mbr-section-subtitle{color: #a0a0a0;}.cid-rSEkFujaI6{padding-top: 60px;padding-bottom: 60px;background-color: #ffffff;}.cid-rSEkFujaI6 .mbr-title{padding-bottom: 1rem;}.cid-rSEkFujaI6 .mbr-section-btn{padding-top: 1.5rem;}.cid-rSEkFujaI6 .mbr-section-subtitle{color: #a0a0a0;}.cid-rSEjE7mByS{padding-top: 30px;padding-bottom: 30px;background-color: #ffffff;}.cid-rSEjE7mByS .card{border-radius: 0;width: 100%;}@media (min-width: 992px){.cid-rSEjE7mByS .card{padding-left: 1.5rem;padding-right: 1.5rem;}.cid-rSEjE7mByS .card.first-row-card{padding-bottom: 3rem;}}@media (max-width: 991px){.cid-rSEjE7mByS .card:not(.last-child){margin-bottom: 3rem;}}@media (max-width: 767px){.cid-rSEjE7mByS .card:not(.last-child){margin-bottom: 30px;}}.cid-rSEjE7mByS .card .card-wrapper{background: #4ea2e3;}@media (min-width: 768px){.cid-rSEjE7mByS .card .card-wrapper{padding: 3rem;display: flex;flex-direction: row;}}.cid-rSEjE7mByS .card-subtitle{letter-spacing: 3px;font-weight: 500;}.cid-rSEjE7mByS .mbr-text,.cid-rSEjE7mByS .card-subtitle{margin: 0;}.cid-rSEjE7mByS .card-img,.cid-rSEjE7mByS .card-box{padding: 0;margin: auto;}@media (min-width: 768px){.cid-rSEjE7mByS .card-img{padding-right: 2rem;}}@media (max-width: 767px){.cid-rSEjE7mByS .card-box{padding: 2rem 1rem 1rem;}}@media (min-width: 992px){.cid-rSEjE7mByS .mbr-row{margin-left: -1.5rem;margin-right: -1.5rem;}}.cid-rSEjE7mByS .social{padding-top: 12px;}.cid-rSEjE7mByS .social > *:not(:last-child){margin-right: 1rem;}.cid-rSEjE7mByS .social .iconfont-wrapper{width: 1.5rem;height: 1.5rem;}.cid-rSEjE7mByS .social .amp-iconfont{width: 1.5rem;font-size: 1.5rem;color: #ffffff;}.cid-rSCIir0KAP{padding-top: 60px;padding-bottom: 60px;background-color: #ffffff;}.cid-rSCIir0KAP .mbr-section-btn{margin-bottom: 1rem;}.cid-rSCIir0KAP .mbr-section-btn > *{margin: 0;}.cid-rSCIir0KAP .mbr-form{justify-content: center;margin-left: -0.5rem;margin-right: -0.5rem;}@media (min-width: 768px){.cid-rSCIir0KAP .mbr-form{display: flex;-webkit-flex-wrap: wrap;flex-wrap: wrap;-webkit-align-items: center;align-items: center;}}.cid-rSCIir0KAP .fieldset{-webkit-flex-basis: auto;flex-basis: auto;}.cid-rSCIir0KAP .fieldset label{margin: 0;}.cid-rSCIir0KAP .mbr-row{margin-top: 2rem;}.cid-rSCIir0KAP .mbr-row{align-items: center;}.cid-rSCIir0KAP input{color: #000000;border: 1px solid #767676;background: #ffffff;}.cid-rSCIir0KAP input:hover,.cid-rSCIir0KAP input:focus{border-color: #4ea2e3;}.cid-rSCIir0KAP input::-webkit-input-placeholder{color: rgba(0,0,0,0.5);}.cid-rSCIir0KAP input::-moz-placeholder{color: rgba(0,0,0,0.5);}.cid-rSCIir0KAP form input{margin: .5rem;}.cid-rSCIir0KAP .mbr-section-subtitle{color: #a0a0a0;}.cid-rSCYuldn6z{padding-top: 60px;padding-bottom: 60px;background-color: #ffffff;}.cid-rSCYuldn6z .mbr-text{margin-bottom: 0;text-align: center;color: #a0a0a0;}.cid-rSCYuldn6z .mbr-section-title{margin: 0;text-align: center;}.cid-rSCYcFIaT6{padding-top: 60px;padding-bottom: 60px;background-color: #ffffff;}.cid-rSCY2gRoeM{padding-top: 60px;padding-bottom: 60px;background-color: #ffffff;}.cid-rSCY2gRoeM .mbr-section-btn{margin-bottom: 1rem;}.cid-rSCY2gRoeM .mbr-section-btn > *{margin: 0;}.cid-rSCY2gRoeM .mbr-form{justify-content: center;margin-left: -0.5rem;margin-right: -0.5rem;}@media (min-width: 768px){.cid-rSCY2gRoeM .mbr-form{display: flex;-webkit-flex-wrap: wrap;flex-wrap: wrap;-webkit-align-items: center;align-items: center;}}.cid-rSCY2gRoeM .fieldset{-webkit-flex-basis: auto;flex-basis: auto;}.cid-rSCY2gRoeM .fieldset label{margin: 0;}.cid-rSCY2gRoeM .mbr-row{margin-top: 2rem;}.cid-rSCY2gRoeM .mbr-row{align-items: center;}.cid-rSCY2gRoeM input{color: #000000;border: 1px solid #767676;background: #ffffff;}.cid-rSCY2gRoeM input:hover,.cid-rSCY2gRoeM input:focus{border-color: #4ea2e3;}.cid-rSCY2gRoeM input::-webkit-input-placeholder{color: rgba(0,0,0,0.5);}.cid-rSCY2gRoeM input::-moz-placeholder{color: rgba(0,0,0,0.5);}.cid-rSCY2gRoeM form input{margin: .5rem;}.cid-rSCY2gRoeM .mbr-section-subtitle{color: #f94545;}
.engine{position: absolute;text-indent: -2400px;text-align: center;padding: 0;top: 0;left: -2400px;}[class*="-iconfont"]{display: inline-flex;}</style>
 
  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
  <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
  
  
</head>
<body><amp-sidebar id="sidebar" class="cid-rSzmRCjsUV" layout="nodisplay" side="right">
        <div class="builder-sidebar" id="builder-sidebar">
            <button on="tap:sidebar.close" class="close-sidebar">
                <span></span>
                <span></span>
            </button>
        
            
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-primary display-7" href="team.php">
                        MY TEAM</a>
                </li><li class="nav-item"><a class="nav-link link text-primary display-7" href="#">COMPETITION</a></li><li class="nav-item"><a class="nav-link link text-primary display-7" href="#">SUBMISSION</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-primary display-7" href="logout.php">
                        LOG OUT</a>
                </li></ul>
            
            
      </div>
    </amp-sidebar>
  <section class="menu horizontal-menu cid-rSzmRCjsUV" id="menu2-0">

    
    

    <nav class="navbar navbar-dropdown navbar-expand-lg navbar-fixed-top">
      <div class="brand">
          
    <p class="brand-name mbr-fonts-style mbr-bold display-5"><?php echo $web_name; ?></p>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-primary display-7" href="team.php">
                        MY TEAM</a>
                </li><li class="nav-item"><a class="nav-link link text-primary display-7" href="#">COMPETITION</a></li><li class="nav-item"><a class="nav-link link text-primary display-7" href="#">SUBMISSION</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-primary display-7" href="logout.php">
                        LOG OUT</a>
                </li></ul>
            
            
      </div>
      
      <button on="tap:sidebar.toggle" class="ampstart-btn hamburger sticky-but">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
    </nav>

  <!-- AMP plug -->
    

</section>

<section class="engine"><a href="https://mobirise.info/o">free portfolio site templates</a></section><section class="info2 cid-rSCFVXG1Kn" id="info2-2">

    

    <div class="container">
        <div class="mbr-row mbr-justify-content-center">
            <div class="mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-8">
                <h2 class="mbr-section-title align-right mbr-fonts-style mbr-bold display-2">&lt;TEAM NAME GOES HERE&gt;</h2>
                <h3 class="mbr-section-subtitle align-right mbr-fonts-style mbr-light display-7"><strong>INFORMATION ABOUT THE TEAM GOES HERE</strong></h3>
            </div>
            <div class="btn-container mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4">
                <div class="mbr-section-btn align-center"><a class="btn btn-primary-outline display-4" href="https://mobirise.co">MAKE TEAM PUBLIC</a>  <a class="btn btn-info-outline display-4" href="https://mobirise.co">LEAVE THE TEAM</a></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content1 cid-rSEkFujaI6" id="content1-b">

    

    <div class="mbr-container">
        <h2 class="mbr-title align-center mbr-fonts-style mbr-bold display-2"><span style="font-weight: normal;">
            YOUR TEAM MEMBERS</span></h2>
        <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-7"><strong>If your team is public and you wish to remove a team member, please contact web admin.</strong><br></h3>
        
    </div>
</section>

<section class="team2 mbr-section cid-rSEjE7mByS" id="team2-a">

    
    
    <div class="container">
        <div class="mbr-row mbr-justify-content-center">
            <div class="card mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-6">
                <div class="card-wrapper">
                    <div class="card-img mbr-col-sm-12 mbr-col-md-6">
                        <amp-img src="assets/images/face1.jpg" layout="responsive" width="186" height="186" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-col-sm-12 mbr-col-md-6">
                        <h4 class="mbr-fonts-style card-subtitle align-center mbr-white display-4">REMOVE THIS LINE AND ALSO THE PROFILE PICTURE</h4>
                        <h3 class="card-title mbr-fonts-style align-center mbr-white display-5">MEMBER NAME</h3>
                        <p class="mbr-text mbr-fonts-style align-center mbr-white display-7">
                            EMAIL ID GOES HERE AND ALSO REMOVE THE LINKS UNDER THIS</p>
                    </div>
                </div>
            </div>
            
            <div class="card mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-6 last-child">
                <div class="card-wrapper">
                    <div class="card-img mbr-col-sm-12 mbr-col-md-6">
                        <amp-img src="assets/images/face2.jpg" layout="responsive" height="186" width="186" alt="Mobirise" class="mobirise-loader">
                            <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-col-sm-12 mbr-col-md-6">
                        <h4 class="mbr-fonts-style card-subtitle align-center mbr-white display-4">REMOVE THIS LINE AND ALSO THE PROFILE PICTURE</h4>
                        <h3 class="card-title mbr-fonts-style align-center mbr-white display-5">MEMBER NAME</h3>
                        <p class="mbr-text mbr-fonts-style align-center mbr-white display-7">
                            EMAIL ID GOES HERE AND ALSO REMOVE THE LINKS UNDER THIS</p>
                        <div class="icons-list social align-center">
                            
                            
                            
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="iconfont-wrapper">
                                    <span class="amp-iconfont fa-facebook-f fa"><svg width="24" height="24" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"></path></svg></span>
                                </span>
                            </a><a href="https://twitter.com/mobirise" target="_blank">
                                <span class="iconfont-wrapper">
                                    <span class="amp-iconfont fa-twitter fa"><svg width="24" height="24" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"></path></svg></span>
                                </span>
                            </a><a href="https://plus.google.com/u/0/+Mobirise/posts" target="_blank">
                                <span class="iconfont-wrapper">
                                    <span class="amp-iconfont fa-google-plus fa"><svg width="24" height="24" viewBox="0 0 2304 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1437 913q0 208-87 370.5t-248 254-369 91.5q-149 0-285-58t-234-156-156-234-58-285 58-285 156-234 234-156 285-58q286 0 491 192l-199 191q-117-113-292-113-123 0-227.5 62t-165.5 168.5-61 232.5 61 232.5 165.5 168.5 227.5 62q83 0 152.5-23t114.5-57.5 78.5-78.5 49-83 21.5-74h-416v-252h692q12 63 12 122zm867-122v210h-209v209h-210v-209h-209v-210h209v-209h210v209h209z"></path></svg></span>
                                </span>
                            </a></div>
                    </div>
                </div>
            </div>
        
            
            
        </div>
    </div>
</section>

<section class="contact1 cid-rSCIir0KAP" id="contacts1-5">

    

    <div class="container">
        <h2 class="align-center mbr-fonts-style mbr-light display-2">TEAM INVITATION</h2>
        <h3 class="mbr-section-subtitle align-center mbr-fonts-style mbr-light display-7"><strong>SHARE THE LINK BELOW FOR PEOPLE TO JOIN YOUR TEAM</strong></h3>

        <div class="mbr-row mbr-justify-content-center">
            <div class="mbr-col-lg-10  mbr-col-md-12 " data-form-type="formoid">
                <form class="mbr-form" method="post" target="_top" action-xhr="https://formoid.net/api/amp-form/push" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="uuld51674iHie/1Zd46fx5xrZhgYiaIf2Bte/QEC8cUpuCjFczcM9POcFA1q0tGnIE2s0WOIz8YO1AJVunank9gfL4U6WL/Fvy8PccUjK6bxvegsQNt7rkuoz+lCSsRn">
                    <div class="mbr-row">
                      <div submit-success="" class="mbr-col-sm-12 mbr-col-md-12">
                        <template data-form-alert="" type="amp-mustache">Subscription successful!</template>
                      </div>
                      <div submit-error="" class="mbr-col-sm-12 mbr-col-md-12">
                        <template data-form-alert="" type="amp-mustache">Failed! {{error}}</template>
                      </div>
                    </div>
                    <div class="mbr-row">
                        
                        <div class="field mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-3" data-for="form[data][1][1]">
                            <input type="hidden" name="form[data][0][0]" value="Last Name" id="form[data][1][0]-contacts1-5" data-form-field="">
                            <input class="field-input" type="text" name="form[data][0][1]" data-form-field="Last Name" placeholder="Last Name" required="" id="form[data][1][1]-contacts1-5">
                        </div>
                        
                        <div class="mbr-section-btn align-center field mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-3"><button type="submit" class="btn btn-primary btn-form display-4">Subscribe</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="content2 mbr-section article cid-rSCYuldn6z" id="content2-8">
    
     

    <div class="container">
        <div class="mbr-row mbr-justify-content-center">
            <div class="mbr-col-sm-12 mbr-col-md-10 mbr-col-lg-8">
                <h3 class="mbr-fonts-style mbr-section-title mbr-light display-2">
                    Looks like you don't have a team yet!</h3>
                <p class="mbr-text mbr-fonts-style display-7"><strong>Create a new team or Join an existing team</strong></p>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-rSCYcFIaT6" id="content5-7">

    

    <div class="mbr-container">
        <div class="mbr-section-btn align-center"><a class="btn btn-success-outline display-4" href="https://mobirise.co">CREATE A TEAM</a>
            <a class="btn btn-primary-outline display-4" href="https://mobirise.co">JOIN A TEAM</a></div>
    </div>
</section>

<section class="contact1 cid-rSCY2gRoeM" id="contacts1-6">

    

    <div class="container">
        <h2 class="align-center mbr-fonts-style mbr-light display-2">
            CREATE A NEW TEAM</h2>
        <h3 class="mbr-section-subtitle align-center mbr-fonts-style mbr-light display-7">LOOKS LIKE THE TEAM NAME IS ALREADY IN USE !</h3>

        <div class="mbr-row mbr-justify-content-center">
            <div class="mbr-col-lg-10  mbr-col-md-12 " data-form-type="formoid">
                <form class="mbr-form" method="post" target="_top" action-xhr="https://formoid.net/api/amp-form/push" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="HNnq4DcU0CkL57tspeoRFaM2veFGeBXgw+gZU3whL8XkpfqPM9TOcq8BR4HugO/BonYJYzunJGM39PQxbvBJdUHF7E5LYq7Pl8+F35aWteYNkj+XIWhoAMo+F9wxHIvu">
                    <div class="mbr-row">
                      <div submit-success="" class="mbr-col-sm-12 mbr-col-md-12">
                        <template data-form-alert="" type="amp-mustache">Subscription successful!</template>
                      </div>
                      <div submit-error="" class="mbr-col-sm-12 mbr-col-md-12">
                        <template data-form-alert="" type="amp-mustache">Failed! {{error}}</template>
                      </div>
                    </div>
                    <div class="mbr-row">
                        <div class="field mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-3" data-for="form[data][0][1]">
                            <input type="hidden" name="form[data][0][0]" value="Name" id="form[data][0][0]-contacts1-6" data-form-field="">
                            <input class="field-input" type="text" name="form[data][0][1]" data-form-field="Name" placeholder="Name" required="" id="form[data][0][1]-contacts1-6">
                        </div>
                        
                        
                        <div class="mbr-section-btn align-center field mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-3">
                            <button type="submit" class="btn btn-primary btn-form display-4">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


  
  
</body>
</html>
