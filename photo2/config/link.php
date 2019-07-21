<?php //css file
?>

<!-- links for css for font awesome  -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--bootstrap link-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jquery plugins -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!--fag plugins-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }




  /*Counsidere sharing with friends if you like it :) */

  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }

  body {
    background-color: #0b0c11;
  }


  .nav-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    font-family: "Trebuchet MS", Arial;
    top: 30px;
  }


  .nav-wrapper nav {
    position: absolute;
    top: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .navigation {
    max-width: 500px;
    border-radius: 8px;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
    background-color: #fff;
    padding-right: 30px;
    line-height: 3;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
  }

  .nav-wrapper ul {
    display: flex;
    justify-content: space-between;
    list-style: none;
    width: 0;
    overflow: hidden;
    transition: .4s cubic-bezier(.77, 0, .18, 1);
  }

  .nav-wrapper.active ul {
    width: 420px;
    margin-right: 20px;
  }

  a {
    color: #888;
    text-decoration: none;
    transition: .3s;
  }

  a:hover {
    color: #3C9DFB;
  }

  .nav-toogler {
    position: relative;
    display: inline-block;
    width: 40px;
    height: 48px;
    padding: 14px 5px;
    cursor: pointer;
  }

  .nav-wrapper:not(.active) .nav-toogler {
    margin-left: -10px;
  }

  .nav-toogler::before,
  .nav-toogler::after {
    content: '';
    position: relative;
    display: block;
    width: 30px;
    height: 3px;
    background-color: #3C9DFB;
    transition: .4s cubic-bezier(.77, 0, .18, 1);
  }

  .nav-toogler::after {
    margin-top: 10px;
  }

  .nav-wrapper.active .nav-toogler::before,
  .nav-wrapper.active .nav-toogler::after {
    position: absolute;
    top: 50%;
    background-color: black;
    transform: rotate(135deg);
  }

  .nav-wrapper.active .nav-toogler::after {
    transform: rotate(-135deg);
    margin-top: 0;
  }

  .ltr1 {
    font-size: 25px;

    font-weight: bold;

    color: whitesmoke;

    position: relative;

    right: 585px;

    top: 14px;

  }

  .aboutphoto {
    margin-top: 50px;
  }

  .colpad1 {
    color: white;
    /* margin-top: 50px; */
  }

  .colpad2 {

    /* margin-top: 50px; */
  }

  .fapad {
    display: inline-block;
    width: 40px;
    height: 40px;
    text-align: center;

    font-size: 16px;
    line-height: 40px;
    background: #303342;
    color: #ffffff;
    border-radius: 2px;
    margin: 0 20px 0 0;
  }

  .fapad h6 {
    display: inline-block;
    vertical-align: middle;
    margin: 0;
    position: relative;
    bottom: 40px;
    left: 47px;
  }

  /*for image grid*/


  .clearfix:before,
  .clearfix:after {
    content: " ";
    display: table;
  }

  .clearfix:after {
    clear: both;
  }

  .clearfix {
    *zoom: 1;
  }

  .imagegrid1 {
    text-align: center;
    margin-top: 45px;
    color: aliceblue;

  }

  .imagegrid2 {
    text-align: center;
    margin-top: 30px;
    color: aliceblue;

  }





  /* Header Style */

  .codrops-top {
    line-height: 24px;
    font-size: 11px;
    background: #fff;
    background: rgba(255, 255, 255, 0.5);
    text-transform: uppercase;
    z-index: 9999;
    position: relative;
    box-shadow: 1px 0px 2px rgba(0, 0, 0, 0.2);
  }

  .codrops-top a {
    padding: 0px 10px;
    letter-spacing: 1px;
    color: #333;
    display: inline-block;
  }

  .codrops-top a:hover {
    background: rgba(255, 255, 255, 0.8);
    color: #000;
  }

  .codrops-top span.right {
    float: right;
  }

  .codrops-top span.right a {
    float: left;
    display: block;
  }

  /*for image gird */
  .og-grid {
    list-style: none;
    padding: 20px 0;
    margin: 0 auto;
    text-align: center;
    width: 100%;
  }

  .og-grid li {
    display: inline-block;
    margin: 10px 5px 0 5px;
    vertical-align: top;
    height: 250px;
  }

  .og-grid li>a,
  .og-grid li>a img {
    border: none;
    outline: none;
    display: block;
    position: relative;
  }

  .og-grid li.og-expanded>a::after {
    top: auto;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #ddd;
    border-width: 15px;
    left: 50%;
    margin: -20px 0 0 -15px;
  }

  .og-expander {
    position: absolute;
    background: #ddd;
    top: auto;
    left: 0;
    width: 100%;
    margin-top: 10px;
    text-align: left;
    height: 0;
    overflow: hidden;
  }

  .og-expander-inner {
    padding: 50px 30px;
    height: 100%;
  }

  .og-close {
    position: absolute;
    width: 40px;
    height: 40px;
    top: 20px;
    right: 20px;
    cursor: pointer;
  }

  .og-close::before,
  .og-close::after {
    content: '';
    position: absolute;
    width: 100%;
    top: 50%;
    height: 1px;
    background: #888;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  .og-close::after {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }

  .og-close:hover::before,
  .og-close:hover::after {
    background: #333;
  }

  .og-fullimg,
  .og-details {
    width: 50%;
    float: left;
    height: 100%;
    overflow: hidden;
    position: relative;
  }

  .og-details {
    padding: 0 40px 0 20px;
  }

  .og-fullimg {
    text-align: center;
  }

  .og-fullimg img {
    display: inline-block;
    max-height: 100%;
    max-width: 100%;
  }

  .og-details h3 {
    font-weight: 300;
    font-size: 52px;
    padding: 40px 0 10px;
    margin-bottom: 10px;
  }

  .og-details p {
    font-weight: 400;
    font-size: 16px;
    line-height: 22px;
    color: #999;
  }

  .og-details a {
    font-weight: 700;
    font-size: 16px;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 10px 20px;
    border: 3px solid #333;
    display: inline-block;
    margin: 30px 0 0;
    outline: none;
  }

  .og-details a::before {
    content: '\2192';
    display: inline-block;
    margin-right: 10px;
  }

  .og-details a:hover {
    border-color: #999;
    color: #999;
  }

  .og-loading {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: #ddd;
    box-shadow: 0 0 1px #ccc, 15px 30px 1px #ccc, -15px 30px 1px #ccc;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -25px 0 0 -25px;
    -webkit-animation: loader 0.5s infinite ease-in-out both;
    -moz-animation: loader 0.5s infinite ease-in-out both;
    animation: loader 0.5s infinite ease-in-out both;
  }

  @-webkit-keyframes loader {
    0% {
      background: #ddd;
    }

    33% {
      background: #ccc;
      box-shadow: 0 0 1px #ccc, 15px 30px 1px #ccc, -15px 30px 1px #ddd;
    }

    66% {
      background: #ccc;
      box-shadow: 0 0 1px #ccc, 15px 30px 1px #ddd, -15px 30px 1px #ccc;
    }
  }

  @-moz-keyframes loader {
    0% {
      background: #ddd;
    }

    33% {
      background: #ccc;
      box-shadow: 0 0 1px #ccc, 15px 30px 1px #ccc, -15px 30px 1px #ddd;
    }

    66% {
      background: #ccc;
      box-shadow: 0 0 1px #ccc, 15px 30px 1px #ddd, -15px 30px 1px #ccc;
    }
  }

  @keyframes loader {
    0% {
      background: #ddd;
    }

    33% {
      background: #ccc;
      box-shadow: 0 0 1px #ccc, 15px 30px 1px #ccc, -15px 30px 1px #ddd;
    }

    66% {
      background: #ccc;
      box-shadow: 0 0 1px #ccc, 15px 30px 1px #ddd, -15px 30px 1px #ccc;
    }
  }

  @media screen and (max-width: 830px) {

    .og-expander h3 {
      font-size: 32px;
    }

    .og-expander p {
      font-size: 13px;
    }

    .og-expander a {
      font-size: 12px;
    }

  }

  @media screen and (max-width: 650px) {

    .og-fullimg {
      display: none;
    }

    .og-details {
      float: none;
      width: 100%;
    }

  }


  /*our services*/
  .fapad1 {
    position: relative;
    left: 166px;
  }

  .service_backbone {
    color: white;
  }

  .hpad1 {
    text-align: center;
  }


  /*our team*/
  .caption ul li {

    display: inline-block;

  }

  .caption ul li {

    width: 28px;
    height: 28px;
    display: inline-block;
    margin: 0 3px;
    -webkit-border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;

  }

  .uipad {
    position: relative;
    right: 27px;
  }

  .tittle1 {
    color:white;
  }

  .team-text{
    color:white;
  }

  /*client testomonials*/
  .gal-img img {
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
    padding: 10px;
}

.gal-img:hover.gal-img img {
    -webkit-box-shadow: 0 20px 40px -10px rgba(0, 0, 0, .3);
    -moz-box-shadow: 0 20px 40px -10px rgba(0, 0, 0, .3);
    box-shadow: 0 20px 40px -10px rgba(0, 0, 0, .3);
}

/* popup */
.pop-overlay {
    position: fixed;
    top: 0px;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 0ms;
    visibility: hidden;
    opacity: 0;
    z-index: 999;
}

.pop-overlay:target {
    visibility: visible;
    opacity: 1;
}

.popup {
    background: #fff;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    -ms-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    max-width: 550px;
    position: relative;
    margin: 8em auto;
    padding: 3em 2em 2em;
}

.popup .close {
    position: absolute;
    top: 5px;
    right: 15px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #000;
}

.popup .close:hover {
    color: #e82034;
}

.popup p {
    color: #252323;
    text-align: center;
}

/* //popup */
/* //gallery */
/*//client testimonials*/



  
 </style>