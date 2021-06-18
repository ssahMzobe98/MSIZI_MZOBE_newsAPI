
<?php 
include_once("../includes/index.php");

$API=new mzobeNewsApi();
?>

<br><br>
<div class="content">
	<div class="body-content">
		<div class="displayTodaysNews">
			<?php
				if(isset($_GET['nav'])){
					$API->navigation($_GET['nav']);
				}
				else{
				    $API->getTodaysNews();
				}
			?>
		</div>
	</div>	
</div>
<script>
	function updateViewCount(id){
		$.ajax({
			url: "../controller/upload.php",
			type: "POST",
			data: {
				id: id
			},
			cache: false,
			success: function(response){
				console.log(response);						
			}
		});
	}
</script>
</center>

</body>
</html>