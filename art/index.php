<?php $title = "art";?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/sidebar.php';?>
            <header>
                <h1><?php if($title){echo $title;}?></h1>
                <p>these are posts about my art or about art in general.</p>
            </header>
            <section>
                <article>
                    <div>
                        <ul>
                            <li><a href="/art/myartjourney.php">my art journey</a> (last updated: 02/25/24)</li>
                        </ul>
                    </div>
                </article>
            </section>
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>