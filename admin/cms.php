<?
	include 'layouts/header.php';
?>
<script src="libs/tinymce/js/tinymce/tinymce.min.js?apiKey=g60mfpi6nmor996wal0f16epzai6p3wwja9j664gmwo4chut"></script>

		<div class="main-area col-sm-12 col-md-12">
			<div class="panel-header col-md-12 cms">
				<h1 class="menu-title"> Content managment system </h1>

				<ul class="col-md-4">
					<li><img src="img/slide.png" alt="">Edit slider</li>
					<li id="addnewsbtn"><img src="img/news.png" alt="">Add news</li>
					<li><img src="img/newbook.png" alt="">Add book</li>
					<li><img src="img/content.png" alt="">Update content</li>
				</ul>
				
				<div  class="content-wrapper col-md-9">
					<div class="addnews">
					<input type="text" id="title" name="title">
					<textarea name="tinymceQ" id="tinymceQ" class="mce"></textarea>
					<input type="date" id="newsdate" name="newsdate">
					<button id="savenews" > SAVE </button>
					</div>
				</div>

			</div>
		</div>

		<div class="footer col-sm-12 col-md-12">
			<h3> &COPY Copyright 2016 - 2017, All Rights Reserved </h3>
		</div>
	</div>
</div>


<script>
$(document).ready(function() {
  tinymce.init({
    selector: "textarea",
    theme: "modern",
    paste_data_images: true,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    file_picker_callback: function(callback, value, meta) {
      if (meta.filetype == 'image') {
        $('#upload').trigger('click');
        $('#upload').on('change', function() {
          var file = this.files[0];
          var reader = new FileReader();
          reader.onload = function(e) {
            callback(e.target.result, {
              alt: ''
            });
          };
          reader.readAsDataURL(file);
        });
      }
    },
    templates: [{
      title: 'Test template 1',
      content: 'Test 1'
    }, {
      title: 'Test template 2',
      content: 'Test 2'
    }]
  });

  $("#get").click(function(){
  		var temp = tinymce.get('tinymceQ').getContent();
  		console.log(temp);


  });

  $("#savenews").click(function(){
  	var context = tinymce.get('tinymceQ').getContent();
	var title = $("#title").val();
	var date = $("#newsdate").val();
		$.post('php/actions.php',{
			operation: "addnews",
			title: title,
			context: context,
			date: date
		},
		function(data,status){
			console.log(data);
		});
	});	
});

  </script>
</body>
</php>