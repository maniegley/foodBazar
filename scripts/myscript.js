$(document).ready(function(){
	$(".loginbtn").click(function(e){
		e.preventDefault();
		
		$("#overlay").animate({opacity: 1},0).show("slow","swing");
	    $(".login").fadeIn('slow');
	    $(".logo2").fadeIn('slow');
	});


	$(".registerbtn").click(function(e){
		e.preventDefault();
		
		$("#overlay").animate({opacity: 1},0).show("slow","swing");
	    $(".registerbox").fadeIn('slow');
	    $(".logo2").fadeIn('slow');
	});
	

	$(".items").click(function(e){
		$("#overlay").animate({opacity: 1},0).show("slow","swing");
		$(".iteminfobox").animate({opacity: 1},0).show("slow","swing");
		val = $(this).parents('.food_item');
		item = val.children(".item_name").html();
		image = val.find("img").attr("src");
		$("#thename").html(item);
		$("#thename2").html(item);
		$(".iteminfobox").find("img").attr("src",image);
	});

	$(".closebtn").click(function(e){
		e.preventDefault();
		$("#overlay").animate({opacity:0},500).hide("slow","swing");
	    $(".login").fadeOut('slow');
	    $(".registerbox").fadeOut('slow');
	    $(".iteminfobox").animate({opacity:0},500).hide("slow","swing");
	});

	$(".addToCart").click(function(e){
		$(".iteminfobox").animate({opacity:0},500).hide("slow","swing");
	});

	$(".items").click(function () {
		$(".item_description").slideToggle('slow');
	});

	$("#add_item").click(function(e){
		var food_name = document.getElementById("add").value;
		$.ajax({
			type : 'POST',
			url : 'store.php',
			data : {
				add : food_name,
			},
			success :function (response) {
				document.getElementById('count').innerHTML = response;
			}
		});
	});

});
