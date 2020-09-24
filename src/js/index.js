$(document).ready(function () {
	$("#play").click(function () {
		$(this).addClass("hide");
		$("#pause").removeClass("hide");
		$("#player").trigger("load");
		$("#player").trigger("play");
	});
	$("#pause").click(function () {
		$(this).addClass("hide");
		$("#play").removeClass("hide");
		$("#player").trigger("pause");
	});
});

$(document).ready(function () {

	$("#play2").click(function () {
		$(this).addClass("hide");
		$("#pause2").removeClass("hide");
		$("#player2").trigger("load");
		$("#player2").trigger("play");
	});
	$("#pause2").click(function () {
		$(this).addClass("hide");
		$("#play2").removeClass("hide");
		$("#player2").trigger("pause");
	});
});

$(document).ready(function () {

	$("#play3").click(function () {
		$(this).addClass("hide");
		$("#pause3").removeClass("hide");
		$("#player3").trigger("load");
		$("#player3").trigger("play");
	});
	$("#pause3").click(function () {
		$(this).addClass("hide");
		$("#play3").removeClass("hide");
		$("#player3").trigger("pause");
	});
});
