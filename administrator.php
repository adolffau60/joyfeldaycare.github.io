<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
<body>
<div class="navigation">
    <nav>
        <img class="logo" src="LOGOJOYFEL.png">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="About_Us.html">About Us</a></li>
            <li><a href="Time_table.html">Time table</a></li>
            <li><a href="form.php">Event videos</a></li>
            <li><a href="administrator.php">Administrator</a></li>
        </ul>
    </nav>
  </div>
<div class="modal fade" id="form_modal" aria-hidden="true">
        <div class="modal-dialog">
            <form action="save_video.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Video File</label>
                                <input type="file" name="video" class="form-control-file"/>
                            </div>
                            <div class="form-group">
                                <label>Video Name</label>
                                <input type="text" name="name" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                        <button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="footer-distributed" style="padding-top: 30px; margin-top:280px; padding-bottom:0px;">

<div class="footer-left">

    <h3><span><img src="LOGOJOYFEL.png" style="height: 80px; width: 80px;"></span></h3>

    <p class="footer-links">
        <a href="index.html" class="link-1">Home</a>
    </p>

    <p class="footer-company-name">Joyfel Day Care © 2022</p>
</div>

<div class="footer-center">

    <div>
        <i class="fa fa-map-marker"></i>
        <p><span></span> Ilemela, Mwanza</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+255756964880-DIRECTOR<br>+255766629760-SECRETAL</p>
    </div>

    <div>
        <i class="fa fa-envelope"></i>
        <p style="text-decoration:none;"><a href="mailto:joyfeldaycarecenter2021@gmail.com">joyfeldaycarecenter2021@gmail.com</a></p>
    </div>

</div>

<div class="footer-right">

    <div class="footer-icons" style="float:right;">

        <a href="#facebook"><i class="fa fa-facebook"></i></a>
        <a href="#twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://instagram.com/joyfel.school.mwanza?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>

    </div>

</div>

</footer>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>