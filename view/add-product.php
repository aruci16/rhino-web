<?php
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
</head>
<body>

<div style="max-width: 400px; background-color: rgba(255,255,255,0.93);" class="divcenter noradius noborder">
    <form>
        <div>
            <div class="col_full float-none">
                <label>Product Name</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="col_full float-none">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email">
            </div>
        </div>


        <div class="">
            <div class="col_full float-none">
                <label>City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col_full float-none">
                <label for="inputState">Category</label>
                <select id="inputState" class="form-control">
                    <option selected="">Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col_full float-none">
                <label for="inputZip">Zip</label>
                <input type="text" id="inputZip" class="form-control">
            </div>
            <div class="col_full float-none">
                <label>Allowed Image &amp; Video Files with Preview:</label><br>
                <div class="file-input file-input-new">
                    <div class="clearfix"></div>
                    <div class="input-group file-caption-main">
                        <div tabindex="500" class="file-caption form-control kv-fileinput-caption">

                            <input onkeydown="return false;" onpaste="return false;" placeholder="Select files..." class="file-caption-name">
                        </div>
                        <div>
                            <div tabindex="500" class="custom-btn-style-1">&nbsp;  <span>Browse …</span><input name="input11[]" type="file" multiple="" class="" accept="image/*" data-show-preview="false"></div>
                        </div>
                    </div></div>
            </div>
        </div>
        <div class="">
            <div class="">
                <input type="checkbox" id="gridCheck" class="">
                <label for="gridCheck" class="">
                    Check me out
                </label>
            </div>
        </div>
        <button type="submit" class="custom-btn-style-1">ADD PRODUCT</button>
    </form>
</div>
</body>
</html>