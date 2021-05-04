<?php
session_start();
if(!isset($_SESSION['id_user']))
{
    header("location:index.php");
    exit;
}

    include ("head.php");
    include ("menu.php");
    include ("footer.php");
?>
<style>
body{
    overflow: hidden;
}
</style>

<div class="text-center mt-5 mb-5">
<h4>Editor de Texto</h4>
<hr class="w-50 mx-auto">
</div>
<div class="row">
    <div class="col-2">

    </div>

    <div class="col-8">
    <div  id="editor">
        <p></p>
    </div>
    </div>

    <div class="col-2">

    </div>
</div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>