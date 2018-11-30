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



if(getUrl.pathname.includes('Gallery')){
  console.log('This is Gallery Page')
  var template = "<div class=\"dz-preview dz-file-preview\">\n  <span dz-token-file id='adexe'></span><div class=\"dz-image\"><img data-dz-thumbnail /></div>\n  <div class=\"dz-details\">\n    <div class=\"dz-size\"><span data-dz-size></span></div>\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n  </div>\n  <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div><input onchange=\"addTitleGallery(this)\" class=\"form-control\" type=\"text\" placeholder=\"Masukkan Judul..\">\n  <div class=\"dz-success-mark\">\n    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">\n      <title>Check</title>\n      <defs></defs>\n      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">\n        <path d=\"M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z\" id=\"Oval-2\" stroke-opacity=\"0.198794158\" stroke=\"#747474\" fill-opacity=\"0.816519475\" fill=\"#FFFFFF\" sketch:type=\"MSShapeGroup\"></path>\n      </g>\n    </svg>\n  </div>\n  <div class=\"dz-error-mark\">\n    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">\n      <title>Error</title>\n      <defs></defs>\n      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">\n        <g id=\"Check-+-Oval-2\" sketch:type=\"MSLayerGroup\" stroke=\"#747474\" stroke-opacity=\"0.198794158\" fill=\"#FFFFFF\" fill-opacity=\"0.816519475\">\n          <path d=\"M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z\" id=\"Oval-2\" sketch:type=\"MSShapeGroup\"></path>\n        </g>\n      </g>\n    </svg>\n  </div>\n</div>";
  var to_go = 'Gallery';
}else{
  var template = "<div class=\"dz-preview dz-file-preview\">\n  <span dz-token-file id='adexe'></span><div class=\"dz-image\"><img data-dz-thumbnail /></div>\n  <div class=\"dz-details\">\n    <div class=\"dz-size\"><span data-dz-size></span></div>\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n  </div>\n  <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>\n  <div class=\"dz-success-mark\">\n    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">\n      <title>Check</title>\n      <defs></defs>\n      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">\n        <path d=\"M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z\" id=\"Oval-2\" stroke-opacity=\"0.198794158\" stroke=\"#747474\" fill-opacity=\"0.816519475\" fill=\"#FFFFFF\" sketch:type=\"MSShapeGroup\"></path>\n      </g>\n    </svg>\n  </div>\n  <div class=\"dz-error-mark\">\n    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">\n      <title>Error</title>\n      <defs></defs>\n      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">\n        <g id=\"Check-+-Oval-2\" sketch:type=\"MSLayerGroup\" stroke=\"#747474\" stroke-opacity=\"0.198794158\" fill=\"#FFFFFF\" fill-opacity=\"0.816519475\">\n          <path d=\"M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z\" id=\"Oval-2\" sketch:type=\"MSShapeGroup\"></path>\n        </g>\n      </g>\n    </svg>\n  </div>\n</div>";
  var to_go = 'Destinasi'
}


var foto_upload = new Dropzone(".dropzone",{
	url: base_url+"/Admin/"+to_go+"/UploadImage",
	maxFilesize: 2,
	method:"post",
	acceptedFiles:"image/*",
	paramName:"file",
	dictInvalidFileType:"Type file ini tidak dizinkan",
	addRemoveLinks:true,
  previewTemplate:template
  //previewTemplate:"<div class=\"dz-preview dz-file-preview\">\n  <div class=\"dz-image\"><img data-dz-thumbnail /></div>\n  <div class=\"dz-details\">\n    <div class=\"dz-size\"><span data-dz-size></span></div>\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n  </div>\n  <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div><input onchange=\"addTitleGallery(this)\" class=\"form-control\" type=\"text\" placeholder=\"Title\">\n  <div class=\"dz-success-mark\">\n    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">\n      <title>Check</title>\n      <defs></defs>\n      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">\n        <path d=\"M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z\" id=\"Oval-2\" stroke-opacity=\"0.198794158\" stroke=\"#747474\" fill-opacity=\"0.816519475\" fill=\"#FFFFFF\" sketch:type=\"MSShapeGroup\"></path>\n      </g>\n    </svg>\n  </div>\n  <div class=\"dz-error-mark\">\n    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">\n      <title>Error</title>\n      <defs></defs>\n      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">\n        <g id=\"Check-+-Oval-2\" sketch:type=\"MSLayerGroup\" stroke=\"#747474\" stroke-opacity=\"0.198794158\" fill=\"#FFFFFF\" fill-opacity=\"0.816519475\">\n          <path d=\"M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z\" id=\"Oval-2\" sketch:type=\"MSShapeGroup\"></path>\n        </g>\n      </g>\n    </svg>\n  </div>\n</div>"
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(file, xhr, formData){
	
  if(!getUrl.pathname.includes('Gallery')){
	 var id = $('#id_dropzone').val();
   file.id_dropzone = id;
   formData.append("id",file.id_dropzone); //Menmpersiapkan token untuk masing masing foto
  }
	
  formData.append("token",file.token);

});


//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
	var token=a.token;
	$.ajax({
		type:"POST",
		data:{token:token},
		url:base_url+"/Admin/"+to_go+"/RemoveImage",
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



function addTitleGallery(th,token = false){

  if(!token){
     token = $(th).closest('div').find('#adexe').text();  
  }

  var title = $(th).val();
  console.log(token);

  $.ajax({
    url:base_url+"/Admin/Gallery/UpdateTitle",
    type:"POST",
    dataType:'json',
    data:{token:token,title:title},
    beforeSend:function(){
     $(".preloader").fadeIn();
   },
   success:function(result){
     $(".preloader").fadeOut();
     
     if(!token){
      $(th).prop('readonly',true); 
     }else{
      $(th).prevAll('button').show();
      $(th).hide();
     }

     swal("Success !!", "Judul telah diganti!!", "success");
   },
   error:function(error){
     $(".preloader").fadeOut();
     toastr.error(error,'Error');
     console.log(error)
   }
 });

}

function editTitle(th,id){
  $.ajax({
    url:base_url+"/Admin/Gallery/getTitle",
    type:"POST",
    dataType:'json',
    data:{id:id},
    beforeSend:function(){
   },
   success:function(result){
     $(th).closest('div').find('#edit-title').show();
     $(th).closest('div').find('#edit-title').val(result[0].judul);
     $(th).next('button').hide();
     $(th).hide();

   },
   error:function(error){
     $(".preloader").fadeOut();
     toastr.error(error,'Error');
     console.log(error)
   }
 });
}

function removeFile(token,link,th){
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
         swal("Deleted !!", "Hey, your image file has been deleted !!", "success");
         toastr.success('Delete Image','Success');
       },
       error:function(error){
         $(".preloader").fadeOut();
         toastr.error(error,'Error');
         console.log(error)
       }
     });
    }
    else {
      swal("Cancelled !!", "Hey, your imaginary file is safe !!", "error");
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

/* -=-=-=-=-=-=-=-=-=-=-=---------------=- READ IMAGE FUNCTION -=-=-------------------=-=-=------------=-=-=-=-=-- */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.blah')
            .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
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