<form id="PicForm" method='post' action='backend/picUpload.php' enctype='multipart/form-data' >
        <input type="file" name="file[]" id="fileName" multiple class="button">

        <input type="text" name="picName" id="PicName" style="display:none">
        <input type="text" name="userId" id="UserId" style="display:none">
        <!-- <input type="button" onclick="" class="button" style="display:none" value="Upload" -->

       <input type='submit' name='submit' id="PicSubmit" value='Upload' style="display:none">
    </form>