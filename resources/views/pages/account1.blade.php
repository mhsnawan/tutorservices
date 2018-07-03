@extends('layouts.default')

@section('content')

<!-- Content Inner -->
<div class="column width-9 push-3 content-inner blog-single-post">
        <div class="post">
            <div class="post-content">
                <div class="video-container">
                    <iframe src="http://player.vimeo.com/video/164320913?title=0&amp;byline=0&amp;portrait=0&amp;color=2d66f7&amp;loop=1" width="825" height="463"></iframe>
                </div>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <div class="box bkg-theme xlarge color-white">
                    <blockquote class="large">
                        <p>Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.</p>
                        <cite>Steve Jobs</cite>
                    </blockquote>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ulla.</p>
                <div class="row">
                    <div class="column width-6">
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
                    </div>
                    <div class="column width-6">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non.</p>
                    </div>
                </div>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla.</p>
            </div>
        </div>

        <!-- Post Author -->
        <div id="author" class="post-author">
            <div class="post-author-aside">
                <span class="author-title">Author</span>
                <a href="#"><span class="icon-paper"></span>56 Articles</a>
            </div>
            <article class="author-bio">
                <div class="author-avatar">
                    <img src="images/blog/bio-avatar.jpg" alt="Avatar"/>
                </div>
                <div class="author-content">
                    <div class="row">
                        <div class="column width-12">
                            <h5 class="name">Pedro Nutini</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        
        <!-- Post Comments -->
        <div class="post-comments">
            <h3 class="comments-title">3 Comments</h3>
            <div class="comments">
                <ul class="comment-list">
                    <li>
                        <article class="comment">
                            <div class="user-avatar">
                                <img src="images/blog/comment-avatar.jpg" alt="Avatar"/>
                            </div>
                            <div class="comment-content">
                                <h5 class="name">John Andersson</h5>
                                <div class="comment-meta">
                                    <span class="post-date">17 Jul 2015</span>/<a href="#" class="comment-reply-link">Reply</a>            
                                </div>
                                <p>Whistler Mountain is a mountain in the Fitzsimmons Range of the Pacific Ranges of the Coast Mountains, located on the northwestern.</p>
                            </div>
                        </article>
                        <ul>
                            <li>
                                <article class="comment">
                                    <div class="user-avatar">
                                        <img src="images/blog/comment-avatar-3.jpg" alt="Avatar"/>
                                    </div>
                                    <div class="comment-content">
                                        <h5 class="name">Emma Courtier</h5>
                                        <div class="comment-meta">
                                            <span class="post-date">23 Jul 2015</span>/<a href="#" class="comment-reply-link">Reply</a>            
                                        </div>
                                        <p>Whistler Mountain is a mountain in the Fitzsimmons Range of the Pacific Ranges of the Coast Mountains, located on the northwestern.</p>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <article class="comment">
                            <div class="user-avatar">
                                <img src="images/blog/comment-avatar-2.jpg" alt="Avatar"/>
                            </div>
                            <div class="comment-content">
                                <h5 class="name">Michael Cunningham</h5>
                                <div class="comment-meta">
                                    <span class="post-date">24 Jul 2015</span>/<a href="#" class="comment-reply-link">Reply</a>            
                                </div>
                                <p>Whistler Mountain is a mountain in the Fitzsimmons Range of the Pacific Ranges of the Coast Mountains, located on the northwestern.</p>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
        <div class="post-comment-respond">
            <h3 class="reply-title">Leave a Comment</h3>
            <form class="comment-form" action="#" method="post" novalidate>
                <div class="row">
                    <div class="column width-4">
                        <input type="text" name="fname" class="form-name form-element" placeholder="Name*" tabindex="1" required>
                    </div>
                    <div class="column width-4">
                        <input type="email" name="email" class="form-email form-element" placeholder="Email*" tabindex="3" required>
                    </div>
                    <div class="column width-4">
                        <input type="text" name="website" class="form-website form-element" placeholder="Website" tabindex="4">
                    </div>
                    <div class="column width-6">
                        <input type="text" name="honeypot" class="form-honeypot form-element">
                    </div>
                </div>
                <div class="row">
                    <div class="column width-12">
                        <textarea name="message" class="form-message form-element" placeholder="Message*" tabindex="5" required></textarea>
                        <input type="submit" value="Post Comment" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white no-margin-bottom">
                    </div>
                </div>
            </form>
        </div>
    </div>
<!-- Content Inner End -->

            
@endsection