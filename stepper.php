<?php include('header.php')?>
<style>
   #image-container {
   margin-top: 20px;
   text-align: left;
   }
   #image-container img {
   max-width: 100%;
   height: auto;
   }
   #options {
   margin-top: 20px;
   }
   #kitchen-layout {
   margin-bottom: 20px;
   }
   #next-btn, #see-prize-btn, #submit-button, #send-receipt-btn, #call-btn {
   background-color: #021152;
   color: #fff;
   padding: 10px 50px 8px 50px;
   border: none;
   margin: 5px;
   border-radius: 50px; font-weight: 600;
   cursor: pointer;
   text-transform: uppercase;    letter-spacing: 0.6px;
   font-size: 16px;
   }
   .top-banner img {
   width: auto;
   }
   span.rupees-symball {
   font-size: 20px;
   vertical-align: middle;
   margin-right: 3px;
   }
   #next-btn:hover, #see-prize-btn:hover, #submit-button:hover, #send-receipt-btn:hover {
   background-color: #000;
   }
   /* Add styling for the back button */
   #back-btn, #reset-btn {
   background-color: #ccc;
   color: #616161;
   padding: 10px 50px 8px 50px;
   border: none;
   margin: 5px;
   border-radius: 50px; font-weight: 600;
   cursor: pointer;
   text-transform: uppercase;
   font-size: 16px;
   }
   #back-btn:hover, #reset-btn:hover {
   background-color: #021152; color:#fff;
   }
   /* Style for the blurred total price */
   #total-price-blurred,
   #estimated-monthly-payment-blurred {
   filter: blur(8px);
   transition: filter 0.3s ease;     font-size: 40px;
   line-height: normal;
   vertical-align: top;
   }
   /* Popup form styles */
   .popup-la {
   display: none;
   position: fixed;
   z-index: 100;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgba(0, 0, 0, 0.5);
   }
   .popup-content-la {
   background-color: #fff;
   margin: 0% auto;
   padding: 20px;
   border: 1px solid #888;
   width: 80%;
   max-width: 600px;    position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   }
   #pop-foo{ text-align: center; }
   /* Popup form styles */
   .popup {
   display: none;
   position: fixed;
   z-index: 100;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgba(0, 0, 0, 0.5);
   }
   .popup-content {
   background-color: #fff;
   margin: 0% auto;
   padding: 20px;
   border: 1px solid #888;
   width: 80%;
   max-width: 600px; position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   }
   .close-btn {
   color: #aaa;
   float: right;
   font-size: 28px;
   font-weight: bold;
   position: absolute;
   right: 6px;
   top: 0;
   }
   .close-btn:hover,
   .close-btn:focus {
   color: black;
   text-decoration: none;
   cursor: pointer;
   }
   /* Style for the blurred total price */
   #total-price-blurred,
   #estimated-monthly-payment-blurred {
   filter: blur(8px);
   transition: filter 0.3s ease;
   }
   /* Popup form styles */
   .popup {
   display: none;
   position: fixed;
   z-index: 100;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgba(0, 0, 0, 0.8);
   }
   .popup-content {
   background-color: #fff;
   margin: 15% auto;
   padding: 20px;
   border: 1px solid #888;
   width: 80%;
   max-width: 600px; position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   }
   .close-btn {
   color: #aaa;
   float: right;
   font-size: 28px;
   font-weight: bold;
   }
   .close-btn:hover,
   .close-btn:focus {
   color: black;
   text-decoration: none;
   cursor: pointer;
   }
   #prize-form label {
   display: block;
   margin-bottom: 5px;
   }
   #prize-form input {
   width: 100%;
   padding: 8px;
   box-sizing: border-box;
   }
   input#name {
   text-transform: capitalize;
   }
   /* Error message styles */
   .error-message {
   color: red;
   font-size: 12px;
   display: none;
   position: absolute;
   left: 0;
   bottom: 3px; text-align:left;
   }
   #send-receipt-btn {
   display: inline-block; /* Ensure the button is displayed */
   /* Additional styling as needed */
   }
   /* Popup Background */
   .popup {
   display: none; /* Hidden by default */
   position: fixed; /* Stay in place */
   z-index: 999; /* Sit on top */
   left: 0;
   top: 0;
   width: 100%; /* Full width */
   height: 100%; /* Full height */
   overflow: auto; /* Enable scroll if needed */
   background-color: rgba(0, 0, 0, 0.8); /* Black w/ opacity */
   }
   /* Popup Content */
   .popup-content {
   background-color: #fefefe;
   margin: 0% auto; /* 15% from the top and centered */
   padding: 20px;
   border: 1px solid #888;
   width: 80%; /* Could be more or less, depending on screen size */
   max-width: 500px; /* Max width */
   border-radius: 10px;
   box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   }
   /* Close Button */
   .close-btn {
   color: #aaa;
   float: right;
   font-size: 28px;
   font-weight: bold;
   }
   .close-btn:hover,
   .close-btn:focus {
   color: black;
   text-decoration: none;
   cursor: pointer;
   }
   /* Form Styles */
   #prize-form {
   display: flex;
   flex-direction: column;
   }
   .form-group {
   margin-bottom: 15px;
   }
   label {
   font-weight: bold;
   margin-bottom: 5px;
   display: inline-block; vertical-align: top;
   }
   p.es-para {
   font-size: 13px;
   text-align: left;
   font-weight: 400;
   margin-top: 10px;
   }
   input[type="text"],
   input[type="email"] {
   width: 100%;
   padding: 10px;
   margin: 0;
   display: inline-block;
   border: 1px solid #ccc;
   border-radius: 5px;
   box-sizing: border-box;
   font-size: 16px;
   }
   .form-field {
   padding-bottom: 21px;
   position: relative;
   }
   /* Error Message */
   .error-message {
   display: none;
   }
   #breadcrumb-container {
   margin-bottom: 20px;
   text-align: center;
   /* max-width: 295px; */
   margin: 0 auto;
   background: #ffffff;
   height: 41px;
   position: sticky;
   top: 56px;
   z-index: 9;
   padding-top: 70px;
   padding-bottom: 100px;
   width: 100%;
   }
   #breadcrumb {
   list-style: none;
   display: flex;
   justify-content: center;
   padding: 0;
   margin: 0;    margin-bottom: 50px;
   }
   #breadcrumb li {
   display: flex;
   align-items: center;
   padding: 3px 50px;
   position: relative;
   cursor: pointer; z-index: 9;
   font-weight: bold;
   color: #6c757d; /* Default grey color for non-active steps */
   }
   #breadcrumb li:last-child {
   padding-left: 0;
   padding-right: 0;
   }
   #breadcrumb li:last-child span.top-s-name{left: -27px;}
   #breadcrumb li::after {
   content: '';
   width: 100%;
   height: 2px;
   background-color: #6c757d; /* Default grey color for non-active steps */
   position: absolute;
   left: 0%;
   top: 11px;
   transform: translateX(0%);
   }
   @keyframes border-scale {
   from {
   width: 0px;
   }
   to {
   width: 100px;
   }
   }
   #breadcrumb li.active {
   color: #021152; 
   }
   #breadcrumb li.active:before{
   content: '';
   color: #f87c57;
   font-size: 14px;
   margin-right: 0px;
   background: radial-gradient(circle, rgba(255, 89, 0, 2) 19%, rgba(255, 89, 0, 2) 22%, rgba(255, 255, 255, 1) 29%, rgba(255, 255, 255, 4) 52%, rgba(255, 89, 0, 1) 58%, rgba(255, 89, 0, 2) 89%);
   animation: fadeIn 0.6s ease-in-out;
   }
   @keyframes fadeIn {
   from {
   opacity: 0.7;
   }
   to {
   opacity: 1;
   }
   }
   #breadcrumb li::before {
   content: '';
   background:radial-gradient(circle, rgba(109 117 125) 19%, rgba(109 117 125) 22%, rgb(255 255 255 / 0%) 29%, rgb(255 255 255 / 0%) 52%, rgb(255 255 255 / 0%) 58%, rgb(255 255 255 / 0%) 89%);
   width: 25px;
   height: 25px;
   position: absolute;
   left: -10px;
   top: 0;
   bottom: 0;
   vertical-align: middle;
   border-radius: 50px;
   z-index: 1; 
   }
   #breadcrumb li.active::after {
   background-color: #777777;
   }
   #breadcrumb li.completed {
   color: #021152;  /* Purple color for completed steps */
   }
   ol#breadcrumb { position: relative;}
   ol#breadcrumb:after {
   content: '';
   background: #6c757d;
   height: 2px;
   width: 96%; max-width: 400px;
   position: absolute;
   bottom: -7px;
   }
   #breadcrumb li.completed::after {
   background-color:#021152;  width: 100%; /* Purple color for completed steps */animation: border-scale 0.5s;
   }
   #breadcrumb li:last-child::after {
   display: none;
   }
   #breadcrumb li.completed::before {
   content: '';
   color: #f87c57;
   font-size: 14px;
   margin-right: 0px;
   background: radial-gradient(circle, rgba(255, 89, 0, 2) 19%, rgba(255, 89, 0, 2) 22%, rgb(255 255 255 / 0%) 29%, rgb(255 255 255 / 0%) 52%, rgb(255 255 255 / 0%) 58%, rgb(255 255 255 / 0%) 89%);
   }
   .otp-container {
   display: none;
   margin-top: 10px;
   }
   .top-banner{ text-align:center;  padding: 80px 0;  background: #273c59; position:relative;overflow: hidden;
   @media screen and (max-width: 600px) { 
   padding: 40px 0;
   }
   }
   .top-banner { 
   h1 {
   margin: 0 auto;
   width: 90%;
   padding-left: 15%;
   max-width: 1201px;
   text-align: left;
   font-weight: 600;
   font-size: 39px;
   margin-top: 5px;
   color: #fff;
   text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.3);
   z-index: 1;
   position: relative;
   @media screen and (max-width: 900px) { 
   font-size: 27px;
   padding:0 5%;  padding-left: 2%;
   }
   }
   }
   span.yellow-color {
   color: #eeda7d;
   }
   span.font-small{  font-size: 34px;
   @media screen and (max-width: 600px) {
   font-size: 22px; line-height: 30px; display: block;
   }
   }
   .top-banner:after {
   content: '';
   background: url(../images/shilpa.png) no-repeat bottom right;
   position: absolute;
   max-width: 191px;
   height: 100%;
   right: 2%;
   top: 0;
   width: 70%;
   @media screen and (max-width: 600px) { 
   right: -2%;    background-size: 130px;
   }
   }
   .top-banner:before {
   content: '';
   background: url(../images/banner-kitchen.png) no-repeat bottom right;
   position: absolute;
   max-width: 818px;
   height: 100%;
   left: 0;
   top: 0;
   width: 75%;
   }
   .text-center{ text-align:center;}
   .select-hdk input[type="radio"] {
   display: none;
   }
   /* Custom radio button styles */
   .select-hdk .radio-button-image {
   display: inline-block;
   width: 100%; /* Adjust width as needed */max-width: 248px;
   height: auto; /* Adjust height as needed */
   background-color: #efefef; /* Background color */
   border: 1px solid #e0e0e0; /* Border */
   border-radius: 10px;
   overflow: hidden;
   cursor: pointer;
   position: relative;
   }
   .select-hdk .radio-button-image img { background: #fff;
   }
   /* Check state styling */
   .select-hdk input[type="radio"]:checked + .radio-button-image {
   border: 1px solid #021152;  /* Border color on check */
   color: #fff;
   background-color: #021152; 
   background-size: 150% 150%;
   animation: gradient-animation 5s ease infinite;
   }
   .aco {
   p{
   font-size: 13px;
   text-align: left;
   font-weight: 400;
   padding: 0% 5%;
   line-height: normal;
   }
   .accordion
   {
   padding: 5%;
   font-weight: 300;
   ul{ font-size: 13px;            margin-left: 15px;
   li{
   list-style: disc;                font-weight: 600;
   }
   }
   }
   }
   .aco p {
   font-size: 13px;
   text-align: left;
   font-weight: 400;
   padding: 0% 5%;
   line-height: normal;
   }
   .aco ul{ font-size: 13px;  margin-left: 15px;  }
   .aco li{   list-style: disc;    font-weight: 600;  }
   .aco .accordion
   {
   padding: 5%;
   font-weight: 300;
   }
   @keyframes gradient-animation {
   0% {
   background-position: 0% 50%;
   }
   50% {
   background-position: 100% 50%;
   }
   100% {
   background-position: 0% 50%;
   }
   }
   .select-hdk input[type="radio"]:checked + .radio-button-image .name-k span{ border-right: 1px solid #ffffff;}
   .select-hdk input[type="radio"]:checked + .radio-button-image .name-k img {-webkit-filter: invert(100%); /* Safari/Chrome */  filter: invert(100%);}
   .select-hdk {
   display: inline-block;
   width: 90%;
   margin: 0 auto;
   max-width: 1389px;
   }
   .image-s img {
   width: 100%;
   }
   .select-hdk label {
   margin: 1%;     width: 18%;    -webkit-animation: fadein 0.4s linear forwards;
   animation: fadein 0.4s linear forwards;
   animation-delay: 0.4s; opacity: 0;
   }
   #options h2{  -webkit-animation: fadein 0.3s linear forwards;
   animation: fadein 0.3s linear forwards;    text-transform: capitalize;
   animation-delay: 0.3s; opacity: 0;    width: 90%;
   margin: 0 auto 15px auto;
   }
   #next-btn, #see-prize-btn, #submit-button, #send-receipt-btn, #back-btn, #reset-btn {   -webkit-animation: fadein 0.6s linear forwards;  animation: fadein 0.6s linear forwards;  animation-delay: 0.6s; opacity: 0;
   }
   @-webkit-keyframes fadein {
   0% {
   opacity: 0;
   }
   100% {
   opacity: 1;
   }
   }
   @keyframes fadein {
   0% {
   opacity: 0;
   }
   100% {
   opacity: 1;
   }
   }
   .name-k {
   padding: 5%; text-align: left; 
   }
   .aco .name-k { border-bottom: 1px solid #e0e0e0;  margin-bottom: 15px; }
   .name-k span {
   vertical-align: middle;
   border-right: 1px solid #7e7e7e;
   margin-right: 15px;
   display: inline-block;
   line-height: 0;
   padding: 0px 15px 0px 0;
   }
   .btn-sub {   margin-top: 50px; }
   .summary-sec {
   background: #e7e7e7;
   border: 1px solid #ccc;
   padding: 1% 2%;
   max-width: 1300px; width: 90%;
   margin: 0 auto;
   border-radius: 8px; text-align: left;
   margin-bottom: 50px;
   }
   .terms{ max-width: 1300px;
   width: 90%;
   margin: 80px auto;
   text-align: left;
   border-top: 1px solid #e9e9e9;
   padding-top: 80px;}
   .terms ul {
   margin-left: 18px;
   }
   .terms ul li {
   list-style: decimal;
   font-size: 11px;
   margin-bottom: 7px;
   }
   .summary-sec ul#summary li {
   margin: 15px 3% 15px 0;
   display: inline-block;
   border-right: 1px solid #a7a7a7;
   padding-right: 3%;
   vertical-align: middle;
   @media (max-width: 768px) {
   display: block;border-right: 0;   padding-right: 0px;
   }
   }
   .summary-sec ul#summary li span{ font-size: 14px; }
   .summary-sec ul#summary li p{ font-size: 18px; font-weight:700; margin-bottom:0; text-transform:capitalize; }
   .name-k p {
   margin: 8px 0;    font-weight: 400;
   font-size: 13px;
   }
   #total-price-container {
   margin: 30px 0;
   }
   .summary-images {
   max-width: 1296px; width:90%;
   margin: 0 auto;margin-bottom: 30px;    margin-top: 1%;
   display: inline-block;
   }
   .summary-images img{ border-radius: 10px; margin-bottom: 10px;}
   .summary-sec h2{font-size: 24px; margin-bottom: 0 !important; margin-top: 15px !important;width: auto !important;}
   button[disabled] {      background-color: #ccc !important;  color: #616161 !important;     cursor: not-allowed !important;  }
   #additional-images {
   display: inline-block;     align-items: center;
   justify-content: center;   /* columns: 4 160px;-webkit-columns: 4 160px; */  /* For older Safari versions */
   width: 90%;max-width: 1300px; margin-bottom:50px;
   @media (max-width: 480px) { }
   & .additional-image-item {  margin: 0 1%;     display: inline-block; border-radius: 10px;  overflow: hidden;margin-bottom: 16px;
   @media (max-width: 768px) {  }
   img {   border-radius: 0px; margin-bottom: 0px; }
   h4 { background: #efefef;  padding: 15px 0;  margin-bottom: 0;  font-size: 16px;}
   }
   }
   #additional-images .additional-image-item {  margin: 0 1%;     display: inline-block; border-radius: 10px;  overflow: hidden;margin-bottom: 16px;    width: 23%;}
   #additional-images .additional-image-item img {   border-radius: 0px; margin-bottom: 0px; }
   #additional-images .additional-image-item h4 { background: #efefef;  padding: 15px 0;  margin-bottom: 0;  font-size: 16px;}
   #sidebar-sticky-icon { display:none !important; }
   tr td {  padding: 1px 15px 1px 0px; }
   td span {
   font-size: 12px;
   }
   .summary-sec td span:after { display: none;}
   .colors-com{ text-align:left; max-width: 755px;
   margin: 0 auto;
   margin-bottom: 40px;}
   .image-s {
   position: relative;
   overflow: hidden;
   &:before {
   background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 100%);
   content: "";
   display: block;
   height: 100%;
   left: -75%;
   position: absolute;
   top: 0;
   transform: skewX(-25deg);
   width: 50%;
   z-index: 2;
   }
   &:hover::before, &:focus::before {
   -webkit-animation: shine 0.85s;
   animation: shine 0.85s;
   }
   }
   @-webkit-keyframes shine {
   100% {
   left: 125%;
   }
   }
   @keyframes shine {
   100% {
   left: 125%;
   }
   }
   .summery-imaag {
   max-width: 755px;
   margin: 0 auto;
   margin-bottom: 40px;
   }
   .step-2s .name-k { text-align:center; }
   .step-2s label[for="8x8"] img { 
   max-width: 200px;margin-top: 10%; margin-bottom: 10%; width:80%;
   }
   .step-2s .image-s { padding: 10%;background: #fff;  }
   .step-2s label[for="10x10"] img {
   width: 90%;
   margin-top: 5%;margin-bottom: 5%;
   }
   .step-2s label[for="12x10"] .image-s {
   padding: 0% 5%;
   }
   .step-2s label[for="12x10"] img {
   width: 95%;
   margin-top: 16%;margin-bottom: 16%;
   }
   .sw66 {
   min-height: 165px;
   @media screen and (max-width: 600px) {
   min-height: inherit;
   }
   }
   @media screen and (max-width: 845px) {
   .select-hdk label {   width: 31%;    }
   .summary-sec {  padding: 5%; }
   }
   @media screen and (max-width: 768px) {
   .btn-sub {
   position: fixed;
   bottom: 0;
   z-index: 9999;
   width: 100%;
   background: #ffff;
   display: flex;
   }
   #back-btn, #reset-btn, #next-btn, #see-prize-btn, #send-receipt-btn, #call-btn {    width: 100%;    border-radius: 0px; margin: 0px;     padding: 20px 20px 18px 20px; }
   }
   @media screen and (max-width: 600px) {
   .select-hdk label {
   width: 48%;        margin-bottom: 20px;
   }
   .select-hdk .radio-button-image {  width: 100%; 	max-width: inherit;    min-height: inherit; }
   }
   li.last-c {border-right: 0 !important;}
   li.last-c .rupees-symball, #total-price-blurred, p.p-sdrg {
   font-size: 45px !important;
   font-weight: 500 !important; line-height:normal;
   }
   .summary-sec ul#summary li.last-c {
   margin: 0;
   padding: 0;
   width: 35%;
   text-align: right;
   @media screen and (max-width: 768px) {
   width: 100%;
   text-align: left;
   }
   }
   #disclaimer {
   padding: 1% 0%;
   max-width: 1300px;
   width: 90%;
   margin: 0 auto;
   text-align: left;
   border-top: 1px solid #eeeeee;
   margin-top: 70px;
   padding-top: 70px;
   }
   #disclaimer ol li {
   list-style: decimal;
   }
   #disclaimer h5 {color: #666666;}
   #disclaimer ol {
   color: #666666;
   font-size: 14px;
   margin: 0;
   padding: 0;
   margin-left: 15px;
   }
   .accordion {
   margin: 0px 0;     text-align: left;
   }
   .accordion-item {
   border-radius: 0px;
   margin-bottom: 0px;
   position: relative;  border:none;
   & .accordion-header {
   padding: 0px;
   cursor: pointer;
   display: flex;
   align-items: center; margin:0;
   }
   }
   .accordion-item h5.accordion-header {
   font-size: 12px; position: relative;
   }
   .accordion-content {
   display: none;
   padding: 0px;    font-size: 12px;
   }
   .accordion-header.active {    }
   .aco {
   width: 30%;
   display: inline-block;
   margin: 1% 1%;
   max-width: 250px;
   vertical-align: top;
   @media (max-width: 768px) {
   width: 48%;
   display: inline-block;
   max-width: inherit; margin-bottom:50px !important;
   vertical-align: top;
   }
   @media (max-width: 480px) {
   width: 100%;
   display: inline-block;
   margin: 0% 1%;
   }
   }
   .select-hdk .aco label {
   margin: 0%;
   width: 100%;
   }
   h5.accordion-header:after {
   content: '+';    position: absolute;
   right: 0;
   }
   h5.accordion-header.active:after {
   content: '-';
   }
   span.top-s-name {
   position: absolute;
   bottom: -55px;
   left: -26%;
   font-size: 13px;
   line-height: normal; text-transform: capitalize;
   }
   @media screen and (max-width: 600px) {
   .select-hdk label {
   }
   #breadcrumb li {   padding: 3px 35px;    }
   #breadcrumb-container {  }
   ol#breadcrumb:after { max-width: 283px;  }
   span.top-s-name {
   bottom: -52px;
   left: -34%;
   font-size: 12px;
   }
   }
   button#send-otp, button#verify-otp {
   background: #565656;
   padding: 2px 10px;
   float: right;
   font-size: 11px;
   margin-top: 3px;
   border-radius: 50px;
   color: #fff;
   }
   .kitchen-finish p.es-para {
   padding: 5%;
   margin-top: 0;
   }
   .kitchen-finish .name-k {
   border-bottom: 1px solid #e0e0e0;
   }
   .kitchen-finish .radio-button-image {  min-height: 443px;}
   .step-1image-sec{
   .image-s{
   padding: 10%;        background: #fff;
   }
   }
   .step-1image-sec .image-s{
   padding: 10%;        background: #fff;
   }
   .number-jfyr {
   color: #ff591b;
   font-size: 20px;
   font-weight: 700;
   position: absolute;
   top: 41%;
   max-width: 1295px;
   margin: 0 auto;
   left: 0;
   width: 90%;
   right: 0;
   text-align: right;
   @media screen and (max-width: 600px) {
   top: 11%;
   width: 92%; font-size: 15px;
   }
   }
   #modular-kitchen-visualizer{
   footer{
   @media screen and (max-width: 600px) {
   padding-bottom: 7rem !important;
   }
   }
   }
   p#otp-timer {
   text-align: left;
   font-size: 12px;
   margin: 0;
   margin-top: 2px;
   }
   .lowercase-text p { text-transform: lowercase !important; }
   .agree-field{ display: flex; text-align: left;}
   .agree-field input {
   display: flex;
   width: auto !important;
   line-height: normal;
   }
   .agree-field  p { margin: 0;  font-size: 11px;  margin-left: 2%;}
   @media screen and (max-width: 768px) {
   #additional-images .additional-image-item {
   width: 46%;
   }
   .aco {width: 48%;
   display: inline-block;
   max-width: inherit; margin-bottom:50px !important;
   vertical-align: top;
   }
   }
   @media screen and (max-width: 600px) {
   .kitchen-finish label {
   width: 100%;
   }
   }
   @media screen and (max-width: 600px) { 
   .top-banner:after {
   content: '';
   right: -2%;    background-size: 130px;
   }
   .aco {width: 98%;}
   }
   @media screen and (max-width: 990px) { 
   .top-banner h1{font-size: 21px;}
   span.font-small {
   font-size: 18px;
   line-height: 25px;
   }
   }
</style>
<div class="container text-center py-5">
<h2>Bring Your Vision to Life in Just 5 Steps</h2>

<div class="container-fluid">
    <div class="row steps-5">
        <div class="col"><img src="https://www.ivas.homes/modular-kitchen-visualizer/images/home/layout-selection.png"><p>Layout Selection</p></div>
        <div class="col"><img src="https://www.ivas.homes/modular-kitchen-visualizer/images/home/layout-selection.png"><p>Size Selection</p></div>
        <div class="col"><img src="https://www.ivas.homes/modular-kitchen-visualizer/images/home/layout-selection.png"><p>Package Selection</p></div>
        <div class="col"><img src="https://www.ivas.homes/modular-kitchen-visualizer/images/home/layout-selection.png"><p>Finish Selection</p></div>
        <div class="col"><img src="https://www.ivas.homes/modular-kitchen-visualizer/images/home/layout-selection.png"><p>Summary &amp; Quote</p></div>
    </div>
</div>


<div class="container view-all-blog-home">
<a class="btn btn-lg btn-dark" href="estimate.php">Get Your Estimate</a>
</div>

</div>
<?php include('footer.php')?>