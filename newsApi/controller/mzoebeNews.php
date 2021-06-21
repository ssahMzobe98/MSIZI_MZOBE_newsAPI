
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
	$(document).ready(function(){
		$("#btn").click(function(){
			const country=$("#country").val();
			// alert(country);
			if(country==""){
				$(".emptyInput").removeAttr("hidden");
			}
			else{
				$(".empty").attr("hidden",true);
				$(".progress").removeAttr("hidden");
				$(".progress").html("<img src='../img/loader.gif' style='background-color: #f3f3f3;'>");
				$(".h3").removeAttr("hidden");
				$(".h3").html("<h5 style='color: seagreen;'>Running NewsAPI and Uploading News To DB from NewsAPI...</h5>");
				$.ajax({
					url: "../controller/upload.php?api=run",
					type: "POST",
					data: {
						country: country
					},
					cache: false,
					success: function(response){
						$(".progress").html("");
						$(".progress").attr("hidden",true);
						
						$(".h3").html("");
						$(".h3").attr("hidden",true);
						if(response==[]){
							$(".empty").removeAttr("hidden");
							$(".errorShow").removeAttr("hidden");
							$(".errorShow").html(response);
						}
						else{
							$(".redirectingMess").removeAttr("hidden");
							  $(".redirectingMess").html("<h1 style='color:#f3f3f3;background-color:seagreen;'>Fetching News....</h1>");
							setTimeout(() => {

							  $(".redirectingMess").removeAttr("hidden");
							  $(".redirectingMess").html("<h1 style='color:#f3f3f3;background-color:seagreen;'>Fetching News....</h1>");
							}, 300);
							$(".redirectingMess").attr("hidden",true);
							window.location= ("../view");


							
						}						
					}
				});
			}
		});
	});
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