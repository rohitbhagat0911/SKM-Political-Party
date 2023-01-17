<?php
session_start();
require_once '../../server/partymeberdata.php';

?>

<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <style>
        .back-button{
            display: block;
            margin: 1em 0;
            background-color: #597cb5;
            width: 6vw;
            height: auto;
            padding: 0.5em;
            text-align:center;
            border-radius: 5px;
            text-decoration: none;
            color: white;
        }

        .back-button:hover{
                background-color: #6fa0ed;
                transition: background-color 0.7s ease-in;
        }
    </style>

    <title>SKM - Application View</title>
    <script>
        function magnify(imgID, zoom) {
            var img, glass, w, h, bw;
            img = document.getElementById(imgID);
            glass = document.createElement("DIV");
            glass.setAttribute("class", "img-magnifier-glass");
            img.parentElement.insertBefore(glass, img);
            glass.style.backgroundImage = "url('" + img.src + "')";
            glass.style.backgroundRepeat = "no-repeat";
            glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
            bw = 3;
            w = glass.offsetWidth / 2;
            h = glass.offsetHeight / 2;
            glass.addEventListener("mousemove", moveMagnifier);
            img.addEventListener("mousemove", moveMagnifier);
            glass.addEventListener("touchmove", moveMagnifier);
            img.addEventListener("touchmove", moveMagnifier);
            function moveMagnifier(e) {
                var pos, x, y;
                e.preventDefault();
                pos = getCursorPos(e);
                x = pos.x;
                y = pos.y;
                if (x > img.width - (w / zoom)) { x = img.width - (w / zoom); }
                if (x < w / zoom) { x = w / zoom; }
                if (y > img.height - (h / zoom)) { y = img.height - (h / zoom); }
                if (y < h / zoom) { y = h / zoom; }
                glass.style.left = (x - w) + "px";
                glass.style.top = (y - h) + "px";
                glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
            }
            function getCursorPos(e) {
                var a, x = 0, y = 0;
                e = e || window.event;
                a = img.getBoundingClientRect();
                x = e.pageX - a.left;
                y = e.pageY - a.top;
                x = x - window.pageXOffset;
                y = y - window.pageYOffset;
                return { x: x, y: y };
            }
            function normalImg() {
                var divs = document.getElementsByClassName("img-magnifier-glass");
                divs.remove();
            }
        }
    </script>

    
</head>

<body>
    <div class="wrapper">
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <?php
						if (isset($_SESSION['isLoggedIn']) == true && ($_SESSION['userDegree'] == 0 || $_SESSION['userDegree'] == 1 || $_SESSION['userDegree'] == 2  )) {
                            if($pmDetails != FALSE && $pmDetails->num_rows > 0) {
								while ($pms = $pmDetails->fetch_assoc()) {
                                    if ($_GET['id'] == $pms['id']) {
                                        if (isset($_GET['con'])) {
                                            
                                        
                                        ?>
<a href="../constituency/?con=<?php echo $_GET['con'] ?>" class="back-button">< Back</a>
                      
                     <?php
                     } else {
                       ?>
<a href="../constituencies/" class="back-button">< Back</a>

<?php                        
                     }
                     ?>
                      
<h2>Member Details</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-white bg-success">
                                    <div class="box-title">Member Information</div>
                                </div>
                                <div class="card-body card-content">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Name :</td>
                                                <td><?php echo $pms['name']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Gender :</td>
                                                <td><?php echo $pms['gender']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Voter Number :</td>
                                                <td><?php echo $pms['vidno']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Aadhar Number :</td>
                                                <td><?php echo $pms['adhaarno']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Membership Card Number :</td>
                                                <td><?php echo $pms['partycardno']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>District :</td>
                                                <td><?php echo $pms['district']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Constituency :</td>
                                                <td><?php echo $pms['constituency']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Ward Name :</td>
                                                <td><?php echo $pms['name']; ?></td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Block Name :</td>
                                                <td>MANGMOO DENTAM GP</td>
                                            </tr> -->
                                            <tr>
                                                <td>Phone Number :</td>
                                                <td><?php echo $pms['phone']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email id:</td>
                                                <td><?php echo $pms['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address :</td>
                                                <td><?php echo $pms['address']; ?></td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Application Date :</td>
                                                <td>&nbsp;<span>2022-10-21 06:33:00</span></td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="card">
                            <div class="box-title card-title text-info">
                                Member Documents
                            </div>
                            <div class="card-content">
                                <div class="card-footer bg-light">
                                    <span class="heading-text">Member Photo</span>
                                    <div class="heading-elements">
                                        <img class="img-fluid" id="passport-image"
								src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pms['photo']); ?>"	
                                            alt="" max-height="100px" width="auto">
                                    </div>
                                </div>
                                <hr>
                                <div class="card-footer bg-light">
                                    <span class="heading-text">Party Membership</span>
                                    <div class="heading-elements img-magnifier-container">
                                        <img 
								src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pms['partycard']); ?>"	
                                 id="image" class="zoom"
                                            data-magnify-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pms['partycard']); ?>" />
                                    </div>
                                </div>
                                <hr>
                                <div class="card-footer bg-light">
                                    <span class="heading-text">Voter card</span>
                                    <div class="heading-elements img-magnifier-container">
                                        <img 
								src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pms['votercard']); ?>"	
                                        
                                         alt="" id="image" class="zoom"
                                            data-magnify-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pms['votercard']); ?>">
                                    </div>
                                </div>
                                <hr>
                                <div class="card-footer bg-light">
                                    <span class="heading-text">Aadhaar Card</span>
                                    <div class="heading-elements img-magnifier-container">
                                        <img 
								src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pms['adhaarcard']); ?>"	
                                         
                                        alt="" id="image" class="zoom"
                                            data-magnify-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pms['adhaarcard']); ?>">
                                    </div>
                                </div>
                                <script src="jquery.magnify.js" charset="utf-8"></script>
                                <script>
                                    $(document).ready(function () {
                                        $('.zoom').magnify();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                                        <?php
                                    }
        

                        }
                    }
                } else {
                    header('Location: ../');
                }

                    ?>

                
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>