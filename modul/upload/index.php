<?php 
include "../../config/header.php";?>

<!-- html -->
            <div class="form-group">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input class="form-control" type="file" name="berkas"><br>
                    <input class="btn btn-info" type="submit" value="upload">
                </form>
            </div>
<?php
include "../../config/footer.php";