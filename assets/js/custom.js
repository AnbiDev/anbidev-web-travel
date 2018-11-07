var getUrl = window.location;
var base_url = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

$(document).ready(function() {
  $('.select2').select2();
  
  $('.tutup').on('click',function(event){
    console.log('tutup');
    $('.modal').modal('hide');
  });

            $('#fasilitasModal').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) 
              var recipient = button.data('whatever') 
              var modal = $(this)
          
              modal.find('.modal-body input[type="hidden"]').val(recipient)
            });


});

Dropzone.autoDiscover = false;
// var id = '';
// if($('#id').length){
	
// }



var foto_upload = new Dropzone(".dropzone",{
	url: base_url+"/Admin/Destinasi/UploadImage",
	maxFilesize: 2,
	method:"post",
	acceptedFiles:"image/*",
	paramName:"file",
	dictInvalidFileType:"Type file ini tidak dizinkan",
	addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(file, xhr, formData){
	
	var id = $('#id_dropzone').val();
	
	file.token=Math.random();
	formData.append("token",file.token);
	formData.append("id",id); //Menmpersiapkan token untuk masing masing foto
});


//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
	var token=a.token;
	$.ajax({
		type:"POST",
		data:{token:token},
		url:base_url+"/Admin/Destinasi/RemoveImage",
		cache:false,
		dataType: 'json',
		success: function(){
			toastr.success('Image Uploaded','Success');
		},
		error: function(error){
			toastr.error(error,'Error');

		}
	});
});


function removeFile(token,link,th){
	
  $.ajax({
    url:link,
    type:"POST",
    dataType:'json',
    data:{token:token},
    beforeSend:function(){
     $(".preloader").fadeIn();
   },
   success:function(result){
     $(".preloader").fadeOut();
     $(th).parent().remove();
     toastr.success('Delete Image','Success');
   },
   error:function(error){
     $(".preloader").fadeOut();
     toastr.error(error,'Error');
     console.log(error)
   }
 });
}


function deleteThis($link){
	swal({
    title: "Are you sure to delete ?",
    text: "Data tidak akan kembali , dan didelete secara permanen!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes",
    cancelButtonText: "No",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      swal("Deleted !!", "Hey, your imaginary file has been deleted !!", "success");
      window.location.replace($link);
    }
    else {
      swal("Cancelled !!", "Hey, your imaginary file is safe !!", "error");
    }
  });
}

function fasilitasToggle(th){

}