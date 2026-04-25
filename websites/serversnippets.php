<?php $title = "server snippets";?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/sidebar.php';?>
            <header>
                <h1><?php if($title){echo $title;}?></h1>
                <h5>last updated 04/25/26</h5>
                <p>this page is also available as a <a href="https://github.com/cassiterite19/server-essentials">GitHub repo</a> if you'd like to engage with it in that format!</p>
            </header>
            <section>
                <article>
                    <p>i like using a VPS for my websites. i like that i get to manage it mostly however i want. i liked having to learn how to do it properly and then being able to customize that to my own needs.</p>
                    <p>(i use <a href="https://www.vultr.com/?ref=8715740">Vultr</a> for my VPS hosting - this IS a referral link, i get credit to my account if you sign up via this link. you can go directly to <a href="https://www.vultr.com/">Vultr</a> instead if you'd like.)</p>
                    <p>in managing my VPS i have acquired some important pieces of code or configuration that are very helpful to me, and they might be helpful to you!</p>
                    <h4><code>update.sh</code></h4>
                    <p>the first is a shell script. this kind of thing was intimidating at first, but it was actually really easy to compose. it's basically just a collection of commands i would run in the terminal anyway, so i can run this one script instead of typing all that shit.</p>
                    <blockquote><code>
                        #!/usr/bin/env bash<br />
                        <br />
                        # exit when a command fails<br />
                        set -o errexit<br />
                        <br />
                        # shows each line as it's executed<br />
                        set -o xtrace<br />
                        <br />
                        # update, upgrade, dist-upgrade, autoremove: these do a full update of your system<br />
                        apt-get update<br />
                        apt-get upgrade<br />
                        apt-get dist-upgrade<br />
                        apt autoremove<br />
                        <br />
                        # print system info<br />
                        landscape-sysinfo
                    </code></blockquote>
                    <p>i keep it saved as <code>update.sh</code> in my root home folder and generally run it as <code>cd ~ &amp;&amp; yes | ./update.sh</code>. it is necessary to <code>chmod +x</code> this file before use, otherwise it doesn't run as a script. (<code>chmod +x</code> grants e<em>x</em>ecute permissions to the user, so you can execute the file.)</p>
                    <h4><code>domain.conf</code></h4>
                    <p>the next is a configuration file that is commonly used in servers with Apache web server software installed, which is what i use on my VPS to display my websites. (there is also NGINX which i have used in the past, but i prefer Apache because it has some tools available that NGINX doesn't have that make managing my websites easier, like PHPMyAdmin. (i think there are PHPMyAdmin alternatives that do work with NGINX, but i don't know how to set them up and i do not want that project right now.)</p>
                    <p>this configuration file allows a website request to be served correctly. that is, when a browser accesses http://example.com, if you have successfully set up your DNS so that example.com points to your webserver, this file tells the browser, "display the files in This Folder," and other things.</p>
                    <blockquote><code>
                        <VirtualHost *:80><br />
                            ServerName your_domain.com<br />
                            ServerAdmin webmaster@localhost (or your email)<br />
                            DocumentRoot /var/www/your_domain<br />
                            ErrorLog /var/www/your_domain/error.log<br />
                            CustomLog /var/www/your_domain/access.log combined<br />
                        </VirtualHost>
                    </code></blockquote>
                    <p>this is a very basic configuration file. i like to start with this, because when i use <a href="https://www.digitalocean.com/community/tutorials/how-to-secure-apache-with-let-s-encrypt-on-ubuntu">Certbot</a> to set up SSL, it'll add that information to the end of this configuration file. keeping it simple makes it easier to read in the end, and in case we need to change it later that can be important.</p>
                    <p>this file is most commonly saved as <code>example.conf</code> where example is your domain. i sometimes save it as <code>example.com.conf</code> but that's just a personal quirk, particularly because i use a lot of aesthetic TLDs.</p>
                    <p>this file also lets you point the server where to put your access and error logs. this can be really helpful to know if you run into issues with your website! i use PHP and PHP-based programs for my sites, so their error logs can be really helpful to figure out what's wrong when things don't load correctly.</p>
                    <p>this file gets saved in your <code>/etc/apache2/sites-available</code> folder, edited to reflect your domain (<code>ServerName</code>) and file location (<code>DocumentRoot</code> and so on). you then must run <code>a2ensite [domain].conf</code> to enable it, and then <code>systemctl reload apache2</code> (or however your particular system reloads apache).</p>
                    <h4><code>DigitalOcean</code></h4>
                    <p>finally i'd like to provide you with a set of links to some DigitalOcean tutorials i've found invaluable when working with my VPSes over the years. most of these give you an option at the top to change what server you're installing them for, in case you choose something other than Ubuntu.</p>
                    <ul>
                        <li><a href="https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu">Initial Server Setup with Ubuntu</a> - this will show you how to do basic stuff with your new server, like make a new user and set up the firewall.</li>
                        <li><a href="https://www.digitalocean.com/community/tutorials/how-to-install-lamp-stack-on-ubuntu">How To Install LAMP Stack (Apache, MySQL, PHP) on Ubuntu</a> - this guides you to installing some of the most important software for hosting websites on your server. <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu">there is also an NGINX version!</a> i do advise trying both NGINX and Apache and seeing which you like best, if you have the time and desire to do so!</li>
                        <li><a href="https://www.digitalocean.com/community/tutorials/how-to-secure-apache-with-let-s-encrypt-on-ubuntu">How To Secure Apache with Let's Encrypt on Ubuntu</a> - this is the article from before on Certbot, but i'm repeating it here for ease of reference. very easy way to keep your sites secure! (and, there's also <a href="https://www.digitalocean.com/community/tutorials/how-to-secure-nginx-with-let-s-encrypt-on-ubuntu-20-04">an NGINX version</a>.)</li>
                        <li><a href="https://www.digitalocean.com/community/tutorials/how-to-create-a-new-user-and-grant-permissions-in-mysql">How to Create a MySQL User and Grant Privileges (Step-by-Step)</a> - more niche because not everyone will be using MySQL but it's a very useful tool and necessary for some web programs like Wordpress or most wiki softwares.</li>
                    </ul>
                    <p>i hope this page was helpful to you in your website journey, and i hope you play with a VPS if you can afford to. it can be a very fun and rewarding experience for webmasters.</p>
                </article>
            </section>
<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>