<h2 class="item8">Addendum</h2>

<p>We did our best to make this documentation as clear as possible. However, if you have any
    difficulties with the Joomla template or any suggestions on improving the template or
    the documentation, feel free to contact our support team through the:</p>


<h4>Help and Support</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Live chat</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"
           target="_blank">Help ticket system</a></li>
</ul>

<h4>Documentation</h4>
<ul class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Beginners
            guide</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">Frequently Asked
            Questions</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! Documentation</a></li>
    <li><a href="/help/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla!
            Tutorials</a></li>
</ul>

<h4>Loading data from Google servers</h4>

<p>Some countries have issues connecting to Google servers. This can cause issues
    loading Google Fonts and Java Script libraries from Google CDN. To resolve these
    issues please do the following: </p>

<h4>Can't load Google Fonts:</h4>
<ol class="index-list">
    <li>Open \templates\theme****\index.php file</li>
    <li><p>Locate the line:</p>
        <code>$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---your_web_font_name_here---]');</code>
    </li>
    <li><p>Replace it with the following:</p>
        <code>$doc->addStyleSheet('//fonts.useso.com/css?family=[---your_web_font_name_here---]');</code>
    </li>
</ol>

<h4>Can't load jQuery</h4>
<ol class="index-list">
    <li>Open \templates\theme****\index.php file</li>
    <li><p>Locate the line:</p>
        <code>&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/[---your_jquery_version---]/jquery.min.js">&lt;/script></code>
    </li>
    <li><p>Replace with the following:</p>
        <code>&lt;script src="//code.jquery.com/jquery-[---your_jquery_version---].min.js">&lt;/script></code>
    </li>
</ol>

<p>You can also use local copy of jQuery library.</p>

<h4>Joomla! Extensions</h4>

<p>At <a href="http://extensions.joomla.org/" target="_blank">extensions.joomla.org</a>
    you can download more than 6 thousand modules, plugins and components to add various
    features to your Joomla website.</p>

<h4>Joomla! Cookies usage warning</h4>

<p>Following the Cookie Law conditions, you should add appropriate modules to your
    website that will display a warning message about the cookies used on your website.
    We can recommend the following ones:</p>
<ul class="marked-list">
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/24689"
           target="_blank">Cookie Accept</a></li>
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/21043"
           target="_blank">EU e-Privacy Directive</a></li>
</ul>

<h4>Additional Links</h4>
<ul class="marked-list">
    <li><a href="http://www.joomla.org/technical-requirements.html" target="_blank">Technical
            requirements</a></li>
    <li>
        <a href="http://opensourcematters.org/index.php?option=com_content&amp;view=article&amp;id=56&amp;Itemid=155"
           target="_blank">License and Usage</a></li>
</ul>

<h4>Validation</h4>

<p class="alert alert-info">
    Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors
    still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3
    features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we
    have to break some rules.
</p>