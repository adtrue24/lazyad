
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>2 <?=time();?></title>
 <script type="text/javascript">

	 ///var work_tag = 'span';
</script>


<style>
       @media screen and (min-width:0) and (max-width:645px) {
        #ad_1 {
        	height: 100px;
            display: inline-block;
            margin: 2;

        }
        #ad_2 {
            display: none;
        }
    }

    @media screen and (min-width:645px) and (max-width:9000px) {
        #ad_1 {
           display: none;
        }
        #ad_2 {
        	height: 100px;
            display: inline-block;
            margin: 2;

        }
    }

    </style>

  </head>

  <body>

<div id="ad_1" class="ad" data-lazyad data-adtype='ad_1'> <script type="text/lazyad"></script> </div>

<div id="ad_2" class="ad" data-lazyad data-adtype='ad_2' > <script type="text/lazyad"></script> </div>
<BR>
dfadsfasdf dafasdf <BR>
<script type="text/javascript">
    var ad_class = 'ad';
    var ad_element = 'div';
	function Get_Ad(adtype)
	{
		var data_matchmedia = null;
		var data_src =  null;
		if(adtype == 'ad_1')
		{
		 	data_matchmedia = 'only screen and (max-width: 645px)';
		 	data_src = 'test1<img src="http://placehold.it/300x100/ff0/000&text=Ad+Served">';
		}
		else if(adtype == 'ad_2')
		{
			data_matchmedia = 'only screen  and (min-width: 646px) and (max-width: 99999px)';
			data_src = 'test2<img src="http://placehold.it/728x90/ff0/000&text=Ad+Served">';
		}

		var rs = new Array();
        rs['data_matchmedia'] = data_matchmedia;
        rs['data_src'] = data_src;
        //console.log(adtype, rs);
    	return rs;
	}
	//Get_Ad('ad_1');
</script>
<script src="ad.js?t=<?=time()?>"></script>

  </body>

</html>

