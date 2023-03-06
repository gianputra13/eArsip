<?php include 'header.php'; ?>

<style>
    .carousel {
        margin-bottom: 0;
        padding: 0 40px 30px 40px;
    }

    .carousel-control {
        left: -12px;
    }

    .carousel-control.right {
        right: -12px;
    }

    .carousel-indicators {
        right: 50%;
        top: auto;
        bottom: 0px;
        margin-right: -19px;
    }

    .carousel-indicators li {
        background: #c0c0c0;
    }

    .carousel-indicators .active {
        background: #333333;
    }
</style>

<div class="container">
    <div class="row">
        <div class="slide-horizontal">
            <div id="myCarousel" class="carousel slide">

                <div class="carousel-inner">

                    <div class="item active">
                        <div class="row-fluid">
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="row-fluid">
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="row-fluid">
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                            <div class="span3"><a href="#x" class="thumbnail"><img src="" alt="Image" style="max-width:100%;" /></a></div>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->

                </div>
                <!--/carousel-inner-->

                <a class="left carousel-control" href="#myCarousel" data-slide="prev">â€¹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">â€º</a>
            </div>
            <!--/myCarousel-->

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#myCarousel').carousel({
            interval: 10000
        })
    });
</script>
<?php include 'footer.php'; ?>