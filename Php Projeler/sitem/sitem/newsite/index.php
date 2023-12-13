<html>
<head>
  <title>İDRİS-AKGÜL</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="icon" type="image/x-icon" href="img/FAVİCON1.png">

  <link rel="stylesheet" href="https://wowjs.uk/css/libs/animate.css">
  <style>
* {
    padding: 0;
    margin: 0;
}

body {
    color: #e1e1e1;
    background-color: #333;
    font-family: 'Raleway', sans-serif;
    height: 100vh;
    display: flex;
    align-items: center;
}

h1 {
    text-align: center;
    margin-bottom: 50px;
    text-shadow: 0 2px 2px #000;
}

.container {
    width: 100%;
}
.loading-container {
    display: flex;
    justify-content: center;
}
.loading-container .loading-block {
    text-align: center;
}


/* loading style */
.loading-eff {
    position: relative;
    font-size: 50px;
    width: 1em;
    height: 1em;
}
.loading-eff:before,
.loading-eff:after {
    content: '';
    display: block;
}


/* loading styles */
.loading-eff .ellipse {
    background-color: #ffe314;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    animation: ellipse-anim 3s cubic-bezier(0, -0.26, 0.32, 1.22) 0s infinite;
    transform: rotate(0deg);
    box-shadow: 0 0 2px #000;
}
/* animation */
@keyframes ellipse-anim {
    0% {
        background-color: #ff1414;
        border-top-left-radius: 50%;
        border-top-right-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
        transform: rotate(0deg);
    }
    12.5% {
        background-color: #ff9114;
        border-top-left-radius: 0;
        border-top-right-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
        transform: rotate(45deg);
    }
    25% {
        background-color: #ffef14;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
        transform: rotate(90deg);
    }
    37.5% {
        background-color: #57ff14;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 50%;
        transform: rotate(135deg);
    }
    50% {
        background-color: #17fcfc;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        transform: rotate(180deg);
    }
    62.5% {
        background-color: #0026ff;
        border-top-left-radius: 50%;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        transform: rotate(225deg);
    }
    75% {
        background-color: #8a37e9;
        border-top-left-radius: 50%;
        border-top-right-radius: 50%;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        transform: rotate(270deg);
    }
    87.5% {
        background-color: #e937e9;
        border-top-left-radius: 50%;
        border-top-right-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 0;
        transform: rotate(315deg);
    }
    100% {
        background-color: #ff1414;
        border-top-left-radius: 50%;
        border-top-right-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
        transform: rotate(360deg);
    }
}




  </style>
  <meta charset="UTF-8">
</head>
<body style="background-color:  rgb(30,30,40);">
    

  <script>
  
    setTimeout(loading,2000);
    
    function loading() {
    
    location.href = 'home.php';
    
    }
       
       
       </script>
<div class="container">

  <div class="loading-container">
    <div class="loading-block">
      <div class="loading-eff">
        <div class="ellipse"></div>
      </div>
    </div>
  </div>
</div>

</body>
</html>