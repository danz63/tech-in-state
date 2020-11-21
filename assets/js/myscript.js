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
	let loc = $(location).attr("href").replace("#","");
	loc = loc + "/update";
	// console.log($("#myform"));
	$("#myform").attr("action", loc);
	$("#modal-form").modal('show');
});

$(document).on('hidden.bs.modal', '#modal-form', function () {
	$(".header-form").html("Tambah Menu");
	$("button[type=submit]").html("Simpan");
	$("input[name=menu]").val("");
	$("input[name=id]").val("");
	$("#myform").attr("action", $(location).attr("href").replace("#",""));
});

$(".btnDelete").on('click', function () {
	let id = $(this).data("value");
	let url = $("#modal-delete .modal-footer .btn-primary").attr("href").replace("#", "");
	url = url + "/delete/" + id;
	$("#modal-delete .modal-footer a.btn-primary").attr("href",url);
	$("#modal-delete").modal('show');
});

$(document).on('hidden.bs.modal', '#modal-form', function () {
	$(".header-form").html("Tambah Menu");
	$("button[type=submit]").html("Simpan");
	$("input[name=menu]").val("");
	$("input[name=id]").val("");
	$("#myform").attr("action", $(location).attr("href").replace("#",""));
});
