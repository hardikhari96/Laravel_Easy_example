<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	
</head>
<body>

	<div class="container">
		<div class="text-center p-4">
			<h2><a href="/">Products</a></h2>
		</div>
		<div class="card-columns" id="products">

			


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
			url: window.location.protocol+"//"+window.location.hostname+":"+window.location.port+'/woocommerce/api/products',
			type: 'GET',
			dataType: 'json',
			data: {},
			success:function(resp){
				
				

				console.log(resp);
				let i =0;
				html = "";
				while (i < resp.products.length) {

				  
				  
							html +='<div class="card">';
								
								if(resp.products[i].images.length != 0){
									html +='<img class="card-img-top" class="images-woo" src="'+resp.products[i].images[0].src+'">';
								}else{
									html +='<img class="card-img-top" src="https://image.shutterstock.com/image-vector/forbidden-sign-do-not-take-260nw-655792978.jpg">';
								}

								html +='<div class="card-body">';
									html +='<h5 class="card-title">'+resp.products[i].name+'</h5>';
									html +='<p class="card-text">'+resp.products[i].short_description+'</p>';
									html +='<a href="http://localhost:9999/woocommerce/products/'+resp.products[i].id+'" class="btn btn-primary">Details</a>';
									html +='<a href="" class="card-link">Price : '+resp.products[i].price_html+'</a>';
								html +='</div>';
							html +='</div>';
						
				 	i++;
				}
				$("#products").html(html);


			}
		});
		
	</script>
</body>
</html>


				
					
					
						
					    
					    		
					
				
			