</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="footer-container col-12 col-md-4">
                <h5>Sitemap</h5>
                <?php foreach($navMenuLinks as $link => $uri): ?>
                    <a href="<?php echo $uri; ?>"><?php echo $link; ?></a>
                <?php endforeach ?>
            </div>
            <div class="footer-container col-12 col-md-4">
                <h5>Contact</h5>
                <a href="mailto:callcleanbynature@gmail.com">callcleanbynature@gmail.com</a>
                <a href="tel:07714346060"><i class="fa fa-phone"></i> 07714 346 060</a>
                <div class="social-media">
                    <a href="#">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="footer-container col-12 col-md-4">
                <h5>Address</h5>
                <p>34 Ravendale Road <br> Darlington <br> DL3 8EA</p>
            </div>
            <div class="col-12">
                <img src="/images/clean-by-nature-logo-no-text.png" alt="">
                <br>
                <small>Clean By Nature 2018 - Powered by CouchCMS - Site created by 
                    <a target="_blank" href="http://www.markallen-design.com">Mark Allen</a></small>
            </div>
        </div>
    </div>
</footer>
</html>
<?php COUCH::invoke(); ?>