var getUrl = window.location;
var base_url = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

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


function removeFile($id,$link){
    $.ajax({
      url:baseUrl+"/shift",
      type:"POST",
      dataType:'json',
      data:{tanggal:tanggal},
      success:function(result){
        var trHTML = '';
        $("#shift").find('option').remove().end();
        $.each(result,function(i,data){
          trHTML += '<option value="'+data.SHIFT_NUM+'">'+data.DESCRIPTION+'</option>';
          console.log(trHTML);
        });
        $("#shift").append(trHTML);
      },
      error:function(error){
        console.log(error)
      }
    });
}