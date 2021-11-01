

<div class="main-wrapper ">

    <!-- contact form start -->
    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12">
                    <h3 class="text-md mb-4 text-color text-center">My Account | Sign up Page</h3>
                    <div class="card">
                        <div class="card-body">
                            <form id="contact-form" class="contact__form" method="post" action="https://technext.github.io/megakit-2/mail.php">
                                <!-- form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            Your message was sent successfully.
                                        </div>
                                    </div>
                                </div>
                                <!-- end message -->
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input name="cpassword" type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <button class="btn btn-main" name="submit" type="submit">Login</button>
                            </form>
                            <p class="mt-3 text-center">Already have an account? <a href="<?php echo base_url('login'); ?>">Sign in</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
