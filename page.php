                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <div class="post-preview">
                                 <a href ="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <h2 class="post-title">
                                        <?php the_title();?>
                                    </h2>
                                </a>
                                <p class="post-meta">This thing was posted by
                                    <?php the_author(); ?> at <?php the_time(); ?>
                                </p>
                            </div>
                        <hr>
                        </div>
                    </div>
                </div>
