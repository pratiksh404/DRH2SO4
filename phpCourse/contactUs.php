<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    <link rel="stylesheet" href="../BOOTSTRAP/css/bootstrap.min.css">
    <script src="../BOOTSTRAP/jquery.js"></script>
    <script src="../BOOTSTRAP/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="row">
        <div class="col-lg-12 contactus" id="contact">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <form class="form-horizontal" method="post" action="contactUs.php">
                                <fieldset>
                                    <legend class="text-center header glow">Contact us</legend>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <input id="name" name="name" type="text" placeholder="First Name" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <textarea class="form-control" id="message" name="message" placeholder="Wha's on your mind....." rows="7"></textarea>
                                        </div>
                                    </div>

                                    <input type="submit" value="SUBMIT" class="col-lg-12">


                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <div class="panel panel-default">
                                <div class="text-center header glow">Our Office</div>
                                <div class="panel-body text-center">
                                    <h4>Address</h4>
                                    <div>
                                        Shallaghari<br />
                                        Bhaktapur<br />
                                        9843652012<br />
                                        <a href="http://drh2so4.ga/?i=1">www.drh2so4.ga</a><br />
                                    </div>
                                    <hr />
                                    <div id="map1" class="map-responsive">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.33305382479!2d85.35900221480922!3d27.676099333471875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a1bed1bdd29%3A0x70040fb78c745729!2sSamriddhi+College!5e0!3m2!1sen!2snp!4v1541222986023" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>

</html>


<?php
$to = 'pratikdai404@gmail.com';
if(isset($_post['name'])&&isset($_post['email'])&&isset($_post['phone'])&&isset($_post['message']))
{
    $header = $_POST['email'];
    $body = $_POST['email'];
    $subject = $_POST['name'].' '.$_POST['phone'];
    if(!empty($header)&&!empty($body)&&!empty($_subject))
    {
        mail($to,$subject,$body,$header);
    }
}
?>
