<?php include 'header.php';?>
<div id="inner-banner" class="testimonials __center-align">
    <div class="container">
        <img src="/images/clean-by-nature-logo-no-text.png" alt="">
        <h1>WHAT OUR CLIENTS HAVE TO SAY</h1>
        <p>Don't just take our word for it, look what our customers have said about our service.</p>
    </div>
</div>
<div class="testimonials-container">
    <div class="container">
         <!-- Comment's List -->
        <cms:template title='Testimonials' commentable='1' />
        <cms:if k_comments_count>
            <ul class="comment-list">
                <cms:comments page_id=k_page_id order='asc' limit='500' paginate='1'>
                    <li class="comment">
                        <a class="author_name" href="">
                            <cms:show k_comment_author />
                        </a>
                        <div class="comment-meta commentmetadata">
                            <cms:date k_comment_date format='F j, Y' />
                        </div>
                        <br>
                        <div class="comment_text">
                            <p>
                                <cms:show k_comment />
                            </p>
                        </div>
                        <hr>
                    </li>
                </cms:comments>
            </ul>
        <cms:else />
            <p>Come back soon to see our reviews</p>
        </cms:if>
        <?php include 'comments_form.php';?>
    </div>
</div>
<?php include 'footer.php';?>