<style>
#card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.container {
    padding: 2px 16px;
}

input[type=text],
input[type=password],
input[type=number],
input[type=datetime-local] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 10px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus,
input[type=password]:focus,
input[type=number]:focus,
input[type=datetime-local]:focus {
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
    <div class="container-fluid" id="card" style="padding: 25px; background-color: #63d471;
                background-image: linear-gradient(315deg, #429e4d 0%, #061b3a 74%);">

        <!-- ======= How It Works Section ======= -->
        <div class="container " data-aos="fade-up">
            <div class="row ">

                <div class="col-md-7 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <img src="assets/image/claims.png" alt="" width="100%">
                    </div>
                </div>

                <div class="col-md-5 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <!-- ======= Contact Section ======= -->


                    <div class="" data-aos="fade-up">

                        <div class="card" id="card">
                            <div class="card-header bg-secondry  font-weight-bold text-center">
                                <b>SIP CALCULATOR</b>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="number" name="invesmet" placeholder="Monthly Investment"
                                            required="" class="form-control"
                                            value="<?php if(!empty($invesmet)):echo $invesmet; endif;?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="return_rate" placeholder="Expected Return Rate"
                                            required="" class="form-control"
                                            value="<?php if(!empty($annualRate)):echo $annualRate; endif;?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="year" placeholder="Time Period" required=""
                                            class="form-control" value="<?php if(!empty($years)):echo $years; endif;?>">
                                    </div>

                                    <div class="form-group text-center">
                                        <input type="submit" name="submit" class="btn btn-success registerbtn"
                                            value="Calculate">
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
                        </div>
                        <!--End card-->

                    </div>

                    <!-- End Contact Section -->

                    <!-- End Contact Section -->
                </div>
            </div>
        </div><!-- card for test -->
    </div>
    </section><br>

    <div class="text-center">
        <h4 class="spanals"><b>Claims</b></h4>
    </div><br>
    <div style=" background: linear-gradient(to right, #76b852, #8dc26f); padding:30px;" data-aos="fade-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4><b>Claims</b></h4>

                    <ul>
                        <li>You have just finished your meeting at office and rushing home for an early dinner is your
                            main
                            priority.</li>
                        <li>You
                            are riding your two wheeler looking carefully for those potholes and another vehicle hits
                            you
                            from
                            behind.</li>
                        <li>You are rushed to the
                            hospital and find you have a fractured leg.</li>
                        <li>No work for the next few months and no pay.
                            Worse,
                            those hefty
                            medical bills.</li>
                        <li>It is now too late to avail a personal accident plan but yes better late than
                            never.</li>
                        <li> You can
                            meet with an accident
                            again and this time you are armed with a personal plan.</li>
                    </ul>

                </div>
                <div class="col-sm-6 text-center">
                    <img src="assets/image/claims.png" alt="" width="100%">
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </div>
    <!--End color gradiant-->

    <div style="padding: 15px; background: linear-gradient(to right, #f7f8f8, #acbb78);" data-aos="fade-up">
        <div class="container">
            <h4><b>What is Claims?</b></h4>
            <p>An accident is an uncertain, unplanned event, it just happens. Soaring medical costs and quality time
                lost
                due to not being able to work, prove to be very costly. An accidental insurance comes into the picture
                in
                case of accidents. An accident
                may get a person partially or totally disabled, impacting his earning capabilities. An accidental
                insurance
                plan covers the insured in case of an accident. Accidental Insurance does not cover suicide,
                self-injury,
                armed force operations,
                war and so on.

            </p>

            <h4<b>Features of Claims. </b></h4>
                <ul>
                    <li>Accidental insurance must be renewed each year. It can be renewed every year, just like a Term
                        Insurance
                        and Accidental Insurance Plan.
                    </li>
                    <li>Maximum sum insured depends upon the insurer. Based on your income, some insurers offer 60-100
                        times
                        your monthly income. Others offer 8 to 10 times your yearly income as a sum insured.
                    </li>
                    <li>Few insurers provide accidental insurance to dependents, but have limitations vis-à-vis sum
                        assured.
                    </li>
                    <li>Currently there are no income tax benefits of availing Personal Accidental Insurance. However,
                        the
                        claim
                        amount you receive is not taxable.
                    </li>
                </ul>
        </div>
    </div><br>

    <div class="container">
        <div style="background: linear-gradient(to right, #1fa2ff, #12d8fa, #a6ffcb); padding: 30px;">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="assets/image/accident_inc.png" alt="" width="100%">
                </div>
                <div class="col-sm-6">
                    <h4><b>Benefits of Claims.</b></h4>
                    <p>Accidental insurance is generally the last policy which people think of. While health
                        insurance
                        covers
                        the
                        insured’s unexpected hospitalization costs, term insurance helps take care of family’s
                        financial
                        needs
                        in
                        case of the insured’s demise.
                        Term insurance doesn’t provide financial assistance in case the insured is disables fully,
                        temporarily
                        or
                        permanently. Accident insurance has the following benefits:
                    </p>
                    <ul>
                        <li>Life insurance policies offer accident riders. However, these are limited to permanent
                            disability or
                            a
                            basic cover for accidental death up to a certain extent of the sum assured. A standalone
                            personal
                            accident policy covers you for all
                            losses including temporary disablement, income loss and hospitalization.</li>
                        <li>The insurer will pay the insured’s family, in case the insured dies in an accident. The
                            nominee gets
                            100% of the sum assured.</li>
                        <li>A permanent partial disability may result in loss of speech, eyesight, loss of a toe or
                            fingers. The
                            insured receives a percentage of the sum assured for a specific time period, or as a
                            lump
                            sum
                            payment.
                        </li>
                        <li>In case of a permanent total disability, the nominee is entitles to make a claim for the
                            total sum
                            assured.
                        </li>
                        <li>In case of a temporary total disability like a fracture, the insurer provides a daily or
                            weekly
                            benefit.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><br>

    </section>
</main><!-- End #main -->
<?php include 'footer.php';?>