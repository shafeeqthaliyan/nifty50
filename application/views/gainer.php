<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title>Nifty 50</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
</head>
<style>
.card-flip {
  perspective: 1000px;
}
.card-flip:hover{
transform: rotateY(180deg);
}
.card-flip,
.front,
.back {
  width: 100%;
  height: 480px;
}

.flip {
  transition: 0.6s;
  transform-style: preserve-3d;
  position: relative;
}

.front,
.back {
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
}

.front {
  z-index: 2;
  transform: rotateY(0deg);
}

.back {
  transform: rotateY(180deg);
}
.title-arch {
        text-align: center;
        margin: 50px 0;
        font-size: 22px;
        letter-spacing: 2px;
        text-transform: uppercase;
    }
</style>
<body>

<section>
    <div class="container">
<div class="title-arch"><button type="button" id="gainersbtn" onClick="window.location='<?= site_url('home/gainer');?>'" class="btn btn-info">Gainers</button>
<button type="button" id="losersbtn" class="btn btn-info" onClick="window.location='<?= site_url('home/loser');?>'">Losers</button>
<input type="hidden" name="checktype" id="checktype" value="none">
</div>
        <div id="demo"><?= $content;?></div>
            
    </div>
</section>
<script>
setTimeout(function() {
  location.reload();
}, 300000);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$("#gainersbtn").click(function(){
    $("#checktype").val("gain");
    test()
});
$("#losersbtn").click(function(){
    $("#checktype").val("lose");
    test()
});
setInterval(test,50000);
document.querySelector(".card-flip").classList.toggle("flip");


Holder.addTheme('gray', {
  bg: '#777',
  fg: 'rgba(255,255,255,.75)',
  font: 'Helvetica',
  fontweight: 'normal'
});






</script>

</body>
</html>
