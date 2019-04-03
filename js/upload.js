// Upload Form
		$(function() {
			// Settings ////////////////////////////////////////////////
			var uploader = new plupload.Uploader({
				runtimes : 'html5,flash,silverlight', // Set runtimes, here it will use HTML5, if not supported will use flash, etc.
				browse_button : 'pickfiles', // The id on the select files button
				multi_selection: true, // Allow to select one file each time
				container : 'uploader', // The id of the upload form container
				max_file_size : '5000kb', // Maximum file size allowed
				url : 'upload.php', // The url to the upload.php file
				flash_swf_url : 'js/plupload.flash.swf', // The url to thye flash file
				silverlight_xap_url : 'js/plupload.silverlight.xap', // The url to the silverlight file
				unique_names : true, // randomize file names 
				filters : [ {title : "Image files", extensions : "jpg,gif,png"} ] // Filter the files that will be showed on the select files window
			});

			// RUNTIME
			uploader.bind('Init', function(up, params) {
				$('#runtime').text(params.runtime);
			});

			// Start Upload ////////////////////////////////////////////
			// When the button with the id "#uploadfiles" is clicked the upload will start
			$('#uploadfiles').click(function(e) {
				uploader.start();
				e.preventDefault();
			});

			uploader.init(); // Initializes the Uploader instance and adds internal event listeners.

			// Selected Files //////////////////////////////////////////
			// When the user select a file it wiil append one div with the class "addedFile" and a unique id to the "#filelist" div.
			// This appended div will contain the file name and a remove button
			uploader.bind('FilesAdded', function(up, files) {
				var fileExt;
				$.each(files, function(i, file) {
					fileExt = file.name.split('.').pop();
					$('#filelist').append('<div class="addedFile" id="div_' + file.id + '">' + file.name + '<img src="uploads/' + file.id + '.' + fileExt + '" alt="'+file.name+'" title="'+file.name+'" onclick="window.open(\'uploads/'+file.id + '.' + fileExt + '\',\'test_name\',\'width=600,height=600,scrollbars=no\');return false;" id="img_' + file.id + '" style="cursor:pointer;vertical-align:text-top;padding:0 20px;display:none;width:auto;max-width:255px;max-height:200px;height:auto;"  /><a href="#" id="'+file.id+'" class="removeFile"></a>' + '</div>');
				});
				up.refresh(); // Reposition Flash/Silverlight
			});

			// Error Alert /////////////////////////////////////////////
			// If an error occurs an alert window will popup with the error code and error message.
			// Ex: when a user adds a file with now allowed extension
			uploader.bind('Error', function(up, err) {
				alert("Error: " + err.code + ", Message: " + err.message + (err.file ? ", File: " + err.file.name : "") + "");
				up.refresh(); // Reposition Flash/Silverlight
			});

			// Remove file button //////////////////////////////////////
			// On click remove the file from the queue
			$('a.removeFile').live('click', function(e) {
				uploader.removeFile(uploader.getFile(this.id));
				$("#div_"+this.id).remove();
				e.preventDefault();
			});

			// Progress bar ////////////////////////////////////////////
			// Add the progress bar when the upload starts
			// Append the tooltip with the current percentage
			uploader.bind('UploadProgress', function(up, file) {
				var progressBarValue = up.total.percent;
				$('#progressbar').fadeIn().progressbar({
					value: progressBarValue
				});
				$('#progressbar .ui-progressbar-value').html('<span class="progressTooltip">' + up.total.percent + '%</span>');
			});

			///// UPLOAD COMPLETED ////////
			uploader.bind('UploadComplete', function(up,files) {
				// UPLOAD COMPLETED - show photo stuff here
                                $.each(files, function(i, file) {
					if (file.status == 5 ) {
						//$("#"+this.id).remove();
						fileExt = file.name.split('.').pop();
						document.getElementById("img_"+file.id).style.display = "inline-block";
						document.getElementById("img_"+file.id).src += "?" + new Date().getTime(); 	
					}
				});
			});

		}); // end of the upload form configuration

		// Check Box Styling
		$(document).ready(function() {

			var checkbox = $('.upload-form span.checkbox');

			// Check if JavaScript is enabled
			$('body').addClass('js');

			// Make the checkbox checked on load
			checkbox.addClass('checked').children('input').attr('checked', true);

			// Click function
			checkbox.on('click', function() {

				if ($(this).children('input').attr('checked')) {
					$(this).children('input').attr('checked', false);
					$(this).removeClass('checked');
				}

				else {
					$(this).children('input').attr('checked', true);
					$(this).addClass('checked');
				}
			
			});

		});
