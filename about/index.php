<?php $title = "about me & the site";?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/sidebar.php';?>
            <header>
                <h1><?php if($title){echo $title;}?></h1>
                <p>these are posts about me or about the site.</p>
            </header>
            <section>
                <article>
                    <div>
                        <ul>
                            <li><a href="/about/recentlyread.php">recently read</a> (last updated: 05/19/25)</li>
                            <li><a href="/about/alterhuman.php">what is "alterhuman"?</a> (last updated: 02/24/24)</li>
                            <li><a href="/about/faves.php">Faves</a> (last updated: 01/29/24)</li>
                        </ul>
                    </div>
                </article>
            </section>
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>