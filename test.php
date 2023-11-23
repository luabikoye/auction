
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapel of the Healing Cross | Auction</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">  
    <link rel="icon" type="icon.png" href="images/icon.png">  
    <script src="dist/js/jquery-3.6.0.min.js"></script>

    
<script>
    $(function() {
  function getCounterData(obj) {
    var days = parseInt($('.e-m-days', obj).text());
    var hours = parseInt($('.e-m-hours', obj).text());
    var minutes = parseInt($('.e-m-minutes', obj).text());
    var seconds = parseInt($('.e-m-seconds', obj).text());
    return seconds + (minutes * 60) + (hours * 3600) + (days * 3600 * 24);
  }

  function setCounterData(s, obj) {
    var days = Math.floor(s / (3600 * 24));
    var hours = Math.floor((s % (60 * 60 * 24)) / (3600));
    var minutes = Math.floor((s % (60 * 60)) / 60);
    var seconds = Math.floor(s % 60);

    console.log(days, hours, minutes, seconds);

    $('.e-m-days', obj).html(days);
    $('.e-m-hours', obj).html(hours);
    $('.e-m-minutes', obj).html(minutes);
    $('.e-m-seconds', obj).html(seconds);
  }

  var count = getCounterData($(".counter"));

  var timer = setInterval(function() {
    count--;
    if (count == 0) {
      clearInterval(timer);
      return;
    }
    setCounterData(count, $(".counter"));
  }, 1000);
});
    </script>

   

</head>

<body>
<div class="counter" style='color: green;'>
  <span class='e-m-days'>0</span> Days |
  <span class='e-m-hours'>8</span> Hours |
  <span class='e-m-minutes'>0</span> Minutes |
  <span class='e-m-seconds'>1</span> Seconds
</div>


</body>
</html>