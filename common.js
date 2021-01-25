$(document).ready(function() {

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Thanks za za9vky. skoro vas naberemo");
			$("#form").trigger("reset");
		});
		return false;
	});
	
});