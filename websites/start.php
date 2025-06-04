<?php $title = "start page";?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/sidebar.php';?>
            <header>
                <h1><?php if($title){echo $title;}?></h1>
                <h5>last updated 02/13/25</h5>
            </header>
            <section>
                <article>
                    <p>this is a start page for me to use, to get to all my silly little websites that i visit.</p>
                    <p>some of these sites are specific urls for my accounts so they might not work for you if you try to use them. that's okay! they're for me. c:</p>
                    <li><a href="https://bsky.app/">bluesky</a></li>
                    <li><a href="https://social.lol/public/local">social.lol</a></li>
                    <li><a href="https://discourse.32bit.cafe/latest">32bitcafe forum</a></li>
                    <li><a href="https://bearblog.dev/cassiterite/dashboard/analytics/">bearblog analytics</a></li>
                    <li><a href="https://www.neopets.com/questlog/">neopets quests</a></li>
                    <li><a href="https://gpx.plus/main">global pokedex plus</a></li>
                </article>
            </section>
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>