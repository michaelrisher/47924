<div id="bottom">
    <div class="bottom_box">
        <h5><span>Sed Necest</span> Suspendisse a nibh</h5>

        <p>Duis vitae velit sed dui malesuada dignissim. Donec mollis aliquet ligula. Maecenas adipiscing elementum
            ipsum.</p>
        <a href="#" class="continue">more info</a>
    </div>

    <div class="bottom_box">
        <h5><span>Lorem ipsum</span> dolor sit amet</h5>

        <p>Vestibulum eleifend, enim ut molestie pulvinar, purus est fringilla augue, ut tristique nunc neque a
            libero.</p>
        <a href="#" class="continue">more info</a>
    </div>

    <div class="bottom_box">
        <h5><span>Recent</span> Blog Post</h5>
        <ul class="bottom_box_list">
            <?php
            if ( isset($data) ) {
                unset($data);
            }
            $collection = loadDB('posts');
            $datas = $collection->find()->limit(3)->sort( array( 'details.created' => MongoCollection::DESCENDING ) );
            foreach ( $datas as $x ) {
                $data[] = $x;
            }
//            Debug::echoArray($data);
            foreach ( $data as $recent ) {
                echo '<li><a href="'.APP_URL .'templates/view.php?title='. md5( $recent['title'] ) .'">'. $recent['title'] .'</a></li>';
            }


            ?>
<!--            <li><a href="#">Duis vitae velit sed lesuada dignissim.</a></li>-->
<!--            <li><a href="#">Donec mollis aliquet ligula.</a></li>-->
<!--            <li><a href="#">Maecenas adipiscing elementum ipsum.</a></li>-->
        </ul>
    </div>

</div>

<footer id="footer">
    <ul class="footer_menu">
        <li class="first"><a href="#">Home</a></li>
        <li><a href="#">Other Links</a></li>
        <li><a href="#">Other Links</a></li>
        <li><a href="#">Other Links</a></li>
        <li><a href="#">Other Links</a></li>
        <li><a href="#">Other Links</a></li>
    </ul>
</footer>
