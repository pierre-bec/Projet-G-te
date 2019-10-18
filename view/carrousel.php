<!-- Carrousel -->
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>

    <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"> <?php
            echo "<img src=\"$image\">";
            ?>
        </a>
        <a class="carousel-item" href="#two!"> <?php
            echo "<img src=\"$image\">";
            ?>
        </a>
        <a class="carousel-item" href="#three!"> <?php
            echo "<img src=\"$image\">";
            ?>
        </a>

        <ul class="indicators">
            <li class="indicator-item active"></li>
            <li class="indicator-item"></li>
            <li class="indicator-item"></li>
            <li class="indicator-item"></li>
        </ul>

    </div>