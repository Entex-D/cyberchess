<link type="text/css" rel="stylesheet" href="../style/jscrollpane.css"/>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>  
<script type="text/javascript" src="../style/jscrollpane.js"></script>  
<script type="text/javascript" src="../style//mousewheel.js"></script>


<style type="text/css">

.scroll-pane {
	width: 100%; /* Ширина видимой области*/
	height: 100%; /* Высота видимой области*/
	overflow: auto; /* Если отключены скрипты это правило позволит отобразить обычный скролл */
}

</style>


<script type="text/javascript">

    jQuery(function()

    {

        jQuery('.scroll-pane').jScrollPane();

    });

</script>




</HEAD>

<body>

<div id="panec"></div>
	

<script>
		function show()
		{
			$.ajax({
				url: "shess_x.php",
				cache: false,
				success: function(html){
					$("#panec").html(html);
				}
			});
		}
	
		$(document).ready(function(){
			show();
			setInterval('show()',1000*3);
		});
	</script>
	

</body></html>