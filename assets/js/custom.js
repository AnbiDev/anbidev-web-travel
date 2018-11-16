var getUrl = window.location;
var base_url = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
var number = 0;


$(document).ready(function() {

  baguetteBox.run('.baguetteBoxOne');
  
  $('.harga').mask("#.##0", {reverse: true});

  $('.select2').select2();


  $('#fasilitasModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); 
    var recipient = button.data('whatever');
    var modal = $(this);
    console.log(recipient);
    modal.find('#id_paket_wisata').val(recipient);
  });

  $('#itinetaryModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); 
    var recipient = button.data('whatever');
    var modal = $(this);
    console.log(recipient);
    modal.find('#id_paket_wisata').val(recipient);
  });

  $('#hargaDetailModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); 
    var recipient = button.data('whatever');
    var modal = $(this);
    console.log(recipient);
    modal.find('#id_paket_wisata').val(recipient);
  });

});

Dropzone.autoDiscover = false;


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
  $.ajax({
    url:base_url+"/Admin/PaketWisata/setFasilitas",
    type:"POST",
    dataType:'json',
    data:$('#fasilitasi-form').serialize(),
    beforeSend:function(){
     $(".preloader").fadeIn();
   },
   success:function(result){
     $(".preloader").fadeOut();
     console.log(result);
     
     $("#lokasi-kedatangan-text").text(result.lokasi_kedatangan);
     $("#lokasi-keberangkatan-text").text(result.lokasi_keberangkatan);
     $("#deskripsi-fasilitas").html(result.deskripsi);

     $("#fasilitasModal").closest('form').find("input[type=text], textarea").val("");
     
     $("#fasilitasModal").modal('toggle');
     toastr.success('Edit data done!','Success');

   },
   error:function(error){
     $(".preloader").fadeOut();
     toastr.error(error,'Error');

     $("#fasilitasModal").closest('form').find("input[type=text], textarea").val("");
     
     $("#fasilitasModal").modal('toggle');
     console.log(error)
   }
 });
}

function itinetaryToggle(th){
  $.ajax({
    url:base_url+"/Admin/PaketWisata/setItinetary",
    type:"POST",
    dataType:'json',
    data:$('#itinetary-form').serialize(),
    beforeSend:function(){
     $(".preloader").fadeIn();
   },
   success:function(result){
     $(".preloader").fadeOut();
     toastr.success('Edit data done!','Success');
     
     console.log(result);

     $("#deskripsi-itinetary").html(result.deskripsi);

     $("#itinetaryModal").closest('form').find("input[type=text], textarea").val("");
     
     $("#itinetaryModal").modal('toggle');

   },
   error:function(error){
     $(".preloader").fadeOut();
     toastr.error(error,'Error');

     $("#itinetaryModal").closest('form').find("input[type=text], textarea").val("");
     
     $("#itinetaryModal").modal('toggle');
     console.log(error)
   }
 });
}

function addHargaDetail(th){
  $.ajax({
    url:base_url+"/Admin/PaketWisata/setHargaDetail",
    type:"POST",
    dataType:'json',
    data:$('#harga-detail-form').serialize(),
    beforeSend:function(){
     $(".preloader").fadeIn();
   },
   success:function(result){
     $(".preloader").fadeOut();
     toastr.success('Paket Harga Berhasil Ditambah!','Success');
     
     console.log(result);

     var html = ''
     number = number + 1;

     if(result){
      html = "<tr><td>"+result.nama_paket_harga+"</td><td>"+result.jumlah_orang+"</td><td>Rp. "+addCommas(result.harga)+" /pax</td><td >"+result.deskripsi+"</td><td class='text-center'><button onclick='removeHargaDetail(this)' data-harga="+result.id+" data-wisata="+result.id_paket_wisata+" class='btn btn-danger btn-rounded'><span aria-hidden='true'>&times;</span></button></td></tr>";
    }

    $("#hargaDetailModal").closest('form').find("input[type=text]").val("");
    $("#hargaDetailModal").modal('toggle');

    $("#tblHargaDetail").append(html);

  },
  error:function(error){
   $(".preloader").fadeOut();
   toastr.error(error,'Error');

   $("#hargaDetailModal").closest('form').find("input[type=text]").val("");

   $("#hargaDetailModal").modal('toggle');
   console.log(error)
 }
});
}

function removeHargaDetail(th){
  var id_harga_detail = $(th).attr('data-harga');
  var id_paket_wisata = $(th).attr('data-wisata');
  
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
      $.ajax({
        url:base_url + "/Admin/PaketWisata/removeHargaDetail",
        type:'POST',
        dataType:'json',
        data:{id_harga_detail:id_harga_detail,id_paket_wisata:id_paket_wisata},
        beforeSend:function(){
         $(".preloader").fadeIn();
       },
       success:function(result){
        $(".preloader").fadeOut();
        toastr.success('Paket Harga Berhasil Dihapus!','Success');
        swal("Deleted !!", "Paket Harga Berhasil Dihapus!", "success");
        $(th).closest('tr').remove();
      },
      error:function(error){
        $(".preloader").fadeOut();
        toastr.error(error,'Error');
      }
    });
    }
    else {
      swal("Cancelled !!", "Hey, your imaginary file is safe !!", "error");
    }
  });

  

}


/* --------------------------------------- FORMATING NUMBER FUNCTION --------------------------------------------- */
function addCommas(nStr)
{
  nStr += '';
  x = nStr.split('.');
  x1 = x[0];
  x2 = x.length > 1 ? '.' + x[1] : '';
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, '$1' + ',' + '$2');
  }
  return x1 + x2;
}