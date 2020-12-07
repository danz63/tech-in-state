$(function () {
	// aos animation initialisation
	AOS.init({
		duration: 2000,
		once: true
	});

	// scroll header script here
	window.onscroll = function () {
		scrollHeader();
	};
	// Get the header
	var header = $(".navbar-bottom");
	var body = $("body");

	function scrollHeader() {
		// adding sticky class
		if (window.pageYOffset > 130) {
			$(header).addClass("sticky");
		} else {
			// removing sticky class
			$(header).removeClass("sticky");
		}
	}

	// navbar toggler script
	$(".navbar-toggler").on("click", function () {
		$(".collapse").toggleClass("show");
		$("body").toggleClass("layer-open");
		// $(header).toggleClass("sticky-not");
		$(".navbar-close").show();
	});
	$(".navbar-close").on("click", function () {
		$(".collapse").toggleClass("show");
		$(".navbar-close").hide();
		$("body").toggleClass("layer-open");
		// $(header).toggleClass("sticky-not");
		$(".dark-overlay").click(function () {
			$(".collapse").removeClass("show");
			$("body").removeClass("layer-open");
		});
	});

	// $(".navbar-bottom  .navbar-nav a").on("click", function() {
	//   $(".navbar-bottom  .navbar-nav")
	//     .find("li.active")
	//     .removeClass("active");
	//   $(this)
	//     .parent("li")
	//     .addClass("active");
	// });

	$("html").easeScroll({
		frameRate: 60,
		animationTime: 1000,
		stepSize: 40,
		pulseAlgorithm: 1,
		pulseScale: 8,
		pulseNormalize: 1,
		accelerationDelta: 100,
		accelerationMax: 1,
		keyboardSupport: true,
		arrowScroll: 50,
		touchpadSupport: true,
		fixedBackground: true
	});
});


// Added Function JS
$("#btnSendComment").on('click', function () {
	let btn = $(this);
	let created_by = ($('#created_by').val() == "") ? undefined : $("#created_by").val();
	let comment = ($("#comment").val() == "") ? undefined : $("#comment").val();
	let articleId = btn.data("id");
	let url = btn.data("value");
	$("#modalSendComment").modal('show');
	$.ajax({
		type: 'ajax',
		method: 'post',
		data: {
			created_by: created_by,
			comment: comment,
			article_id: articleId
		},
		url: url,
		dataType: 'json',
		success: function (response) {
			responseInsertComment(response.status);
		},
		error: () => {
			responseInsertComment(0);
		}
	});
});

function responseInsertComment(status) {
	setTimeout(function () {
		if (status > 0) {
			$("#modalSendComment .modal-body span").removeClass("mdi-loading mdi-spin");
			$("#modalSendComment .modal-body span").addClass("mdi-checkbox-marked-circle-outline");
			$("#modalSendComment .modal-body h3").html("Sukses Tambahkan Komentar");
		} else {
			$("#modalSendComment .modal-body span").removeClass("mdi-loading mdi-spin");
			$("#modalSendComment .modal-body span").addClass("mdi-close-circle-outline");
			$("#modalSendComment .modal-body h3").html("Gagal Tambahkan Komentar");
		}
	}, 2000);
	setTimeout(function () {
		location.reload();
	}, 3000)
}
