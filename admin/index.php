<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telefoncu Mirsat</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/form.png" alt="">
                    <div class="signup-img-content">
                        <h2>Telefoncu Mirsat </h2>
                        <p>Teknik Servis!</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="print.php">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Musteri Adi</label>
                                    <input type="text" name="adi" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Telefon</label>
                                      <input type="text" name="tel" id="phone_number" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Adres Bilgisi</label>
                                    <input type="text" name="adres" id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Ariza Bilgisi</label>
                                    <input type="text" name="ariza" id="ariza" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Dis Gorunum</label>
                                    <input type="text" name="gorunum" id="phone_number" />
                                </div>
                                 <div class="form-input">
                                    <label for="blank_name">Garanti Turu</label>
                                    <input type="text" name="garanti" id="blank_name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Geldigi Yer</label>
                                        <a href="#" class="form-link">Müşteri</a>
                                    </div>
                                    <div class="select-list">
                                        <select name="meal_preference" id="meal_preference" name="musteri">
                                            <option value="Musteri" selected>Musteri</option>
                                            <option value="Bayi">Bayi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Cihaz Türü</label>
                                        <a href="#" class="form-link">Tür</a>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="mobil" id="cash" checked >
                                            <label for="cash">Mobil</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="bilgisayar" id="cheque">
                                            <label for="cheque">Bilgisayar</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="tablet" id="demand">
                                            <label for="demand">Tablet</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">Cihaz Seri No.</label>
                                    <input type="text" name="serino" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Marka Model</label>
                                    <input type="text" name="marka" id="blank_name" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Aksesuar</label>
                                    <input type="text" name="aksesuar" id="payable" />
                                </div>
                                 <div class="form-input">
                                    <label for="chequeno">Tarih</label>
                                    <input type="date" name="date"  value="<?php echo date("Y-m-d"); ?>"/>
                                </div>
                               
                              
                            </div>
                        </div>



                        <!-- <div class="donate-us">
                            <label>Ödeme</label>
                            <div class="price_slider ui-slider ui-slider-horizontal">
                                <div id="slider-margin"></div>
                                <span class="donate-value" id="value-lower"></span>
                            </div>
                        </div> -->



                        <div class="form-submit">
                            <input type="submit" value="Kaydet" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>