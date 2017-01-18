<h2 class="item8">Addendum</h2>

<p>We did our best to make this documentation as clear as possible. However, if you have any difficulties with your Joomla template or any suggestions on improving the template or the documentation, feel free to contact our Support Team through:</p>

<h4>Help and Support</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Live Chat</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"
           target="_blank">Help Ticket system</a></li>
</ul>
<h4>Documentation</h4>
<ul class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Quick start guide</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">FAQ</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! Documentation</a></li>
    <li><a href="/help/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla!
            Tutorials</a></li>
</ul>
<h4>Possible issues with Google Fonts</h4>

<p>If the fonts are not displayed correctly after installation, please open 
index.php (\templates\theme****\index.php) template file for editing. To do this, navigate to Extensions -> Template Manager
 tab in your Joomla admin panel and select your template (Theme**** Details and Files).</p>

<p>Please find the following line:</p>
    <code>"$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---your_web_font_name_here---]');"</code><p> and replace it with:</p>
<code>"$doc->addStyleSheet('//fonts.useso.com/css?family=[---your_web_font_name_here---]');".</code>
<h4>Joomla! Extensions</h4>

<p> At <a href="http://extensions.joomla.org/" target="_blank">extensions.joomla.org</a> you can download more than 6 thousand modules, plugins and components to add various features to your Joomla website.</p>
<h4>Joomla! Cookies usage warning</h4>

<p> Following the Cookie Law conditions, you should add appropriate modules to your website that will display a warning message about the cookies used on your website. We can recommend the following ones:</p>
<ul class="marked-list">
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/24689"
           target="_blank">Cookie Accept</a></li>
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/21043"
           target="_blank">EU e-Privacy Directive</a></li>
</ul>
<h4>Additional links</h4>
<ul class="marked-list">
    <li><a href="http://www.joomla.org/technical-requirements.html" target="_blank">Technical requirements</a></li>
    <li>
        <a href="http://opensourcematters.org/index.php?option=com_content&amp;view=article&amp;id=56&amp;Itemid=155"
           target="_blank">License and Usage</a></li>
</ul>

<h4>User blocks</h4>

<p class="alert alert-warning">
In the modules of this type, it’s often necessary to use loadmodule/loadposition propery, for example, "{loadmodule articles_single, About us}" in the content. In order to prevent Error 404 on your website, please make sure that the name of the loaded module coincides with the one, specified for loading. In this case, the "About us" module should be published and should not contain more than one space in the module name. You can learn more about loadmodule/loadposition at the <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">official website</a>.
    </p>

<h4>Validation</h4>

<p class="alert alert-info">
    Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we have to break some rules. </p>
