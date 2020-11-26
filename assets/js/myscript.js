$('[data-toggle="popover"]').popover('show');

$('#btn-edit').on('click', function () {
	$(this).addClass('disabled');
	$('#btn-cancel').removeClass('disabled');
	$('#input-name').removeAttr('readonly').focus();
	$('#input-password').removeAttr('readonly');
	$('#input-r_password').removeAttr('readonly');
	$('input[type=file]').removeAttr('disabled');
	$('button[type=submit]').removeAttr('disabled');
	$('button[type=reset]').removeAttr('disabled');
});

$('#btn-cancel').on('click', function () {
	$(this).addClass('disabled');
	$('#btn-edit').removeClass('disabled');
	$('#input-name').attr('readonly', true);
	$('#input-password').attr('readonly', true);
	$('#input-r_password').attr('readonly', true);
	$('input[type=file]').attr('disabled', true);
	$('button[type=submit]').attr('disabled', true);
	$('button[type=reset]').attr('disabled', true);
});

$(".buttonEdit").on('click', function () {
	let id = $(this).data("value");
	let url = $(location).attr("href").replace("#", "");
	url = url + "/getById";
	$.ajax({
		type: 'ajax',
		method: 'post',
		data: {
			id: id
		},
		url: url,
		dataType: 'json',
		success: function (response) {
			$("input[name=menu]").val(response.menu);
			$("input[name=id]").val(response.id);
		}
	});
	$(".header-form").html("Ubah Menu");
	$("button[type=submit]").html("Ubah");
	let loc = $(location).attr("href").replace("#", "");
	loc = loc + "/update";
	$("#myform").attr("action", loc);
	$("#modal-form").modal('show');
	$("#modal-form input[type=text]").focus();
});

$(document).on('hidden.bs.modal', '#modal-form', function () {
	$(".header-form").html($(".header-form").html().replace("Ubah","Tambah"));
	$("button[type=submit]").html("Simpan");
	$("input[type=text]").val("");
	$("input[type=hidden]").val("");
	$("#myform").attr("action", $(location).attr("href").replace("#", ""));
});


// Modal delete confirm
$(".btnDelete").on('click', function () {
	let id = $(this).data("value");
	let url = $("#modal-delete .modal-footer .btn-primary").attr("href").replace("#", "");
	url = url + "/delete/" + id;
	$("#modal-delete .modal-footer a.btn-primary").attr("href", url);
	$("#modal-delete").modal('show');
});

$(document).on('hidden.bs.modal', '#modal-delete', function () {
	let url = $(location).attr("href").replace("#", "");
	$("#modal-delete .modal-footer a.btn-primary").attr("href", url);
});

$(".btnToggleActivate").on('click', function () {
	let id = $(this).data("value");
	let url = $("#modal-delete-submenu .modal-footer .btn-primary").attr("href").replace("#", "");
	url = url + "/toggle_active_submenu/" + id;
	if ($(this).data("status") == "0") {
		$(".confirm-message").html("Yakin Aktifkan submenu ini?");
	} else {
		$(".confirm-message").html("Yakin Non-aktifkan submenu ini?");
	}
	$("#modal-delete-submenu .modal-footer a.btn-primary").attr("href", url);
	$("#modal-delete-submenu").modal('show');
});

$(document).on('hidden.bs.modal', '#modal-delete-submenu', function () {
	let url = $(location).attr("href").replace("#", "");
	url = url.replace("/submenu","");
	$("#modal-delete-submenu .modal-footer a.btn-primary").attr("href", url);
});

$(document).on('shown.bs.modal', '#modal-form', function () {
	$("#modal-form input[type=text]").focus();
});

$(".buttonEditCategory").on('click', function () {
	let id = $(this).data("value");
	let url = $(location).attr("href").replace("#", "");
	url = url + "/getById";
	$.ajax({
		type: 'ajax',
		method: 'post',
		data: {
			id: id
		},
		url: url,
		dataType: 'json',
		success: function (response) {
			$("input[name=category]").val(response.category);
			$("input[name=id]").val(response.id);
		}
	});
	$(".header-form").html("Ubah Kategori");
	$("button[type=submit]").html("Ubah");
	let loc = $(location).attr("href").replace("#", "");
	loc = loc + "/update";
	$("#myform").attr("action", loc);
	$("#modal-form").modal('show');
	$("#modal-form input[type=text]").focus();
});

$(".buttonEditSeries").on('click', function () {
	let id = $(this).data("value");
	let url = $(location).attr("href").replace("#", "");
	url = url + "/getSeriById";
	$.ajax({
		type: 'ajax',
		method: 'post',
		data: {
			id: id
		},
		url: url,
		dataType: 'json',
		success: function (response) {
			$("input[name=seri]").val(response.seri);
			$("input[name=id]").val(response.id);
		}
	});
	$(".header-form").html("Ubah Seri");
	$("button[type=submit]").html("Ubah");
	let loc = $(location).attr("href").replace("#", "");
	loc = loc + "/update";
	$("#myform").attr("action", loc);
	$("#modal-form").modal('show');
	$("#modal-form input[type=text]").focus();
});

// ButtonModalImage
$(".btnModal").on('click',function(){
	let src = $(this).data('image');
	let name = $(this).data('title');
	$("#modalLarge .modal-title").html(name);
	$("#modalLarge .modal-body img").attr("src", src);
	$("#modalLarge").modal("show");
});