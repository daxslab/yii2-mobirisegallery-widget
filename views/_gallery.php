<?php

\daxslab\mobirise\AssetBundle::register($this);

$columnsWidth = (int)(12 / $this->context->columns);
$columnsClass = "col-md-$columnsWidth";

?>

<section class="mbr-gallery mbr-slider-carousel cid-r1iBDd2Y2B" id="gallery3-e">


    <div>
        <div><!-- Filter --><!-- Gallery -->
            <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                    <div>
                        <div>
                            <?php foreach ($items as $index => $model): ?>

                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false"
                                     data-tags="Increíble">
                                    <div href="#lb-gallery3-e" data-slide-to="<?= $index ?>" data-toggle="modal">
                                        <img src="<?= $model['thumbnail'] ?>" alt="<?= $model['title'] ?>"/>
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>

                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div><!-- Lightbox -->
            <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1"
                 data-keyboard="true" data-interval="false" id="lb-gallery3-e">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel-inner">
                                <?php foreach ($items as $index => $model): ?>

                                    <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                                        <img src="<?= $model['image'] ?>" alt="<?= $model['title'] ?>">
                                    </div>

                                <?php endforeach; ?>
                            </div>
                            <a class="carousel-control carousel-control-prev" role="button" data-slide="prev"
                               href="#lb-gallery3-e"><span class="mbri-left mbr-iconfont"
                                                           aria-hidden="true"></span><span
                                        class="sr-only">Previous</span></a><a
                                    class="carousel-control carousel-control-next" role="button" data-slide="next"
                                    href="#lb-gallery3-e"><span class="mbri-right mbr-iconfont"
                                                                aria-hidden="true"></span><span
                                        class="sr-only">Next</span></a><a class="close" href="#" role="button"
                                                                          data-dismiss="modal"><span class="sr-only">Close</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

