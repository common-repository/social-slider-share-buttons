<?php ob_start(); 
//define all variables the needed alot
$super_social_settings = ss_read_options();
?>
 <style type=text/css>
 //.shareDiv div{background-color:#000000 !important;}
 .lightbox {

      position:fixed;

      top:0;

      left:0;

      width:100%;

      height:100%;

      background:rgba(0, 0, 0, .8);

   }
.shareWrapperViewport {
    bottom: 10px;
    height: 150px;
    left: 10px;
    position: fixed;
    width: 150px;
    z-index: 10003;
}
.shareWrapperViewport:hover{
    height: 350px;
    width: 350px;
}
  *{
    outline: 0;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  }
  
  ::-moz-selection { background: rgba(0,0,0,0); }
  ::selection { background: rgba(0,0,0,0);}
    body{
      font-family: sans-serif;
      background: #ddd;
    }
    
    #circle-mod{
      position: absolute;
      bottom: 0;
      left: 10px;
    }
    
    #container-circle {
      position: relative;
      height: 100px;
      width: 100px;
    }
    
    #base-button {
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 45px;
      height: 70px;
      width: 70px;
      background: #fff;
      -webkit-box-shadow: 0px 1px 3px rgba(0,0,0,.5);
      -moz-box-shadow: 0px 1px 3px rgba(0,0,0,.5);
      -o-box-shadow: 0px 1px 3px rgba(0,0,0,.5);
      -ms-box-shadow: 0px 1px 3px rgba(0,0,0,.5);
      box-shadow: 0px 1px 3px rgba(0,0,0,.5);
      padding: 0;
    }
    
    #base-button div span{
      cursor: pointer;
      cursor: hand;
      height: 70px;
      display: block;
      text-align: center;
      -webkit-transition: all 400ms;
      -moz-transition: all 400ms;
      -o-transition: all 400ms;
      -ms-transition: all 400ms;
      transition: all 400ms;
      -webkit-transform: rotate(0);
      -moz-transform: rotate(0);
      -o-transform: rotate(0);
      -ms-transform: rotate(0);
      transform: rotate(0);
    }
    /* rotate the eff out of the main button */
    #base-button.open div span{
      transform: rotate(765deg);
      -webkit-transform: rotate(765deg);
      -moz-transform: rotate(765deg);
      -o-transform: rotate(765deg);
      -ms-transform: rotate(765deg);
    }
    
    #base-button div{
      margin: 4px;
      height: 60px;
      width: 60px;
      background: #db3a2b; /* Old browsers */
      background: -moz-linear-gradient(top,  #db3a2b 0%, #cf0404 100%); /* FF3.6+ */
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#db3a2b), color-stop(100%,#cf0404)); /* Chrome,Safari4+ */
      background: -webkit-linear-gradient(top,  #db3a2b 0%,#cf0404 100%); /* Chrome10+,Safari5.1+ */
      background: -o-linear-gradient(top,  #db3a2b 0%,#cf0404 100%); /* Opera 11.10+ */
      background: -ms-linear-gradient(top,  #db3a2b 0%,#cf0404 100%); /* IE10+ */
      background: linear-gradient(top,  #db3a2b 0%,#cf0404 100%); /* W3C */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#db3a2b', endColorstr='#cf0404',GradientType=0 ); /* IE6-9 */
      border-radius: 45px;
      border: 1px solid #cf0404;
      line-height: 60px;
      text-align: center;
      color: #fff;
      font-size: 16px;
      font-weight: 700;
      padding: 0;
    }
    
    .btnss{
      position: absolute;
      height: 50px;
      width: 50px;
      border-radius: 25px;
      top: 15px;
      left: 15px;
      background: #fff;
      -webkit-transition: all 250ms;
      -moz-transition: all 250ms;
      -o-transition: all 250ms;
      -ms-transition: all 250ms;
      transition: all 250ms;
      -webkit-box-shadow: 0px 1px 3px rgba(0,0,0,.5);
      -moz-box-shadow: 0px 1px 3px rgba(0,0,0,.5);
      -o-box-shadow: 0px 1px 3px rgba(0,0,0,.5);
      -ms-box-shadow: 0px 1px 3px rgba(0,0,0,.5);
      box-shadow: 0px 1px 3px rgba(0,0,0,.5);
    }
    .btnss div span a{
    color: #ffffff;
    text-decoration: none;
    }
    .btnss.open{
      transition: all 350ms;
      -webkit-transition: all 350ms;
      -webkit-transition-timing-function: cubic-bezier(0.250, 0.250, 0.400, 1); /* older webkit */
      -webkit-transition-timing-function: cubic-bezier(0.250, 0.250, 0.400, 1.650); 
      -moz-transition-timing-function: cubic-bezier(0.250, 0.250, 0.400, 1.650); 
      -ms-transition-timing-function: cubic-bezier(0.250, 0.250, 0.400, 1.650); 
      -o-transition-timing-function: cubic-bezier(0.250, 0.250, 0.400, 1.650); 
      transition-timing-function: cubic-bezier(0.250, 0.250, 0.400, 1.650); /* custom */
    }
    
    .btnss div{
      margin: 5px;
      width: 40px;
      height: 40px;
      background: #222;
      border-radius: 20px;
      line-height: 40px;
      text-align: center;
      color: #fff;
      font-size: 12px;
    }
    
    #button-1.open{
      top: -125px;
      left: 25px;
    }
    
    #button-1.open.clicked{
      top: -135px;
      left: 15px;
    }
    
    #button-2.open{
      top: -105px;
      left: 80px;
    }
    
    #button-3.open{
      top: -75px;
      left: 125px;
    }
    
    #button-4.open{
      top: -30px;
      left: 160px;
    }
    
    #button-5.open{
      left: 175px;
      top: 25px;
    }
    
    /* Hack for webkit. WTF?  -  Apparently webkit is off by 10
    * Sorry for android user default broswer will be off by 10
    */
    @media screen and (-webkit-min-device-pixel-ratio:0){
      #base-button div{
        line-height: 60px;
      }
      
    }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
  <script defer>
    $(function(){
          var delay = 40, delayTime, btns = $('.btnss');
          
        $('#base-button').toggle(function(){
          $(this).addClass('open');
          btns.each(function(i){
            delayTime = i * delay;
            var ele = $(this);
            
            window.setTimeout(function(){
              
              ele.addClass('open');
              
            }, delayTime);
            
          });
          
          
        }, function(){
          
          $(this).removeClass('open');
          var ii = 0;
          
          $($(btns).get().reverse()).each(function(i){
            
            delayTime = i * delay;
            var ele = $(this);
            
            window.setTimeout(function(){
              
              ele.removeClass('open');
              
            }, delayTime);
            
          });
          
        
        });
      
      })
  </script>
<?php
$out = ob_get_clean();
return $out;
?>