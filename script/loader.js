$.ajax({
  type: 'POST',
  url: "/",
  data: {},
  beforeSend: function(XMLHttpRequest)
  {
    //Upload progress
    XMLHttpRequest.upload.addEventListener("progress", function(evt){
      if (evt.lengthComputable) {
        var percentComplete = evt.loaded / evt.total;
        //Do something with upload progress
      }
    }, false);
    //Download progress
    XMLHttpRequest.addEventListener("progress", function(evt){
      if (evt.lengthComputable) {
        var percentComplete = evt.loaded / evt.total;
        console.log(percentComplete);
      }
    }, false);
  },
  success: function(data){
    console.log('loaded');
  }
});
