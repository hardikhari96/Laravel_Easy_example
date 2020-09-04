<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<style type="text/css">
		img.card-img-top {
			    width:300px;
			}
		a.btn.btn-success.back-btn {
		    position: absolute;
		    top: 7vh;
    		left: 8vw;
		}
	</style>

	
</head>
<body>
	<a href="." class="btn btn-success back-btn">Back</a>

	<div class="container">
		<div class="text-center p-4">
			<h2 id="product_name"></h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4" id="product_image"></div>
				<div class="col-md-8 row" >
					<div class="col-md-12" id="product_sht_desc"></div>
					<div class="col-md-12" id="product_desc"></div>
					<div class="col-md-4" id="product_price"></div>
				</div>
			</div>
			
		</div>
	</div>




	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$.ajax({
			url: 'http://localhost:9999/woocommerce/api/products/{{$id}}',
			type: 'GET',
			dataType: 'json',
			data: {},
			success:function(resp){
				if (resp.status) {
					//console.log(resp);

					$("#product_name").html(resp.product.name);
					let image ="";
					if(resp.product.images.length != 0){

						image +='<img class="card-img-top" src="'+resp.product.images[0].src+'">';
						console.log(resp.product);

					}else{

						image +='<img class="card-img-top" src="https://image.shutterstock.com/image-vector/forbidden-sign-do-not-take-260nw-655792978.jpg">';

					}

					$("#product_image").html(image);
					$("#product_sht_desc").html(resp.product.short_description);
					$("#product_desc").html(resp.product.description);
					$("#product_price").html(resp.product.price_html);

				}


			}
		});
		
	</script>
</body>
</html>


				
					
					
						
					    
					    		
					
				
			