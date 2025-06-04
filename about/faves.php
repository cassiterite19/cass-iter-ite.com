<?php $title = "my faves";?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/sidebar.php';?>
            <header>
                <h1><?php if($title){echo $title;}?></h1>
                <h5>last updated 01/29/24</h5>
                <p>these are some of my favorite pieces of media or stuff that's had a big impact on me.</p>
            </header>
            <section>
                <article>
                    <div class="card faves">
                        <h2>fav books</h2>
                        <ul>
                            <li>Raymond E Feist - [various works]</li>
                            <li>Richard Kadrey - [various works]</li>
                            <li>Stephen King - <em>The Dark Tower</em> series, [various other (related) works]</li>
                            <li>Brandon Sanderson - <em>Stormlight Archives</em> series</li>
                            <li>Various Authors - Warhammer 40k and Warhammer Horror books</li>
                            <li>Roger Zelazny - <em>Chronicles of Amber</em> series</li>
                        </ul>
                    </div>
                    <div class="card faves">
                        <h2>fav movies/tv</h2>
                        <ul>
                            <li>The Man in the Iron Mask<br>(1998)</li>
                            <li>Metalocalypse<br>(2006 - 2013)</li>
                            <li>Archer<br>(2009 - 2023)</li>
                            <li>Bunraku<br>(2010)</li>
                            <li>Branded<br>(2012) (but like, ironically)</li>
                            <li>Elementary<br>(2012 - 2019)</li>
                            <li>Pacific Rim<br>(2013)</li>
                            <li>The World's End<br>(2013) (Cornetto #3)</li>
                            <li>Renfield<br>(2023)</li>
                        </ul>
                    </div>
                    <div class="card faves">
                        <h2>fav manga/anime</h2>
                        <ul>
                            <li>Berserk manga (1989-)</li>
                            <li>Black Cat manga (2000-2004)</li>
                            <li>JoJo's Bizzare Adventure anime (2012-)</li>
                            <li>Yu Yu Hakusho anime (1992-1994)</li>
                        </ul>
                    </div>
                </article>
            </section>
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>