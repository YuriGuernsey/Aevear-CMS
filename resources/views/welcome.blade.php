@extends('layouts.app')

@section('content')

<header>
<script async src="https://cdn.splitbee.io/sb.js"></script>	<ul>
		<li><a href='/'>Home</a></li>
		<li><a href='/'>About us</a></li>
	</ul>
	<h1><a href='/'>Aevear</a></h1>
	<ul>
		<li><a href='/'>Our Work</a></li>
		<li><a href='/'>News</a></li>
		<li><a href='/'>Let's talk</a></li>
	</ul>
</header>
<div class='hero'>
  <div class='info'>
    <h2>Get performance-driven and beautiful <a href="/services">
      <div class="mask">
          <span data-show>Websites</span>
        <span>Mobile Applications</span>
        <span>Videos</span>
        <span>Google Sheets</span>
      </div>
        </a>
        for half the cost.
    </h2>

    <div class='ctaContainer'>
        <button class='cta2'>Select Service</button><button class='cta'>Look At Templates</button>
    </div>
  </div>
</div>


<div id="loader" class='loading'>
  <div class='loading-text'>
		<h1>AEVEAR</h1>
		<span class="loading-text-words">L</span>
		<span class="loading-text-words">O</span>
		<span class="loading-text-words">A</span>
		<span class="loading-text-words">D</span>
		<span class="loading-text-words">I</span>
		<span class="loading-text-words">N</span>
		<span class="loading-text-words">G</span>
	</div>
	<div class='progress'>
		<div style="width:0%;"</div>
	</div>
</div>
  <style>
  :root {
    --offset: 6px;
  }
  *{
    margin: 0 auto;
    padding: 0;
    box-sizing:border-box;
    font-family: Roboto,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
    -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      -o-tab-size: 4;
      tab-size: 4;
  }
  header{
      display: flex;
      justify-content: space-between;
      min-height: 80px;
      align-items: center;
      background: #fff;
      box-shadow: 0 5px 10px 10px rgb(0 0 0 / 5%);
     
      width: 100%;
      z-index: 10;
  }
  
  header li{
    display: inline-block;
    margin: 0 10px;
  }
  
  
  body h2, .sub-heading{
    /*Font I Like */
  
    font-family: Roboto,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
        -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      -o-tab-size: 4;
      tab-size: 4;
    font-weight: 700;
        font-size: 3rem;
      line-height: 1;
    margin: 0;
  }
  
  h1{
    text-transform: uppercase;
  }
  a{
      text-decoration: none;
  }
  
  h1 a{
    color: #030303;
  }
  
  .sub-heading{
        color: rgb(156 163 175/1);
       font-size: 1.3rem;
    margin-top: 1rem;
      max-width: 500px;
  }
  header li a {
    color: black;
    text-transform: uppercase;
    font-weight: 700;
    position: relative;
    z-index: 1;
  }
  
  header li a:hover::before{
    width: 100%
  }
  
  header li a:before {
  left: -5px;
      content: '';
      width: 0;
      height: 100%;
      background: rgb(255 240 0 / 90%);
      position: absolute;
      z-index: -1;
      padding: 5px;
      top: -5px;
    transition: width 0.5s ease;
  }
  .sub-heading{
    position:relative;
  z-index:1;
  }
  .sub-heading a{
    color: #000;
    z-index: -1;
    position:relative;
    display: inline-block;
  }
  .sub-heading a:before{
    left: -5px;
      content: '';
      width: 100%;
      height: 100%;
      background: rgb(255 240 0 / 90%);
      position: absolute;
      z-index: -1;
      padding: 3px 5px;
      top: -3px;
    transition: width 0.5s ease;
  }
  
  .hero {
  
       width: 100%;
      min-height: 350px;
      background: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80) #000;
      background-position: 50vw -190px;
      background-size: 65% auto;
      background-repeat: no-repeat;
      overflow: hidden;
      background-blend-mode: luminosity;
  }
  
  .info {
    
          width: 50%;
      background: white;
      margin: 0;
      height: 350px;
      display: grid;
      place-content: center;
    position: relative;
    z-index: 2;
  }
  
  .info::after, .info::before{
      content: '';
      width: 60%;
      height: 101%;
      display: block;
      position: absolute;
      right: -15%;
      background: #fff;
      clip-path: polygon(0 0%, 100% 0%, 75% 100%, 0% 100%);
      z-index: -1;
  }
  .info h2, .info p, .info .ctaContainer {
      max-width: 400px;
        font-size: 2.7em;
  }
  
  .info::before{
    right: -17%;
    background: rgb(255 255 255 / 22%);;
  }
  
  .ctaContainer{
    margin: 0;
  }
  
  /* CSS */
  .cta {
    background: #fff;
    backface-visibility: hidden;
    border-radius: .375rem;
    border-style: solid;
    border-width: .125rem;
    box-sizing: border-box;
    color: #212121;
    cursor: pointer;
    display: inline-block;
    font-family: Circular,Helvetica,sans-serif;
    font-size: 1.125rem;
    font-weight: 700;
    letter-spacing: -.01em;
    line-height: 1.3;
    padding: .875rem 1.125rem;
    position: relative;
    text-align: left;
    text-decoration: none;
    transform: translateZ(0) scale(1);
    transition: transform .2s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
        margin: 0;
      width: fit-content;
      margin-top: 20px;
    margin-left: 15px;
  }
  
  .cta:not(:disabled):hover {
    transform: scale(1.05);
  }
  
  .cta:not(:disabled):hover:active {
    transform: scale(1.05) translateY(.125rem);
  }
  
  .cta:focus {
    outline: 0 solid transparent;
  }
  
  .cta:focus:before {
    content: "";
    left: calc(-1*.375rem);
    pointer-events: none;
    position: absolute;
    top: calc(-1*.375rem);
    transition: border-radius;
    user-select: none;
  }
  
  .cta:focus:not(:focus-visible) {
    outline: 0 solid transparent;
  }
  
  .cta:focus:not(:focus-visible):before {
    border-width: 0;
  }
  
  .cta:not(:disabled):active {
    transform: translateY(.125rem);
  }
  
  
  
  
  /* CSS */
  .cta2 {
    background: #fff000;
    backface-visibility: hidden;
    border-radius: .375rem;
    border-style: solid;
    border-width: .125rem;
    box-sizing: border-box;
    color: #212121;
    cursor: pointer;
    display: inline-block;
    font-family: Circular,Helvetica,sans-serif;
    font-size: 1.125rem;
    font-weight: 700;
    letter-spacing: -.01em;
    line-height: 1.3;
    padding: .875rem 1.125rem;
    position: relative;
    text-align: left;
    text-decoration: none;
    transform: translateZ(0) scale(1);
    transition: transform .2s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
        margin: 0;
      width: fit-content;
      margin-top: 20px;
  }
  
  .cta2:not(:disabled):hover {
    transform: scale(1.05);
  }
  
  .cta2:not(:disabled):hover:active {
    transform: scale(1.05) translateY(.125rem);
  }
  
  .cta2:focus {
    outline: 0 solid transparent;
  }
  
  .cta2:focus:before {
    content: "";
    left: calc(-1*.375rem);
    pointer-events: none;
    position: absolute;
    top: calc(-1*.375rem);
    transition: border-radius;
    user-select: none;
  }
  
  .cta2:focus:not(:focus-visible) {
    outline: 0 solid transparent;
  }
  
  .cta2:focus:not(:focus-visible):before {
    border-width: 0;
  }
  
  .cta2:not(:disabled):active {
    transform: translateY(.125rem);
  }
  
  @keyframes blinker{
    0%{opacity: 0;}
    50%{
      opacity: 1;
    }
    100%{
      opacity: 0;
    }
  }
  
  
  .subtitle {
    font-size: 25px;
  
  }
  
  .mask {
    height: 45px;
    position: relative;
    overflow: hidden;
    margin-top: var(--offset);
  }
  
  .mask span {
    display: block;
    box-sizing: border-box;
    position: absolute;
    top: 50px;
    padding-bottom: var(--offset);
    
    background-size: 100% 100%;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    background-repeat: no-repeat;
  }
  
  .mask span[data-show] {
    transform: translateY(-100%);
    transition: .5s transform ease-in-out;
  }
  
  .mask span[data-up] {
    transform: translateY(-200%);
    transition: .5s transform ease-in-out;
  }
  
  .mask span:nth-child(1) {
    background-image: linear-gradient(45deg, #0ecffe 50%, #07a6f1);
  }
  
  .mask span:nth-child(2) {
    background-image: linear-gradient(45deg, #18e198 50%, #0ec15d);
  }
  
  .mask span:nth-child(3) {
    background-image: linear-gradient(45deg, #8a7cfb 50%, #633e9c);
  }
  
  .mask span:nth-child(4) {
    background-image: linear-gradient(45deg, #fa7671 50%, #f45f7f);
  }


#loader h1{
	text-transform: uppercase;
	color: #030303;
	font-family: Roboto,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
	margin: 0;
	font-size: 8rem;
}

.loading{
	position: fixed;
	top: 0; 
	left: 0;
	width:100%;
	height: 100%;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Cg fill='%23030303' fill-opacity='1'%3E%3Cpath fill-rule='evenodd' d='M11 0l5 20H6l5-20zm42 31a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM0 72h40v4H0v-4zm0-8h31v4H0v-4zm20-16h20v4H20v-4zM0 56h40v4H0v-4zm63-25a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM53 41a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-30 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-28-8a5 5 0 0 0-10 0h10zm10 0a5 5 0 0 1-10 0h10zM56 5a5 5 0 0 0-10 0h10zm10 0a5 5 0 0 1-10 0h10zm-3 46a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM21 0l5 20H16l5-20zm43 64v-4h-4v4h-4v4h4v4h4v-4h4v-4h-4zM36 13h4v4h-4v-4zm4 4h4v4h-4v-4zm-4 4h4v4h-4v-4zm8-8h4v4h-4v-4z'/%3E%3C/g%3E%3C/svg%3E");
    background-color: rgb(255 240 0 / 100%);
    background-position: bottom right;
    background-size: 550px;
    background-blend-mode: soft-light;
	z-index: 9999;
}

.loading-text{
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right:0; 
	margin: auto;
	text-align: center;
	width: 100%;
	height: 300px;
   line-height: 130px;
}

.loading-text span{
	display: inline-block;
	margin: 0 5px;
	color: #030303;
	/*font-family: "Quattrocento Sans", sans-serif;*/
	font-family: Roboto,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
}

.loading-text span:nth-child(2){
	filter: blur(0px);
	-webkit-animation: blur-text 1.5s 0s infinite linear alternate;
	animation: blur-text 1.5s 0s infinite linear alternate;
}

.loading-text span:nth-child(3){
	filter: blur(0px);
	-webkit-animation: blur-text 1.5s 0.2s infinite linear alternate;
	animation: blur-text 1.5s 0.2s infinite linear alternate;
}

.loading-text span:nth-child(4){
	filter: blur(0px);
	-webkit-animation: blur-text 1.5s 0.4s infinite linear alternate;
	animation: blur-text 1.5s 0.4s infinite linear alternate;
}

.loading-text span:nth-child(5){
	filter: blur(0px);
	-webkit-animation: blur-text 1.5s 0.6s infinite linear alternate;
	animation: blur-text 1.5s 0.6s infinite linear alternate;
}

.loading-text span:nth-child(6){
	filter: blur(0px);
	-webkit-animation: blur-text 1.5s 0.8s infinite linear alternate;
	animation: blur-text 1.5s 0.8s infinite linear alternate;
}

.loading-text span:nth-child(7){
	filter: blur(0px);
	-webkit-animation: blur-text 1.5s 1s infinite linear alternate;
	animation: blur-text 1.5s 1s infinite linear alternate;
}

.loading-text span:nth-child(8){
	filter: blur(0px);
	-webkit-animation: blur-text 1.5s 1.2s infinite linear alternate;
	animation: blur-text 1.5s 1.2s infinite linear alternate;
}

@keyframes blur-text{
	0%{
		filter: blur(0px);
	}
	100%{
		filter: blur(4px);
	}
}
@-webkit-keyframes blur-text{
	0%{
		filter: blur(0px);
	}
	100%{
		filter: blur(4px);
	}
}

.progress{
	width: 200px;
	height: 5px;
	border-radius: 6px;
	background: rgb(3 3 3 / 40%);
	position: absolute;
	left: 0;
	right: 0;
	top:60%;
	margin: auto;
	margin-top: 20px;
}

.progress > div{
	height: 100%;
	border-radius: 6px;
	background: rgb(3 3 3 / 60%);
	transition: width 200ms;
}

  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
  var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap:after {content: ''; width: 2px; display: inline-block; border-right: 2px solid #000; height: 16px; vertical-align:middle; opacity: 0;transition: opacity 1s ease; animation: blinker 0.8s ease infinite; margin-top: -3px}";
    document.body.appendChild(css);
};

setInterval(function () {
const show = document.querySelector('span[data-show]')
const next = show.nextElementSibling || document.querySelector('span:first-child')
const up = document.querySelector('span[data-up]')

if (up) {
up.removeAttribute('data-up')
}

show.removeAttribute('data-show')
show.setAttribute('data-up', '')

next.setAttribute('data-show', '')
}, 3000)

$("#loader").fadeIn();

var count = 0;
window.onload = function(){
	var loadingInterval = setInterval(function() {
    var $badge = $('.progress > div');
    count += 1.8;
    $badge.css('width', count.toFixed(2));

}, 50);
    setTimeout(function(){
      $("#loader").fadeOut();
			clearInterval(loadingInterval);
    },5000);
  };


  </script>
  @endsection