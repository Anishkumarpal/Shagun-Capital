<style>
#card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.container {
    padding: 2px 16px;
}
    input[type=text], input[type=password], input[type=number], input[type=datetime-local]  {
          width: 100%;
          padding: 15px;
          margin: 5px 0 10px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
    }

        input[type=text]:focus,  input[type=password]:focus , input[type=number]:focus , input[type=datetime-local]:focus  {
          background-color: #ddd;
          outline: none;
        }
        hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
        }
         /* Set a style for the submit button */
         .registerbtn {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          margin: 5px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }
        
        .registerbtn:hover {
          opacity: 1;
        }
        
</style>
    <?php include 'header.php';?>
        <?php
        if(isset($_POST['submit'])):
        $invesmet=$_POST['invesmet'];
        $annualRate=$_POST['return_rate'];
        $monthlyRate=$annualRate/12/100;
        $years=$_POST['year'];
        $months=$years*12;
        $futureValue=0;
        $futureValue=$invesmet*((pow(1+$monthlyRate,$months)-1)/$monthlyRate)*(1+$monthlyRate);
        $invesmet_amonut=$invesmet*12*$years;
        $est_rtn=$futureValue-$invesmet_amonut;
        endif;

        ?>
  <main id="main" data-aos="fade-up">
    <div class="container-fluid" id="card" style="padding: 25px; background-color: #f3f3f3;">

        <!-- ======= How It Works Section ======= -->
        <div class="container" data-aos="fade-up">
            <div class="row ">

                <div class="col-md-6 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="assets/image/mutual_funds.png" alt="" width="100%">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= -->
                       
                        <div class="" data-aos="fade-up">
                           
                                <div class="card" id="card">
                                    <div class="card-header bg-secondry  font-weight-bold text-center">
                                        <b>Mutual Funds</b>
                                    </div>
                                    <div class="card-body">
                                       <h5> <b>Mutual Funds</b></h5>
                                       <p><i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit temporibus voluptates ad accusantium omnis! Eum, reprehenderit eaque? Quos, molestiae aliquid.</i></p>
                                        <hr>
                                        <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo vel laboriosam eos deserunt! Dolore illo, nostrum eum impedit quod rem.</i></p>
                                    </div>

                                    <div class="card-footer bg-white">
                                       
                                    </div>
                                </div> <!--End card-->
                          
                        </div>  
                </div>
            </div>

        </div>

        <!-- card for test -->
    </div><br>
      
         
    <div class="text-center">
        <h4 class="spanals"><b>Mutual Funds</b></h4>
    </div>

    <div style="background: #F4F4F4; padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5><b>There are thousands of reasons why you should actively protect your car and yourself in
                            india.</b></h5>
                    <ul>
                        <li>Driving in India is a luxury that thousands of people partake of everyday.</li>
                        <li>It is now quite simple to buy a
                            car in the country, and with higher disposable incomes, most households are able to
                            afford more than one car
                            too. Having one’s car increases
                            one’s mobility and eliminates dependence on public transport.</li>
                        <li> However, driving in India also comes with its
                            own perils. We often hear car owners rue traffic indiscipline; lack of legal enforcement
                            by road authorities
                            and myriad other complaints
                            about that traffic scenario in India.</li>
                        <li>Cases of road accidents and rule – breaking are reported in newspapers
                            on a daily basis. Considering these factors, it is important to get car insurance right
                            after one buys a
                            car.</li>

                    </ul>
                </div>
                <div class="col-sm-6 text-center">  <img src="assets/image/mutual_funds.png" alt="" width="100%"></div>
            </div>
        </div>
    </div><br>
    <div class="container">
        <h5><b>We present 5 reasons to get motor insurance in India</b></h5>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <p>It pays for damage:</p>

                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Not only are cars expensive, paying for their repairs is costly too. Sometimes, your car
                                may be
                                damaged due to someone else’s negligence. A car colliding with yours or you swerving to
                                avoid a
                                jaywalker and crashing into a wall, or
                                even a stray cricket ball cracking your windshield can set you back by a considerable
                                amount of
                                money. However, if you have car insurance, you need not pay for these repairs by
                                yourself.
                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>
            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <p>It reduces your liability:</p>


                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Taking third party liability (TPL) car insurance coverage is mandatory in India. The TPL
                                policy you
                                against the legal ramifications of an accident caused by you. For example, if you happen
                                to cause an
                                accident those results in damages to another person’s
                                property or injuries to another driver/pedestrian, the insurance will pay for their
                                treatment and
                                save you from the legal repercussions of the case.

                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>
            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                        <p>It pays for your hospitalization:
                        </p>

                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Not every car owner who suffers an accident is fortunate to get away with a few cuts and
                                bruises.
                                Some accidents result in fractures and other serious injuries that require
                                hospitalization. Instead
                                of shelling out the high hospital and treatment costs
                                from your own pocket, you can get your motor insurance to pay these expenses.

                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                        <p>It costs less when purchases online:
                        </p>

                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Buying motor insurance online results in lower premiums and hence, a cheaper policy.
                                This is because
                                the insurer has lower operating costs when transacting over the internet, and is happy
                                to pass on
                                the component of money saved on paying commission to
                                a broker to the customer. Buying motor insurance online has other advantages, such as
                                renewing the
                                policy in minutes and paying premiums without any paperwork.

                            </li>
                        </ul>
                    </div>
                </div>
            </div><br>

            <div class="accordion-item" id="card">
                <h2 class="accordion-header" id="headingfive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">

                        <p>It compensates your family after your demise:
                        </p>

                    </button>
                </h2>
                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                The most unfortunate outcome of a road accident is the car owner’s demise. Once the
                                bread – earning
                                policy holder has passed away, it might become difficult for his or her family to
                                sustain its daily
                                life. However, a motor insurance policy can help to
                                pay the family’s expenses after the unfortunate event.

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <!-- sip calculater -->
  

        <!-- ======= How It Works Section ======= -->
        <div class="container" data-aos="fade-up">
                <div class="" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= -->
                        <div class="" data-aos="fade-up">
                           
                                <div class="card" id="card">
                                    <div class="card-header bg-secondry font-weight-bold text-center">
                                        <b>SIP CALCULATOR</b>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <input type="number" name="invesmet" placeholder="Monthly Investment" required="" class="form-control" value="<?php if(!empty($invesmet)):echo $invesmet; endif;?>">
                                            </div>

                                            <div class="form-group">
                                                <input type="number" name="return_rate" placeholder="Expected Return Rate" required="" class="form-control" value="<?php if(!empty($annualRate)):echo $annualRate; endif;?>">
                                            </div>

                                            <div class="form-group">
                                                <input type="number" name="year" placeholder="Time Period" required="" class="form-control" value="<?php if(!empty($years)):echo $years; endif;?>">
                                            </div>

                                            <div class="form-group text-center">
                                                <input type="submit" name="submit" class="btn btn-success registerbtn" value="Calculate">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="card-footer bg-white">
                                        <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>Invested Amount</th>
                                            <th>&#8377; <?php echo number_format(@$futureValue);?></th>
                                        </tr>
                                        <tr>
                                            <th>Est. Returns</th>
                                            <th>&#8377; <?php echo number_format(@$est_rtn);?></th>
                                        </tr>
                                        <tr>
                                            <th>Total Value</th>
                                            <th>&#8377; <?php echo number_format(@$futureValue);?></th>
                                        </tr>
                                        </table>
                                    </div>
                                </div> <!--End card-->
                        </div>  
                </div>
        </div><br> <!-- end sip calculater -->
    
 
  </main><!-- End #main -->

  



<?php include 'footer.php';?>