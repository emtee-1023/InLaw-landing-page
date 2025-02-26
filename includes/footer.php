<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">InLaw Legal</span>
                </a>
                <div class="footer-contact pt-3">
                    <p></p>
                    <p></p>
                    <p class="mt-3">
                        <strong>Phone:</strong> <span><a href="tel:+254718654571">+254 718 654 571</a></span> <br>
                        <strong>Phone:</strong> <span><a href="tel:+254792314330">+254 792 314 330</a></span>
                    </p> <br>
                    <p>
                        <strong>Whatsapp:</strong> <span><a href="https://wa.me/254718654571?text=Hello%2C%20I%20have%20an%20inquiry%20for%20InLaw%20Legal" target="_blank">+254 718 654 571</a></span> <br>
                        <strong>Whatsapp:</strong> <span><a href="https://wa.me/254792314330?text=Hello%2C%20I%20have%20an%20inquiry%20for%20InLaw%20Legal" target="_blank">+254 792 314 330</a></span>
                    </p> <br>
                    <p>
                        <strong>Email:</strong> <span><a href="mailto:info@inlaw-legal.tech">info@inlaw-legal.tech</a></span>
                    </p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="assets/docs/T&C.pdf" target="_blank">Terms of service</a></li>
                    <li><a href="assets/docs/privacy-policy.pdf" target="_blank">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#about">InLaw App</a></li>
                    <li><a href="#about">Data Entry</a></li>
                    <li><a href="#about">Document Automation</a></li>
                    <li><a href="#about">Document Digitization</a></li>
                    <li><a href="#about">Firm Analytics</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                <form action="processes.php" method="post" class="php-email-form">
                    <div class="newsletter-form"><input type="email" name="email"><input type="submit" name="submit-newsletter-form" value="Subscribe"></div>
                    <!-- <div class="loading">Loading</div> -->
                    <?php
                    if (isset($_SESSION['newsletter-error'])): ?>
                        <div class="error-message"><?php echo $_SESSION['contact-error']; ?></div>
                        <?php unset($_SESSION['newsletter-error']); ?>
                    <?php
                    elseif (isset($_SESSION['newsletter-success'])): ?>
                        <div class="sent-message"><?php echo $_SESSION['contact-success']; ?></div>
                        <?php unset($_SESSION['newsletter-success']); ?>
                    <?php endif; ?>
                </form>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">InLaw Legal</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            Powered by <a href="index">Lucror Company Limited</a>
        </div>
    </div>

</footer>