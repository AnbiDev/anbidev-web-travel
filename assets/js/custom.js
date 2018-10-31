const base_url = window.location.origin;

$(document).ready(function(){
	Dropzone.options.myDropzone = {
    maxFilesize: 2,
    init: function() {
      this.on("uploadprogress", function(file, progress) {
        console.log("File progress", progress);
      });
    }
  }
});