<!-- Footer -->
<footer class="page-footer font-small indigo container-fluid">

<!-- Footer Links -->

<link rel="stylesheet" href="/css/footer.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>


<script src="/js/script.js"></script>


<div class="container">
    <div class="row">
        <div class="col-md-4 mt-2 mx-auto border firstfooter">

            <p class="font-weight-bold text-uppercase mt-3 mb-4 underline">Contact Details</p>

            <table>
                <tr>
                    <td  style="align:center">
                        <span class="fas fa-building fa-2x"></span>
                    </td>
                    <td >
                    <p>Rastriya Kitabkhana (Nijamati),<br>
                        Hariharbhawan, Lalitpur
                            </p>
                    </td>
                </tr>

                <tr>
                <td  style="align:center; width: 40px;">
                        <span class="fas fa-phone-square-alt fa-2x"></span>
                    </td>
                    <td >
                    <p>01-5555555, 01-5544444</p>
                    </td>
                </tr>

                <tr>
                <td  style="align:center; width: 40px;">
                        <span class="fas fa-print fa-2x"></span>
                    </td>
                    <td >
                    <p>+977 01 501027 </p>
                    </td>
                </tr>

                <tr>
                <td>
                        <span class="fas fa-envelope fa-2x"></span>
                    </td>
                    <td >
                        <p>info@pis.gov.np</p>
                    </td>
                </tr>

                <tr>
                <td  style="align:center; width: 40px;">
                        <span class="fas fa-calendar-day fa-2x"></span>
                    </td>
                    <td >
                        <p>Sunday-Thursday <br>10:00 AM - 5:00 PM<br>
                        Friday<br>10:00 AM - 3:00 PM</p> 
                    </td>
                </tr>


            </table>


        </div>
    
        <div class="col-md-4 mt-2 mx-auto border firstfooter">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 underline" style="color:black" >Quick Messages</h5>
               
            <section class="mb-4">


                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                            <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Full Name">
                        
                                        </div>
                                    </div>
                                </div>

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Email Address">
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Contact Number" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}">
                                            
                                        </div>
                                    </div>
                                </div>

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12 mb-4">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea" placeholder="Message"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                                <div id="recaptcha-service" class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LcDtIAbAAAAADYuge2RUyCpj0ZM82wu8ogrR1AJ">
                                    <div style="width: 304px; height: 78px;">
                                        <div>
                                            <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcDtIAbAAAAADYuge2RUyCpj0ZM82wu8ogrR1AJ&amp;co=aHR0cHM6Ly9uaWphbWF0aS5waXMuZ292Lm5wOjQ0Mw..&amp;hl=en&amp;v=VZKEDW9wslPbEc9RmzMqaOAP&amp;size=normal&amp;cb=re7njb10pdlq" width="304" height="78" role="presentation" name="a-kfa4ylqvquxm" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">

                                            </iframe>
                                        </div>
                                        <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
                                        </textarea>
                                    </div>
                                        <iframe style="display: none;">

                                        </iframe>

                                        
                                </div>

                                <button class="btn btn-primary fw800 px-2 mt-2">
                                    Send Messages
                                </button>

                            </form>

                            <!-- <div class="text-center text-md-left">
                                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                            </div>
                            <div class="status"></div> -->
                        </div>
                        <!--Grid column-->



                    </div>

                    </section>

        </div>

        <div class="col-md-4 mt-2 mx-auto border firstfooter">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 underline" style="color:black">Find us on Google Map</h5>

            
                <div class="maps">

                <h3 class="white-text fw-bold h3 underline-after mt-0 mb-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187465.93559137217!2d85.31420882126321!3d27.654246241522625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19cac860f791%3A0x3febbc6f094e83b8!2sDepartment%20of%20Civil%20Personnel%20Records!5e0!3m2!1sen!2snp!4v1639729047243!5m2!1sen!2snp" width="425" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </h3>
                
                </div>
            

        </div>
    </div>
</div>



<div class="midfooter text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-3">

      <!-- Links -->
      <h5 class=" title font-weight-bold text-uppercase mt-3">Rastriya Kitabkhana (Nijamati)</h5>
      <img src="image/Emblem_of_Nepal_(2020).png" width="100" height="100" align="left">
    </div>
  

    <!-- Grid column -->
    <div class="col-md-3 ">

      <!-- Links -->
      <h5 class="title font-weight-bold text-uppercase mt-3">Useful Links</h5>

        <ul class="pl-0">
                                        <li class="mb-1"> <a href="http://www.mofaga.gov.np" style="color: white; text-decoration:none">
                                            <!-- सङ्घीय मामिला तथा सामान्य प्रशासन मन्त्रालय -->
                                            Ministry of Federal Affairs & General Administration
                                        </a></li><br>
                                        <li class="mb-1"> <a href="https://www.moha.gov.np/" style="color: white; text-decoration:none">
                                            <!-- गृह मन्त्रालय -->
                                            Ministry of Home Affairs
                                        </a></li><br>
                                        <li class="mb-1"> <a href="http://www.stro.gov.np/ne/" style="color: white; text-decoration:none">
                                            <!-- राष्ट्रिय किताबखाना (शिक्षक) -->
                                            Rastriya Kitabkhana (Teacher)
                                        </a></li><br>
                                        <li class="mb-1"> <a href="http://www.dppr.gov.np/home" style="color: white; text-decoration:none">
                                            <!-- राष्ट्रिय किताबखाना (प्रहरी) -->
                                            Rastriya Kitabkhana (Police)
                                        </a></li>
        </ul>

    </div>

    <!-- Grid column -->
    <div class="col-md-3">

      <!-- Links -->
      <h5 class="title font-weight-bold text-uppercase mt-3">Important Website</h5>
      <ul class="link">
                                    
                                    <li class="mb-1"> <a href="http://www.mofaga.gov.np" style="color: white; text-decoration:none">
                                            <svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" width="13.089" height="13.089" viewBox="0 0 13.089 13.089">
                                                <path id="Icon_awesome-link" data-name="Icon awesome-link" d="M8.35,4.739a3.884,3.884,0,0,1,.009,5.486l-.009.009L6.632,11.952a3.886,3.886,0,0,1-5.5-5.5l.949-.949a.409.409,0,0,1,.7.271A4.711,4.711,0,0,0,3.03,7.128a.411.411,0,0,1-.1.425L2.6,7.887a1.841,1.841,0,1,0,2.586,2.62L6.9,8.789a1.84,1.84,0,0,0,0-2.6,1.915,1.915,0,0,0-.264-.219.41.41,0,0,1-.178-.322,1.018,1.018,0,0,1,.3-.762L7.3,4.344A.411.411,0,0,1,7.825,4.3a3.9,3.9,0,0,1,.525.44Zm3.6-3.6a3.89,3.89,0,0,0-5.5,0L4.739,2.854l-.009.009a3.886,3.886,0,0,0,.534,5.925.411.411,0,0,0,.526-.044l.538-.538a1.018,1.018,0,0,0,.3-.762.41.41,0,0,0-.178-.322A1.915,1.915,0,0,1,6.185,6.9a1.84,1.84,0,0,1,0-2.6L7.9,2.582A1.841,1.841,0,1,1,10.49,5.2l-.335.335a.411.411,0,0,0-.1.425,4.711,4.711,0,0,1,.248,1.348.409.409,0,0,0,.7.271l.949-.949a3.89,3.89,0,0,0,0-5.5Z" transform="translate(0)" fill="#d5d5d5"></path>
                                            </svg>
                                            Ministry of Federal Affairs & General Administration
                                            <!-- सङ्घीय मामिला तथा सामान्य प्रशासन मन्त्रालय -->

                                    </a></li><br>
                                    
                                    <li class="mb-1"> <a href="https://www.moha.gov.np/" style="color: white; text-decoration:none">
                                            <svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" width="13.089" height="13.089" viewBox="0 0 13.089 13.089">
                                                <path id="Icon_awesome-link" data-name="Icon awesome-link" d="M8.35,4.739a3.884,3.884,0,0,1,.009,5.486l-.009.009L6.632,11.952a3.886,3.886,0,0,1-5.5-5.5l.949-.949a.409.409,0,0,1,.7.271A4.711,4.711,0,0,0,3.03,7.128a.411.411,0,0,1-.1.425L2.6,7.887a1.841,1.841,0,1,0,2.586,2.62L6.9,8.789a1.84,1.84,0,0,0,0-2.6,1.915,1.915,0,0,0-.264-.219.41.41,0,0,1-.178-.322,1.018,1.018,0,0,1,.3-.762L7.3,4.344A.411.411,0,0,1,7.825,4.3a3.9,3.9,0,0,1,.525.44Zm3.6-3.6a3.89,3.89,0,0,0-5.5,0L4.739,2.854l-.009.009a3.886,3.886,0,0,0,.534,5.925.411.411,0,0,0,.526-.044l.538-.538a1.018,1.018,0,0,0,.3-.762.41.41,0,0,0-.178-.322A1.915,1.915,0,0,1,6.185,6.9a1.84,1.84,0,0,1,0-2.6L7.9,2.582A1.841,1.841,0,1,1,10.49,5.2l-.335.335a.411.411,0,0,0-.1.425,4.711,4.711,0,0,1,.248,1.348.409.409,0,0,0,.7.271l.949-.949a3.89,3.89,0,0,0,0-5.5Z" transform="translate(0)" fill="#d5d5d5"></path>
                                            </svg>
                                            Ministry of Home Affairs
                                            <!-- गृह मन्त्रालय -->  
                                    </a></li>
                                    
                                </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3">

      <!-- Links -->
      <h5 class="title font-weight-bold text-uppercase mt-3">Popular Post</h5>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

                <div class=" lastfooter row p-3" >

                                <div class="col-12 col-sm-3">
                                    <p class="mb-0" >
                                        copyright © 2021 –
                                        Rastriya Kitabkhana (Nijamati)</p>
                                </div>

                                <div class="col-12 col-sm-3" >
                                    Last Updated at &nbsp;<span class="border-radius-3p" style="background: #707070 ">16 Dec, 2021</span>
                                </div>
                            
                        
                    
                                <div class="col-12 col-sm-3">

                                    visitors &nbsp;
                                    <img src="https://counter6.stat.ovh/private/freecounterstat.php?c=m8ata38z48psp143cattl6a7lrtm7ku2" border="0" title="website view counter" alt="website view counter">
                                
                                </div>
                    
                                <div class="col-12 col-sm-3 text-right">
                                    <p class="mb-0"><a href="https://nijamati.pis.gov.np/sitemap" style="color: white; text-decoration:none">site map
                                    </a>
                                    |
                                    <a href="https://nijamati.pis.gov.np/pages/about-us" style="color: white; text-decoration:none">about us
                                    </a>
                                    |
                                    <a href="https://nijamati.pis.gov.np/pages/privacy" style="color: white; text-decoration:none">privacy
                                    </a>
                                    |
                                    <a href="https://nijamati.pis.gov.np/pages/terms-and-conditions" style="color: white; text-decoration:none">terms and conditions
                                    </a>
                                </p>
                            </div>

                        
                </div>

</footer>