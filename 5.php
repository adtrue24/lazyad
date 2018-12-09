<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Your page title</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"></head>

<body>


    <div class='ad' data-lazyad id="ad_mobile"></div>
    <div class='ad' data-lazyad id="ad_desktop"></div> 
    <div class='ad' data-lazyad id='ad_lazy'></div>
    <div class='ad' data-lazyad id='ad_lazy'></div>
    <div class='ad' data-lazyad id='ad_lazy'></div>

    <link rel="stylesheet" href="libs/ad.css">
    <script type="text/javascript">
        var ad_key = 'test';
        var ad_tag = 'div';
        var ad_class = 'ad';
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@10.19.0/dist/lazyload.min.js"></script>
    <script src="libs/ad.js?t=<?=time()?>"></script>
</body>
</html>

