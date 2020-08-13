<!DOCTYPE html>
<html>
<head>
<meta name="theme-color" content="#2874f0" id="themeColor"/>
<meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<title></title>
<style type="text/css">
 *{ margin:0; padding:0; box-sizing:border-box; outline:none; }
a{ text-decoration:none; cursor:none; color:black; }

main#main{  position:relative; }
div.svg-style div.bg-color{ background:linear-gradient(MediumSeaGreen,transparent);  }
div.svg-style div.bg-color div.sarech-bar-div{ margin:10% 0; padding:1%; text-align:center; position:relative; }
div.svg-style div.bg-color div.sarech-bar-div input{ width:70%; padding:1% 3%; margin:2% 0; font-size:25px; font-weight:bold; background:transparent; border:2px solid #2874f0; border-radius:10px; box-shadow:5px 5px 10px 2px rgba(0,0,0,0.3);  }
div.svg-style div.bg-color div.sarech-bar-div input:focus{ box-shadow:5px 5px 10px 2px rgba(0,0,0,0.3), 0 0 15px 0 #2874f0; }
div.svg-style div.bg-color div.sarech-bar-div div.search-content{ position:absolute; left:50%; transform:translatex(-50%); width:90%; text-align:left; overflow:auto; background:#eee; color:white; height:0; border-radius:10px; z-index:5; background:linear-gradient(30deg,#2874f0,MediumSeaGreen); opacity:0; transition:.3s; }
div.svg-style div.bg-color div.sarech-bar-div input:focus ~ div.search-content{ height:300px; box-shadow:0 15px 20px 10px rgba(0,0,0,0.5); opacity:1; }
div.svg-style div.bg-color div.sarech-bar-div div.search-content:hover{ height:300px; box-shadow:0 15px 20px 10px rgba(0,0,0,0.5); opacity:1; }
div.svg-style div.bg-color div.sarech-bar-div div.search-content div#search-home-length{ font-size:10px; padding:1% 5%;  }

div.svg-style div.bg-color div.sarech-bar-div div.search-content div.search-url-div{ border:1px solid #ccc; border-radius:5px; margin:3% 1%; padding:2% 1%; position:relative; }
div.svg-style div.bg-color div.sarech-bar-div div.search-content div.search-url-div:hover{ background:rgba(0,0,0,0.3); }
div.svg-style div.bg-color div.sarech-bar-div div.search-content div.search-url-div:active{ background:linear-gradient(30deg,#2874f0,MediumSeaGreen); }

div.svg-style div.bg-color div.sarech-bar-div div.search-content div.search-url-div a{ display:inline-block; width:80%; text-transform:uppercase; color:white; font-size:20px; text-shadow:3px 3px 3px rgba(0,0,0,0.5); font-weight:bold;  }
div.svg-style div.bg-color div.sarech-bar-div div.search-content div.search-url-div p{ width:80%; color:#ccc; font-size:10px; }
div.svg-style div.bg-color div.sarech-bar-div div.search-content div.search-url-div span{ color:white; position:absolute; top:50%; right:2%; transform:translatey(-50%); font-size:10px; font-weight:bold; }

div.search-content-no-record{ position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); background:#eee; color:#eee; width:60%; padding:10% 5%; border-radius:10px; box-shadow:10px 10px 15px 5px rgba(0,0,0,0.5); text-align:center; }
div.search-content-no-record div{ background:#ccc; padding:5% 3%; font-weight:bold; border-radius:30px;  }

/**************************************/
div.tree-dot-div{ position:absolute; top:20px; left:20px; width:32px; min-height:32px; z-index:10; }
div.background-div{ position:fixed; top:0; left:0; width:100%; min-height:100vh; display:none; transition:.3s; background:rgba(0,0,0,0.5); z-index:5; }
div.side-bar-content{ position:fixed; left:-100%; top:0; width:65%; height:100vh; background:#2874f0; transition:.3s; z-index:5;  }

div.tree-dot-div p{ position:absolute; left:0; width:100%; height:5px; margin:3px 0; background:white; border-radius:5px; transition:.3s; }
div.tree-dot-div p:nth-child(1){ top:2px;  }
div.tree-dot-div p:nth-child(2){ top:9px; }
div.tree-dot-div p:nth-child(3){ top:16px; }

input#side-bar-checkbox:checked ~ div.tree-dot-div p:nth-child(1){ margin:0; top:50%; left:50%; transform:translate(-50%,-50%) rotate(-45deg); }
input#side-bar-checkbox:checked ~ div.tree-dot-div p:nth-child(2){ /*display:none;*/ opacity:0; transition:.3s; }
input#side-bar-checkbox:checked ~ div.tree-dot-div p:nth-child(3){ margin:0; top:50%; left:50%; transform:translate(-50%,-50%) rotate(45deg); }
input#side-bar-checkbox:checked ~ div.side-bar-content{ left:0;    }
input#side-bar-checkbox:checked ~ div.background-div{ display:block; }
input#side-bar-checkbox:checked ~ div.tree-dot-div{ position:fixed; }

input#side-bar-checkbox{ display:none; }

/**************************************/
div.side-bar-top{ padding:3% 0; }
div.side-bar-top div.logo-div{ margin:0 0 0 30%; position:relative;  }
div.side-bar-top div.logo-div img{ width:50px; height:50px; box-shadow:0 0 10px 2px rgba(0,0,0,0.5); padding:1%; border-radius:50%; background:white; }

div.side-bar-top div.logo-div p{ position:absolute; top:50%; left:35%; font-size:25px; letter-spacing:5px; text-shadow:1px 1px 0 grey, 0 0 15px rgba(0,0,0,0.7); font-weight:bold; color:white; text-transform:uppercase; transform:translatey(-50%); }

div.side-bar-main{ height:100%; margin:5% 0; padding:1%; overflow-y:scroll; }
div.side-bar-box{ border:1px solid white; border-radius:2px; margin:5% 0; overflow:hidden; transition:.3s; box-shadow:2px 2px 5px 0 rgba(0,0,0,0.5);  }
div.side-bar-box div.top-bottom{ min-height:30px; padding:2% 0; background:white; position:relative; color:#2874f0; transition:.3s;  }
div.side-bar-box div.top-bottom div.title-box{ width:85%;}
div.side-bar-box div.top-bottom div.title-box p:nth-child(1){ font-weight:bold; text-transform:uppercase; text-shadow:2px 2px 3px grey; overflow:auto;  }
div.side-bar-box div.top-bottom div.title-box p:nth-child(2){ font-size:12px; overflow:auto; }
div.side-bar-box div.top-bottom div.rotate-box{ position:absolute; top:50%; right:5%; transform:translatey(-50%) rotate(180deg); transition:.3s; }
div.side-bar-box div.content-box{ height:0; transition:.3s; overflow:auto; }

div.a-url-div{ margin:3% 2px; padding:1% 2px; }
div.a-url-div a{ display:inline-block; width:100%; font-size:12px; font-weight:bold; text-transform:uppercase; color:white; padding:1% 3%; border-radius:3px; text-shadow:2px 2px 2px rgba(0,0,0,0.5); overflow:auto; }
div.a-url-div a:hover{ background:rgba(0,0,0,0.3); }
div.a-url-div a:active{ background:white; color:#2874f0; }

div.side-bar-box div.content-box.box-1 div.check-stetas{ position:relative; color:white; font-size:10px; font-weight:bold; margin:5% 0; padding:2% 0 2% 3%; text-shadow:2px 2px 2px rgba(0,0,0,0.5); }
div.side-bar-box div.content-box.box-1 div.check-stetas span:nth-child(2){ position:absolute; right:1%; top:50%; font-size:8px; transform:translatey(-50%); }
div.side-bar-box div.content-box.box-1 div.check-stetas:hover{ background:rgba(0,0,0,0.3); }
div.side-bar-box div.content-box.box-1 div.check-stetas:active{ background:white; color:#2874f0; }

div.side-bar-box div.content-box.box-4 div.iframe{ width:100%; background:#ccc;  margin:3% 0 7% 0;  }
div.side-bar-box div.content-box.box-4 div.iframe p.title{ background:white; color:#2874f0; font-size:12px; font-weight:bold; margin:1% 0; padding:1% 2%; text-shadow:1px 1px 1px rgba(0,0,0,0.2),2px 2px 1px rgba(0,0,0,0.2);   }
div.side-bar-box div.content-box.box-4 div.iframe div{ position:relative; height:100%;   }
div.side-bar-box div.content-box.box-4 div.iframe div iframe{ width:100%; min-height:20vh; border:none; }
div.side-bar-box div.content-box.box-4 div.iframe div p{ position:absolute; top:0; left:0; width:100%; height:100%;  }

div.side-bar-box:hover{ }
div.side-bar-box div.top-bottom:active{ background:#ccc; }
div.side-bar-box:hover div.top-bottom div.rotate-box{ transform:translatey(-50%) rotate(0deg); }
div.side-bar-box:hover div.content-box{ height:250px; }

div.version-content-div{ position:absolute; left:0; bottom:0; width:100%; color:white; padding:2%; text-align:center; }

/**************************************/
div.main-content-div{   }
div.main-content-box{ min-height:100px; margin:5% 1%; padding:1%; position:relative;  box-shadow:3px 3px 5px 2px rgba(0,0,0,0.3); /*background:MediumSeaGreen;*/ color:white; border-radius:5px; 
background:linear-gradient(30deg,#2874f0,MediumSeaGreen); }
div.main-content-box:hover{ background:#2874f0; }
div.main-content-box div.gola-card{ width:100px; height:100px; border:1px solid; transition:.3s; border-radius:50%; font-size:50px; font-weight:bold; box-shadow:inset 0 0 15px 2px rgba(0,0,0,0.5); text-shadow:0 0 15px white; text-transform:uppercase; display:flex; justify-content:center; align-items:center;  }
div.main-content-box div.gola-card:hover{ transform:scale(0.5) rotate(360deg); }

div.main-content-box div.content-box{ position:absolute; top:50%; left:115px; right:8%; min-height:3%; max-height:80%; transform:translatey(-50%); overflow:auto; }
div.main-content-box div.content-box p:nth-child(1){ font-size:20px; font-weight:bold; text-transform:uppercase; text-shadow:3px 3px 4px rgba(0,0,0,0.6); letter-spacing:1px; }
div.main-content-box div.content-box p:nth-child(2){ font-size:13px; text-shadow:1px 1px 0 #333; }

div.main-content-box span.check-stetas{ position:absolute; right:0; bottom:0; font-size:8px; padding:1px 1%; }
div.main-content-box div.more-opsition{ position:absolute; top:0; right:0; width:30px; height:30px; z-index:2; }
div.main-content-box div.more-opsition p{ position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:20px; height:20px; font-weight:bold; border:1px solid white; border-radius:50%; display:flex; justify-content:center; align-items:center;  }
div.main-content-box div.more-opsition:hover p{ background:rgba(0,0,0,0.3); color:white; }
div.main-content-box div.more-opsition:active p{ background:white; color:black; }

/*********SIDE BAR SEARCH BOX STYLE*****************************/
div.side-bar-search-content{ margin:5% 0; text-align:center; }
div.side-bar-search-content input{ width:100%; margin:2% 0; padding:1% 3%; font-size:20px; font-weight:bold; background:white; color:#2874f0; border:2px solid white; border-radius:5px; box-shadow:5px 5px 10px 2px rgba(0,0,0,0.3); }
div.side-bar-content-div{ text-align:left; position:absolute; left:0; width:100%; height:0; background:#2874f0; z-index:2; color:white; border-radius:10px; padding:2% 1%; box-shadow:0 15px 15px 5px rgba(0,0,0,0.5); opacity:0; transition:.3s; overflow:auto;   }
div.side-bar-search-no-content{ position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:90%; text-align:center; border-radius:10px; background:white; box-shadow:0 10px 15px 3px rgba(0,0,0,0.5); }
div.side-bar-search-no-content p{ background:#ccc; font-size:20px; font-weight:bold; color:white; margin:15%; padding:5%; border-radius:50px; }

div.side-bar-search-content input:focus{ box-shadow:5px 5px 10px 2px rgba(0,0,0,0.3), 0 0 15px 0 white; /*text-shadow:2px 2px 2px rgba(0,0,0,0.5);*/ }
div.side-bar-search-content input:focus ~ div.side-bar-content-div{ height:50%; opacity:1;  }
div.side-bar-content-div:hover{ height:50%; opacity:1;  }

/*****OTHER OPSTION CSS STYLE*********************************/
div.other-opsition-content-main input{ position:fixed; top:0; left:0; width:50px; height:50px; z-index:99999; }
div.other-opsition-content-bg-cover{ position:fixed; top:0; left:0; width:100%; min-height:100%; background:rgba(0,0,0,0.2); z-index:11; display:none; }
div.other-opsition-content{ position:fixed; bottom:-100%; left:50%; transform:translatex(-50%); width:90%; min-height:40%; max-height:80%; background:white; border-radius:10px; opacity:0; padding:2% 0; transition:.5s; box-shadow:5px 5px 15px 3px rgba(0,0,0,0.5); z-index:11; /*overflow:auto;*/  }

input#other-opstion-checkbox:checked ~ div.other-opsition-content{ bottom:5%; opacity:1; }
input#other-opstion-checkbox:checked ~ div.other-opsition-content-bg-cover{ display:block; }

div.other-opsition-content div.close-btn{ position:absolute; top:-50px; right:3px; width:30px; height:30px; border-radius:50%; background:#333; box-shadow:0 0 15px 0 #000; }
div.other-opsition-content div.close-btn:active{ background:white; }
div.other-opsition-content div.close-btn:hover{ animation:CloseBtn .5s; }
@keyframes CloseBtn{ 0%{ transform:rotate(0); }  90%,100%{ transform:rotate(360deg); }  }
div.other-opsition-content div.close-btn p{ position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:60%; height:3px; border-radius:5px; background:white; }
div.other-opsition-content div.close-btn p:nth-child(1){ transform:translate(-50%,-50%) rotate(45deg); }
div.other-opsition-content div.close-btn p:nth-child(2){ transform:translate(-50%,-50%) rotate(-45deg); }
div.other-opsition-content div.close-btn:active p{ background:black; }

div.other-opsition-content div.box{ background:#eee; min-height:20px; margin:5% 0; }
div.other-opsition-content div.box div.title{ background:#ccc; min-height:10px; font-size:20px; font-weight:bold; letter-spacing:2px; padding:2% 3%; }
div.other-opsition-content div.box div.description{ padding:2% 3%; font-size:15px; overflow:auto; }

/**************************************/
div.content-val{ display:none; }
/**************************************/
/**********@ MEDIA SCREEN****************************/
@media only screen and (min-width:800px) {
  
}


</style>
</head>
<body>
<main id="main">
  <div class="svg-style">
    <div class="bg-color">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2874f0" fill-opacity="1" d="M0,288L34.3,282.7C68.6,277,137,267,206,272C274.3,277,343,299,411,309.3C480,320,549,320,617,272C685.7,224,754,128,823,122.7C891.4,117,960,203,1029,234.7C1097.1,267,1166,245,1234,250.7C1302.9,256,1371,288,1406,304L1440,320L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
      <div class="sarech-bar-div">
        <input id="search-main-content" type="text" placeholder="Search / total (0)">
        <div class="search-content">
          <div class="store-content"></div>
          <div class="search-content-no-record"><div><p>No search record</p></div></div>
       
        </div>
      </div>
    </div>
  </div>
<!---------------------------------->
  <div class="input-label">
    <input id="side-bar-checkbox" type="checkbox" style="display:none;">
    <div class="tree-dot-div"><div><p></p><p></p><p></p></div></div>
    <div class="background-div"></div>
    <div class="side-bar-content">
      <div class="side-bar-top">
        <div class="logo-div">
          <img id="logo-image-src" src="#"/> <p>WYM</p>
        </div>
      </div>
      <!---------------------------------->
      <div class="side-bar-search-content">
        <input id="side-bar-search-box" type="text" placeholder="Search / total(0)">
        <div class="side-bar-content-div">
          <div id="side-bar-search-content"></div>
          <div class="side-bar-search-no-content"><p>No search record</p></div>
        </div>
      </div>
      <!---------------------------------->
      <div class="side-bar-main">
      <!---------------------------------->
        <div class="side-bar-box box-1">
          <div class="top-bottom box-1">
            <div class="title-box"><p>What's new?</p><p>Something new has come.</p></div>
            <div class="rotate-box">Δ</div>
          </div>
          <div class="content-box box-1"></div>
        </div>
        <!---------------------------------->
        <div class="side-bar-box box-2">
          <div class="top-bottom box-2">
            <div class="title-box"><p>More information</p><p>Some information about me.</p></div>
            <div class="rotate-box">Δ</div>
          </div>
          <div class="content-box box-2">
            <div class="a-url-div a-1"><a href="https://creative2magic.blogspot.com/p/about-us.html?m=1" >About US</a></div>
            <div class="a-url-div a-2"><a href="https://www.wishyoumagic.in/p/blog-page.html" >Contect US</a></div>
            <div class="a-url-div a-3"><a href="https://www.wishyoumagic.in/p/blog-page_29.html" >Disclaimer</a></div>
            <div class="a-url-div a-4"><a href="https://creative2magic.blogspot.com/p/privacy-policy_16.html?m=1" >Privacy policy</a></div>
            <div class="a-url-div a-5"><a href="https://creative2magic.blogspot.com/p/terms-condition.html?m=1" >Terms & condition</a></div>
            
            
          </div>
        </div>
        <!---------------------------------->
        <div class="side-bar-box box-3">
          <div class="top-bottom box-3">
            <div class="title-box"><p>Festival</p><p>Visit the site of festivals.</p></div>
            <div class="rotate-box">Δ</div>
          </div>
          <div class="content-box box-3"></div>
        </div>
        <!---------------------------------->
        <div class="side-bar-box box-4">
          <div class="top-bottom box-4">
            <div class="title-box"><p>Preview</p><p>Website look designing.</p></div>
            <div class="rotate-box">Δ</div>
          </div>
          <div class="content-box box-4"></div>
        </div>
        <!---------------------------------->
        
        
        <div class="version-content-div">Version: 1.0115</div>
      <!---------------------------------->
      </div>
    </div>
  </div>
  
  <!-----Content Add Opsition----------------------------->
  <div class="main-content-div">
    <div class="main-content-box-div" id="main-content-box-div">
      <!-------Add content--------------------------->
      <div class="content-val" type="true" dateTime="#" title="Holi festival" url="https://creative2magic.blogspot.com/2020/05/holi-festival.html?m=1" description="Holi is considered as one of the most revered and celebrated festivals of India and it is celebrated in almost every part of the country."></div>
      <div class="content-val" type="false" dateTime="#" title="Diwali festival" url="https://creative2magic.blogspot.com/2020/05/dipawali-festival.html?m=1" description="Diwali, Divali, Deepavali is the Hindu festival of lights, usually lasting five days and celebrated during the Hindu Lunisolar month Kartika."></div>
      <div class="content-val" type="true" dateTime="#" title="Rakshabandhan festival" url="https://creative2magic.blogspot.com/2020/05/raksha-bandhan-festival.html?m=1" description="Raksha Bandhan, also Rakshabandhan, is a popular, traditionally Hindu, annual rite, or ceremony, which is central to a festival of the same name"></div>
      <div class="content-val" type="false" dateTime="#" title="Durga Puja" url="https://creative2magic.blogspot.com/2020/05/durga-puja.html?m=1" description="Durga Puja, also called Durgotsava, is an annual Hindu festival originating in the Indian subcontinent which reveres and pays homage to the Hindu goddess, Durga."></div>
      <div class="content-val" type="false" dateTime="#" title="Happy New Year" url="https://creative2magic.blogspot.com/2020/05/happy-new-year.html?m=1" description="How do you wish someone a happy new year"></div>
      <div class="content-val" type="true" dateTime="#" title="Eid Mubarak Festival" url="https://www.wishyoumagic.in/2020/07/eid-mubarak.html" description="Eid al-Adha or Eid Qurban, Qurban Bayrami, Tafaska tameqrant, also called the Festival of the Sacrifice"></div>
      
      <!---------------------------------->
    </div>
  <!---------------------------------->
  </div>
  <!------OTHER OPSITION---------------------------->
  <div class="other-opsition-content-main">
    <input id="other-opstion-checkbox" style="display:none;" type="checkbox">
    <div class="other-opsition-content-bg-cover"></div>
    <div class="other-opsition-content">
      <div class="close-btn"><p></p><p></p></div>
      <div class="box">
        <div class="title">Title</div>
        <div id="titles" class="description">null</div>
      </div>
      <div class="box">
        <div class="title">Description</div>
        <div id="descri" class="description">null</div>
      </div>
      <div class="box">
        <div class="title">Date Time</div>
        <div id="datetime" class="description">null</div>
      </div>
      <div class="box">
        <div class="title">URL</div>
        <div id="crenturl" class="description">null</div>
      </div>
      <div class="box">
        <div class="title">Status</div>
        <div id="status" class="description">null</div>
      </div>
    </div>
  
  </div>
  <!---------------------------------->
  <div id="my-footer-2020"></div>
  
</main>
<!---------------------------------->
<!---------------------------------->
<!---------------------------------->
<script type="text/javascript">
 
//*****SCRIPT START**************//
//*****LEFT TREE DOT CLICK FUNCTION**************************//
 $("div.tree-dot-div,div.background-div").click(function(){
   let side_input = document.querySelector("input#side-bar-checkbox");
   if(side_input.checked == false){
     side_input.checked = true;
   }else{ side_input.checked = false; }
 });
 
 //****HOME AUTO CRATE BOX FUNCTION***************************//
 function CreateAutoBox(){
   let row = document.querySelectorAll("div.main-content-box-div div.content-val");
   
   for(i =0; i<row.length; i++){ let descri =""; let typeStates ="";
     let type = row[i].getAttribute("type");
     let title = row[i].getAttribute("title");
     let date = row[i].getAttribute("dateTime");
     let url = row[i].getAttribute("url");
     let description = row[i].getAttribute("description");

     if(description.length > 50){ descri = description.substr(0,50)+" ...?"; }else{ descri = description;  }
     if(type=="true"){ typeStates ='<span style="color:#00ff00;">Visit site...</span>'; }else{ typeStates ='<span style="color:yellow;">Pending site...</span>'; }
     
     let store ='<div id="main-content-box-id-'+i+'" class="main-content-box box-'+i+'" type="'+type+'" url="'+url+'" title="'+title+'" dateTime="'+date+'" description="'+description+'"><div class="gola-card gola-'+i+'"></div><div class="content-box con-'+i+'"><p>'+title+'</p><p>'+descri+'</p></div> <span id="main-content-box-id-'+i+'" class="check-stetas">'+typeStates+'</span> <div id="main-content-box-id-'+i+'" class="more-opsition"><p>?</p></div> </div>';
     $("div#main-content-box-div").append(store);
     
   }
   
 }; CreateAutoBox();
 
//****HOME AUTO SET VALUE FUNCTION*****************************//
function autoFunctionfestival(){
  let store_1 = $("div.side-bar-box div.content-box.box-1"); store_1.empty();
  let store_3 = $("div.side-bar-box div.content-box.box-3"); store_3.empty();
  let div = document.querySelectorAll("div.main-content-box-div div.main-content-box");
  $("input#search-main-content").attr("placeholder","Search / total ("+div.length+")")
  for(i = 0; i < div.length; i++){
    let title = document.querySelectorAll("div.main-content-box-div div.main-content-box div.content-box p:nth-child(1)")[i].innerText;
    let url = div[i].getAttribute("url");
    let type = div[i].getAttribute("type");
    
    let conte = '<div class="a-url-div a-url-'+i+'" type="'+type+'"><a id="a-'+i+'" href="'+url+'" type="'+type+'">'+title+'</a></div>';
    store_3.append(conte);
    
    document.querySelectorAll("div.main-content-box-div div.main-content-box div.gola-card")[i].innerText = title.charAt(0);
    
    $("div.side-bar-box div.content-box.box-4").append('<div class="iframe" id="iframe-'+i+'"> <p class="title">'+title+'</p> <div><iframe src="'+url+'" type="'+type+'"></iframe><p onclick="iframeFunction(this);" src="'+url+'"></p></div> </div>');
    
    if(type=="true"){ store_1.append('<a href="'+url+'" type="'+type+'"><div class="check-stetas"><span>'+title+'</span><span style="color:#00ff00;">Visit site...</span></div></a>'); }
    else{ store_1.append('<a href="'+url+'" type="'+type+'"><div class="check-stetas"><span>'+title+'</span><span style="color:tomato;">Pending site...</span></div></a>'); }
  }
   
}; autoFunctionfestival();
 
 
//********A TAG CLICK FUNCTION*************************//
$("div.content-box.box-3 div.a-url-div a").click(function(){
  let url = $(this).attr("href");
  window.location = url;
});

//*****IFRAME ON CLICK FUNCTION********//
function iframeFunction(get){
 let url = get.getAttribute("src");
 window.location = url;
};

//******MAIN HOME SEARCH BOX INPUT***************************//
$("input#search-main-content").keyup(function(){
  let inputVal = $(this).val().toLowerCase(); let i = -1; 
  if(inputVal==""){ return false; }
  let append = $("div.sarech-bar-div div.search-content div.store-content"); append.empty();
      append.append('<div id="search-home-length"></div>');
  
  $("div.main-content-box-div div.main-content-box div.content-box p:nth-child(1)").each(function(){
    let conteVal =$(this).text().toLowerCase(); i=i+1;
    if(conteVal.indexOf(inputVal) === -1){ //$(this).hide(); 
     // $("div.search-content-no-record").show(0);
     }else{  let descri ="";
      let content = document.querySelectorAll("div.main-content-box-div div.main-content-box");
      let url = content[i].getAttribute("url");
      let type = content[i].getAttribute("type");
      let date = content[i].getAttribute("dateTime");
      let title = content[i].getAttribute("title");
      let description = content[i].getAttribute("description");
      
      if(description.length > 40){ descri = description.substr(0, 40)+"...?"; }else{ descri = description;  }
      if(type=="true"){ type ='<span style="color:#00ff00;">Visit site -></span>'; }else{ type ='<span style="color:yellow;">Pending site -></span>'; }
      
      let store = '<div id="search-id-'+i+'" class="search-url-div" onclick="search_url_div(this)"><a href="'+url+'" >'+title+'</a><p>'+descri+'</p>'+type+'</div>';
      append.append(store);
     }
     
  });
  
  let rows = $("div.sarech-bar-div div.search-content div.store-content div.search-url-div");
  if(rows.length == 0){ $("div.search-content-no-record").show(0); }else{ $("div.search-content-no-record").hide(0); $("div#search-home-length").html("About "+rows.length+" results (total)"); }
});

//****SEARCH BOX BUTTON CLICK FUNCTION****************************//
function search_url_div(box){
 let id = box.getAttribute("id");
 let url = $("div#"+id+" a").attr("href");
 // window.location.assign();
  window.location = url;
};

//*****HOME CLICK FFUNCTION****************************//
let checkClick = true;
$("div.main-content-box-div div.main-content-box").click(function(){
 if(checkClick){ 
    let url = $(this).attr("url");
    window.location = url;
  }
 checkClick = true;
});

$("div.main-content-box-div div.main-content-box div.gola-card").click(function(){ checkClick = false; });
$("div.main-content-box-div div.main-content-box div.more-opsition").click(function(){ checkClick = false; });

//**SIDE BAR SEARCH BOX INPUT KEYUP FUNCTION**************************//
let a_url_le = $("div.side-bar-box div.content-box div.a-url-div");
$("input#side-bar-search-box").attr("placeholder","Search / total("+a_url_le.length+")").keyup(function(){
  let inputVal = $(this).val().toLowerCase(); let i = 0; 
  if(inputVal==""){ return false; }
  let append = $("div#side-bar-search-content"); append.empty();
      append.append('<div id="side-searching-length" style="color:white; font-size:10px; padding:1% 5%; border-bottom:1px solid white;"></div>'); // About 0 results (total)
      
  $("div.side-bar-box div.content-box div.a-url-div a").each(function(){
  let conteVal = $(this).text().toLowerCase(); i=i+1;
  if(conteVal.indexOf(inputVal) === -1){ // $(this).hide(); 
  }else{ // $(this).show();
    let url = $(this).attr("href");
    let title = $(this).text();
    let store = '<div class="a-url-div a-url-'+i+'"><a id="a-'+i+'" href="'+url+'" >'+title+'</a></div>';
    append.append(store);  }
  
  let length = $("div#side-bar-search-content div.a-url-div");
  if(length.length == 0 || length.length == "0"){ 
    $("div.side-bar-search-no-content").show(0); 
    $("div#side-searching-length").hide(0); 
    }else{ 
      $("div.side-bar-search-no-content").hide(0);
      $("div#side-searching-length").show(0).html('About '+length.length+' results (total)'); }
  
 });
  
});


//*****HOME OTHER OPITION CLICK FUNCTION*****///
$("div.main-content-box div.more-opsition").click(function(){
  let id = $(this).attr("id");
  let content = document.querySelector("div#"+id);
  let url = content.getAttribute("url");
  let typ = content.getAttribute("type");
  let dat = content.getAttribute("dateTime");
  let tit = content.getAttribute("title");
  let des = content.getAttribute("description");
  
  if(url.length <2){ url ="null"; }
  if(typ.length <2){ typ ="null"; }
  if(dat.length <2){ dat ="null"; }
  if(tit.length <2){ tit ="null"; }
  if(des.length <2){ des ="null"; }
  
  if(typ=="true"){ typ ='<span><a style="color:green;" href="'+url+'">Visit site...</a></span>'; }else{ typ ='<span><a style="color:tomato;" href="'+url+'">Pending site...</a></span>'; }
  
  $("div.other-opsition-content div#titles").html(tit);
  $("div.other-opsition-content div#descri").html(des);
  $("div.other-opsition-content div#datetime").html(dat);
  $("div.other-opsition-content div#crenturl").html(url);
  $("div.other-opsition-content div#status").html(typ);
  
  document.querySelector("input#other-opstion-checkbox").checked =true;
});

//*****HOME OTHER OPSITION CLOSE BTN CLICK FUNCTION*****///
$("div.other-opsition-content-bg-cover, div.other-opsition-content div.close-btn").click(function(){
  document.querySelector("input#other-opstion-checkbox").checked =false;
});



//******GET LOGO URL FUNCTION********///
 function getLogoUrl(){
   let get =$("[rel=icon]").attr("href");
   let url ="https://1.bp.blogspot.com/-EFHkod1ZR4M/XsFEhZ3DfNI/AAAAAAAAAL8/iiJE2OZia-8BkBesAihOueN2O2sxB4wQgCLcBGAsYHQ/s1600/Wish%2Byou%2Bmagic%2Blogo.png";
   if(get===undefined){}else{ url = get; }
   $(this).attr("src",url);
 }; getLogoUrl();
 
 $("img").on("error",function(){ 
   let url ="https://1.bp.blogspot.com/-EFHkod1ZR4M/XsFEhZ3DfNI/AAAAAAAAAL8/iiJE2OZia-8BkBesAihOueN2O2sxB4wQgCLcBGAsYHQ/s1600/Wish%2Byou%2Bmagic%2Blogo.png";
   $(this).attr("src",url);
 });

//*********************************//
//*********************************//
</script>

<!---------------------------------->
<!---------------------------------->
</body>
</html>