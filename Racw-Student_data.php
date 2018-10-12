<?php $page="join";
$event="std";?>
<!DOCTYPE html>
<html lang="en" ng-app>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Student Data-RACW</title>
    <link rel="shortcut icon" type="image/ico" href="pics/rota_icon.ico">
    <!--CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/custom-navbar.css">
    <link rel="stylesheet" href="css/custom-icons_footer.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-1.9.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
        <script type="text/javascript">
        function showpreview(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#prev').attr('src', e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }

        }
        $(document).ready(function() {

            $("#ssubmit").click(function() {
                $("#ssubmit").attr('disabled','true');
                 
                $("#waitt").show();
                $q = $("#sfrm").serialize();

                $url = "student-form.php?" + $q;
                $.get($url, function(result) {
                    if(alert(result))
                        {}
                    else
                        {window.location.reload();}
                    $("#sfrm")[0].reset();
                    $("#waitt").hide();

                });
            });
            
            $("#hyes").click(function(){
                
                /*$("#showsizebox").css("display",($('#hyes').val()=='YES') ? "block":"none");*/
                if($("#hyes").val()=="YES")
                    {
                        $("#showsizebox").show();
                    }
            });
              $("#hno").click(function(){
                /*$("#showsizebox").css("display",($('#hyes').val()=='YES') ? "block":"none");*/
                if($("#hno").val()=="NO")
                    {
                        $("#showsizebox").hide();
                    }
            });

        });
            
        

    </script>
    <style>
        input.ng-invalid.ng-dirty {
            border: 1px solid red;
            box-shadow: 1px 1px 1px red;
        }

        #error {
            color: red;
        }

        input.ng-valid.ng-dirty{
            border: 1px solid green;
            box-shadow: 1px 1px 1px green;
        }
        #showsizebox
        {
            display: none;
        }
        #t-border
        {
            border: 2px solid indianred;
            box-shadow: 10px 10px 10px grey;
        }
        #waitt
        {
            display: none;
        }

    </style>
</head>

<body>
    <!--Navbar-->
    <?php include_once("header.php")?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="pics/unnamed%20(6).jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-2"></div>
            <div class="col-12 col-md-12 col-lg-8 table-bordered" id="t-border" style="font-family:Adobe Garamond Pro Bold;border-radius:10">
               <br>
                <center>
                    <h2 id="studentdatamodallabel" style="font-family:Adobe Garamond Pro Bold;">Student Data- RACW</h2>
                </center>
                <hr>
                <form name="sfrm" id="sfrm">
                    <div class="container-fluid">
                        <!--Name-->
                        <div class="form-row container" style="font-family:Adobe Garamond Pro Bold;">
                            <div class="form-group form-check-inline col-md-4">
                                <h4>Name :</h4>
                            </div>
                            <div class="form-group form-check-inline col-md-4">
                                <input type="text" name="sdname" id="sdname" ng-model="student.sdname" required class="form-control" placeholder="Your Full Name">
                            </div>
                               <div class="form-group form-check-inline col-md-3">
                                <span ng-show="sfrm.sdname.$dirty && sfrm.sdname.$error.required" class="col-md-auto" id="error">Required!</span>
                            </div>
                        </div>
                        <!--Enrollment No-->
                        <div class="form-row container" style="font-family:Adobe Garamond Pro Bold;">
                            <div class="form-group form-check-inline col-md-4">
                                <h4>Enroll No :</h4>
                            </div>
                            <div class="form-group form-check-inline col-md-4">
                                <input type="text" name="sderno" id="sderno" ng-model="student.sderno" required class="form-control" placeholder="eg 141xxx">
                              </div>
                            <div class="form-group form-check-inline col-md-3">
                                <span ng-show="sfrm.sderno.$dirty && sfrm.sderno.$error.required" class="col-md-auto" id="error">Required!</span>
                            </div>
                        </div>
                        <!--Date-->
                         <div class="form-row container" style="font-family:Adobe Garamond Pro Bold;">
                            <div class="form-group form-check-inline col-md-4">
                                <h4>DOB:</h4>
                            </div>
                            <div class="form-group form-check-inline col-md-4">
                                <input type="date" name="sddob" id="sddob" ng-model="student.sddob" required class="form-control">
                             </div>
                               <div class="form-group form-check-inline col-md-3">
                                <span ng-show="sfrm.sddob.$dirty && sfrm.sddob.$error.required" class="col-md-auto" id="error">Required!</span>
                                <span ng-show="sfrm.sddob.$dirty && sfrm.sddob.$error.date" class="col-md-auto" id="error">Valid Date Please!</span>
                            </div>
                        </div>

                        <!--Mail-->
                        <div class="form-row container" style="font-family:Adobe Garamond Pro Bold;">
                            <div class="form-group form-check-inline col-md-4">
                                <h4>Email :</h4>
                            </div>
                            <div class="form-group form-check-inline col-md-4">
                                <input type="email" name="sdmail" id="sdmail" ng-model="student.smail" required class="form-control col-12" placeholder="xyz@gmail.com">
                            </div>
                            <div class="form-group form-check-inline col-md-3">
                                <div ng-show="sfrm.sdmail.$dirty && sfrm.sdmail.$error.required" class="col-md-auto col-12" id="error">Required!</div>
                                <div ng-show="sfrm.sdmail.$dirty && sfrm.sdmail.$error.email" class="col-md-auto col-12" id="error">Enter valid email!</div>
                            </div>
                        </div>
                        <!--Whatsapp No-->
                        <div class="form-row container" style="font-family:Adobe Garamond Pro Bold;">
                            <div class="form-group form-check-inline col-md-4">
                                <h4>Mobile(Whatsapp) :</h4>
                            </div>
                            <div class="form-group form-check-inline col-md-4">
                                <input type="tel" name="sdmobilew" id="sdmobilew" ng-model="student.sdmobilew" required class="form-control" maxlength="10" minlength="10" ng-pattern="/^[0-9]{10,10}$/" placeholder="78xxxxxxxx">
                            </div>
                               <div class="form-group form-check-inline col-md-3">
                                <span ng-show="sfrm.sdmobilew.$dirty && sfrm.sdmobilew.$error.required" class="col-md-auto" id="error">Required!</span>
                              <span ng-show="sfrm.sdmobilew.$dirty && sfrm.sdmobilew.$error.pattern" class="col-md-auto" id="error">Enter valid Phone Number!</span>
                            </div>
                        </div>
                        <!--Calling no-->
                        <div class="form-row container" style="font-family:Adobe Garamond Pro Bold;">
                            <div class="form-group form-check-inline col-md-4">
                                <h4>Mobile(Calling) :</h4>
                            </div>
                            <div class="form-group form-check-inline col-md-4">
                                <input type="tel" name="sdmobilec" id="sdmobilec" ng-model="student.sdmobilec" required class="form-control" maxlength="10" minlength="10" ng-pattern="/^[0-9]{10,10}$/"  placeholder="78xxxxxxxx">
                            </div>
                               <div class="form-group form-check-inline col-md-3">
                                <span ng-show="sfrm.sdmobilec.$dirty && sfrm.sdmobilec.$error.required" class="col-md-auto" id="error">Required!</span>
                                <span ng-show="sfrm.sdmobilec.$dirty && sfrm.sdmobilec.$error.pattern" class="col-md-auto" id="error">Enter valid Phone Number!</span>
                            </div>
                        </div>
                        <!--Hood-->
                        <div class="form-row container" style="font-family:Adobe Garamond Pro Bold;">
                        <div class="form-check form-check-inline">
                            <h4>Do you want a hoodie?</h4>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="hood" id="hyes" value="YES">
                            <label class="form-check-label" for="yes">YES</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="hood"  id="hno" value="NO" checked>
                            <label class="form-check-label" for="no">NO</label>
                        </div>
                           <!-- <div class="form-check form-check-inline text-muted col-md-auto">
                                <div>* Approx. Price Rs 650-700/-</div>
                            </div>-->
                        </div>
                        <!--size-->
                         <div class="form-row container" id="showsizebox" style="font-family:Adobe Garamond Pro Bold;">
                        <div class="form-check form-check-inline col-md-4">
                            <h4>Select your size</h4>
                        </div>
                        <div class="form-check form-check-inline col-md-4">
                        <select class="form-control" name="size" id="size" >
                          <option value="select">Select</option>
                          <option value="S">S</option>
                          <option value="M">M</option>
                          <option value="L">L</option>
                          <option value="XL">XL</option>
                          <option value="XXL">XXL</option>
                        </select>
                    </div>
                         <div class="form-group form-check-inline col-md-3 text-muted">
                                <span>* As per standard size</span>
                            </div>
                        </div>
                        <!--rtp-->
                        <div class="form-row container" style="font-family:Adobe Garamond Pro Bold;">
                         <div class="form-check form-check-inline col-12">
                            <h4>Did you attend Rotaract Training Programme (RTP)-2018?</h4>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rtp" id="ryes" value="YES" checked>
                            <label class="form-check-label" for="yes">YES</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rtp" id="rno" value="NO">
                            <label class="form-check-label" for="no">NO</label>
                        </div>
                    </div>
                    <!--Fee-->
                    <div class="form-row container" style="font-family:Adobe Garamond Pro Bold;">
                         <div class="form-check form-check-inline">
                            <h4>RACW Fee Paid?</h4>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fee" id="fyes" value="YES">
                            <label class="form-check-label" for="yes">YES</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fee" id="fno" value="NO" checked>
                            <label class="form-check-label" for="no">NO</label>
                        </div>
                    </div>
                    <br>
                    <center><acronym>*</acronym><small>Please make sure that all the fields are filled correctly.</small></center>
                    <center style="font-family:Adobe Garamond Pro Bold">
                        <input type="button" class="btn btn-danger" ng-disabled="sfrm.$invalid" value="SUBMIT" id="ssubmit" name="ssubmit">
                        <span><img src="pics/loading.gif" id="waitt" width="58px" height="50px"></span>
                    </center>
                    <br>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <br>
    <?php include_once("footer.php") ?>
    <script src="js/angular.min.js"></script>
</body>

</html>
