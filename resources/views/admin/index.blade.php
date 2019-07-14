<?php ?>
    <!DOCTYPE html>
<html lang=zh-cmn-Hans>
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel=icon href=/images/logo.png>
    <title>Ant Design Pro</title>
    <style>#loading-mask {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background: #fff;
            user-select: none;
            z-index: 9999;
            overflow: hidden
        }

        .loading-wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -100%)
        }

        .loading-dot {
            animation: antRotate 1.2s infinite linear;
            transform: rotate(45deg);
            position: relative;
            display: inline-block;
            font-size: 64px;
            width: 64px;
            height: 64px;
            box-sizing: border-box
        }

        .loading-dot i {
            width: 22px;
            height: 22px;
            position: absolute;
            display: block;
            background-color: #1890ff;
            border-radius: 100%;
            transform: scale(.75);
            transform-origin: 50% 50%;
            opacity: .3;
            animation: antSpinMove 1s infinite linear alternate
        }

        .loading-dot i:nth-child(1) {
            top: 0;
            left: 0
        }

        .loading-dot i:nth-child(2) {
            top: 0;
            right: 0;
            -webkit-animation-delay: .4s;
            animation-delay: .4s
        }

        .loading-dot i:nth-child(3) {
            right: 0;
            bottom: 0;
            -webkit-animation-delay: .8s;
            animation-delay: .8s
        }

        .loading-dot i:nth-child(4) {
            bottom: 0;
            left: 0;
            -webkit-animation-delay: 1.2s;
            animation-delay: 1.2s
        }

        @keyframes antRotate {
            to {
                -webkit-transform: rotate(405deg);
                transform: rotate(405deg)
            }
        }

        @-webkit-keyframes antRotate {
            to {
                -webkit-transform: rotate(405deg);
                transform: rotate(405deg)
            }
        }

        @keyframes antSpinMove {
            to {
                opacity: 1
            }
        }

        @-webkit-keyframes antSpinMove {
            to {
                opacity: 1
            }
        }</style>
    <link href=/manager/css/chunk-0d923450.913f2718.css rel=prefetch>
    <link href=/manager/css/chunk-11edda26.da33b994.css rel=prefetch>
    <link href=/manager/css/chunk-168076ce.f0e737d6.css rel=prefetch>
    <link href=/manager/css/chunk-235260fa.0aa6724a.css rel=prefetch>
    <link href=/manager/css/chunk-2fb855b2.e952d8cc.css rel=prefetch>
    <link href=/manager/css/chunk-384e7e8f.0f9d1f57.css rel=prefetch>
    <link href=/manager/css/chunk-447d2761.454654ec.css rel=prefetch>
    <link href=/manager/css/chunk-4d330a0e.2e8fc643.css rel=prefetch>
    <link href=/manager/css/chunk-64fb941a.ebbfe2fd.css rel=prefetch>
    <link href=/manager/css/chunk-67911b06.83503da7.css rel=prefetch>
    <link href=/manager/css/chunk-a571d244.06fa4ac2.css rel=prefetch>
    <link href=/manager/css/chunk-c2b5d76c.3cfbc447.css rel=prefetch>
    <link href=/manager/css/chunk-d8c2424c.a8f85d5a.css rel=prefetch>
    <link href=/manager/css/chunk-ddf3086c.da36cb1c.css rel=prefetch>
    <link href=/manager/css/chunk-e2f097a0.5abe56ac.css rel=prefetch>
    <link href=/manager/css/chunk-fac133be.1070c519.css rel=prefetch>
    <link href=/manager/css/chunk-fbf38ac4.301cf67f.css rel=prefetch>
    <link href=/manager/css/chunk-fbf5dfee.6d5fb2e9.css rel=prefetch>
    <link href=/manager/css/user.afb2eefa.css rel=prefetch>
    <link href=/manager/js/chunk-0d923450.6e4a5cbd.js rel=prefetch>
    <link href=/manager/js/chunk-11edda26.ccb91aed.js rel=prefetch>
    <link href=/manager/js/chunk-168076ce.166ab13d.js rel=prefetch>
    <link href=/manager/js/chunk-235260fa.c5c3b1b5.js rel=prefetch>
    <link href=/manager/js/chunk-2d0aecfc.3c7fca6c.js rel=prefetch>
    <link href=/manager/js/chunk-2d0c8bc6.4cbd811d.js rel=prefetch>
    <link href=/manager/js/chunk-2d0cef18.fb5adca2.js rel=prefetch>
    <link href=/manager/js/chunk-2d0cfc2a.90cd13b9.js rel=prefetch>
    <link href=/manager/js/chunk-2d0e4e51.32a1a919.js rel=prefetch>
    <link href=/manager/js/chunk-2d209ae6.3af63b39.js rel=prefetch>
    <link href=/manager/js/chunk-2d231599.15c03116.js rel=prefetch>
    <link href=/manager/js/chunk-2fb855b2.bf13c6d2.js rel=prefetch>
    <link href=/manager/js/chunk-3092a95d.90ccd09f.js rel=prefetch>
    <link href=/manager/js/chunk-384e7e8f.d8bef1d7.js rel=prefetch>
    <link href=/manager/js/chunk-447d2761.0a69a51d.js rel=prefetch>
    <link href=/manager/js/chunk-4d330a0e.e1c0a373.js rel=prefetch>
    <link href=/manager/js/chunk-5856536b.2ee2bffd.js rel=prefetch>
    <link href=/manager/js/chunk-64fb941a.2617bb90.js rel=prefetch>
    <link href=/manager/js/chunk-67911b06.b1d1fc38.js rel=prefetch>
    <link href=/manager/js/chunk-702f3673.cc00f892.js rel=prefetch>
    <link href=/manager/js/chunk-8ced7fae.47df1059.js rel=prefetch>
    <link href=/manager/js/chunk-a571d244.0f41b5d5.js rel=prefetch>
    <link href=/manager/js/chunk-c2b5d76c.503efef8.js rel=prefetch>
    <link href=/manager/js/chunk-d8c2424c.5d11b338.js rel=prefetch>
    <link href=/manager/js/chunk-ddf3086c.7e86747f.js rel=prefetch>
    <link href=/manager/js/chunk-e2f097a0.ae4e77ad.js rel=prefetch>
    <link href=/manager/js/chunk-fac133be.3a221470.js rel=prefetch>
    <link href=/manager/js/chunk-fbf38ac4.35415767.js rel=prefetch>
    <link href=/manager/js/chunk-fbf5dfee.3002cf29.js rel=prefetch>
    <link href=/manager/js/fail.25586f7c.js rel=prefetch>
    <link href=/manager/js/result.5e1f4166.js rel=prefetch>
    <link href=/manager/js/user.b3406493.js rel=prefetch>
    <link href=/manager/css/app.a50510d0.css rel=preload as=style>
    <link href=/manager/css/chunk-vendors.af3a6361.css rel=preload as=style>
    <link href=/manager/js/app.4d640caa.js rel=preload as=script>
    <link href=/manager/js/chunk-vendors.f477c308.js rel=preload as=script>
    <link href=/manager/css/chunk-vendors.af3a6361.css rel=stylesheet>
    <link href=/manager/css/app.a50510d0.css rel=stylesheet>
</head>
<body>
<noscript><strong>We're sorry but vue-antd-pro doesn't work properly without JavaScript enabled. Please enable it to
        continue.</strong></noscript>
<div id=app>
    <div id=loading-mask>
        <div class=loading-wrapper><span class="loading-dot loading-dot-spin"><i></i><i></i><i></i><i></i></span></div>
    </div>
</div>
<script src=/manager/js/chunk-vendors.f477c308.js></script>
<script src=/manager/js/app.4d640caa.js></script>
</body>
</html>

