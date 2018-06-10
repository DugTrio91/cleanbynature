<div class="comment-form">
    <h2>Leave us a comment</h2>
    <p>If you have used our services, we would love to hear what you think</p>
    <cms:if k_is_commentable>
        <cms:form method="post" class="k_form">
            <cms:if k_success>
                <cms:process_comment />
                <cms:if k_process_comment_success>
                    <cms:send_mail from=k_email_from to=k_email_to subject='Comment posted'>
                        The following comment has been posted at your site:
                        <cms:show k_success />
                    </cms:send_mail>

                    <div class="k_successmessage">
                        <h4>
                            <i class="fas fa-check"></i><br> 
                            Thank you for the feedback!
                        </h4>
                        <p>Your comment will be published as soon as it is reviewed.</p>
                    </div>
                <cms:else />
                    <div class="k_errormessage">
                        <h4>
                            <i class="fas fa-times-circle"></i><br>
                            Could not post comment!
                        </h4>
                        <p>
                            The following error occured while processing your comment: <br>
                            <cms:show k_process_comment_error />
                        </p>
                    </div>
                </cms:if>
            <cms:else />
                <cms:if k_error>
                    <div class="k_errormessage">
                        <p>Fields incomplete!<p>
                        <ul>
                            <cms:each k_error>
                                <li>
                                    <cms:show item />
                                </li>
                            </cms:each>
                        </ul>
                    </div>
                </cms:if>
                <div class="comment-input-boxes">
                    <cms:if k_logged_out>
                        <div class="row">
                            <div class="comment-input col-xs-12 col-md-6">
                                <label for="author">Name</label>
                                <input type="text" name="k_author" size="22" tabindex="1" 
                                oninvalid="this.setCustomValidity('Please enter your name')" required>
                                <span class="floating-label">Name</span>
                            </div>

                            <div class="comment-input col-xs-12 col-md-6">
                                <label for="email">Email</label>
                                <input type="text" name="k_email" size="22" tabindex="2" validator="email" 
                                oninvalid="this.setCustomValidity('Please enter a valid email address')"required>
                                <span class="floating-label">Email address</span>
                            </div>
                        </div>
                    <cms:else />
                        <div class="comment-input">
                            Logged in as <b><cms:show k_user_title /></b>.
                            <a href="<cms:show k_logout_link />" onclick="if( confirm('Are you sure you want to logout?') ) { return true; } return false;"> Logout &raquo;</a>
                        </div>
                    </cms:if>
                    <div class="comment-input">
                        <label for="email">Review</label>
                        <textarea name="k_comment" rows="10" cols="10" tabindex="4" validator_msg="required=Please enter something as comment" 
                        oninvalid="this.setCustomValidity('Please enter something as comment')"required></textarea>
                        <span class="floating-label">Your review</span>
                    </div>
                    <div class="submit-button">
                        <cms:input type="submit" value="Leave Review" name="submit" />
                    </div>
                </div>
            </cms:if>
        </cms:form>
    </cms:if>
</div>