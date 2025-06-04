<?php $title = "you should put this in your &lt;head&gt; tag";?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/sidebar.php';?>
            <header>
                <h1><?php if($title){echo $title;}?></h1>
                <h5>last updated 10/05/24</h5>
            </header>
            <section>
                <article>
                    <p>making websites mobile friendly can be hard, but here's something to help out a little bit.</p>
                    <p>put this in your &lt;head&gt; tag:</p>
                    <blockquote><code>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</code></blockquote>
                    <p>this makes it so your site doesn't show up all zoomed out when people look at it on their phone, it'll start off at the same width as your content.</p>
                    <p>i make sure it goes on every site i make, so it's easier for people to view from their phone where most people are probably finding my website through like the bluesky app or something.</p>
                </article>
            </section>
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>