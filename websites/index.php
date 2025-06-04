<?php $title = "websites";?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/sidebar.php';?>
            <header>
                <h1><?php if($title){echo $title;}?></h1>
                <p>these are posts about making websites or links to websites i think are cool.</p>
            </header>
            <section>
                <article>
                    <div>
                        <ul>
                            <li><a href="/websites/start.php">start page</a> (last updated: 02/13/25)</li>
                            <li><a href="/websites/head.php">you should put this in your &lt;head&gt; tag</a> (last updated: 10/05/24)</li>
                        </ul>
                    </div>
                </article>
            </section>
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>