<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <style>
      .cls-1 {
         fill: white;
         stroke: #231f20;
         stroke-miterlimit: 10;
      }

      .cls-2 {
         clip-path: url(#clip-path);
      }

      .cls-3 {
         clip-path: url(#clip-path-2);
      }

      /* css for custom slider */
      /*
         body {
         background-color: red;
         }
         */
      .switch {
         position: relative;
         display: block;
         vertical-align: top;
         width: 100px;
         height: 30px;
         padding: 3px;
         margin: 0 10px 10px 0;
         background: linear-gradient(to bottom, #eeeeee, #FFFFFF 25px);
         background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF 25px);
         border-radius: 18px;
         box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
         cursor: pointer;
      }

      .switch-input {
         position: absolute;
         top: 0;
         left: 0;
         opacity: 0;
      }

      .switch-label {
         position: relative;
         display: block;
         height: inherit;
         font-size: 10px;
         text-transform: uppercase;
         background: #eceeef;
         border-radius: inherit;
         box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
      }

      .switch-label:before,
      .switch-label:after {
         position: absolute;
         top: 50%;
         margin-top: -.5em;
         line-height: 1;
         -webkit-transition: inherit;
         -moz-transition: inherit;
         -o-transition: inherit;
         transition: inherit;
      }

      .switch-label:before {
         content: attr(data-off);
         right: 11px;
         color: #aaaaaa;
         text-shadow: 0 1px rgba(255, 255, 255, 0.5);
      }

      .switch-label:after {
         content: attr(data-on);
         left: 11px;
         color: #FFFFFF;
         text-shadow: 0 1px rgba(0, 0, 0, 0.2);
         opacity: 0;
      }

      .switch-input:checked~.switch-label {
         background: #ff3d00cf;
         box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
      }

      .switch-input:checked~.switch-label:before {
         opacity: 0;
      }

      .switch-input:checked~.switch-label:after {
         opacity: 1;
      }

      .switch-handle {
         position: absolute;
         top: 4px;
         left: 4px;
         width: 28px;
         height: 28px;
         background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
         background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
         border-radius: 100%;
         box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
      }

      .switch-handle:before {
         content: "";
         position: absolute;
         top: 50%;
         left: 50%;
         margin: -6px 0 0 -6px;
         width: 12px;
         height: 12px;
         background: linear-gradient(to bottom, #eeeeee, #FFFFFF);
         background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF);
         border-radius: 6px;
         box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
      }

      .switch-input:checked~.switch-handle {
         left: 74px;
         box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
      }

      /* Transition
         ========================== */
      .switch-label,
      .switch-handle {
         transition: All 0.3s ease;
         -webkit-transition: All 0.3s ease;
         -moz-transition: All 0.3s ease;
         -o-transition: All 0.3s ease;
      }

      /* css for custom checkbos*/
      .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
         background-color: #fe612f;
         border-color: #fe612f;
      }

      /* css to remove input focus box shadow color*/
      .form-control:focus {
         color: #495057;
         background-color: #fff;
         border-color: #FF5722 !important;
         outline: 0;
         box-shadow: 0 0 0 0.2rem #FF5722 !important;
      }

      /* css to add color in lead class*/
      .lead {
         color: #FF5722;
      }
   </style>
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background: #eeeeee;">
      <div id="thankyoubox" class="container" style="text-align: center;background: white;border-radius: 25px;border: 7px #eeeeee solid;font-size: 46px;font-family: serif;color: #ff6230;display:none;" >
         Thank You
      </div>
      <form action="#" method="post">
      <div class="container" style="background: white;border-radius: 25px;border: 7px #eeeeee solid;">
         <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 275 555">
                  <defs>
                     <style>
                        .cls-1 {
                           fill: white;
                           stroke: #231f20;
                           stroke-miterlimit: 10;
                        }
                     </style>
                  </defs>
                  <!-- <title>front body again</title> -->
                  <g id="Layer_2" data-name="Layer 2">
                     <g id="Layer_3" data-name="Layer 3">
                        <path class="cls-1" d="M137,69.48h-2.52c-3.69-.54-15.06-11.32-15.06-11.32-1-3.77-1.28-12.26-1.28-12.26-2,7.14-6.54-6.74-6.54-6.74v-5c.14-4.31,1.71-5,1.71-5h2.13l.71-14.69c.57-10,12.79-14,12.79-14h16.12s12.22,4,12.79,14l.71,14.69h2.13s1.56.67,1.71,5v5S157.86,53,155.87,45.9c0,0-.28,8.49-1.28,12.26,0,0-11.37,10.78-15.06,11.32Z" style="fill: #a9212f;" data-color="rgb(169, 33, 47)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                     <g id="Layer_4" data-name="Layer 4">
                        <path class="cls-1" d="M175.44,85.85l-19.1-11.53a3.63,3.63,0,0,1-1.75-3.11v-13c-9.8,9.3-15.06,11.32-15.06,11.32h-5c-2.52,0-15.06-11.32-15.06-11.32l.27,11.58A5.65,5.65,0,0,1,117,74.69L98.61,86.05c3.27-.4,11.94.81,11.94.81,9.66.13,7.25,5.66,7.25,5.66,1.85-.54,7,.4,7,.4a12.12,12.12,0,0,1,8.81,4.85h7.53a10.88,10.88,0,0,1,8.38-4.72c.57-1.08,7.41-.89,7.41-.89-.43-4.85,5.52-4.63,5.52-4.63S164.81,86.32,175.44,85.85Z" style="fill: #196bb4;" data-color="rgb(25, 107, 180)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                     <g id="Layer_6" data-name="Layer 6">
                        <path class="cls-1" d="M184.24,136.65s-7.39,17.61-28,13.76c0,0-13.48-2-18.75-2s-18.75,2-18.75,2C98,154.26,91.94,136.65,91.94,136.65,91.52,118,89,114.38,89,114.38,91.1,92.52,108.37,96,108.37,96a11.5,11.5,0,0,0,9-3.45c2.72-.61,6.87.4,6.87.4A12.49,12.49,0,0,1,133,97.77h8.94a12.49,12.49,0,0,1,8.69-4.85s4.15-1,6.87-.4a11.5,11.5,0,0,0,9,3.45s17.35-3.24,19.27,18.42C185.8,114.38,189.18,124.4,184.24,136.65Z" style="fill: #439db7;" data-color="rgb(67, 157, 183)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                     <g id="Layer_5" data-name="Layer 5">
                        <path class="cls-1" d="M138.52,148.52c3.46.36,14.23,1.5,17.28,1.9,0,0,20.24,4.53,28.43-13.76,0,0-.59,14.22,1.67,16.85,0,0-4,13-4.84,23,0,0,.52,36,2.6,58.78,0,0-11.43,10.67-15.76,14,0,0-8.66,8.21-11.08,11.82,0,0-8.75,8.22-18.26,9.71a7.18,7.18,0,0,1-2.22,0c-9.52-1.49-18.26-9.71-18.26-9.71-2.42-3.61-11.08-11.82-11.08-11.82-4.33-3.28-15.76-14-15.76-14,2.08-22.82,2.6-58.78,2.6-58.78-.87-10-4.84-23-4.84-23,2.26-2.63,3-16.85,3-16.85,8.19,18.29,27.11,13.76,27.11,13.76,3.06-.39,13.83-1.53,17.28-1.9A10.24,10.24,0,0,1,138.52,148.52Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                     <g id="Layer_7" data-name="Layer 7">
                        <path class="cls-1" d="M138.09,270.78c2.12-.29,9.26-1.83,18.73-9.73,0,0,8.1-9.38,11.08-11.82l15.76-14,2.24,10s-35,42-48.46,42S89,245.3,89,245.3l2.24-10,15.76,14c3,2.44,11.08,11.82,11.08,11.82,9.47,7.9,16.61,9.44,18.73,9.73A4.71,4.71,0,0,0,138.09,270.78Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                     <g id="Layer_8" data-name="Layer 8">
                        <path class="cls-1" d="M137.29,287.3s11.53,1.26,48.3-42c0,0,6.18,29.66,6.33,46.79,0,0,.6,16.69.3,19.69,0,0-2.86,28.11-4.66,34.39,0,0-2.41,18.83-4.36,22,0,0-.6,2.57-2.56,2.71,0,0-2.11.14-2.71-1.57,0,0-2.11-7-2.11-10.13,0,0,.3-6.42-4.06-3.71,0,0-4.36,1.57-4.66,5.14,0,0-.45,10.84-1.5,13.13,0,0-1.35,4.71-5,4.42,0,0-8.13.14-11-4.57,0,0-1.35-.57-1.2-22.4a32,32,0,0,0-2-11.13s-2.56-13.84-4.82-19.26c0,0-2.41-7.7-2.86-29.82,0,0-.57-1.14-1.51-1.14s-1.51,1.14-1.51,1.14c-.45,22.12-2.86,29.82-2.86,29.82-2.26,5.42-4.82,19.26-4.82,19.26a32,32,0,0,0-2,11.13c.15,21.83-1.2,22.4-1.2,22.4-2.86,4.71-11,4.57-11,4.57-3.61.29-5-4.42-5-4.42-1.05-2.28-1.5-13.13-1.5-13.13-.3-3.57-4.66-5.14-4.66-5.14-4.36-2.71-4.06,3.71-4.06,3.71,0,3.14-2.11,10.13-2.11,10.13-.6,1.71-2.71,1.57-2.71,1.57-2-.14-2.56-2.71-2.56-2.71-2-3.14-4.36-22-4.36-22-1.81-6.28-4.66-34.39-4.66-34.39-.3-3,.3-19.69.3-19.69C82.81,275,89,245.3,89,245.3,125.76,288.57,137.29,287.3,137.29,287.3Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                     <g id="Layer_11" data-name="Layer 11">
                        <path class="cls-1" d="M90.61,366.21s-2.54,14.09-1.2,21.74a132.57,132.57,0,0,1-1.34,25.86s-2.5,18.21-1,27.14c0,0,5,33.69,5.76,41,0,0,1.92,10.75,1.92,11.47,0,0,.19,6,0,9.47,0,0-1,12.2.09,15.3,0,0,1.43,6.74,0,9.47,0,0-3.13,4.92-3.82,6.56,0,0-3.76,4.37-5.3,5.65,0,0-2.31,4.19,0,7.1,0,0,1.43,3.82,4.36,4.37,0,0,3.8-.18,5.39,1.46,0,0,2.74,1.82,4.47.73a4.64,4.64,0,0,1,4.42.35,4.62,4.62,0,0,0,6-1.08s5.57-7.83,6-10.75V522.91s1.92-4.92,0-12c0,0-.41-14,.85-20.58,0,0,5.68-29.51,4.91-41.16,0,0-1.54-21.31-1.92-28.59,0,0,.14-14,2-20.22,0,0,3-8.56,3-13.84l-.2-12.94s-2.77,4.39-11,4.57a5.11,5.11,0,0,1-5-4.42s-2.07-10.27-1.5-13.13a8.31,8.31,0,0,0-4.66-5.14s-2.61-1.33-3.21,0a10.42,10.42,0,0,0-.85,3.71s-.8,8.8-2.11,10.13C96.65,369.27,92.39,374.3,90.61,366.21Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M184.07,365.86s2.19,14.43.84,22.08a132.57,132.57,0,0,0,1.34,25.86s2.5,18.21,1,27.14c0,0-5,33.69-5.76,41,0,0-1.92,10.75-1.92,11.47,0,0-.19,6,0,9.47,0,0,1,12.2-.09,15.3,0,0-1.43,6.74,0,9.47,0,0,3.13,4.92,3.82,6.56,0,0,3.76,4.37,5.3,5.65,0,0,2.31,4.19,0,7.1,0,0-1.43,3.82-4.36,4.37,0,0-3.8-.18-5.39,1.46,0,0-2.74,1.82-4.47.73a4.64,4.64,0,0,0-4.42.35,4.62,4.62,0,0,1-6-1.08s-5.57-7.83-6-10.75V522.91s-1.92-4.92,0-12c0,0,.41-14-.85-20.58,0,0-5.68-29.51-4.91-41.16,0,0,1.54-21.31,1.92-28.59,0,0-.14-14-2-20.22,0,0-3-8.56-3-13.84l.2-12.94s2.77,4.39,11,4.57a5.11,5.11,0,0,0,5-4.42s2.57-7.76,1.5-13.13a8.31,8.31,0,0,1,4.66-5.14s2.61-1.33,3.21,0c0,0,1.3.75,1.1,3.71,0,0,1.1,8.28,2.31,10.23C178.13,369.37,181.5,374.35,184.07,365.86Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M110.54,86.86s-8.56-1.77-11.94-.81c0,0-22.54-.07-31.08,11.72,0,0-6,5.23-6.7,22.3v25.39s2.77-6.57,15.24-15.76c0,0,11-7.11,12.93-15.32,0,0,.49-20.42,19.64-18.42,0,0,6.09.3,9.16-3.45C117.79,92.52,119.39,86,110.54,86.86Z" style="fill: #43b460;" data-color="rgb(67, 180, 96)"><input type="hidden" value="0" name="Deltoid" id="DeltoidFL"></path>
                        <path class="cls-1" d="M164.25,86.86s8.56-1.77,11.94-.81c0,0,22.54-.07,31.08,11.72,0,0,6,5.23,6.7,22.3v25.39s-2.77-6.57-15.24-15.76c0,0-11-7.11-12.93-15.32,0,0-.49-20.42-19.64-18.42,0,0-6.09.3-9.16-3.45C157,92.52,155.4,86,164.25,86.86Z" style="fill: #43b460;" data-color="rgb(67, 180, 96)"><input type="hidden" value="0" name="Deltoid" id="DeltoidFR"></path>
                     </g>
                     <g id="Layer_10" data-name="Layer 10">
                        <path class="cls-1" d="M89,114.38s3.05,8.19,3,22.26c0,0-.88,13.59-3,16.85,0,0-11.14,16.31-12.32,27.68,0,0-2.07,15.72-3.26,17.54,0,0-8.29-5.47-17.32-24.28,0,0,0-6.23.6-12.54a38.85,38.85,0,0,1,1.17-6.35c1-3.54,2.56-9.33,3-10.08,0,0,4-8.15,15.24-15.76C76.06,129.71,87.55,121.55,89,114.38Z" style="fill: #eee94f;" data-color="rgb(238, 233, 79)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M185.89,153.5s11.14,16.31,12.32,27.68c0,0,2.07,15.72,3.26,17.54,0,0,8.29-5.47,17.32-24.28,0,0,0-6.23-.6-12.54a38.85,38.85,0,0,0-1.17-6.35c-1-3.54-2.56-9.33-3-10.08,0,0-4-8.15-15.24-15.76,0,0-11.49-8.16-12.93-15.32,0,0,2.8,12.75-1.5,21.88C184.39,136.27,183.52,149.79,185.89,153.5Z" style="fill: #eee94f;" data-color="rgb(238, 233, 79)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                     <g id="Layer_12" data-name="Layer 12">
                        <path class="cls-1" d="M56.1,174.44S45,185.63,43.42,212.35c0,0-1.92,14-5.76,22.92l-4.54,8.94s-2.32,3.48-4.77,3.71H24.06a15.53,15.53,0,0,0-5.87,1.62l-3.92,2.09a13.34,13.34,0,0,1-4.28.93,33.66,33.66,0,0,1-5.26-.81l-2-.46s-4-.23-1.35,3.25c0,0,2.08,3.36,4.77,3.71h6s4.65-1.82,5.14,3a13.08,13.08,0,0,1-1.22,8.33L1.06,288.18s-2,4.76,2.69,3.83l13.7-13.93s4.16-2.43,2.45,2.45L8.77,297.69s-2.2,5.57,2.57,3.13L25.65,283s3.55-2.32,1.22,2.55l-7.71,15.2s.12,6.61,3.79,2.55l9.3-17.87s4-3.27,3.3,1.9a47.43,47.43,0,0,1-3.18,11.09s-.86,5.34,3.06,2.09a32,32,0,0,0,3.92-13.18s-.24-6,1.59-9.22c0,0,4.4-9.85,4.89-14.73,0,0,1.35-4.29,1-6,0,0,1.35-3.48,2.69-6,0,0,6.36-12.89,8.32-16,0,0,7-10,9.79-19.13,0,0,4.86-10.69,5.79-17.41C73.41,198.72,64.88,192.73,56.1,174.44Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M218.9,174.44s11.08,11.19,12.68,37.9c0,0,1.92,14,5.76,22.92l4.54,8.94s2.32,3.48,4.77,3.71h4.28a15.53,15.53,0,0,1,5.87,1.62l3.92,2.09a13.34,13.34,0,0,0,4.28.93,33.66,33.66,0,0,0,5.26-.81l2-.46s4-.23,1.35,3.25c0,0-2.08,3.36-4.77,3.71h-6s-4.65-1.82-5.14,3a13.08,13.08,0,0,0,1.22,8.33l15.05,18.56s2,4.76-2.69,3.83l-13.7-13.93s-4.16-2.43-2.45,2.45l11.13,17.17s2.2,5.57-2.57,3.13L249.35,283s-3.55-2.32-1.22,2.55l7.71,15.2s-.12,6.61-3.79,2.55l-9.3-17.87s-4-3.27-3.3,1.9a47.43,47.43,0,0,0,3.18,11.09s.86,5.34-3.06,2.09a32,32,0,0,1-3.92-13.18s.24-6-1.59-9.22c0,0-4.4-9.85-4.89-14.73,0,0-1.35-4.29-1-6,0,0-1.35-3.48-2.69-6,0,0-6.36-12.89-8.32-16,0,0-7-10-9.79-19.13,0,0-4.86-10.69-5.79-17.41C201.59,198.72,210.12,192.73,218.9,174.44Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                     <g id="Layer_14" data-name="Layer 14">
                        <path id="nech1" class="cls-1" d="M134.26,97.6a.32.32,0,0,0,.41-.38c-.48-2,.42-2.69,1.17-2.95a1.23,1.23,0,0,0,.86-1.16v-1.8l-1.62-4.46L133.7,76.16C130.82,65.7,125.45,63,125.45,63l.75,9-.11,5a2.65,2.65,0,0,0,.2,1.06l3.17,7.71s1.63,6.23,1.63,7.28c0,0,.25,3.41,1.5,4Z" style="fill: #196bb4;" data-color="rgb(25, 107, 180)"><input type="hidden" value="0" name="Sternocleidomastoid" id="SternocleidomastoidFL"></path>
                        <path class="cls-1" d="M158.21,88l-5-3.32a1.28,1.28,0,0,1-.54-1l-.49-13.87a.09.09,0,0,1,.18,0l6.45,17.77A.41.41,0,0,1,158.21,88Z" data-color=""><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path id="nech1-2" data-name="nech1" class="cls-1" d="M140.91,97.57a.37.37,0,0,1-.47-.44c.43-1.91-.45-2.6-1.19-2.85a1.23,1.23,0,0,1-.86-1.16v-1.8L140,86.85l1.38-10.69C144.25,65.7,149.62,63,149.62,63l-.75,9,.11,5a2.65,2.65,0,0,1-.2,1.06l-3.17,7.71S144,92,144,93.07c0,0-.42,2.91-1.5,4Z" style="fill: #196bb4;" data-color="rgb(25, 107, 180)"><input type="hidden" value="0" name="Sternocleidomastoid" id="SternocleidomastoidFR"></path>
                        <path id="nech_2" data-name="nech 2" class="cls-1" d="M173.83,85.46l-15,2.41a.92.92,0,0,1-.67-.15l-4.71-3.26a.92.92,0,0,1-.39-.69l-.82-11.46a1,1,0,0,1,1.8-.79A36,36,0,0,0,158,75.1l.08.06,10.21,6.35,5.68,3.43A.28.28,0,0,1,173.83,85.46Z" style="fill: #196bb4;" data-color="rgb(25, 107, 180)"><input type="hidden" value="0" name="Trapezius" id="TrapeziusFR"></path>
                        <path class="cls-1" d="M116.05,88l5-3.32a1.28,1.28,0,0,0,.54-1l.49-13.87a.09.09,0,0,0-.18,0l-6.45,17.77A.41.41,0,0,0,116.05,88Z" data-color=""><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path id="nech_2-2" data-name="nech 2" class="cls-1" d="M100.44,85.46l15,2.41a.92.92,0,0,0,.67-.15l4.71-3.26a.92.92,0,0,0,.39-.69L122,72.31a1,1,0,0,0-1.8-.79,36,36,0,0,1-3.89,3.57l-.08.06L106,81.5l-5.68,3.43A.28.28,0,0,0,100.44,85.46Z" style="fill: #196bb4;" data-color="rgb(25, 107, 180)"><input type="hidden" value="0" name="Trapezius" id="TrapeziusFL"></path>
                        <path class="cls-1" d="M111.64,96.13" data-color=""><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M115.45,94.75l13.87,1.17a.82.82,0,0,1,.74,1c-.31,1.51-.39,4.59,3.5,6.37a.37.37,0,0,1,.22.38c-.15,1.08-.5,5.18,2.06,8a1,1,0,0,1,.27.58c.25,2.12,1.55,13.81,0,18.92l-.12,4.75s-2.47,1.85-.81,4.11c0,0-17.06-11.24-19.31-12.24,0,0-23.69-11.54-26.46-14.51,0,0,1.08-19.47,19-17.27A20.62,20.62,0,0,0,115.45,94.75Z" style="fill:#439db7;" data-color="rgb(67, 157, 183)"><input type="hidden" value="0" name="Pectoralis Major" id="PectoralisMajorFL"></path>
                        <path class="cls-1" d="M91.1,114.35c0-.08-1.74-1.12,0,0,5.84,3.75,24.72,13.4,24.72,13.4,2.88,1.39,19,11.63,19,11.63-.12,1.25,2,2.13,2,2.13v5l-.43,2s-11.39.52-17.67,1.9c0,0-17.68,5-26.76-13.76A74.93,74.93,0,0,0,89,114.38l.37-1.15Z" style="fill: #439db7;" data-color="rgb(67, 157, 183)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M160.52,94.75l-13.31,1.17a.81.81,0,0,0-.71,1,5.47,5.47,0,0,1-3.35,6.37.37.37,0,0,0-.21.38c.14,1.08.48,5.18-2,8a1.06,1.06,0,0,0-.26.58c-.24,2.12-1.48,13.81,0,18.92l.12,4.75s2.37,1.85.78,4.11c0,0,16.37-11.24,18.53-12.24,0,0,22.72-11.54,25.38-14.51,0,0-1-19.47-18.24-17.27A19,19,0,0,1,160.52,94.75Z" style="fill: #439db7;" data-color="rgb(67, 157, 183)"><input type="hidden" value="0" name="Pectoralis Major" id="PectoralisMajorFR"></path>
                        <path class="cls-1" d="M184.24,136.65c-8.15,17.85-26.83,13.76-26.83,13.76-6-.81-17-1.9-17-1.9l-.41-2v-5s2-.87,1.89-2.12c0,0,15.46-10.24,18.23-11.62,0,0,18.12-9.65,23.72-13.4,1.67-1.12,0-.08,0,0l1.67-1.12A32.88,32.88,0,0,1,184.24,136.65Z" style="fill: #439db7;" data-color="rgb(67, 157, 183)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <ellipse class="cls-1" cx="107.16" cy="134.13" rx="3.83" ry="2.88" style="fill: #439db7;"></ellipse>
                        <circle class="cls-1" cx="107.26" cy="134.35" r="0.56"></circle>
                        <ellipse class="cls-1" cx="169.16" cy="134.13" rx="3.83" ry="2.88" style="fill: #439db7;"></ellipse>
                        <circle class="cls-1" cx="169.05" cy="134.35" r="0.56"></circle>
                        <path class="cls-1" d="M138,219c-4-.5-3.9-4.62-3.9-4.62C119.37,215.54,114,213,114,213v7.34c.12,3.11,3.38,12.09,3.38,12.09l1.9,7.34,2.79,11.1,2.79,11.74c.52,1.77,3.5,3.92,5,4.88a6.19,6.19,0,0,1,1.21,1.11l.28.29c1.29,1.24,4.91,1.86,6.73,1.86h0c1.81,0,5.43-.62,6.73-1.86l.28-.29a6.19,6.19,0,0,1,1.21-1.11c1.45-1,4.43-3.12,5-4.88L154,250.89l2.79-11.1,1.9-7.34s3.26-9,3.38-12.09V213s-5.35,2.52-20.11,1.33C141.94,214.35,142,218.46,138,219Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="Rectus Abdominus" id="RectusAbdominusF"></path>

                        <path class="cls-1" d="M136.95,210.7a.53.53,0,0,0,.36-.51V195.14a2.61,2.61,0,0,0-3.26-2.23,3.28,3.28,0,0,1-.71.06,44.53,44.53,0,0,0-11.8,1l-4.65.57a4.15,4.15,0,0,0-2.84,4.54v8.63s-.43,4,5.57,3.87a2.44,2.44,0,0,1,.43,0C121.42,211.85,129.94,213,136.95,210.7Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="Rectus Abdominus" id="RectusAbdominusFL3"></path>


                        <path class="cls-1" d="M135.12,189a.62.62,0,0,0,.53-.53c.28-2,1.34-10.42.84-15l-.39-5.11s.87-2.65-6.28,2.34l-10.63,7.07a4.37,4.37,0,0,1-1.34.57,5.58,5.58,0,0,0-2.52,1.55,2.14,2.14,0,0,0-.61,1.51v9.8a.34.34,0,0,0,.38.34l10.57-1.09Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="Rectus Abdominus" id="RectusAbdominusFL2"></path>


                        <path class="cls-1" d="M139.38,210.7a.53.53,0,0,1-.36-.51V195.14a2.61,2.61,0,0,1,3.26-2.23,3.28,3.28,0,0,0,.71.06,44.53,44.53,0,0,1,11.8,1l4.65.57a4.15,4.15,0,0,1,2.84,4.54v8.63s.43,4-5.57,3.87a2.44,2.44,0,0,0-.43,0C154.91,211.85,146.39,213,139.38,210.7Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="Rectus Abdominus" id="RectusAbdominusFR3"></path>
                        <path class="cls-1" d="M141.21,189a.62.62,0,0,1-.53-.53c-.28-2-1.34-10.42-.84-15l.39-5.11s-.87-2.65,6.28,2.34l10.63,7.07a4.37,4.37,0,0,0,1.34.57,5.58,5.58,0,0,1,2.52,1.55,2.14,2.14,0,0,1,.61,1.51v9.8a.34.34,0,0,1-.38.34l-10.57-1.09Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="Rectus Abdominus" id="RectusAbdominusFR2"></path>
                        <path class="cls-1" d="M136.62,159.48a13.69,13.69,0,0,1,1.49,4.53c-8.53,2.44-23.35,12.54-23.35,12.54L114,166.46a34.79,34.79,0,0,1,.41-11.77,20.82,20.82,0,0,1,.63-3.8s19.74-2.65,21.3-2.37C136.37,148.52,135.44,157.8,136.62,159.48Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="Rectus Abdominus" id="RectusAbdominusFL1"></path>
                        <path class="cls-1" d="M140.18,159.48A13.69,13.69,0,0,0,138.7,164c8.53,2.44,23.35,12.54,23.35,12.54l.74-10.09a34.79,34.79,0,0,0-.41-11.77,20.82,20.82,0,0,0-.63-3.8s-19.74-2.65-21.3-2.37C140.43,148.52,141.36,157.8,140.18,159.48Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="Rectus Abdominus" id="RectusAbdominusFR1"></path>
                        <path class="cls-1" d="M93,156.8s4.93,6.95,7.83,8.66a.23.23,0,0,1,0,.4c-1.3.59-5.16,2.53-6,4.93C94.81,170.79,89.87,166.31,93,156.8Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="Serratus Anterior" id="SerratusAnteriorFL"></path>
                        <path class="cls-1" d="M93.2,200.42l10.68,7.22a8.69,8.69,0,0,1,1.82,1.4,17.88,17.88,0,0,1,4.25,10.05s1.25,14.17,0,18.67c0,0-1.75,4.5-4.62,4.38l-3-3.12s-2.12-4.37-4.87-4.37a48.22,48.22,0,0,1-5.54-4.16s.54-12.76.73-16.47C92.64,214,92.85,209.25,93.2,200.42Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="External Oblique" id="ExternalObliqueFL"></path>
                        <path class="cls-1" d="M104.62,154.1s7.21,6,4.51,12.29l-7.16-.48-4.52-3.08Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M94.81,170.79s.31,4.06,12.86,10c0,0,3.64-4.74,0-13.08l-6.82-2.23S96.38,167.42,94.81,170.79Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M97.22,174.24l-3.4,3-.08,4.29-.05,2.3s9.95,9.85,15.54,11.94c0,0,1-9.23-1.56-15C107.67,180.77,99.63,177.7,97.22,174.24Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M93.69,183.8s10.47,10,15.54,11.94c0,0,.49,14-3.84,12.91L93.2,200.42Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M181.39,156.8s-4.93,6.95-7.83,8.66a.23.23,0,0,0,0,.4c1.3.59,5.16,2.53,6,4.93C179.6,170.79,184.55,166.31,181.39,156.8Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="Serratus Anterior" id="SerratusAnteriorFR"></path>
                        <path class="cls-1" d="M181.21,200.42l-10.68,7.22a8.69,8.69,0,0,0-1.82,1.4,17.88,17.88,0,0,0-4.25,10.05s-1.25,14.17,0,18.67c0,0,1.75,4.5,4.63,4.38l3-3.12s2.13-4.37,4.88-4.37a48.22,48.22,0,0,0,5.54-4.16s-.54-12.76-.73-16.47C181.77,214,181.56,209.25,181.21,200.42Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="External Oblique" id="ExternalObliqueFR"></path>
                        <path class="cls-1" d="M169.79,154.1s-7.21,6-4.51,12.29l7.16-.48,4.52-3.08Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M179.6,170.79s-.31,4.06-12.86,10c0,0-3.64-4.74,0-13.08l6.82-2.23S178,167.42,179.6,170.79Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M177.19,174.24l3.4,3,.08,4.29.05,2.3s-9.95,9.85-15.54,11.94c0,0-1-9.23,1.56-15C166.74,180.77,174.78,177.7,177.19,174.24Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M180.73,183.8s-10.47,10-15.54,11.94c0,0-.49,14,3.84,12.91l12.19-8.24Z" style="fill: #8c87bd;" data-color="rgb(140, 135, 189)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                     <g id="Layer_15" data-name="Layer 15">
                        <path class="cls-1" d="M85.39,132.19s-.92,17.38-5,26.75c0,0-4.93,13.26-9,18.52a.1.1,0,0,1-.17-.1c.84-2,2.55-7.43-3.63-8.15h0a3.22,3.22,0,0,0-2.84,2.93L64,170.5c-1.22-4.69.27-11.94.27-11.94,1.55-6.62,6.53-14.25,6.53-14.25,1.83-2.87,8-16.75,8-16.75A33.63,33.63,0,0,0,84.66,122a.18.18,0,0,1,.32.08A47.94,47.94,0,0,1,85.39,132.19Z" style="fill: #eee94f;" data-color="rgb(238, 233, 79)"><input type="hidden" value="0" name="Biceps" id="BicepsFL"></path>
                        <path class="cls-1" d="M189.64,132.19s.92,17.38,5,26.75c0,0,4.93,13.26,9,18.52a.1.1,0,0,0,.17-.1c-.84-2-2.55-7.43,3.63-8.15h0a3.22,3.22,0,0,1,2.84,2.93l.66-1.63c1.22-4.69-.27-11.94-.27-11.94-1.55-6.62-6.53-14.25-6.53-14.25-1.71-2.69-7.22-15-7.93-16.58a.74.74,0,0,0-.23-.29,32.26,32.26,0,0,1-5.72-5.48.16.16,0,0,0-.28.07A48,48,0,0,0,189.64,132.19Z" style="fill: #eee94f;" data-color="rgb(238, 233, 79)"><input type="hidden" value="0" name="Biceps" id="BicepsFR"></path>
                        <path class="cls-1" d="M55.69,219.94c-.64,3.89,6.19-10,6.19-10,1.47-5.63,8.42-14,8.42-14l-3.47-4-8.31,6-1.63,4.27-6.53,14.22S56.41,215.59,55.69,219.94Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Flexor Carpi Radials" id="FlexorCarpiRadialsFL"></path>
                        <path class="cls-1" d="M73.41,198.72A21.21,21.21,0,0,1,70.3,196c-5.61,5.7-8.42,14.22-8.42,14.22-.85,2.42-5.46,10.17-5.46,10.17S58,225,60.75,224.78l.39-.9c5.6-5.43,9.58-18.71,9.58-18.71Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Palmaris Longus" id="PalmarisLongusFL"></path>
                        <path class="cls-1" d="M58.74,197.86l8-5.81a.12.12,0,0,0,0-.19,17.2,17.2,0,0,1-1.87-2.41c-.81-1.2-.85-1.49-1.4-2.3-.43-.64-1.75-.84-4.17,0a.14.14,0,0,0-.09.12A71.44,71.44,0,0,1,58.74,197.86Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path id="arm1" class="cls-1" d="M56.89,202.35c5.05-10.41.41-24.59-.61-27.41a.29.29,0,0,0-.51-.08l-2.51,3.3c-5.89,8-8.17,21.16-8.17,21.16s-.6,3.83-1.29,8.34a7.11,7.11,0,0,0,1.32,5.72,23.77,23.77,0,0,0,3,3,1.77,1.77,0,0,0,2.7-.68Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Brachioradialis" id="BrachioradialisFL"></path>
                        <path class="cls-1" d="M219.42,219.94c.64,3.89-6.19-10-6.19-10-1.47-5.63-8.42-14-8.42-14l3.47-4,8.31,6,1.63,4.27,6.53,14.22S218.7,215.59,219.42,219.94Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Flexor Carpi Radialis" id="FlexorCarpiRadialisFR"></path>
                        <path class="cls-1" d="M201.7,198.72a21.21,21.21,0,0,0,3.12-2.74c5.61,5.7,8.42,14.22,8.42,14.22.85,2.42,5.46,10.17,5.46,10.17s-1.57,4.65-4.33,4.42l-.39-.9c-5.6-5.43-9.58-18.71-9.58-18.71Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Palmaris Longus" id="PalmarisLongusFR"></path>
                        <path class="cls-1" d="M216.37,197.86l-8-5.81a.12.12,0,0,1,0-.19,17.2,17.2,0,0,0,1.87-2.41c.81-1.2.85-1.49,1.4-2.3.43-.64,1.75-.84,4.17,0a.14.14,0,0,1,.09.12A71.44,71.44,0,0,0,216.37,197.86Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path id="arm1-2" data-name="arm1" class="cls-1" d="M218.22,202.35c-5.05-10.41-.41-24.59.61-27.41a.29.29,0,0,1,.51-.08l2.51,3.3c5.89,8,8.17,21.16,8.17,21.16s.6,3.83,1.29,8.34A7.11,7.11,0,0,1,230,213.4a23.77,23.77,0,0,1-3,3,1.77,1.77,0,0,1-2.7-.68Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Brachioradialis" id="BrachioradialisFR"></path>
                        <path class="cls-1" d="M48.55,252l-3-1.34c0-3.57,7.35-14.88,7.35-14.88.73-2.28,12-13.7,12-13.7l0,.62-6.6,10.95-8.74,14.62Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Flexor Digitorum Superficials" id="FlexorDigitorumSuperficialsFL"></path>
                        <path class="cls-1" d="M57.13,221.61A74.91,74.91,0,0,1,50,237.55s-5.54,8.37-5.66,12a5.72,5.72,0,0,1-2.79-1.17s3.37-9.21,4.74-10.5a17.17,17.17,0,0,0,3.27-6.67S53.06,224.61,57.13,221.61Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M51.06,218.14s-7.06,12-8,16.08c0,0-4.33,11.12-6.28,13.36l4.78.85s-.45-7.16,3.2-12.1C44.73,236.33,46.18,233.82,51.06,218.14Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M45.83,214.92S43,223.28,43.4,227.6c0,0-.88,2.28-2.82,6.49,0,0-4.19,7.8-3.83,13.5l-4.34-.24,6.67-15.77s1.22-5.83,3.06-7.88l1.79-11Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M226.75,252l3-1.34c0-3.57-7.35-14.88-7.35-14.88-.73-2.28-12-13.7-12-13.7l0,.62L217,233.6l8.74,14.62Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Flexor Digitorum Superficialis" id="FlexorDigitorumSuperficialisFR"></path>
                        <path class="cls-1" d="M218.17,221.61a74.91,74.91,0,0,0,7.15,15.94s5.54,8.37,5.66,12a5.72,5.72,0,0,0,2.79-1.17s-3.37-9.21-4.74-10.5a17.17,17.17,0,0,1-3.27-6.67S222.25,224.61,218.17,221.61Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M224.25,218.14s7.06,12,8,16.08c0,0,4.33,11.12,6.28,13.36l-4.78.85s.45-7.16-3.2-12.1C230.57,236.33,229.12,233.82,224.25,218.14Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M229.47,214.92s2.87,8.35,2.43,12.67c0,0,.88,2.28,2.82,6.49,0,0,4.19,7.8,3.83,13.5l4.34-.24-6.67-15.77s-1.22-5.83-3.06-7.88l-1.79-11Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                     <g id="Layer_16" data-name="Layer 16">
                        <path class="cls-1" d="M17.54,263.21c0,.06,0,.11,0,.17,0,1.46-.12,2.15-.12,2.15l-1,6.77c2.41,0,12.13-11.47,14-13.74a1.92,1.92,0,0,0,.43-.88c.81-4.48-4.63-8.08-4.63-8.08a15.62,15.62,0,0,0-10,5c-.61.69-1.54,1.62-1.54,1.62l-1.16,1.56S17.75,257.16,17.54,263.21Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M46.88,258.43a1.89,1.89,0,0,0-.44-1.57c-1.17-1.37-4.11-3.58-8.19,2.05,0,0-2.62,2.59-2.3,12.93,0,0,2.23,3.37,3.65-1.09,0,0-.63-7.72,1.63-3.26l1,4.8a14.93,14.93,0,0,0,2.5-4.19S45.7,264.5,46.88,258.43Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M31.26,256a7,7,0,0,1-1.24,3.5l-4.32,6.93-2.66,4.23s-.39,3.82,2.8,1.65l2.09-4.5L33,258.91S36.21,253.85,31.26,256Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Lubrical" id="LubricalFL"></path>
                        <path class="cls-1" d="M38.12,258.91c-.89,2.78-2.19,6.62-2.19,6.62l-1.08,2.67a7.28,7.28,0,0,0-.42,1.73V270a1.71,1.71,0,0,1-2,1.49L30,271c-3-.11-.84-2.39-.84-2.39l3.3-6.85s3.21-9.92,6-3.42Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M257.87,263.21c0,.06,0,.11,0,.17,0,1.46.12,2.15.12,2.15l1,6.77c-2.41,0-12.13-11.47-14-13.74a1.92,1.92,0,0,1-.43-.88c-.81-4.48,4.63-8.08,4.63-8.08a15.62,15.62,0,0,1,10,5c.61.69,1.54,1.62,1.54,1.62l1.16,1.56S257.66,257.16,257.87,263.21Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M228.53,258.43a1.89,1.89,0,0,1,.44-1.57c1.17-1.37,4.11-3.58,8.19,2.05,0,0,2.62,2.59,2.3,12.93,0,0-2.23,3.37-3.65-1.09,0,0,.63-7.72-1.63-3.26l-1,4.8a14.93,14.93,0,0,1-2.5-4.19S229.71,264.5,228.53,258.43Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M244.15,256a7,7,0,0,0,1.24,3.5l4.32,6.93,2.66,4.23s.39,3.82-2.8,1.65l-2.09-4.5-5.05-8.89S239.2,253.85,244.15,256Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Lubrical" id="LubricalFR"></path>
                        <path class="cls-1" d="M237.3,258.91c.89,2.78,2.19,6.62,2.19,6.62l1.08,2.67a7.28,7.28,0,0,1,.42,1.73V270a1.71,1.71,0,0,0,2,1.49l2.4-.5c3-.11.84-2.39.84-2.39l-3.3-6.85s-3.21-9.92-6-3.42Z" style="fill: #e57448;" data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M111.7,282.76a90.43,90.43,0,0,0,8-20.28s-3.2-3.4-5.31-5.56c-.24-.24-.11-.26-.19.07-.69,3-3.15,12.86-6.43,15.48Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Pectineus" id="PectineusFL"></path>
                        <path class="cls-1" d="M121.58,313.22a215.41,215.41,0,0,0-9.4-27.5s-6.74-16.91-7.16-22.13c0,0-2-8.7-3.69-12.3,0,0-2.22-7.59-3.31-10.22l-2.81-2L98,255.71s1.26,14.76,4.7,26.22c0,0,11.35,32.39,11.28,34.7,0,0,10,30.62,9.85,39.57l2.91-14.58-1-7.19Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Sartorius" id="SartoriusFL"></path>
                        <path class="cls-1" d="M119.6,263c-.7,2.53-3.89,13.57-8.08,19.28,0,0,4.67,12.07,6.34,17.14,0,0,3.24,9.29,3.74,12.29l1.54,7.78s3.46-3.86,4.6-11.49c0,0,1-10.53-1.41-16.67,0,0-4.42-13.94-4.64-21.71l0-1-1.75-5.6A.16.16,0,0,0,119.6,263Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Adductor Longus" id="AdductorLongusFL"></path>
                        <path class="cls-1" d="M91.77,236.24l3.43,2.83s1.88,9.92,0,17.66c0,0-4.75,18.6-7.38,24.19,0,0-4.17,9.81-5.19,13.93,0,0-.29-10.68,1.05-17.13,0,0,1.58-10.52,1.82-13a2.72,2.72,0,0,1,.13-.6c.39-1.18.61-5,1.74-10.47A86.09,86.09,0,0,1,91.77,236.24Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Gluteus Medius" id="GluteusMediusFL"></path>
                        <path id="thai1" class="cls-1" d="M121.74,268.88c.59,2.1,4.71,14.38,10.08,16.82a1.33,1.33,0,0,1,.73.94c.68,3.11,3.19,15.56,1.94,25.14-.09.73-.34,2.88-.49,3.6-1,4.94-5.18,21-6.39,26a1.66,1.66,0,0,1-.6,0l-1-7.3s4-15.92.75-22.34c0,0,3.52-6.93-1.51-23.83,0,0-4-15.23-3.65-19A.06.06,0,0,1,121.74,268.88Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Gracilis" id="GracilisFL"></path>
                        <path class="cls-1" d="M112.9,313.22l-4,35.4s-3.82,20.54.86,25.83c0,0,5.4,9.37,12-4.81a11.23,11.23,0,0,0,.85-2.67c.35-1.91,1-5.56,1.23-8.49.12-1.43.47-2.87,0-4.22h0a119.89,119.89,0,0,0-6.57-26.44Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Vastus Medialis" id="VastusMedialisFL"></path>
                        <path class="cls-1" d="M99.06,264.42A111.23,111.23,0,0,0,98,301s3.39,26,5.46,33.65c0,0,3.87,18.59,3.93,21.55l1.65-10.34.8-6.59,1.38-11.36L113,313.22l-10.3-31.29A122.11,122.11,0,0,1,99.06,264.42Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M95.2,348.58S86.55,328.27,87,310.31c0,0,.59-15.47,1.48-22.76a22.74,22.74,0,0,0,.16-3.13c0-.49,0-1.05,0-1.63a15.89,15.89,0,0,1,1.71-7.3l1.62-3.2a18.15,18.15,0,0,0,1.13-2.7c.55-1.73,1.61-5.19,5.44-5.18,0,0,.5.1.47.28-.45,2.59-3.71,22.4-1,36.3,0,0,3.76,25.24,5.46,33.65l3.93,21.55s0,1.28,0,2.37a.43.43,0,0,1-.77.26c-1.35-1.84-4.19-5-7-3.39a15.37,15.37,0,0,0-.85,3.71S95.78,350.79,95.2,348.58Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Rectus Femoris" id="RectusFemorisFL"></path>
                        <path class="cls-1" d="M96,246.46s.36,7.9-1.89,14.26l-4,13.71s1.86-1.62,4-7.44a1.85,1.85,0,0,1,.26-.47c.47-.62,1.9-2.27,3.65-2.08a.72.72,0,0,0,.79-.78c-.25-2.79-1-10.46-1.68-13.77a2.15,2.15,0,0,0-.07-.26L96,246.18" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Tensor Faciae Latae" id="TensorFaciaeLataeFL"></path>
                        <path class="cls-1" d="M89.19,361.85s-2.74-16-2.74-16c-1.69-7.61-4.1-34.1-4.1-34.1l.49-17.63c1.65-6,6.5-14.48,6.5-14.48l-.4,5.76c-.79,6.79-1.61,25.9-1.61,25.9-.73,14.15,7.21,35.72,8,37.75,0,.09.07.18.11.27.46,1,3.64,8,2.46,13.17,0,0-1,6.19-1.6,6.81,0,0-4.18,5.22-6-3.06Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Vastus Laterails" id="VastusLaterailsFL"></path>
                        <path class="cls-1" d="M162.8,282.76a90.18,90.18,0,0,1-8.08-20.28s3.21-3.4,5.34-5.56c.24-.24.11-.26.19.07.69,3,3.16,12.86,6.46,15.48Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Pectineus" id="PectineusFR"></path>
                        <path class="cls-1" d="M152.88,313.22a214.72,214.72,0,0,1,9.45-27.5s6.77-16.91,7.19-22.13c0,0,2-8.7,3.71-12.3,0,0,2.23-7.59,3.32-10.22l2.82-2-2.82,16.64s-1.26,14.76-4.72,26.22c0,0-11.41,32.39-11.33,34.7,0,0-10,30.62-9.89,39.57l-2.92-14.58,1-7.19Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Sartorius" id="SartoriusFR"></path>
                        <path class="cls-1" d="M154.87,263c.7,2.53,3.91,13.57,8.12,19.28,0,0-4.69,12.07-6.37,17.14,0,0-3.25,9.29-3.76,12.29l-1.55,7.78s-3.48-3.86-4.62-11.49c0,0-1-10.53,1.42-16.67,0,0,4.44-13.94,4.66-21.71l0-1,1.76-5.6A.16.16,0,0,1,154.87,263Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Adductor Longus" id="AdductorLongusFR"></path>
                        <path class="cls-1" d="M178.52,246.46s-.36,7.9,1.89,14.26l4,13.71s-1.86-1.62-4-7.44a1.85,1.85,0,0,0-.26-.47c-.47-.62-1.9-2.27-3.65-2.08a.72.72,0,0,1-.79-.78c.25-2.79,1-10.46,1.68-13.77a2.15,2.15,0,0,1,.07-.26l1.18-3.45" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Tensor Faciae Latae" id="TensorFaciaeLataeFR"></path>

                        <path class="cls-1" d="M182.83,236.24l-3.45,2.83s-1.89,9.92,0,17.66c0,0,4.77,18.6,7.41,24.19,0,0,4.19,9.81,5.21,13.93,0,0,.29-10.68-1.06-17.13,0,0-1.59-10.52-1.83-13a2.71,2.71,0,0,0-.13-.6c-.39-1.18-.62-5-1.75-10.47A85.76,85.76,0,0,0,182.83,236.24Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Gluteus Medius" id="GluteusMediusFR"></path>
                        <path id="thai1-2" data-name="thai1" class="cls-1" d="M152.72,268.88c-.59,2.1-4.73,14.38-10.13,16.82a1.33,1.33,0,0,0-.73.94c-.68,3.11-3.2,15.56-1.94,25.14.1.73.34,2.88.49,3.6,1,4.94,5.2,21,6.42,26a1.67,1.67,0,0,0,.61,0l1-7.3s-4-15.92-.76-22.34c0,0-3.54-6.93,1.52-23.83,0,0,4-15.23,3.67-19A.06.06,0,0,0,152.72,268.88Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Gracilis" id="GracilisFR"></path>
                        <path class="cls-1" d="M161.6,313.22l4,35.4s3.83,20.54-.86,25.83c0,0-5.42,9.37-12-4.81a11.19,11.19,0,0,1-.85-2.67c-.35-1.91-1-5.56-1.24-8.49-.12-1.43-.47-2.87,0-4.22h0a119.43,119.43,0,0,1,6.6-26.44Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Vastus Medialis" id="VastusMedialisFR"></path>
                        <path class="cls-1" d="M175.51,264.42a110.73,110.73,0,0,1,1,36.58s-3.4,26-5.49,33.65c0,0-3.89,18.59-3.95,21.55l-1.66-10.34-.8-6.59-1.39-11.36-1.79-14.69,10.35-31.29A121.63,121.63,0,0,0,175.51,264.42Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M179.38,348.58s8.69-20.32,8.21-38.28c0,0-.59-15.47-1.48-22.76a22.64,22.64,0,0,1-.16-3.13c0-.49,0-1.05,0-1.63a15.83,15.83,0,0,0-1.72-7.3l-1.63-3.2a18.1,18.1,0,0,1-1.13-2.7c-.55-1.73-1.62-5.19-5.46-5.18,0,0-.5.1-.47.28.45,2.59,3.72,22.4,1,36.3,0,0-3.78,25.24-5.49,33.65l-3.95,21.55s0,1.28,0,2.37a.43.43,0,0,0,.77.26c1.36-1.84,4.21-5,7-3.39a15.32,15.32,0,0,1,.85,3.71S178.8,350.79,179.38,348.58Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Rectus Femoris" id="RectusFemorisFR"></path>
                        <path class="cls-1" d="M185.42,361.85s2.75-16,2.75-16c1.7-7.61,4.12-34.1,4.12-34.1l-.5-17.63c-1.65-6-6.53-14.48-6.53-14.48l.4,5.76c.8,6.79,1.61,25.9,1.61,25.9.74,14.15-7.24,35.72-8,37.75,0,.09-.07.18-.11.27-.46,1-3.65,8-2.47,13.17,0,0,1,6.19,1.61,6.81,0,0,4.2,5.22,6.07-3.06Z" style="fill: #de6789;" data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Vastus Lateralis" id="VastusLateralisFR"></path>
                     </g>
                     <g id="Layer_17" data-name="Layer 17">
                        <path class="cls-1" d="M98.18,467.47" data-color=""><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M103,500.85l2.42-.3-.05-1.56s-1.85-23.88-7.34-30.27C98.08,468.73,104.34,499,103,500.85Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path id="a" class="cls-1" d="M111.57,421s1.75-7.07,6.25-11.86a81.72,81.72,0,0,0,2.89,20.57s2.61,17.43-.8,29.65c0,0-4.09.5-8.59-5.8,0,0-3.26-4.29-2.75-15.14C108.57,438.45,108.32,432.14,111.57,421Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Gatrocnemius" id="GatrocnemiusFL"></path>
                        <path class="cls-1" d="M111.32,472.26c.11,2,1.5,25,1.5,25,0-6.31,3.5-23.22,3.5-23.22l3.59-14.64s-4.59-.25-8.59-5.8A130.75,130.75,0,0,0,111.32,472.26Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Soleus" id="SoleusFL"></path>
                        <path class="cls-1" d="M95.17,390.79,90.7,396.3s-1.42,26.75,2.35,49.21l4.84,22s6.85-1.51,8.14,1.26c0,0-2.71-19.18-5.46-34.07,0,0-2.9-16.15-3-25.49,0,0-.38-5.4.2-7.37a.22.22,0,0,0-.13-.27,4.18,4.18,0,0,1-2.29-3.21,28.71,28.71,0,0,1-.07-7.45A.1.1,0,0,0,95.17,390.79Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Tibialis Anterior" id="TibialisAnteriorFL"></path>
                        <path class="cls-1" d="M90.07,401.23s-3.84,23.14-3.37,30.27c0,0,.83,15.67,3.2,26.23a14.77,14.77,0,0,1,.27,1.56c.35,3.05,1.61,14.1,2,17.32l2.4,14.9.25,10.24,2.63-.21.75-.34s-.17-8.41,0-10.6c0,0,.16-7.07,0-8.92s.29-11.34-.34-14.22l-4.84-22s-2.47-16.66-2.52-29.27l-.05-12.62Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Peroneus Longus" id="PeroneusLongusFL"></path>
                        <path class="cls-1" d="M94.86,502.32a11.53,11.53,0,0,1,6.72-1.31s5.88.33,8-1" data-color=""><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M171.92,500.85l-2.42-.3.05-1.56s1.85-23.88,7.34-30.27C176.89,468.73,170.63,499,171.92,500.85Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path id="a-2" data-name="a" class="cls-1" d="M163.4,421s-1.75-7.07-6.25-11.86a96.66,96.66,0,0,1-3.25,21.2s-3.44,18.17,1.16,29c0,0,4.09.5,8.59-5.8,0,0,3.26-4.29,2.75-15.14C166.4,438.45,166.65,432.14,163.4,421Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Gastrocnemius" id="GastrocnemiusFR"></path>
                        <path class="cls-1" d="M163.65,472.26c-.11,2-1.5,25-1.5,25,0-6.31-3.5-23.22-3.5-23.22l-3.59-14.64s4.59-.25,8.59-5.8A130.75,130.75,0,0,1,163.65,472.26Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Soleus" id="SoleusFR"></path>
                        <path class="cls-1" d="M179.8,390.79l4.47,5.51s1.42,26.75-2.35,49.21l-4.84,22s-6.85-1.51-8.14,1.26c0,0,2.71-19.18,5.46-34.07,0,0,2.9-16.15,3-25.49,0,0,.38-5.4-.2-7.37a.22.22,0,0,1,.13-.27,4.18,4.18,0,0,0,2.29-3.21,28.71,28.71,0,0,0,.07-7.45A.1.1,0,0,1,179.8,390.79Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Tibialis Anterior" id="TibialisAnteriorFR"></path>
                        <path class="cls-1" d="M184.9,401.23s3.84,23.14,3.37,30.27c0,0-.83,15.67-3.2,26.23a14.77,14.77,0,0,0-.27,1.56c-.35,3.05-1.61,14.1-2,17.32l-2.4,14.9-.25,10.24-2.63-.21-.75-.34s.17-8.41,0-10.6c0,0-.16-7.07,0-8.92s-.29-11.34.34-14.22l4.84-22s2.47-16.66,2.52-29.27l.05-12.62Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Peroneus Longus" id="PeroneusLongusFR"></path>
                        <path class="cls-1" d="M180.11,502.32a11.53,11.53,0,0,0-6.72-1.31s-5.88.33-8-1" data-color=""><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M99.5,544.92c3-.83,5-6.8,5-6.8h0c1.34-4.63.35-16.74.35-16.74h0a128.32,128.32,0,0,1,2.31,15l-.34,4.16-3.18,4.93-2.12,1.07-4.48.22Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Extensor Hallucis Brevis" id="ExtensorHallucisBrevisFL"></path>
                        <path class="cls-1" d="M96.5,522.5s3.86-10.83,19-12.08" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M96.5,509.75a8.37,8.37,0,0,1,10.5-1.28,8.14,8.14,0,0,0,5-2.22" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M96,522.92s5.47-4.92,8.22-4.33" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M94.35,541.75a33.7,33.7,0,0,0,5.15-11.11c-.12-4,2.18-9.92,2.18-9.92l-3.67,6a10,10,0,0,0-1,6.11,20.75,20.75,0,0,1-2,6.38Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Extensor Digitorum Brevis" id="ExtensorDigitorumBrevisFL"></path>
                        <path class="cls-1" d="M93.81,544.92s9.41-3,9.27-23.54" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M113.74,547.31s-2.77.64-3.46.88c0,0-1.65-2.11-3.76-1.86l.57-1.42,1.14-3.17c3.08-9.87-3.36-23.21-3.36-23.21,2.09-1,5,.46,5,.46,4.14,2,5,10.5,5,10.5s1.17,6.49,1.07,8l.29,4.89Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M174.54,543.92c-3-.83-5-6.8-5-6.8h0c-1.34-4.63-.35-16.74-.35-16.74h0a128.32,128.32,0,0,0-2.31,15l.34,4.16,3.18,4.93,2.12,1.07,4.48.22Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Extensor Hallucis Brevis" id="ExtensorHallucisBrevisFR"></path>
                        <path class="cls-1" d="M177.54,521.5s-3.86-10.83-19-12.08" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M177.54,508.75a8.37,8.37,0,0,0-10.5-1.28,8.14,8.14,0,0,1-5-2.22" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M178,521.92s-5.47-4.92-8.22-4.33" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M179.7,540.75a33.7,33.7,0,0,1-5.15-11.11c.13-4-2.18-9.92-2.18-9.92l3.67,6a10,10,0,0,1,1,6.11,20.75,20.75,0,0,0,2,6.38Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Extensor Digitorum Brevis" id="ExtensorDigitorumBrevisFR"></path>
                        <path class="cls-1" d="M180.23,543.92s-9.41-3-9.27-23.54" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                        <path class="cls-1" d="M160.31,546.31s2.77.64,3.46.88c0,0,1.65-2.11,3.76-1.86l-.57-1.42-1.14-3.17c-3.08-9.87,3.36-23.21,3.36-23.21-2.09-1-5,.46-5,.46-4.14,2-5,10.5-5,10.5s-1.17,6.49-1.07,8l-.29,4.89Z" style="fill: #c93585;" data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partFL"></path>
                     </g>
                  </g>
               </svg>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
               <div id="part" style="margin-top: 40%; padding: 15px; float: left; background: red; text-align: center; border-radius: 10px; display: none;">
                  <span id="part-name" style="font-size: 22px;font-family: monospace;color: white;"></span>
                  <br>
                  <span id="pain" style="font-size: 22px;font-family: monospace;color: white;">Pain level : 0</span>
               </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 269.17 552.9">
                  <defs>
                     <style>
                        .cls-1 {
                           fill: white;
                           stroke: #070606;
                           stroke-miterlimit: 10;
                        }
                     </style>
                  </defs>
                  <title>back body without color</title>
                  <g id="Layer_2" data-name="Layer 2">
                     <g id="Layer_2-2" data-name="Layer 2">
                        <path class="cls-1" d="M134.24.5h8.21A25.28,25.28,0,0,1,156.3,23.59V31c6.16-5,3.54,8.05,3.54,8.05a44.1,44.1,0,0,1-2.62,6.84c-1.85,2.43-4,0-4,0l-1.08,9.42h-3.23c-2.46-.15-6.16-2.89-6.16-2.89l-.69-.35a18.35,18.35,0,0,0-15.65,0l-.69.35s-3.69,2.73-6.16,2.89h-3.23l-1.08-9.42s-2.15,2.43-4,0a44.1,44.1,0,0,1-2.62-6.84S106,26,112.18,31V23.59A25.28,25.28,0,0,1,126,.5Z" style=" fill: #aa2230; " data-color="rgb(170, 34, 48)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_3" data-name="Layer 3">
                        <path class="cls-1" d="M134.17,50.35A14.82,14.82,0,0,1,142,52.1s4.6,3.24,6.94,3.24h3.28S151.3,69,153.64,71c0,0,6.08,6.08,18.1,10.94h-8.42s-7.18-1.06-4.52,6.38c0,0-6.71-.46-8.58-1.06h-4.06s-1.87-1.52-2.34,4.86c0,0-4.21,32.36-3.74,42.23H128.34c.46-9.87-3.69-42.23-3.69-42.23-.46-6.38-2.31-4.86-2.31-4.86h-4c-1.85.61-8.46,1.06-8.46,1.06,2.62-7.44-4.46-6.38-4.46-6.38H97.1C108.95,77.06,115,71,115,71c2.31-2,1.39-15.65,1.39-15.65h3.23c2.31,0,6.85-3.24,6.85-3.24A14.45,14.45,0,0,1,134.17,50.35Z" style=" fill: #196bb4; " data-color="rgb(25, 107, 180)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_4" data-name="Layer 4">
                        <path class="cls-1" d="M109.87,88.3s-14.16,28.56-30.32,29.62c0,0-7.08,3.65-9.85,7.75,0,0-11.85,15.49-13.54,5.92,0,0-.77-14.58,0-17.92,0,0,2-12.76,4.92-14.73,0,0,5.23-8.81,23.08-15,0,0,9.23-2,14.47-2h6.77S112.18,80.55,109.87,88.3Z" style=" fill: #42b35f; " data-color="rgb(66, 179, 95)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M158.64,88.3S172.8,116.86,189,117.92c0,0,7.08,3.65,9.85,7.75,0,0,11.85,15.49,13.54,5.92,0,0,.77-14.58,0-17.92,0,0-2-12.76-4.92-14.73,0,0-5.23-8.81-23.08-15,0,0-9.23-2-14.47-2h-6.77S156.34,80.55,158.64,88.3Z" style=" fill: #42b35f; " data-color="rgb(66, 179, 95)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_5" data-name="Layer 5">
                        <path class="cls-1" d="M122.34,87.24h-4l-8.46,1.06S95.1,116.55,79.56,117.92l-4.81,3s2.51,24.21,37.59,29.83l10,.61s6,.61,6.31-5.92l-.28-12.31S125.57,81.62,122.34,87.24Z" style=" fill: #2f9db6; " data-color="rgb(47, 157, 182)"><input type="hidden" value="0" name="Rhomboid" id="RhomboidBL"></path>
                        <path class="cls-1" d="M146.35,87.24h4l8.47,1.06s14.79,28.25,30.35,29.62l4.82,3s-2.51,24.21-37.63,29.83l-10,.61s-6,.61-6.32-5.92l.28-12.31S143.12,81.62,146.35,87.24Z" style=" fill: #2f9db6; " data-color="rgb(47, 157, 182)"><input type="hidden" value="0" name="Rhomboid" id="RhomboidBR"></path>
                     </g>
                     <g id="Layer_6" data-name="Layer 6">
                        <path class="cls-1" d="M74.74,120.9a25.21,25.21,0,0,0-5,4.77s-9,11.31-12.19,8.66a35.68,35.68,0,0,1-1.7,11.86s-5.59,16.53-5.9,23.63c0,0-.72,7.1,0,9.74a15.11,15.11,0,0,0,10.58,9.53s4.21.71,6.06,0c0,0,3-.81,3.49-5.07a42.09,42.09,0,0,1,3.39-13.19,53.6,53.6,0,0,1,5.65-10.45A96,96,0,0,0,85,149.84s3.13-6.13,3.42-8.29C88.38,141.55,77.26,134.26,74.74,120.9Z" style=" fill: #eee94f; " data-color="rgb(238, 233, 79)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M193.94,120.9a25.21,25.21,0,0,1,5,4.77s9,11.31,12.19,8.66a35.68,35.68,0,0,0,1.7,11.86s5.59,16.53,5.9,23.63c0,0,.72,7.1,0,9.74a15.11,15.11,0,0,1-10.58,9.53s-4.21.71-6.06,0c0,0-3-.81-3.49-5.07a42.09,42.09,0,0,0-3.39-13.19,53.6,53.6,0,0,0-5.65-10.45,96,96,0,0,1-5.86-10.55s-3.13-6.13-3.42-8.29C180.31,141.55,191.42,134.26,193.94,120.9Z" style=" fill: #eee94f; " data-color="rgb(238, 233, 79)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_7" data-name="Layer 7">
                        <path class="cls-1" d="M218.43,177.56" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M219.08,169.06c-.65-1.23-.32,10.49-.32,10.49a16.48,16.48,0,0,1-10.58,9.53c-1.73.58-5.68.32-5.68.32-1.35,0-3.38-3.38-3.38-3.38l.35,3.84c-.21,8.32,2.12,10.53,2.12,10.53a130.57,130.57,0,0,1,5.88,15.38c1.37,5.58,7.37,16.22,7.37,16.22,9,13.69,11.9,31.92,11.9,31.92l.11,13.48a14.13,14.13,0,0,0,.95,5.58c1.9,2.63,2.95,9.06,2.95,9.06a24.43,24.43,0,0,1,1.05,5.37l-.11,12.11-.32,3.9c1.9,4.11,4.42.32,4.42.32l.84-12.85c0-5.16,2-2.11,2-2.11a68.26,68.26,0,0,0,1.9,10.22c.84,3.58,1.9,9,1.9,9,.21,4.32,3.37,3.69,3.37,3.69,2.74-.63,1.79-4.32,1.79-4.32l-2.11-14.64c-.53-4.21,1.16-3.79,1.16-3.79l5.48,17a10.38,10.38,0,0,0,1.79,3.69c5.37,3.58,4.11-2.42,4.11-2.42l-4.63-17c-1.47-4.21-.21-5-.21-5l3.37,6.32,5.69,10.53c5.06,2.74,4.11-3.05,4.11-3.05l-2.11-4.11-6.32-15.06c-.63-4.21.32-5.27.32-5.27,3.69,5.27,7.16,7.27,7.16,7.27,5.16.42,2.63-3.48,2.63-3.48-1.16-.11-3.9-6.11-3.9-6.11-2.95-7.37-11.07-12.72-11.07-12.72-1.6,1.06-6.05-2.93-6.05-2.93a22.94,22.94,0,0,0-1.39-5.85c.27-4.26-3.72-16.49-3.72-16.49-2.39-1.86-5.05-19.42-5.05-19.42-.53-1.33-1.6-12.77-1.6-12.77.53-14.36-9.84-30.06-9.84-30.06S221.08,172.83,219.08,169.06Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M221.41,174.52s.59,7.71-3.91,13.21c0,0-4,9-3,12.67,0,0,1.61,5.5,3.39,5.83,0,0,2.61-4.67,4.61-13.5A50.51,50.51,0,0,0,225.42,181Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Extensor Carpi Radialis" id="ExtensorCarpiRadialisBR"></path>
                        <path class="cls-1" d="M225.42,187.73s3.51-.57,2.77-1.93c0,0,7.49,13.76,7.07,25.26,0,0,.82,8.14,1.6,12.77,0,0,2.46,16.11,5.05,19.42,0,0,3.69,12.17,3.72,16.49,0,0-5.67-17.68-11.48-18.35l-3-20.83,2,20.83s-2.67-2.5-4.67.5-.83,0-.83,0-1-18-.17-24.5c0,0,.67-11.83-1-17.67l-1.08-6.33A6.48,6.48,0,0,0,225.42,187.73Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Extensor Digitorum" id="ExtensorDigitorumBR"></path>
                        <path class="cls-1" d="M225.42,242.06s.61-2.07,2.18-1.51c0,0-.93-19.15-.1-23.15,0,0,.67-14.5-1-17.67a61.73,61.73,0,0,0-1.08-6.33,2.22,2.22,0,0,1-2.59-1.56s-2.19,9.7-4,12.46c0,0-.89,17.27,1.06,23.77Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Extensor Carpi Ulnaris" id="ExtensorCarpiUlnarisBR"></path>
                        <path class="cls-1" d="M202.17,200.56s1.26-3.5,4.8-3.5" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M235.52,262.4l-4.19,1.17s-.83-17.33-2.83-21.67c0,0,.66-1.55,1.94-1.44,0,0,2.56,10.16,2.72,11.55,0,0,1.75,7.41,1.5,9.06Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Extensor Digiti Minimi" id="ExtensorDigitiMinimiBR"></path>
                        <path class="cls-1" d="M226.78,265.9s6.72-3.67,11.72-3.67c0,0,5.6-.48,7.13-2.49,0,0,1.75,3.55,1.39,5.85,0,0-7.48,3.47-11.5,4.14,0,0-8,2.18-8.58,8.5Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M224.89,242.47s3.94,12.26,4.44,19.59" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M234.15,241.4s2.35,10.17,3.52,15" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M238.43,269s7.73,17.58,7.9,19.41" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M229.33,273.33s.17,7.4,1.67,10.4c0,0,2,6.93.42,9.88" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M232.6,271s1.07,15.28,2.24,19.11" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M236.93,269.42s-.74,17.31,0,19" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M241.74,267.82s8.43,14.06,11.76,15.65" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M244.91,266.53s12.17,9.37,12.75,13.2" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M50.74,177.56" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M50.08,169.06c.65-1.23.32,10.49.32,10.49A16.48,16.48,0,0,0,61,189.09c1.73.58,5.68.32,5.68.32C68,189.42,70,186,70,186l-.35,3.84c.21,8.32-2.12,10.53-2.12,10.53a130.57,130.57,0,0,0-5.88,15.38C60.32,221.36,54.32,232,54.32,232c-9,13.69-11.9,31.92-11.9,31.92l-.11,13.48a14.13,14.13,0,0,1-.95,5.58c-1.9,2.63-2.95,9.06-2.95,9.06a24.43,24.43,0,0,0-1.05,5.37l.11,12.11.32,3.9c-1.9,4.11-4.42.32-4.42.32l-.84-12.85c0-5.16-2-2.11-2-2.11A68.26,68.26,0,0,1,28.61,309c-.84,3.58-1.9,9-1.9,9-.21,4.32-3.37,3.69-3.37,3.69-2.74-.63-1.79-4.32-1.79-4.32l2.11-14.64c.53-4.21-1.16-3.79-1.16-3.79l-5.48,17a10.38,10.38,0,0,1-1.79,3.69c-5.37,3.58-4.11-2.42-4.11-2.42l4.63-17c1.47-4.21.21-5,.21-5l-3.37,6.32L6.91,312.05C1.86,314.79,2.8,309,2.8,309l2.11-4.11,6.32-15.06c.63-4.21-.32-5.27-.32-5.27-3.69,5.27-7.16,7.27-7.16,7.27-5.16.42-2.63-3.48-2.63-3.48,1.16-.11,3.9-6.11,3.9-6.11,2.95-7.37,11.07-12.72,11.07-12.72,1.6,1.06,6.05-2.93,6.05-2.93a22.94,22.94,0,0,1,1.39-5.85c-.27-4.26,3.72-16.49,3.72-16.49,2.39-1.86,5.05-19.42,5.05-19.42.53-1.33,1.6-12.77,1.6-12.77C33.38,197.7,43.75,182,43.75,182S48.08,172.83,50.08,169.06Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M47.75,174.52s-.59,7.71,3.91,13.21c0,0,4,9,3,12.67,0,0-1.61,5.5-3.39,5.83,0,0-2.61-4.67-4.61-13.5A50.51,50.51,0,0,1,43.75,181Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Extensor Carpi Radialis" id="ExtensorCarpiRadialisBL"></path>
                        <path class="cls-1" d="M43.75,187.73s-3.51-.57-2.77-1.93c0,0-7.49,13.76-7.07,25.26,0,0-.82,8.14-1.6,12.77,0,0-2.46,16.11-5.05,19.42,0,0-3.69,12.17-3.72,16.49,0,0,5.67-17.68,11.48-18.35l3-20.83L36,241.4s2.67-2.5,4.67.5.83,0,.83,0,1-18,.17-24.5c0,0-.67-11.83,1-17.67l1.08-6.33A6.48,6.48,0,0,1,43.75,187.73Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Extensor Digitorum" id="ExtensorDigitorumBL"></path>
                        <path class="cls-1" d="M43.75,242.06s-.61-2.07-2.18-1.51c0,0,.93-19.15.1-23.15,0,0-.67-14.5,1-17.67a61.73,61.73,0,0,1,1.08-6.33,2.22,2.22,0,0,0,2.59-1.56s2.19,9.7,4,12.46c0,0,.89,17.27-1.06,23.77Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Extensor Carpi Ulnaris" id="ExtensorCarpiUlnarisBL"></path>
                        <path class="cls-1" d="M67.57,199.39S63,210.9,61.69,214.77A121,121,0,0,1,54.32,231s-5.27,9.14-7,14.31c0,0-.77-3.41-2.44-2.41l-1.08-.83s5.27-13,5.54-14a61.64,61.64,0,0,0,1.27-12.17s1.63,3,2.37-.5c0,0,2.41-10.67,4.91-14,0,0,.07-2.83,4.37-4.33l-2-3.17-.83-5.38S68.59,191.34,70,186l-.35,3.84S70.14,198.24,67.57,199.39Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M72.93,173.38a64,64,0,0,1,4.57-9.77,37.83,37.83,0,0,0,6.17-11c-4.07-9.15-7.5-28-7.5-28-8.25,4.91-12.46,16.57-12.46,16.57-3.38,7.67-3.6,12.43-3.6,12.43,4.3.62,2.09,3.66,2.09,3.66,1.7,3.17,0,7.83,0,7.83a25.12,25.12,0,0,0-1.37,8.17c-2.33,5-.33,7.67-.33,8.17a18.87,18.87,0,0,1-1.17,3l.67,2.5.51,2.19s4.53.89,6.16.32c0,0,2.94-1.83,3.38-3.38C70,186,72.15,175.74,72.93,173.38Z" style=" fill: #eee94f; " data-color="rgb(238, 233, 79)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M201.85,199.39s4.57,11.51,5.88,15.38A121,121,0,0,0,215.1,231s5.27,9.14,7,14.31c0,0,.77-3.41,2.44-2.41l1.08-.83s-5.27-13-5.54-14a61.64,61.64,0,0,1-1.27-12.17s-1.63,3-2.37-.5c0,0-2.41-10.67-4.91-14,0,0-.07-2.83-4.37-4.33l2-3.17.83-5.38s-9.25,2.82-10.71-2.49l.35,3.84S199.28,198.24,201.85,199.39Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M196.49,173.38a64,64,0,0,0-4.57-9.77,37.83,37.83,0,0,1-6.17-11c4.07-9.15,7.5-28,7.5-28,8.25,4.91,12.46,16.57,12.46,16.57,3.38,7.67,3.6,12.43,3.6,12.43-4.3.62-2.09,3.66-2.09,3.66-1.7,3.17,0,7.83,0,7.83a25.12,25.12,0,0,1,1.37,8.17c2.33,5,.33,7.67.33,8.17a18.87,18.87,0,0,0,1.17,3l-.67,2.5-.51,2.19s-4.53.89-6.16.32c0,0-2.94-1.83-3.38-3.38C199.37,186,197.27,175.74,196.49,173.38Z" style=" fill: #eee94f; " data-color="rgb(238, 233, 79)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M67,200.56s-1.26-3.5-4.8-3.5" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M33.64,262.4l4.19,1.17s.83-17.33,2.83-21.67c0,0-.66-1.55-1.94-1.44,0,0-2.56,10.16-2.72,11.55,0,0-1.75,7.41-1.5,9.06Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="Extensor Digiti Minimi" id="ExtensorDigitiMinimiBL"></path>
                        <path class="cls-1" d="M42.39,265.9s-6.72-3.67-11.72-3.67c0,0-5.6-.48-7.13-2.49,0,0-1.75,3.55-1.39,5.85,0,0,7.48,3.47,11.5,4.14,0,0,8,2.18,8.58,8.5Z" style=" fill: #e57448; " data-color="rgb(229, 116, 72)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M44.28,242.47s-3.94,12.26-4.44,19.59" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M35,241.4s-2.35,10.17-3.52,15" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M30.73,269S23,286.56,22.83,288.4" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M39.83,273.33s-.17,7.4-1.67,10.4c0,0-2,6.93-.42,9.88" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M36.57,271s-1.07,15.28-2.24,19.11" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M32.24,269.42s.74,17.31,0,19" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M27.43,267.82S19,281.88,15.67,283.47" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M24.25,266.53s-12.17,9.37-12.75,13.2" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_8" data-name="Layer 8">
                        <path class="cls-1" d="M133.15,247.14a1.81,1.81,0,0,0,2.38,0,7.14,7.14,0,0,0,.72-.74c1.23-3.85,5.24-9.43,5.24-9.43a22.25,22.25,0,0,1,8.12-8.22c2.88-2.54,12.23-3.85,12.23-3.85,2.47-.71,9.45-.2,9.45-.2a12,12,0,0,1,9.45,4.77l.1-15.82c0-7.81-.54-8.42-.54-8.42-.85-2.94-2.23-9.84-2.23-9.84-.72-3.55-.21-13.59-.21-13.59.21-3.85,2.44-9.74,2.44-9.74.69-2.54,5.64-17.77,5.64-17.77a70,70,0,0,1-5.64-12.73c-9.3,7-24,9.18-24,9.18-3.59.09-10,.61-10,.61-6.58-.3-6.31-5.92-6.31-5.92l.31-11.09h-12l.31,11.09s.27,5.63-6.31,5.92c0,0-6.42-.52-10-.61,0,0-14.66-2.23-24-9.18a70,70,0,0,1-5.64,12.73s4.95,15.24,5.64,17.77c0,0,2.23,5.88,2.44,9.74,0,0,.51,10-.21,13.59,0,0-1.39,6.9-2.23,9.84,0,0-.54.61-.54,8.42l.1,15.82a12,12,0,0,1,9.45-4.77s7-.51,9.45.2c0,0,9.35,1.32,12.23,3.85a22.25,22.25,0,0,1,8.12,8.22s4,5.58,5.24,9.43A7.14,7.14,0,0,0,133.15,247.14Z" style=" fill: #8b86bc; " data-color="rgb(139, 134, 188)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_10" data-name="Layer 10">
                        <path class="cls-1" d="M134.45,289.47a4.68,4.68,0,0,1,2.81,1.06l6.17,6.47c3.62,4.11,7,3.58,7,3.58H168c10.71-.53,19.81-23.35,19.81-23.35,1.16-3.65.69-15.9.69-15.9A82.57,82.57,0,0,0,186.74,245c-1-6.62-5.78-15.59-5.78-15.59-3.17-5.05-9.45-4.77-9.45-4.77-6.32-.64-9.45.2-9.45.2a28.46,28.46,0,0,0-12.23,3.85c-6.16,3.92-8.12,8.22-8.12,8.22a50.23,50.23,0,0,0-5.24,9.43,2.8,2.8,0,0,1-1.72,1.14,1.34,1.34,0,0,1-.59,0,2.8,2.8,0,0,1-1.72-1.14,50.23,50.23,0,0,0-5.24-9.43s-2-4.3-8.12-8.22a28.46,28.46,0,0,0-12.23-3.85s-3.13-.84-9.45-.2c0,0-6.29-.29-9.45,4.77,0,0-4.78,9-5.78,15.59a82.57,82.57,0,0,0-1.77,16.28s-.46,12.25.69,15.9c0,0,9.09,22.82,19.81,23.35h17.57s3.39.53,7-3.58l6.17-6.47A4.68,4.68,0,0,1,134.45,289.47Z" style=" fill: #962b8d; " data-color="rgb(150, 43, 141)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_11" data-name="Layer 11">
                        <path class="cls-1" d="M134.48,293.79c2,.13,2.3,6.81,2.3,6.81l.77,12.68c.46,9.28,6.63,27.23,6.63,27.23,1.85,4.72,3.08,19.47,3.08,19.47.31,4.87.92,19.93.92,19.93,0,5.17,1.54,16.43,1.54,16.43.62,6.54,6,10.5,6,10.5,4.32,3.19,4.93-3,4.93-3,.46-3.14,2.31-11.77,2.31-11.77.62-5.32,3.39-13.08,3.39-13.08,1.54-4,3.7-1.06,3.7-1.06l2.31,3.35,6.32,11.87,4.93,9.89c1.23,1.83,2.16,0,2.16,0,.46-3.8-1.7-18-1.7-18-.62-5.78-.92-15.21-.92-15.21,0-6.24,2.93-18.56,2.93-18.56.92-4.72,3.49-27,3.49-27,.8-7.82,0-33.11,0-33.11a79.54,79.54,0,0,0-1.71-14c-10.7,24.71-19.81,23.35-19.81,23.35H150.49c-3.59,0-7-3.58-7-3.58-.27-.3-6.17-6.47-6.17-6.47a4.31,4.31,0,0,0-5.67,0s-5.9,6.17-6.17,6.47c0,0-3.43,3.58-7,3.58H100.89s-9.11,1.35-19.81-23.35a79.54,79.54,0,0,0-1.71,14s-.8,25.29,0,33.11c0,0,2.56,22.24,3.49,27,0,0,2.93,12.32,2.93,18.56,0,0-.31,9.43-.92,15.21,0,0-2.16,14.15-1.7,18,0,0,.92,1.83,2.16,0l4.93-9.89,6.32-11.87,2.31-3.35s2.16-2.89,3.7,1.06c0,0,2.77,7.76,3.39,13.08,0,0,1.85,8.62,2.31,11.77,0,0,.62,6.19,4.93,3,0,0,5.39-4,6-10.5,0,0,1.54-11.26,1.54-16.43,0,0,.62-15.06.92-19.93,0,0,1.23-14.76,3.08-19.47,0,0,6.17-18,6.63-27.23l.77-12.68S132.43,293.92,134.48,293.79Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_12" data-name="Layer 12">
                        <path class="cls-1" d="M116.31,403.64s-6.28,9.25-8,.21L106,392.09A95.37,95.37,0,0,0,102.58,379s-1.61-4.08-3.7-1.06l-2.31,3.35-6.32,11.87L85.32,403s-1.39,2-2.16,0a100,100,0,0,0-2.47,11.87s-1.46,9.36-1.31,15.14a101.53,101.53,0,0,0,.77,16.74s1.62,10.19,2.7,15.82c0,0,2.7,12.25,3.78,18,0,0,2.47,12.7,3.24,16,0,0,1.16,5.86,1.54,7.91a48.82,48.82,0,0,1,.39,15.82s-1.39,5.86-1.54,8.06c0,0,.23,5-3.85,3.35,0,0-2.47.94-2.36,5.3l.1,5.78.41,1.22s3.49,1.12,4,4l.82,2.23s1.44,2.33,3.6,2.23h13.36a3.7,3.7,0,0,0,2.57-3l.21-4.36a27.44,27.44,0,0,1,2.16-4.87,23.14,23.14,0,0,0,2-7.81,23.84,23.84,0,0,0,0-7.71,13,13,0,0,0-2-7.2,14.83,14.83,0,0,1-2.88-6.9l-.21-21.2a49.65,49.65,0,0,1,1.75-5s5.46-15.11,6.38-23.33c0,0,1.74-12.58,1.54-17.65,0,0-.92-18.76-1-23.73Z" style=" fill: #c93585; " data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M152.4,403.64s6.28,9.25,8,.21l2.31-11.77A95.37,95.37,0,0,1,166.12,379s1.61-4.08,3.7-1.06l2.31,3.35,6.32,11.87,4.93,9.89s1.39,2,2.16,0A100,100,0,0,1,188,414.91s1.46,9.36,1.31,15.14a101.53,101.53,0,0,1-.77,16.74s-1.62,10.19-2.7,15.82c0,0-2.7,12.25-3.78,18,0,0-2.47,12.7-3.24,16,0,0-1.16,5.86-1.54,7.91a48.82,48.82,0,0,0-.39,15.82s1.39,5.86,1.54,8.06c0,0-.23,5,3.85,3.35,0,0,2.47.94,2.36,5.3l-.1,5.78-.41,1.22s-3.49,1.12-4,4l-.82,2.23s-1.44,2.33-3.6,2.23H162.37a3.7,3.7,0,0,1-2.57-3l-.21-4.36a27.44,27.44,0,0,0-2.16-4.87,23.14,23.14,0,0,1-2-7.81,23.84,23.84,0,0,1,0-7.71,13,13,0,0,1,2-7.2,14.83,14.83,0,0,0,2.88-6.9l.21-21.2a49.65,49.65,0,0,0-1.75-5s-5.46-15.11-6.38-23.33c0,0-1.74-12.58-1.54-17.65,0,0,.92-18.76,1-23.73Z" style=" fill: #c93585; " data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_14" data-name="Layer 14">
                        <polygon class="cls-1" points="141.35 22.33 143.07 20.61 145.65 20.61 148.87 20.61 151.24 21.47 152.52 23.41 153.81 24.91 155.1 24.91 156.36 29.42 156.36 31.79 152.52 33.94 147.15 33.94 145 30.73 143.07 28.35 141.35 24.69 141.35 22.33" style=" fill: #aa2230; "></polygon>
                        <polygon class="cls-1" points="127.91 22.33 126.19 20.61 123.61 20.61 120.39 20.61 118.03 21.47 116.74 23.41 115.45 24.91 114.16 24.91 112.91 29.42 112.91 31.79 116.74 33.94 122.11 33.94 124.26 30.73 126.19 28.35 127.91 24.69 127.91 22.33" style=" fill: #aa2230; "></polygon>
                     </g>
                     <g id="Layer_15" data-name="Layer 15">
                        <path class="cls-1" d="M151.45,46.2" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M158.64,88.3l-8.43-1.06h-4.06l-1.4.53-.29,2.15-.65,2.18.5,1.81h2.42l-2.3,3.63-.62,4,5-4.6-4.23,6,3.75.73-5.81,6.77,6-2.2-5.44,6.32,4.48-.73-5.68,5.22h2.18l-2.18,3.61,3.63-.48-4.82,4.36,5.3-1.09-.36,5.2-4.94,5,3.12,1.09-1.57,3.87,4.35-4.35-2.66,6h1.81l-.36,1.81,1.94.6-1.09,3.14,2.3-1.81-2.06,4.23L156.65,133s2.18-7.33.24-12.07c0,0-1-6.44-.12-9.1l.85-3a4.78,4.78,0,0,1,.54-3.75l2.6-5.81s.12-.24-1.94-.36l-2.42-.24s-3.27-1.09-2.42-2.9l1.45-2.42-.24-1Z" style=" fill: #2f9db6; " data-color="rgb(47, 157, 182)"><input type="hidden" value="0" name="Trapezius" id="TrapeziusBR"></path>
                        <path class="cls-1" d="M109.83,88.3l8.43-1.06h4.06l1.4.53.29,2.15.65,2.18-.5,1.81h-2.42l2.3,3.63.62,4-5-4.6,4.23,6-3.75.73,5.81,6.77-6-2.2,5.44,6.32-4.48-.73,5.68,5.22H124.4l2.18,3.61-3.63-.48,4.82,4.36-5.3-1.09.36,5.2,4.94,5-3.12,1.09,1.57,3.87-4.35-4.35,2.66,6h-1.81l.36,1.81-1.94.6,1.09,3.14-2.3-1.81,2.06,4.23L111.82,133s-2.18-7.33-.24-12.07c0,0,1-6.44.12-9.1l-.85-3a4.78,4.78,0,0,0-.54-3.75l-2.6-5.81s-.12-.24,1.94-.36l2.42-.24s3.27-1.09,2.42-2.9L113,93.3l.24-1Z" style=" fill: #2f9db6; " data-color="rgb(47, 157, 182)"><input type="hidden" value="0" name="Trapezius" id="TrapeziusBL"></path>
                     </g>
                     <g id="Layer_16" data-name="Layer 16">
                        <path class="cls-1" d="M165.35,99.42s2.76-6.4,6.39-4.27l7.51,3.13,6.18,4.25s4.57,2.13,5.7,4c0,0-4.34.75-5.17,3.63,0,0-.75,4.1-2.67,6.05C183.29,116.2,175.57,113.44,165.35,99.42Z" style=" fill: #42b35f; " data-color="rgb(66, 179, 95)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M103.13,99.42s-2.76-6.4-6.39-4.27l-7.51,3.13L83,102.52s-4.57,2.13-5.7,4c0,0,4.34.75,5.17,3.63,0,0,.75,4.1,2.67,6.05C85.18,116.2,92.9,113.44,103.13,99.42Z" style=" fill: #42b35f; " data-color="rgb(66, 179, 95)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_17" data-name="Layer 17">
                        <path class="cls-1" d="M191.13,106.52s-4.41.92-5.17,3.63c0,0-1,4.85-2.67,6.05,0,0,.78,1.13,2.67,0,0,0,6.38-5,6.88-6.47A7.8,7.8,0,0,0,191.13,106.52Z" style=" fill: #42b35f; " data-color="rgb(66, 179, 95)"><input type="hidden" value="0" name="Teres Major" id="TeresMajorBR"></path>
                        <path class="cls-1" d="M77,106.52s4.41.92,5.17,3.63c0,0,1,4.85,2.67,6.05,0,0-.78,1.13-2.67,0,0,0-6.38-5-6.88-6.47A7.8,7.8,0,0,1,77,106.52Z" style=" fill: #42b35f; " data-color="rgb(66, 179, 95)"><input type="hidden" value="0" name="Teres Major" id="TeresMajorBL"></path>
                     </g>
                     <g id="Layer_18" data-name="Layer 18">
                        <path class="cls-1" d="M194.92,88.56s-4.8,2.33-6.86,2.08a11.31,11.31,0,0,0-4.19,1.68s-6.24,4.23-8.18,4.46l3.56,1.48,6.18,4.25s4.51,2.22,5.7,4c0,0,2,2.68,1.71,3.21A53.25,53.25,0,0,1,186,116.2l-1.55.5s3.14,1.38,4.56,1.22l5,3a42,42,0,0,1,4.87,4.77s9.14,11.09,12.35,8.66a3.88,3.88,0,0,0,1.19-2.73s1-12.69,0-17.92c0,0-1.33-10.65-4.92-14.73A40.42,40.42,0,0,0,194.92,88.56Z" style="fill: #42b35f;" data-color="rgb(66, 179, 95)"><input type="hidden" value="0" name="Deltoid" id="DeltoidBR"></path>
                        <path class="cls-1" d="M73.58,88.56s4.8,2.33,6.86,2.08a11.31,11.31,0,0,1,4.19,1.68s6.24,4.23,8.18,4.46l-3.56,1.48-6.18,4.25s-4.51,2.22-5.7,4c0,0-2,2.68-1.71,3.21a53.25,53.25,0,0,0,6.88,6.47l1.55.5s-3.14,1.38-4.56,1.22l-5,3a42,42,0,0,0-4.87,4.77s-9.14,11.09-12.35,8.66a3.88,3.88,0,0,1-1.19-2.73s-1-12.69,0-17.92c0,0,1.33-10.65,4.92-14.73A40.42,40.42,0,0,1,73.58,88.56Z" style=" fill: #42b35f; " data-color="rgb(66, 179, 95)"><input type="hidden" value="0" name="Deltoid" id="DeltoidBL"></path>
                        <path class="cls-1" d="M211.16,134.33s-2.91,1.82-9.36-5.15c0,0-4.64-5.77-7.8-8.27l-1,4s6.42,1.87,12.08,15.2c0,0,3.67,9.5,4,13.67,0,0,4.42.08,4.92,4.08l1.24-4.85s-1.41-2.77-3.6-12.94A38.54,38.54,0,0,1,211.16,134.33Z" style=" fill: #eee94f; " data-color="rgb(238, 233, 79)"><input type="hidden" value="0" name="Triceps" id="TricepsBR"></path>
                        <path class="cls-1" d="M57.54,134.33s2.91,1.82,9.36-5.15c0,0,4.64-5.77,7.8-8.27l1,4s-6.42,1.87-12.08,15.2c0,0-3.61,9-3.94,13.13,0,0-4.47.62-5,4.62l-1-4a2.71,2.71,0,0,1,.1-1.66,86.64,86.64,0,0,0,3.27-12.17A38.54,38.54,0,0,0,57.54,134.33Z" style=" fill: #eee94f; " data-color="rgb(238, 233, 79)"><input type="hidden" value="0" name="Triceps" id="TricepsBL"></path>
                        <path class="cls-1" d="M193,120.23" data-color=""><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_20" data-name="Layer 20">
                        <path class="cls-1" d="M140.71,166l3.76-1.19-.8,2.6,1.79,1.91-1,2.53h5.73l-3.32,3.64,1.9,1.66-.47,1.66h1.9L149,181.93l1.19.95-.95,1.56.95,1.79h2.37v2.51l3.08,1.5-.95,2.6.95,1.67-1.42,3.56h2.61v1.75h1.79c-1.46,1.94-1.08,7.42-1.08,7.42a7.69,7.69,0,0,1,4.51,4.83c2,3.27,2.37,9.49,2.37,9.49s1.41-9.91,5.95-14.33a39.88,39.88,0,0,0,7.41-14.39l0-8.85a35.12,35.12,0,0,1,1.4-8.56L186,154.28l-2.23-4.44a61.39,61.39,0,0,1-3.41-8.29s-7.6,6.1-24,9.18c0,0-7.57.22-10,.61l-1.85,3.47-2.5,6.33Z" style=" fill: #8b86bc; " data-color="rgb(139, 134, 188)"><input type="hidden" value="0" name="Latissimus Dorsi" id="LatissimusDorsiBR"></path>
                        <path class="cls-1" d="M128,166l-3.76-1.19.8,2.6-1.79,1.91,1,2.53h-5.73l3.32,3.64-1.9,1.66.47,1.66h-1.9l1.19,3.08-1.19.95.95,1.56-.95,1.79h-2.37v2.51l-3.08,1.5.95,2.6L113,194.5l1.42,3.56h-2.61v1.75H110c1.46,1.94,1.08,7.42,1.08,7.42a7.69,7.69,0,0,0-4.51,4.83c-2,3.27-2.37,9.49-2.37,9.49s-1.41-9.91-5.95-14.33a39.88,39.88,0,0,1-7.41-14.39l0-8.85a35.12,35.12,0,0,0-1.4-8.56l-6.77-21.15,2.23-4.44a61.39,61.39,0,0,0,3.41-8.29s7.6,6.1,24,9.18c0,0,7.57.22,10,.61l1.85,3.47,2.5,6.33Z" style=" fill: #8b86bc; " data-color="rgb(139, 134, 188)"><input type="hidden" value="0" name="Latissimus Dorsi" id="LatissimusDorsiBL"></path>
                     </g>
                     <g id="Layer_19" data-name="Layer 19">
                        <path class="cls-1" d="M124.86,167.44a16.62,16.62,0,0,1,.81,1.82c1.86,4.77,5.78,18.86-.81,41.46l4-9.17,2.48,41.28a.18.18,0,0,1-.35.09c-1.86-4.37-10.29-20.5-32.9-18.29a9.73,9.73,0,0,0,5.95-3.09s0-5.9,2.37-9.49c0,0,1.44-4,4.51-4.83,0,0,.87-2.64-1.08-7.42h1.79v-1.75h2.61l-1.42-3.56.95-1.67-.95-2.6,3.08-1.5v-2.51h2.37l.95-1.79-.95-1.56,1.19-.95-1.19-3.08h1.9l-.47-1.66,1.9-1.66-3.32-3.64h5.73l-1-2.53Z" style=" fill: #8b86bc; " data-color="rgb(139, 134, 188)"><input type="hidden" value="0" name="Thoraco Lumbar Fascia" id="ThoracoLumbarFasciaBL"></path>
                        <path class="cls-1" d="M143.42,167.44a16.62,16.62,0,0,0-.81,1.82c-1.86,4.77-5.78,18.86.81,41.46l-4-9.17-2.51,43.26a11,11,0,0,1,.18-1.41c3.66-3.51,8.29-21,33.09-18.77a9.73,9.73,0,0,1-5.95-3.09s0-5.9-2.37-9.49c0,0-1.44-4-4.51-4.83,0,0-.87-2.64,1.08-7.42H156.6v-1.75H154l1.42-3.56-.95-1.67.95-2.6-3.08-1.5v-2.51H150l-.95-1.79.95-1.56-1.19-.95,1.19-3.08h-1.9l.47-1.66-1.9-1.66,3.32-3.64h-5.73l1-2.53Z" style=" fill: #8b86bc; " data-color="rgb(139, 134, 188)"><input type="hidden" value="0" name="Thoraco Lumbar Fascia" id="ThoracoLumbarFasciaBR"></path>
                     </g>
                     <g id="Layer_21" data-name="Layer 21">
                        <path class="cls-1" d="M132.56,289.88a9.5,9.5,0,0,0,2.11-4.85l-1.07-29.43a13,13,0,0,1-4.78-6.1s.31-4.64-1.12-6.31c0,0-6.42-8.32-12.38-11.13a55.3,55.3,0,0,1-16.18,11.13s-8.73,5.3-9.79,9.61c0,0-2.63,8.84-1.23,16.83l0,2.3s2.95,1.38,1.89,2.76l-.35,1.79h.88l-1.05,1.8.53,1.47h1.47v2.7l1,2.24s1.24,3.34,2.37,3.56l1.14.23-1.14,1.41,4.25,1.18v2.3l2.37,1.66h1.89l-.53,1.55,2.28,1.9s1.34,2.11,2,2.11h11.29s2.92.72,7-3.58Z" style=" fill: #962b8d; " data-color="rgb(150, 43, 141)"><input type="hidden" value="0" name="Gluteus Maximus" id="GluteusMaximusBL"></path>
                        <path class="cls-1" d="M95.59,228.95s-3.13,7.66-4.07,10.42c0,0-3.75,5-2.17,13.44" style=" fill: #962b8d; " data-color="rgb(150, 43, 141)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M86.72,233.59s18-18.77,41,9.36a19.42,19.42,0,0,1,1.12,6.43s2.51,6,4.78,6.22" style=" fill: #962b8d; " data-color="rgb(150, 43, 141)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M136.83,289.88a9.5,9.5,0,0,1-2.11-4.85l1.07-29.43a13,13,0,0,0,4.78-6.1s-.31-4.64,1.12-6.31c0,0,6.42-8.32,12.38-11.13a55.3,55.3,0,0,0,16.18,11.13s8.73,5.3,9.79,9.61c0,0,2.63,8.84,1.23,16.83l0,2.3s-2.95,1.38-1.89,2.76l.35,1.79h-.88l1.05,1.8-.53,1.47h-1.47v2.7l-1,2.24s-1.24,3.34-2.37,3.56l-1.14.23,1.14,1.41-4.25,1.18v2.3L167.88,295H166l.53,1.55-2.28,1.9s-1.34,2.11-2,2.11H150.93s-2.92.72-7-3.58Z" style=" fill: #962b8d; " data-color="rgb(150, 43, 141)"><input type="hidden" value="0" name="Gluteus Maximus" id="GluteusMaximusBR"></path>
                        <path class="cls-1" d="M173.8,228.95s3.13,7.66,4.07,10.42c0,0,3.75,5,2.17,13.44" style=" fill: #962b8d; " data-color="rgb(150, 43, 141)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M182.67,233.59s-18-18.77-41,9.36a19.42,19.42,0,0,0-1.12,6.43s-2.51,6-4.78,6.22" style=" fill: #962b8d; " data-color="rgb(150, 43, 141)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                     <g id="Layer_22" data-name="Layer 22">
                        <path class="cls-1" d="M187.45,277.92l-2.56,6.31s1.26,9.75,2.56,11.83c0,0,2.28,18.41-1.28,35.63,0,0-.4,13-2.86,19,0,0-1.27,7.92.16,14.67,0,0,1.62-9.36,4.3-23.39,0,0,1-7.51,1.07-12.59,0-2.06.2-4.11.41-6.16.48-4.74,1.07-14.68.35-31.94A90.54,90.54,0,0,0,187.45,277.92Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Vastus Lateralis" id="VastusLateralisBR"></path>
                        <path class="cls-1" d="M81.48,277.92,84,284.23s-1.26,9.75-2.56,11.83c0,0-2.28,18.41,1.28,35.63,0,0,.4,13,2.86,19,0,0,1.27,7.92-.16,14.67,0,0-1.62-9.36-4.3-23.39,0,0-1-7.51-1.07-12.59,0-2.06-.2-4.11-.41-6.16-.48-4.74-1.07-14.68-.35-31.94A90.54,90.54,0,0,1,81.48,277.92Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Vastus Lateralis" id="VastusLateralisBL"></path>
                     </g>
                     <g id="Layer_23" data-name="Layer 23">
                        <path class="cls-1" d="M158.2,300.62s-8.35,9.78-9.4,26.82c0,0-.37,30-1.43,34.6,0,0-.87-18.53-6.2-31.17a75.08,75.08,0,0,1-3.92-24.39l-.63-6.45,5.42-4.69s4.33,5.79,8.83,5.08C152.86,300.12,155.28,300.88,158.2,300.62Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Gracilis" id="GracilisBR"></path>
                        <path class="cls-1" d="M110.63,300.62s8.35,9.78,9.4,26.82c0,0,.37,30,1.43,34.6,0,0,.87-18.53,6.2-31.17a75.08,75.08,0,0,0,3.92-24.39l.63-6.45-5.42-4.69s-4.33,5.79-8.83,5.08C116,300.12,113.55,300.88,110.63,300.62Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Gracilis" id="GracilisBL"></path>
                     </g>
                     <g id="Layer_24" data-name="Layer 24">
                        <path class="cls-1" d="M184.23,386.6c.33,2.54.77,5.1.77,5.1,1.35,8.95,1.1,14.2-1.61,11.35-.6-1.69-6.75-13.58-6.75-13.58-2.47-3.86-5.79-12.12-5.79-12.12s-4.22-8.79-4.24-13.45V353.06l-1.1-12.67V327.56s-1.67-13-2.17-15.83l-2.83-9.17-.67-1.94,9.16-.09s5.84-1.14,7.17,9a34.33,34.33,0,0,1,2.15,10.07s.46,19.69.84,22.87a28.33,28.33,0,0,0,3.71,11.65s-.62,8.13.59,11.19a20.23,20.23,0,0,0-.3,4.54S183.93,384.34,184.23,386.6Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Biceps Femoris" id="BicepsFemorisBR"></path>
                        <path class="cls-1" d="M84.91,386.6c-.33,2.54-.77,5.1-.77,5.1-1.35,8.95-1.1,14.2,1.61,11.35.6-1.69,6.75-13.58,6.75-13.58,2.47-3.86,5.79-12.12,5.79-12.12s4.22-8.79,4.24-13.45V353.06l1.1-12.67V327.56s1.67-13,2.17-15.83l2.83-9.17.67-1.94-9.16-.09s-5.84-1.14-7.17,9a34.33,34.33,0,0,0-2.15,10.07s-.46,19.69-.84,22.87a28.33,28.33,0,0,1-3.71,11.65s.62,8.13-.59,11.19a20.23,20.23,0,0,1,.3,4.54S85.21,384.34,84.91,386.6Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Biceps Femoris" id="BicepsFemorisBL"></path>
                     </g>
                     <g id="Layer_25" data-name="Layer 25">
                        <path class="cls-1" d="M148.75,330.4s3,14.12,4.21,18.51c0,0,2.28,14.93,2.28,18.27,0,0,1.25,10,1,12.74a.09.09,0,0,1-.18,0c-.43-1.65-2.09-7.71-4-9.61a5.47,5.47,0,0,1-1-1.26c-1.08-1.92-3.61-3.33-3.61-10.24.72.15,1.73-24.08,1.51-25.37Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Semimembranosus" id="SemimembranosusBR"></path>
                        <path class="cls-1" d="M119.91,330.4s-3,14.12-4.21,18.51c0,0-2.28,14.93-2.28,18.27,0,0-1.25,10-1,12.74a.09.09,0,0,0,.18,0c.43-1.65,2.09-7.71,4-9.61a5.47,5.47,0,0,0,1-1.26c1.08-1.92,3.61-3.33,3.61-10.24-.72.15-1.73-24.08-1.51-25.37Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Semimembranosus" id="SemimembranosusBL"></path>
                     </g>
                     <g id="Layer_26" data-name="Layer 26">
                        <path class="cls-1" d="M148.93,333.45c-.07-.22.19-.71.36-.56,2.35,2.2,10.83,9.47,11.58,11.25,0,0,3.86,4.92,5.27,5.62,0,0,1.05,12.82,0,19.67,0,0-2.63,16.34-4.57,21.43,0,0,.53-9.31-1.05-14.58,0,0-.47-4.74-1.81-6.15,0,0-2.12-.65-3.06.44a134.55,134.55,0,0,0-1.5-15.38c-.38-2.37-.78-4.83-1.2-7.22A95.4,95.4,0,0,0,148.93,333.45Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Semitendinosis" id="SemitendinosisBR"></path>
                        <path class="cls-1" d="M119.71,334c.07-.22.32-1.25.15-1.09-2.35,2.2-10.83,9.47-11.58,11.25,0,0-3.86,4.92-5.27,5.62,0,0-1.05,12.82,0,19.67,0,0,2.63,16.34,4.57,21.43,0,0-.53-9.31,1.05-14.58,0,0,.47-4.74,1.81-6.15a2.65,2.65,0,0,1,2.56.63s.72-7.49,2-15.56c.38-2.37.78-4.83,1.2-7.22A97.85,97.85,0,0,1,119.71,334Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="Semitendinosis" id="SemitendinosisBL"></path>
                     </g>
                     <g id="Layer_28" data-name="Layer 28">
                        <path class="cls-1" d="M83.94,285.88c.31,2,2,12.37,4.77,17.28a117.6,117.6,0,0,1,2,16.46s0,18.14-1.23,26c0,0-1.75,6.19-3.33,8.47l-1.06-5s-1.7-6-2.17-18.17c0,0-3.54-14.7-1.32-34.75a63.24,63.24,0,0,0,2.27-10.34A0,0,0,0,1,83.94,285.88Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M185.08,285.88c-.31,2-2,12.37-4.77,17.28a117.6,117.6,0,0,0-2,16.46s0,18.14,1.23,26c0,0,1.75,6.19,3.33,8.47l1.06-5s1.7-6,2.17-18.17c0,0,3.54-14.7,1.32-34.75a63.24,63.24,0,0,1-2.27-10.34A0,0,0,0,0,185.08,285.88Z" style=" fill: #de6789; " data-color="rgb(222, 103, 137)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M173.73,384.28s-5.13,10.45-5.84,13.3l1.85,54.16s4,13.83,16.25,11.54l1.82-11.91a116.7,116.7,0,0,0,1.5-23.73,67.12,67.12,0,0,0-1.11-11.51c-.63-3.53-2.4-13.09-2.4-13.09-.84.78-2.54.78-3-1.36Z" style=" fill: #c93585; " data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Gastrocnemius" id="GastrocnemiusBR"></path>
                        <path class="cls-1" d="M95,384.28s5.13,10.45,5.84,13.3l-1.85,54.16s-4,13.83-16.25,11.54l-1.82-11.91a116.7,116.7,0,0,1-1.5-23.73,67.12,67.12,0,0,1,1.11-11.51c.63-3.53,2.4-13.09,2.4-13.09.84.78,2.54.78,3-1.36Z" style=" fill: #c93585; " data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Gastrocnemius" id="GastrocnemiusBL"></path>
                        <path class="cls-1" d="M156.65,528.22s4.82,2.48,6.82,6.19c0,0,2.71,4.13,4.85,4.85,0,0,3,.71,5.13-3.28a10.25,10.25,0,0,0,.86-4,4.23,4.23,0,0,1,3.57-2,1,1,0,0,0,1-1.23l-1.94-8.44s-1.24-9.37,2.21-25c0,0-4.11,8.37-5.39,14.36,0,0,3.56-21.09,4.7-23.52,0,0,2.15-15.71,6.57-22.55,0,0-9.83,2.35-15.26-10.8,0,0-.33,16.15-15.93,15.49,0,0,4.1,13.64,6.71,21.07l-.18,18.25s-.22,5.61-1.56,7.73l-1.34,2.11a17.33,17.33,0,0,0-2,7.2s-.33,2.62-.32,3.63Z" style=" fill: #c93585; " data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Soleus" id="SoleusBR"></path>
                        <path class="cls-1" d="M112.16,528.22s-4.82,2.48-6.82,6.19c0,0-2.71,4.13-4.85,4.85,0,0-3,.71-5.13-3.28a10.25,10.25,0,0,1-.86-4,4.23,4.23,0,0,0-3.57-2,1,1,0,0,1-1-1.23l1.94-8.44s1.24-9.37-2.21-25c0,0,4.11,8.37,5.39,14.36,0,0-3.56-21.09-4.7-23.52,0,0-2.15-15.71-6.57-22.55,0,0,9.83,2.35,15.26-10.8,0,0,.33,16.15,15.93,15.49,0,0-4.1,13.64-6.71,21.07l.18,18.25s.22,5.61,1.56,7.73l1.34,2.11a17.33,17.33,0,0,1,2,7.2s.33,2.62.32,3.63Z" style=" fill: #c93585; " data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="Soleus" id="SoleusBL"></path>
                        <path class="cls-1" d="M171.45,487.66s-2.28,20.38-1.85,25.23c0,0-.65,12,1.85,16.82a13.44,13.44,0,0,1,1.6,6.94" style=" fill: #c93585; " data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partBR"></path>
                        <path class="cls-1" d="M97.15,487.66S99.43,508,99,512.89c0,0,.65,12-1.85,16.82a13.44,13.44,0,0,0-1.6,6.94" style=" fill: #c93585; " data-color="rgb(201, 53, 133)"><input type="hidden" value="0" name="part" id="partBR"></path>
                     </g>
                  </g>
               </svg>
            </div>
         </div>
         <!--        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">-->
         <h3>Personal Information</h3>
         <hr>

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="form-group">
                  <input type="text" class="form-control" name="first_name" placeholder="First Name" id="first_name" required="required">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name" id="last_name" required="required">
               </div>
               <div class="form-group">
                  <input type="date" class="form-control" name="dob" placeholder="Date of Birth" id="dob" required="required">
               </div>
               <div class="form-group">
                  <input type="number" class="form-control" name="phone" placeholder="Phone #" id="phone" required="required">
               </div>
               <hr>
               <div class="form-group">
                  <input type="text" class="form-control" name="street_address" placeholder="Sreet Address/Apt#" id="street_address" required="required">
               </div>
               <div class="form-group">
                  <select class="form-control" id="state" name="state">
                     <option value="" disabled="" selected="" hidden="">State</option>
                     <option value="AL">Alabama</option>
                     <option value="AK">Alaska</option>
                     <option value="AZ">Arizona</option>
                     <option value="AR">Arkansas</option>
                     <option value="CA">California</option>
                     <option value="CO">Colorado</option>
                     <option value="CT">Connecticut</option>
                     <option value="DE">Delaware</option>
                     <option value="DC">District Of Columbia</option>
                     <option value="FL">Florida</option>
                     <option value="GA">Georgia</option>
                     <option value="HI">Hawaii</option>
                     <option value="ID">Idaho</option>
                     <option value="IL">Illinois</option>
                     <option value="IN">Indiana</option>
                     <option value="IA">Iowa</option>
                     <option value="KS">Kansas</option>
                     <option value="KY">Kentucky</option>
                     <option value="LA">Louisiana</option>
                     <option value="ME">Maine</option>
                     <option value="MD">Maryland</option>
                     <option value="MA">Massachusetts</option>
                     <option value="MI">Michigan</option>
                     <option value="MN">Minnesota</option>
                     <option value="MS">Mississippi</option>
                     <option value="MO">Missouri</option>
                     <option value="MT">Montana</option>
                     <option value="NE">Nebraska</option>
                     <option value="NV">Nevada</option>
                     <option value="NH">New Hampshire</option>
                     <option value="NJ">New Jersey</option>
                     <option value="NM">New Mexico</option>
                     <option value="NY">New York</option>
                     <option value="NC">North Carolina</option>
                     <option value="ND">North Dakota</option>
                     <option value="OH">Ohio</option>
                     <option value="OK">Oklahoma</option>
                     <option value="OR">Oregon</option>
                     <option value="PA">Pennsylvania</option>
                     <option value="RI">Rhode Island</option>
                     <option value="SC">South Carolina</option>
                     <option value="SD">South Dakota</option>
                     <option value="TN">Tennessee</option>
                     <option value="TX">Texas</option>
                     <option value="UT">Utah</option>
                     <option value="VT">Vermont</option>
                     <option value="VA">Virginia</option>
                     <option value="WA">Washington</option>
                     <option value="WV">West Virginia</option>
                     <option value="WI">Wisconsin</option>
                     <option value="WY">Wyoming</option>
                  </select>
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="zip_code" placeholder="Zip Code" id="zip_code" required="required">
               </div>
               <hr>
               <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email Id" id="email" required="required">
               </div>
               <h3>Emergency Contact Information</h3>
               <hr>
               <div class="form-group">
                  <input type="text" class="form-control" name="contact_name" placeholder="Contact's Name" id="contact_name" required="required">
               </div>
               <div class="form-group">
                  <input type="number" class="form-control" name="contact_phone" placeholder="Contact's Phone#" id="contact_phone" required="required">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="relationship_to_you" placeholder="Relationship To You" id="relationship_to_you" required="required">
               </div>
               <h3>Primary Care Physician</h3>
               <hr>
               <div class="form-group">
                  <input type="text" class="form-control" name="physician_name" placeholder="Physician's Name" id="physician_name" required="required">
               </div>
               <div class="form-group">
                  <input type="number" class="form-control" name="physician_phone" placeholder="Physician's Phone#" id="physician_phone" required="required">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="physician_address" placeholder="Physicians's Address" id="physician_address" required="required">
               </div>
               <hr>
               <div class="form-group">
                  <input type="text" class="form-control" name="last_physical" placeholder="Last Physical" id="last_physical" required="required">
               </div>
               <hr>
               <div class="form-group">
                  <input type="text" class="form-control" name="hdl" placeholder="HDL" id="hdl" required="required">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="ldl" placeholder="LDL" id="ldl" required="required">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="triglycerides" placeholder="Triglycerides" id="triglycerides" required="required">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" name="blood_preasure" placeholder="Blood Preasure" id="blood_preasure" required="required">
               </div>
               <h3>Personal &amp; Family Medical History</h3>
               <hr>
               <div class="custom-slider">
                  <h4>Do you have past or current injuries?</h4>
                  <label class="switch">
                     <input class="switch-input" type="checkbox">
                     <span class="switch-label" data-on="Yes" data-off="No"></span>
                     <span class="switch-handle"></span>
                  </label>
                  <div class="form-group">
                     <input type="hidden" class="form-control" name="ques1ans" placeholder="Please Specify....." value="NO" id="ques1ans">
                  </div>
               </div>
               <br>
               <div class="form-group">
                  <h4>Do you have one or more sensations listed during movement, check all that apply?</h4>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques2" id="Discomfort1" name="Discomfort">
                     <label class="custom-control-label" for="Discomfort1">Discomfort</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques2" id="Pain1" name="Pain">
                     <label class="custom-control-label" for="Pain1">Pain</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques2" id="Tension1" name="Tension">
                     <label class="custom-control-label" for="Tension1">Tension</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques2" id="Stiffness1" name="Stiffness">
                     <label class="custom-control-label" for="Stiffness1">Stiffness</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques2" id="Soreness1" name="Soreness">
                     <label class="custom-control-label" for="Soreness1">Soreness</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques2" id="Constricted1" name="Constricted">
                     <label class="custom-control-label" for="Constricted1">Constricted</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques2" id="Restricted1" name="Restricted">
                     <label class="custom-control-label" for="Restricted1">Restricted</label>
                  </div>
                  <input type="hidden" class="form-control" id="ques2ans" name="ques2ans">
               </div>
               <br>
               <div class="form-group">
                  <h4>Do you have one or more sensations while sitting, check all that apply?</h4>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques3" id="Discomfort2" name="Discomfort">
                     <label class="custom-control-label" for="Discomfort2">Discomfort</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques3" id="Pain2" name="Pain">
                     <label class="custom-control-label" for="Pain2">Pain</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques3" id="Tension2" name="Tension">
                     <label class="custom-control-label" for="Tension2">Tension</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques3" id="Stiffness2" name="Stiffness">
                     <label class="custom-control-label" for="Stiffness2">Stiffness</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques3" id="Soreness2" name="Soreness">
                     <label class="custom-control-label" for="Soreness2">Soreness</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques3" id="Constricted2" name="Constricted">
                     <label class="custom-control-label" for="Constricted2">Constricted</label>
                  </div>
                  <input type="hidden" class="form-control" id="ques3ans" name="ques3ans">
               </div>
               <br>
               <div class="form-group">
                  <h4>Do your sensations cause you to experience, check all that apply?</h4>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques4" id="Irritability" name="Irritability">
                     <label class="custom-control-label" for="Irritability">Irritability</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques4" id="Anger" name="Anger">
                     <label class="custom-control-label" for="Anger">Anger</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques4" id="Anxiety" name="Anxiety">
                     <label class="custom-control-label" for="Anxiety">Anxiety</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques4" id="Insomnia" name="Insomnia">
                     <label class="custom-control-label" for="Insomnia">Insomnia</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques4" id="Depression" name="Depression">
                     <label class="custom-control-label" for="Depression">Depression</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques4" id="Uneasiness" name="Uneasiness">
                     <label class="custom-control-label" for="Uneasiness">Uneasiness</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques4" id="vulnerability" name="vulnerability">
                     <label class="custom-control-label" for="vulnerability">vulnerability</label>
                  </div>
                  <input type="hidden" class="form-control" id="ques4ans" name="ques4ans">
               </div>
               <br>
               <div class="form-group">
                  <h4>Do you consistently feel stress in one or more areas of your life?</h4>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques5" id="Work" name="Work">
                     <label class="custom-control-label" for="Work">Work</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques5" id="Family" name="Family">
                     <label class="custom-control-label" for="Family">Family</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques5" id="Social" name="Social">
                     <label class="custom-control-label" for="Social">Social</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                     <input type="checkbox" class="custom-control-input ques5" id="Other" name="Other">
                     <label class="custom-control-label" for="Other">Other</label>
                  </div>
                  <input type="hidden" class="form-control" id="ques5ans" name="ques5ans">
               </div>
               <br>
               <div class="custom-slider">
                  <h4>Do you have difficult laying on your front, back, or side?</h4>
                  <label class="switch">
                     <input class="switch-input" type="checkbox">
                     <span class="switch-label" data-on="Yes" data-off="No"></span>
                     <span class="switch-handle"></span>
                  </label>
                  <div class="form-group">
                     <input type="hidden" class="form-control" name="ques6ans" placeholder="Please Specify....." value="NO" id="ques6ans">
                  </div>
               </div>
               <br>
               <div class="custom-slider">
                  <h4>Do you have an allergy to oils, lotions, or ointments?</h4>
                  <label class="switch">
                     <input class="switch-input" type="checkbox">
                     <span class="switch-label" data-on="Yes" data-off="No"></span>
                     <span class="switch-handle"></span>
                  </label>
                  <div class="form-group">
                     <input type="hidden" class="form-control" name="ques7ans" placeholder="Please Specify....." value="NO" id="ques7ans">
                  </div>
               </div>
               <br>
               <div class="custom-slider">
                  <h4>Do you wear contact lenses?</h4>
                  <label class="switch">
                     <input class="switch-input" type="checkbox">
                     <span class="switch-label" data-on="Yes" data-off="No"></span>
                     <span class="switch-handle"></span>
                  </label>
                  <div class="form-group">
                     <input type="hidden" class="form-control" name="ques8ans" placeholder="Please Specify....." value="NO" id="ques8ans">
                  </div>
               </div>
               <br>
               <div class="custom-slider">
                  <h4>Do you wear dentures?</h4>
                  <label class="switch">
                     <input class="switch-input" type="checkbox">
                     <span class="switch-label" data-on="Yes" data-off="No"></span>
                     <span class="switch-handle"></span>
                  </label>
                  <div class="form-group">
                     <input type="hidden" class="form-control" name="ques9ans" placeholder="Please Specify....." value="NO" id="ques9ans">
                  </div>
               </div>
               <br>
               <div class="custom-slider">
                  <h4>Do you wear hearing aids?</h4>
                  <label class="switch">
                     <input class="switch-input" type="checkbox">
                     <span class="switch-label" data-on="Yes" data-off="No"></span>
                     <span class="switch-handle"></span>
                  </label>
                  <div class="form-group">
                     <input type="hidden" class="form-control" name="ques10ans" placeholder="Please Specify....." value="NO" id="ques10ans">
                  </div>
               </div>
               <br>
               <div class="custom-slider">
                  <h4>Do you currently participate in a cardiovascular training routine?</h4>
                  <label class="switch">
                     <input class="switch-input" type="checkbox">
                     <span class="switch-label" data-on="Yes" data-off="No"></span>
                     <span class="switch-handle"></span>
                  </label>
                  <div class="form-group">
                     <input type="hidden" class="form-control" name="ques11ans" placeholder="Please Specify....." value="NO" id="ques11ans">
                  </div>
               </div>
               <br>
               <div class="custom-slider">
                  <h4>Do you currently participate in resistance (weight) training routine?</h4>
                  <label class="switch">
                     <input class="switch-input" type="checkbox">
                     <span class="switch-label" data-on="Yes" data-off="No"></span>
                     <span class="switch-handle"></span>
                  </label>
                  <div class="form-group">
                     <input type="hidden" class="form-control" name="ques12ans" placeholder="Please Specify....." value="NO" id="ques12ans">
                  </div>
               </div>
               <br>
               <div class="custom-slider">
                  <h4>Do you currently participate in a stretch training routine?</h4>
                  <label class="switch">
                     <input class="switch-input" type="checkbox">
                     <span class="switch-label" data-on="Yes" data-off="No"></span>
                     <span class="switch-handle"></span>
                  </label>
                  <div class="form-group">
                     <input type="hidden" class="form-control" name="ques13ans" placeholder="Please Specify....." value="NO" id="ques13ans">
                  </div>
               </div>
               <br>
               <div class="custom-slider">
                  <h4>Do you sit at your workstation without regular timed breaks?</h4>
                  <label class="switch">
                     <input class="switch-input" type="checkbox">
                     <span class="switch-label" data-on="Yes" data-off="No"></span>
                     <span class="switch-handle"></span>
                  </label>
                  <div class="form-group">
                     <input type="hidden" class="form-control" name="ques14ans" placeholder="Please Specify....." value="NO" id="ques14ans">
                  </div>
               </div>
               <br>
               <h3>Goals &amp; Other Information</h3>
               <hr>
               <div class="form-group">
                  <textarea id="goals" class="form-control" name="goals" placeholder="What goals do you want to achieve through these sessions?" required=""></textarea>
               </div>
               <div class="form-group">
                  <textarea id="other_info" class="form-control" name="other_info" placeholder="Is there any other significant information about your health that your DEMOR Hotspot Therapy Practitioner should know about?" required=""></textarea>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <h3>Authorization and Disclaimers</h3>
               <hr>
               <!--
                  <p class="lead">
                     Male and female genitalia and women's breasts will not be exposed or massaged at any time. Draping will be used during the session and only the area being worked on will be uncovered.
                  </p>
                  <div class="justify-content-end d-flex">
                     <div class="form-group">
                        <input type="text" class="form-control" name="genital initials" maxlength="5" style="text-align:right;" placeholder="...genital initials" id="genital initials">
                     </div>
                  </div>
-->
               <!--
                  <p class="lead">This is a therapeutic bodywork session and any sexual remarks or advances will terminate the session immediately and you will be liable for payment of the scheduled treatment.</p>
                  <div class="justify-content-end d-flex">
                     <div class="form-group">
                        <input type="text" class="form-control" name="sexual initials" maxlength="5" style="text-align:right" placeholder="...sexual initials" id="sexual initials">
                     </div>
                  </div>
-->
               <p class="lead">Authorization and Disclaimers
                  Draping during the session, and the working area will be uncovered. DHST bodywork session. Therefore, as a result of this, give my consent to receive DEMOR HotSpot Treatment services., and I acknowledge and agree that I am doing so at my own risk. My health and safety concerning such Services are my sole responsibility. I acknowledge that my receipt of the Services from DHST, Inc. may result in feeling painful sensations. My decision to receive Services from DHST, Inc. is voluntary, and I know of, understand, and assume all the risks associated.
               </p>
               <p class="lead"> I verify that all information is correct and current to the best of my knowledge. I further understand that DEMOR HotSpot Therapy should not be construed as a substitute for medical examination, diagnosis, or treatment that should be seen by a Physician. I agree to keep the specialist updated on any changes in my medical profile and understand that there shall be no liability on the specialist part should I fail to do so. I understand that any information provided is for safety purposes and will be kept strictly confidential, except that DHST, Inc. may use such information for statistical analysis or scientific purposes.</p>
               <!--                  <p class="lead"> In exchange for receiving Services from DHST, Inc., I, for myself and on behalf of my heirs, executors, administrators, and personal representatives, as a result of this waive, release, discharge and hold harmless DHST, Inc., its members, officers, employees and agents from all liability for all injuries, including death, damages or claims relating to or resulting from my receipt of the Services, now or in the future, foreseen or unforeseen. Further, I will indemnify and hold DHST, Inc., its members, officers, agents, and employees, harmless from and against all claims, rights, damages, liabilities, losses, costs and expenses (including reasonable attorneys' fees) arising from or in connection with any injuries to other persons or damage to property caused by or attributed to me.</p>-->
               <p class="lead"> I, the undersigned participant, affirm that I am of the age of 17 years or older and that I am freely signing this agreement. I certify that I have read this agreement, that I fully understand its content and that this release cannot be modified orally. I am aware that this is a release of liability and a contract and that I am signing it of my own free will</p>
               <div class="justify-content-end d-flex">
                  <div class="form-group">
                     <input class="form-control" type="text" name="authorizationSignature" style="height:50px;font-size:30px;font-style: italic;text-align: right;" placeholder="...signature " id="authorizationSignature" required="required">
                  </div>
               </div>
               <div class="justify-content-center d-flex">

                  <button type="submit" class="btn" style="background: #fe612f;color: white;width: 33%;">Submit</button>

               </div>
               <br>
            </div>
            <hr>
         </div>

         <!--        </div>-->
      </div>
   </form>
   <script>
      (function() {
         $(document).ready(function() {
            // js for checkbox canges
            var checkBox1 = [];
            var checkBox2 = [];
            var checkBox3 = [];
            var checkBox4 = [];

            function insertValueInArraya(condition, value, arrayName, elementId) {
               if (condition) {
                  arrayName.push(value);
               } else {
                  var index = arrayName.indexOf(value);
                  if (index > -1) {
                     arrayName.splice(index, 1);
                  }
               }
               $(elementId).val(arrayName);
            }
            $('.ques2').on('change', function() {
               var value = $(this).attr('name');
               var condition = $(this).is(':checked');
               insertValueInArraya(condition, value, checkBox1, '#ques2ans');
            })
            $('.ques3').on('change', function() {
               var value = $(this).attr('name');
               var condition = $(this).is(':checked');
               insertValueInArraya(condition, value, checkBox2, '#ques3ans');
            })
            $('.ques4').on('change', function() {
               var value = $(this).attr('name');
               var condition = $(this).is(':checked');
               insertValueInArraya(condition, value, checkBox3, '#ques4ans');
            })
            $('.ques5').on('change', function() {
               var value = $(this).attr('name');
               var condition = $(this).is(':checked');
               insertValueInArraya(condition, value, checkBox4, '#ques5ans');
            })


            $('.switch-input').on('change', function() {
               //        console.log($(this).parent().children()[0]);
               var result = $($(this).parent().children()[0]).is(':checked') ? 'yes' : 'no';
               var element = $($($(this).parent().parent().children()[2]).children()[0]);
               if (result == "yes") {
                  console.log(element)
                  element.attr("type", "text");
                  element.attr("value", "");
                  console.log(element.attr("value"))
               } else {
                  element.attr("type", "hidden");
                  element.attr("value", "NO");
                  console.log(element.attr("value"))
               }
               console.log(result)
            });

         });
      })();
   </script>
   <script>
      $("path").hover(
         function() {
            var name = $($(this).children()[0]).attr('name');
            var value = $($(this).children()[0]).attr('value');
            //        console.log(name);
            if (name != "part") {
               $('#part-name').text(name);
               $('#pain').text("Pain level : " + value);
               $('#part').css('display', 'block');
            }

         },
         function() {
            $('#part-name').text("");
            $('#part').css('display', 'none');
         });


      $("path").click(function() {
         var name = $($(this).children()[0]).attr('name');
         var value = $($(this).children()[0]).attr('value');
         if (name != "part") {
            if (value < 10) {
               var colors = ['#ff8080', '#ff6666', '#ff4d4d', '#ff3333', '#ff1a1a', '#ff0000', '#e60000', '#cc0000', '#b30000', '#990000'];

               //console.log(value)
               $($(this).children()[0]).attr('value', ++value);
               $(this).css("fill", colors[value - 1]);
               $('#pain').text("Pain level : " + value);
            } else {

               $($(this).children()[0]).attr('value', 0);
               //                 $(this).attr('data-color');
               $(this).css('fill', $(this).attr('data-color'));
               $('#pain').text("Pain level : 0");
               //		$(this).css("fill", 'white');
            }
         }
      });
   </script>
   <script>
      //       $(function(){
      //
      //  // jQuery methods go here...
      ////setTimeout(function(){
      //    $("input").each(function(index,el ) {
      ////  console.log(el);
      ////        if
      ////        console.log(el.type)
      //        if(($(el).attr('id') == undefined) && ($(el).attr('tyoe') != "checkbox"))
      //        console.log(el)
      //});
      ////},2000);
      //});
   </script>
   
   <script>
  
       $(document).on('submit', 'form', function(e){
    e.preventDefault();
    //your code goes here
    //100% works
//    alert("hello")
           var params = "";
           var sql = "";
         var elements  = $('input');
       for(var i = 0; i<elements.length;i++){
           var id = $(elements[i]).attr('id');
           var type = $(elements[i]).attr('type');
           var value = $(elements[i]).attr('value');
           var val = $(elements[i]).val();
           if(id != "partFL" && id !="partBR" && type != "checkbox"){
               if(value == undefined){
//                 console.log($(elements[i]).attr('id') + " = " + $(elements[i]).val());
                   params += `${id}=${val}&`;
                   sql += `${id} VARCHAR(255) NOT NULL ,`;
               }else{
                   if(value == ''){
//                       console.log($(elements[i]).attr('id') +  =  + $(elements[i]).val());
                        params += `${id}=${val}&`;
                       sql += `${id} VARCHAR(255) NOT NULL ,`;

                   }else{
//                       console.log($(elements[i]).attr('id') +  =  + value);
            params += `${id}=${value}&`;
                       sql += `${id} VARCHAR(255) NOT NULL ,`;
                   }
                      
               }
               
               
              
           }
//           console.log(params)
       }
           var elements  = $('textarea');
       for(var i = 0; i<elements.length;i++){
//           var id = $(elements[i]).attr('id');
//           var type = $(elements[i]).attr('type');
//           var value = $(elements[i]).attr('value');
           var val = $(elements[i]).val();
           var id = $(elements[i]).attr('id');
               
                
//                       console.log(id +  =  + val)
 params += `${id}=${val}&`;
           sql += `${id} VARCHAR(255) NOT NULL ,`;
       }
//           console.log(params);
//           console.log(sql);
           var params = `"${params.slice(0, -1)}"`
//           var ashu = eval(params);
           $.ajax({
              url:"ajax.php",
               type:"Post",
               data:params,
               success:function(data){
                   if(data){
//                       alert("success")
                       $('#thankyoubox').css('display','block');
                       $('form').css('display','none');
                   }else{
                       alert("something went wrong")
                   }
               }
           });
           
});
//       
//       function printall(event){
//      event.preventDefault();
//        var elements  = $('input');
//       for(var i = 0; i<elements.length;i++){
//           var id = $(elements[i]).attr('id');
//           var type = $(elements[i]).attr('type');
//           var value = $(elements[i]).attr('value');
////           if(id != "part FL" && id !="part BR" && type != "checkbox" && type != "hidden" ){
//           if(type == "hidden" ){
//                       var search = ' ';
//var replaceWith = '';
//
//var result = id.split(search).join(replaceWith);
//console.log(result)
//               $(elements[i]).attr('id',result)
////               $(elements[i]).attr('required',"true")
////               if(value == undefined || value != "NO"){
////                 console.log($(elements[i]).attr('id') + " = " + $(elements[i]).val())         
////               }else{
////                   console.log($(elements[i]).attr('id') + " = " + value)   
////               }
//              
//           }
//           
//       }
//       console.log('"hello"')
//  }
    </script>
   
</body>

</html>


<pre>   <?php
         //print_r($_POST)


         ?> </pre>