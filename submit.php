<?php $page = "p4"; ?>
<?php include("header.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/plupload.full.js"></script>
    <script src="js/jquery-progressbar.min.js"></script>
    <script src="js/upload.js"></script>

<textarea id="title" rows="1" cols="60" onFocus="if(this.value == 'Title') {this.value = '';this.style.color='black'}" onBlur="if (this.value == '') {this.value = 'Title';this.style.color='#888888';}" >Title</textarea>
<textarea maxlength="500" cols="73" rows="8" id="short_desc" onFocus="if(this.value == 'Short Description') {this.value = '';this.style.color='black'}" onBlur="if (this.value == '') {this.value = 'Short Description';this.style.color='#888888';}">Short Description</textarea>
<div id="buttons_container"></div>
<div id="editor" class="editorClass" contentEditable="true" onclick="updateEditor()" onFocus="if(this.innerHTML == 'Long Description') {this.innerHTML = '';this.style.color='black'}" onBlur="if (this.innerHTML == '') {this.innerHTML = 'Long Description';this.style.color='#888888';}">Long Description</div>

<div class="upload-form" id="uploader">
    <div>
	<h2>File Uploader</h2>
        <button id="pickfiles" href="#">Select</button>
        <button id="uploadfiles" href="#">Upload</button>
    </div>
    <div id="progressbar"></div>
    <div id="filelist" class="cb"></div>
</div>

<?php include("footer.php"); ?>
