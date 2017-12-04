<?php include 'includes/config.php'?>
<?php
if(isset($_GET['day']))
{//from the querystring
    $day = $_GET['day'];
    
}else{//from the system clock
    $day = date('l');
}
    
    
?>
    <?php get_header()?>
    <!-- header ends here -->

    <hr class="divider">
    <h1> Daily</h1>
    <p>Current Contents of the variable day:
        <?=$day?>
    </p>

    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
            </li>
            <br/>
            <li style="margin:10px"><a href="?day=Monday">Monday</a></li>
            <br/>
            <li style="margin:10px"><a href="?day=Tuesday">Tuesday</a></li>
            <br/>
            <li style="margin:10px"><a href="?day=Wednesday">Wednesday</a>
            </li>
            <br/>
            <li style="margin:10px"><a href="?day=Thursday">Thursday</a></li>
            <br/>
            <li style="margin:10px"><a href="?day=Friday">Friday</a></li>
            <br/>
            <li style="margin:10px"><a href="?day=Saturday">Saturday</a></li>
            <br/>
            <li style="margin:10px"><a href="?day=Sunday">Sunday</a></li>
            <br/>
            <li>
                <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
            </li>
        </ul>
    </nav>




    <hr class="divider">
    <h1>
        <?=$day?>s animal is the
            <?=$animal?>
    </h1>
    <div class="row">
        <div class="col-md-3">
            <p>
                <img src="<?=$image?>" alt="<?=$alt?>" style="height:200px; width:200px;">
            </p>
        </div>
        <div class="col-md-9">
            <h2> Some things you might not have known about
                <?=$animal?>'s
            </h2>
            <ol>
                <li style="margin:10px">
                    <?=$stat1?>
                </li>
                <li style="margin:10px">
                    <?=$stat2?>
                </li>
                <li style="margin:10px">
                    <?=$stat3?>
                </li>
            </ol>
        </div>
    </div>
    <hr class="divider" />
    <h2>
        <?=$quote?> -
            <?=$author?>
    </h2>
    <hr class="divider" <!-- footer starts here -->
    <?php get_footer()?>
