<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\MamoryAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">



  <!DOCTYPE html><html><head>
  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"8c5db6f958","applicationID":"5433023","transactionName":"elgIQRZWX14HSk0NQVRVA0c7VFZfDUobPEdcRBVcC1dAHQxdFQ==","queueTime":0,"applicationTime":17,"agent":""}</script>
  <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(e,t){return function(){o(e,[(new Date).getTime()].concat(a(arguments)),null,t)}}var o=e("handle"),i=e(2),a=e(3);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var u=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit"],c=["addPageAction"],f="api-";i(u,function(e,t){newrelic[t]=r(f+t,"api")}),i(c,function(e,t){newrelic[t]=r(f+t)}),t.exports=newrelic,newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),o("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(0>o?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?u(e,a,i):i()}function n(n,r,o){e&&e(n,r,o);for(var i=t(o),a=l(n),u=a.length,c=0;u>c;c++)a[c].apply(i,r);var s=f[g[n]];return s&&s.push([m,n,r,i]),i}function p(e,t){w[e]=l(e).concat(t)}function l(e){return w[e]||[]}function d(e){return s[e]=s[e]||o(n)}function v(e,t){c(e,function(e,n){t=t||"feature",g[n]=t,t in f||(f[t]=[])})}var w={},g={},m={on:p,emit:n,get:d,listeners:l,context:t,buffer:v};return m}function i(){return new r}var a="nr@context",u=e("gos"),c=e(2),f={},s={},p=t.exports=o();p.backlog=f},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!w++){var e=v.info=NREUM.info,t=s.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&t){c(l,function(t,n){e[t]||(e[t]=n)});var n="https"===p.split(":")[0]||e.sslForHttp;v.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=v.proto+e.agent,t.parentNode.insertBefore(r,t)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=window,s=f.document;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:f.XMLHttpRequest,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},e(1);var p=""+location,l={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-918.min.js"},d=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),v=t.exports={offset:a(),origin:p,features:{},xhrWrappable:d};s.addEventListener?(s.addEventListener("DOMContentLoaded",i,!1),f.addEventListener("load",r,!1)):(s.attachEvent("onreadystatechange",o),f.attachEvent("onload",r)),u("mark",["firstbyte",a()],null,"api");var w=0},{}]},{},["loader"]);</script><link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet" type="text/css" /><title>Number Memory Test</title><meta content="number memory test, verbal short term memory, verbal memory game, memorization" name="keywords" /><meta content="Number Memory Test: How many numbers can you remember?" name="description" /><meta content="Human Benchmark" propery="og:site_name" /><meta content="game" propery="og:type" /><meta content="Number Memory Test" propery="og:title" /><meta content="Number Memory Test: How many numbers can you remember?" propery="og:description" /><meta content="http://www.humanbenchmark.com/tests/number-memory" propery="og:url" /><meta content="width=device-width, initial-scale=1.0" name="viewport" /><link rel="stylesheet" media="screen" href="../../../../web/memory/application.css" /><meta name="csrf-param" content="authenticity_token" />
  <meta name="csrf-token" content="KPiEgpVAWA+UoLKcHZyel7TpIAXieHO39ZPtRvh+ALYiOLV4jDsVsy5AawihKhz1z0Icfvw3yC1Qv4jJ5Ru14A==" /><script src="../../../../web/memory/application.js"></script><style type="text/css">.ng-cloak { display: none; }</style></head></html>

  <body ng-app="hb" ng-controller="MainCtrl">
  <div class="sidebar-overlay" ng-class="{active: sidebar.active}" ng-click="sidebar.toggle()">
    <div class="sidebar">
      <div class="user"></div>
    </div>
  </div><div class="hero"><div class="inner"><div class="test-wrapper"><div class="number-memory-test shared-test ng-cloak" hb-refocusable="" ng-class="test.getMainClass()" ng-controller="NumberMemoryCtrl as test" ng-keydown="test.onKeydown($event)" tabindex="1"><div ng-switch="test.state"><div class="splash" ng-switch-when="SPLASH"><div class="title"><?php echo Html::img('@web/memory/numbers.png', ['width'=>'100']) ?><h1>Number Memory Test</h1></div><div class="test-main instructions"><p class="can-collapse">The average person can remember 7 numbers at once.</p><p class="can-collapse">What's the longest number you can memorize?</p><div><a class="button start" ng-click="test.nextQuestion()">START</a></div></div></div><div class="question" ng-switch-when="QUESTION"><div class="test-center"><div class="big-number" ng-bind="test.currentAnswer"></div><div class="number-timer-container"><div class="number-timer-bar" hb-timer-bar="test.getDisplayTimer()"></div></div></div></div><div class="prompt" ng-switch-when="PROMPT"><form class="test-center" ng-submit="test.submitAnswer(userAnswer); $emit(&#39;releasedFocus&#39;)"><div class="call-to-action">What was the number?</div><div><input hb-focus="" ng-model="userAnswer" pattern="[0-9]*" type="text" /></div><div class="save-hint faint-label"><span>Press enter to submit</span>&nbsp;</div></form></div><div class="showanswer test-center" ng-switch-when="SHOWANSWER"><div class="answers"><div class="actual-answer" hb-fade="0"><div class="label faint-label">Number</div><div class="number" ng-bind="test.currentAnswer"></div></div><div class="user-answer" hb-fade="300"><div class="label faint-label">Your answer</div><div class="number"><span ng-bind="digit" ng-class="{wrong: !test.wasDigitRight($index)}" ng-repeat="digit in test.userAnswer track by $index"></span></div></div><div class="level" hb-fade="600"><span>Level</span> <span class="number" ng-bind="test.level"></span></div></div><div hb-fade="900" ng-switch="test.userAnswer == test.currentAnswer"><div ng-switch-when="true"><a class="button next-question" ng-click="test.nextQuestion()">NEXT</a></div><div ng-switch-when="false"><a class="button next-question" ng-click="test.save()">SAVE SCORE</a></div></div></div><div class="gameover" ng-switch-when="GAMEOVER"><p>game over dogg</p></div></div></div></div><div class="ga">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- v2 banner -->

  </div>
  </div></div>
  </body>


  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>






