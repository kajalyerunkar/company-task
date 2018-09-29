$(document).ready(function(){
		//alert(1);
		$(".btn").click(function(){
			//alert(2);
			record = $("#form_id").serialize();
			alert(record);
			$.post("../controllers/add_record_action.php",record).success(
			function(response){

				if(response=="ok"){
					window.location.href="show_record.php";
				}
				else{
					$(".err_msg").html(response);
				}
			})
		})
	})
