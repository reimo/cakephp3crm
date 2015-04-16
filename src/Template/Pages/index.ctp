    <p id="url-rewriting-warning" style="background-color:#e32; color:#fff;display:none">
        URL rewriting is not properly configured on your server.
        1) <a target="_blank" href="http://book.cakephp.org/3.0/en/installation/url-rewriting.html" style="color:#fff;">Help me configure it</a>
        2) <a target="_blank" href="http://book.cakephp.org/3.0/en/development/configuration.html#general-configuration" style="color:#fff;">I don't / can't use URL rewriting</a>
    </p>

    <div class="row">
        <div class="columns large-5 platform checks">
            <?php if (version_compare(PHP_VERSION, '5.4.16', '>=')): ?>
                <p class="success">Your version of PHP is 5.4.16 or higher.</p>
            <?php else: ?>
                <p class="problem">Your version of PHP is too low. You need PHP 5.4.16 or higher to use CakePHP.</p>
            <?php endif; ?>

            <?php if (extension_loaded('mbstring')): ?>
                <p class="success">Your version of PHP has the mbstring extension loaded.</p>
            <?php else: ?>
                <p class="problem">Your version of PHP does NOT have the mbstring extension loaded.</p>;
            <?php endif; ?>

            <?php if (extension_loaded('openssl')): ?>
                <p class="success">Your version of PHP has the openssl extension loaded.</p>
            <?php elseif (extension_loaded('mcrypt')): ?>
                <p class="success">Your version of PHP has the mcrypt extension loaded.</p>
            <?php else: ?>
                <p class="problem">Your version of PHP does NOT have the openssl or mcrypt extension loaded.</p>
            <?php endif; ?>

            <?php if (extension_loaded('intl')): ?>
                <p class="success">Your version of PHP has the intl extension loaded.</p>
            <?php else: ?>
                <p class="problem">Your version of PHP does NOT have the intl extension loaded.</p>
            <?php endif; ?>
        </div>
        <div class="columns large-6 filesystem checks">
            <?php if (is_writable(TMP)): ?>
                <p class="success">Your tmp directory is writable.</p>
            <?php else: ?>
                <p class="problem">Your tmp directory is NOT writable.</p>
            <?php endif; ?>

            <?php if (is_writable(LOGS)): ?>
                <p class="success">Your logs directory is writable.</p>
            <?php else: ?>
                <p class="problem">Your logs directory is NOT writable.</p>
            <?php endif; ?>

        </div>
    </div>
    <div class="row">
        <div class="columns large-12  database checks">
            <p class="success">CakePHP is able to connect to the database.</p>
        </div>
    </div>
    <div class="row">
        <div class="columns large-6">
            <h3>Editing this Page</h3>
            <ul>
                <li>To change the content of this page, edit: src/Template/Pages/home.ctp.</li>
                <li>You can also add some CSS styles for your pages at: webroot/css/.</li>
            </ul>
        </div>
        <div class="columns large-6">
            <h3>Getting Started</h3>
            <ul>
                <li><a target="_blank" href="http://book.cakephp.org/3.0/en/">CakePHP 3.0 Docs</a></li>
                <li><a target="_blank" href="http://book.cakephp.org/3.0/en/tutorials-and-examples/bookmarks/intro.html">The 15 min Bookmarker Tutorial</a></li>
                <li><a target="_blank" href="http://book.cakephp.org/3.0/en/tutorials-and-examples/blog/blog.html">The 15 min Blog Tutorial</a></li>
            </ul>
            <p>
        </div>
    </div>

    <hr/>
    <div class="row">
        <div class="columns large-12">
            <h3 class="">More about Cake</h3>
            <p>
                CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Front Controller and MVC.
            </p>
            <p>
                Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.
            </p>

            <ul>
                <li><a href="http://cakefoundation.org/">Cake Software Foundation</a>
                    <ul><li>Promoting development related to CakePHP</li></ul></li>
                <li><a href="http://www.cakephp.org">CakePHP</a>
                    <ul><li>The Rapid Development Framework</li></ul></li>
                <li><a href="http://book.cakephp.org/3.0/en/">CakePHP Documentation</a>
                    <ul><li>Your Rapid Development Cookbook</li></ul></li>
                <li><a href="http://api.cakephp.org/3.0/">CakePHP API</a>
                    <ul><li>Quick Reference</li></ul></li>
                <li><a href="http://bakery.cakephp.org">The Bakery</a>
                    <ul><li>Everything CakePHP</li></ul></li>
                <li><a href="http://plugins.cakephp.org">CakePHP plugins repo</a>
                    <ul><li>A comprehensive list of all CakePHP plugins created by the community</li></ul></li>
                <li><a href="https://groups.google.com/group/cake-php">CakePHP Google Group</a>
                    <ul><li>Community mailing list</li></ul></li>
                <li><a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
                    <ul><li>Live chat about CakePHP</li></ul></li>
                <li><a href="https://github.com/cakephp/">CakePHP Code</a>
                    <ul><li>For the Development of CakePHP Git repository, Downloads</li></ul></li>
                <li><a href="https://github.com/cakephp/cakephp/issues">CakePHP Issues</a>
                    <ul><li>CakePHP issues and pull requests</li></ul></li>
            </ul>
        </div>
    </div>
