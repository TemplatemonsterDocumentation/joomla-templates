<h3>Global   Configuration
</h3>
<p>This area is accessible only if you are logged-in as a member of a   group having the attribute of being Super Administrators (by default the   Super Users group only). Once logged in, to access the page:</p>
<ol class="marked-list">
  <li>Go to <strong>System</strong> ><strong> Global Configuration</strong> or</li>
  <figure class="img-polaroid">
    <p><img src="img/global-1.jpg" alt=""></p>
</figure>
  <li>click the <strong>Global Configuration</strong> icon  from the main control panel.</li>
  <figure class="img-polaroid">
    <p><img src="img/global-2.jpg" alt=""></p>
</figure>
</ol>
<h5>Overview</h5>
<p align="justify">As the name implies, Global Configuration is the area of the Joomla   administrative interface where a user with Super Administrator   attributes is able to make changes that globally affect the behaviour of   the web site and also alter some default settings for the presentation   of, and access to site content.</p>
<p align="justify">All the parameters under the Site, System and Server tabs in the Global Configuration are stored as values in the file <em>configuration.php</em>,   which you will find in the root folder of Joomla installation. This   file is set up automatically by the software installation process and   thus many of the parameters appearing in the Global Configuration   screens are best left as their initial settings. Should Joomla be unable   to update <em>configuration.php</em> a message such as &quot;Could not save   data. Error: Could not write to the configuration file.&quot; will be   displayed, rather than the usual &quot;Configuration successfully saved.&quot;.   There are a number of ways of overcoming this problem, please refer to <a href="https://docs.joomla.org/Special:MyLanguage/Cannot_save_Global_Configuration_changes" title="Special:MyLanguage/Cannot save Global Configuration changes">Cannot save Global Configuration changes</a> for further information.</p>
<p align="justify">The parameters controlled by a third tab, Permissions, differ from those controlled via the other   tabs in that they are stored within the web site's database.</p>
<h5>The Toolbar</h5>
<p align="justify">The Global Configuration toolbar consists of four buttons to enable   the user to save changes, move away from the Global Configuration page   and call up online Help pages. Toolbars differ between Joomla v1.5.x and   the later versions, in respect of naming and order of buttons.</p>
<h5>The Joomla 3.x Toolbar</h5>
<ol class="marked-list">
  <li><strong>Save.</strong> Saves any changes made under any tab and the Global   Configuration screen remains open so that editing or checking of global   parameters can continue.</li>
  <li><strong>Save &amp; Close</strong>. As Save, but returns to the Administrator welcome screen.</li>
  <li><strong>Cancel.</strong> Returns to the Administrator welcome screen without saving any changes to the Global Configuration.</li>
  <li><strong>Help.</strong> Opens the Help Screen for Global Configuration.</li>
</ol>
<h5>The Site Tab Options</h5>
<div class="alert alert-info">
<p align="justify"><strong>Note</strong></p>
    <div align="justify">
      <p>The order in which these items appear on the screen vary slightly between the different versions of Joomla.</p>
</div></div>
<h6>Site Settings Group</h6>
<p>This group of options control a miscellaneous collection of   parameters that broadly control the behaviour of the public web pages of   the Joomla site.</p>
<figure class="img-polaroid">
    <p><img src="img/global-3.jpg" alt=""></p>
</figure>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Site Name.</strong> The name of the web site. This text provides an   single-point of update of the site name and is frequently used by site   templates as the header text of each web page.</div>
  </li>
  <li>
    <div align="justify"><strong>Site Offline.</strong> This setting provides a means of putting a site   offline to general users by changing the default setting of &ldquo;No&rdquo; to   &ldquo;Yes&rdquo;. When offline the public pages of the web site will be replaced by   the Offline Message (see below) and a log-in form. Only Administrators   are able to log in the site when set to offline using this option. Once   logged-in, Administrators are able to see the web site and work on it as   normal.</div>
  </li>
  <li>
    <div align="justify"><strong>Offline Message.</strong> The message that will be displayed on the   site when the site is offline. It may be changed to provide something   more helpful than the default message. This could be a date or time when   the site will be back online, or the URL of an alternative web site   that any visitors could use.</div>
  </li>
  <li>
    <div align="justify"><strong>Default Editor.</strong> The default text <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="http://help.joomla.org/proxy/index.php?option=com_help&amp;view=help&amp;keyref=Content_creators#Content_Editors">editor</a> for use when creating or updating articles on the site. This may be &ldquo;No   editor&rdquo; (edit raw HTML code only), one of editors pre-installed in   Joomla, or an editor installed subsequently as an extension. The editor   loaded when a registered site user starts editing text content may be   overridden on a user-by-user basis, but in the absence of any such   override it will be the Default Editor as set here.</div>
  </li>
  <li>
    <div align="justify"><strong>Default Access Level.</strong> (only present in Joomla v1.6.x and   later) The access level given by default to new content items, menu   entries, etc. By default this is &ldquo;Public&rdquo;, but could be changed to other   levels if – for example – it was undesirable for newly created items to   be visible to all site users. The access level for any items may be   overridden when created, or changed at a later point by anyone logged-in   with the appropriate permissions.</div>
  </li>
  <li>
    <div align="justify"><strong>Default List Limit.</strong> This sets the maximum number of items per   page in lists displayed in various pages of the Joomla administrative   interface, although this value may be overridden temporarily within the   list pages themselves. By default, this parameter is set to 20 but may   be changed to any of a number of values ranging from 5 to 100.<br />
      <strong>Tip:</strong> Use a larger value (50 or 100) than the default as it is   usually easier to scroll up and down a list on a single page than to   move between lots of short pages. Also if all items are on one page, it   is much easier to carry out a global search, for example for text in an   article title.</div>
  </li>
  <li>
    <div align="justify"><strong>Default Feed Limit.</strong> The number of content items to be shown   in any RSS newsfeeds set up on the web site. By default, this is set   to 10, although unless the site is very active a smaller number may be   better.</div>
  </li>
  <li>
    <div align="justify"><strong>Feed Email.</strong> Atom and RSS newsfeeds generated from site   content by the Joomla &ldquo;Syndicate feeds&rdquo; (&ldquo;Syndication&rdquo; in Joomla v1.5.x)   site module may include an e-mail address as part of the author's   identity. This parameter determines the source of that email address:   the &ldquo;Author Email&rdquo; setting will use the email address held on the site   for content author, &ldquo;Site E-mail&rdquo; will use the &ldquo;From email&rdquo; address set   up under the Server tab (see below) for emails generated automatically   by the web site.<br />
      <strong>Tip:</strong> &ldquo;Site E-mail&rdquo; is usually the preferred setting if content   syndication is being used on a web site. This is because the alternative   will expose the content authors' email addresses to collection by spam   lists.</div>
  </li>
</ol>
<h6>Metadata Settings Group</h6>
<figure class="img-polaroid">
    <p><img src="img/global-4.jpg" alt=""></p>
</figure>
<p align="justify">This group of options controls the presence or content of several of the metadata entries (i.e. code like <em>&lt;meta name = …. \&gt;</em>)   in the header of each page of the web site. Although not visible to the   site user, metadata entries may be used in various ways by web search   engines and their appropriate use can significantly aid the search   rankings and visibility of a web site. Note that several of the   following metadata parameters may be overridden for the content   categories and individual content items.</p>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Site Meta Description.</strong> Text added here appears in web page   headers as the &ldquo;description&rdquo; metadata entry. Search engines often use   this to provide descriptive text for your web pages in place some   (possibly inappropriate) text from the content of the web page. A   description of around 20 words is recommended. This metadata entry is   omitted from web pages if this entry is blank.</div>
  </li>
  <li>
    <div align="justify"><strong>Site Meta Keywords.</strong> Words and phrases (separated by commas)   added here appear in web page headers as the &ldquo;keywords&rdquo; metadata entry.   Search engines may use these words to refine their indexing of the   site's web pages. This metadata entry is omitted from web pages if this   entry is blank.</div>
  </li>
  <li>
    <div align="justify"><strong>Content Rights.</strong> (Only present in Joomla v1.6.x and later.)   Text added here appears in web page headers as the &ldquo;rights&rdquo; metadata   entry. If appropriate, describe here what rights others have to use this   content. This metadata entry is omitted from web pages if this entry is   blank.</div>
  </li>
  <li>
    <div align="justify"><strong>Show Author Meta Tag.</strong> When this parameter is set to &ldquo;Yes&rdquo; an   &ldquo;author&rdquo; metadata entry is added to the page header when appropriate,   using the content item's author name as the metadata text.</div>
  </li>
</ol>
<h6>SEO Settings Group</h6>
<figure class="img-polaroid">
    <p><img src="img/global-5.jpg" alt=""></p>
</figure>
<p align="justify">SEO is an abbreviation of &quot;Search Engine Optimization&quot;. Settings in   this group alter the format of URLs for pages in the web site, and this   may have a significant effect of the search rankings of individual   pages, as well as making URLs more human-friendly.</p>
<p align="justify"><strong>Tip:</strong> after making any changes to the settings in this group,   refresh any of the web site's pages already open in your web browser   (usually Ctrl+R will do this). Failure to so this will likely mean that   the format of web links internal to the site no longer match that which   Joomla is expecting and thus give the appearance of broken links.</p>
<p align="justify"><strong>Tip:</strong> Avoid if at all possible altering the SEO Settings once a   web site is established. Changing any of the first three items below   will mean that nearly all of a site's URLs will also change and result   in broken links from other sites and perhaps a temporary drop in search   engine rankings.</p>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Search Engine Friendly URLs.</strong> Joomla's internal representation   of URLs tends to be lengthy and also difficult to interpret by humans   and search engine spiders. This is a typical example of the internal URL   for a page displaying a content item: <tt>www.example.com/index.php?option=com_content&amp;view=article&amp;id=22&amp;Itemid=437</tt>. If this Global Configuration option is set to &ldquo;yes&rdquo;, the URL is modified into a shorter and more meaningful form: <tt>www.example.com/index.php/getting-started</tt>.   The identifying text in the URL (in this case &ldquo;getting_started&rdquo;) is   derived from the Alias text set up for each Category, content item, and   Menu item. The default setting is &ldquo;No&rdquo;.</div>
  </li>
  <li>
    <div align="justify"><strong>Use Apache mod_rewrite.</strong> When this parameter is set to &ldquo;Yes&ldquo;, Joomla will use the mod_rewrite function of Apache web servers to eliminate the <em>index.php</em> part of the URL. Thus, when this is operating the &ldquo;search engine friendly&rdquo; URL shown above will become: <tt>www.example.com/getting-started</tt>.<br />
      <div class="alert alert-info">
<p align="justify"><strong>Note</strong></p>
    <div align="justify">
      <p>
      This parameter is set to &ldquo;No&rdquo; by default. It should not be   set to &ldquo;Yes&rdquo; unless the web server uses Apache software and has been set   up so that mod_rewrite is installed and will work with your web site   (see <a href="https://docs.joomla.org/Special:MyLanguage/How_to_check_if_mod_rewrite_is_enabled_on_your_server" title="Special:MyLanguage/How to check if mod rewrite is enabled on your server">here</a> for how to check). Also, for this function to work, the <em>htaccess.txt</em> file installed in the root directory of the web site (or preferably a copy of it) should be renamed to <em>.htaccess</em>. As an incorrectly configured <em>.htaccess</em> file can easily cause major server errors, please do not modify the <em>.htaccess</em> file unless you understand how it works.</p>
    </div>
      </div>
    </div>
  </li>
  <p></p>
  <li>
    <div align="justify"><strong>Adds Suffix to URL.</strong> When set to &ldquo;Yes&rdquo;, Joomla will add <em>.html</em> to the end of the most site URLs thus simulating static file-based web content. The URLs shown above will then become: <tt>www.example.com/index.php/getting-started.html</tt> or <tt>www.example.com/getting-started.html</tt>. This setting is largely down to personal preference, but bearing in mind that it is easy to confuse <em>.htm</em> and .<em>html</em> suffixes when typing URLs, the advantage may lie with having this feature switched off. The default setting is &ldquo;No&rdquo;.</div>
  </li>
  <li>
    <div align="justify"><strong>Unicode aliases.</strong> (Only present in Joomla v1.6.x and later.)   Choose between &ldquo;Transliteration&rdquo; (No) and &ldquo;Unicode&rdquo; (Yes) aliases. When   saving edited content, the former setting attempts to convert, where   appropriate, any alias text into the corresponding Latin characters. The   latter setting leaves any non-Latin characters in the alias text   unchanged. Changing this parameter does not retroactively change   aliases, it just changes the behaviour of automatic alias generation for   future content editing and creation. &ldquo;Transliteration&rdquo; (No) is the   default setting.</div>
  </li>
  <li>
    <div align="justify"><strong>Add Site Name To Page Titles.</strong> (Only present in Joomla v1.6.x and later.) Appends the site name to page titles in the <em>&lt;title&gt;</em> tag of each web page header. (This text usually appears in the top bar   of the web browser window and/or on the browser tab.) Joomla v1.6.x   introduced this feature as an option to either include the site name   text before the page title (e.g. <em>Site Name – Page Name</em>) or omit it. With Joomla v1.7.x the options also include inserting the site name after the page name (e.g. <em>Page Name – Site Name</em>) as well as before.</div>
  </li>
</ol>
<h6>Cookie Settings Group</h6>
<figure class="img-polaroid">
    <p><img src="img/global-6.jpg" alt=""></p>
</figure>
<p align="justify">Only present in Joomla v1.6.x and later, these settings allow the   site cookies to be modified to suit certain circumstances. For the   majority of web sites these entries may be left blank. The cookie domain   may be useful if you want a cookie be valid for several subdomains. The   cookie path would have to be set if the cookie should only be valid for   a certain subdirectory.</p>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Cookie Domain.</strong> Overrides the site's default cookie domain   with the domain added here. The most likely situation when this would be   needed is when the Joomla site is &ldquo;bridged&ldquo; with other sites (e.g.   forum or e-commerce) in sub-domains of the Joomla site. The default   cookie domain may be like <tt>www.example.com</tt>, but using <tt>.example.com</tt> (note the leading dot) here will deliver cookies valid for any sub-domain of example.com.</div>
  </li>
  <li>
    <div align="justify"><strong>Cookie Path.</strong> Overrides the site's default path for which the cookie is valid with the path added here.</div>
  </li>
</ol>
<h5>The System Tab Options</h5>
<h6>System Settings Group</h6>
<figure class="img-polaroid">
    <p><img src="img/global-7.jpg" alt=""></p>
</figure>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Path to Log Folder.</strong> The full path to the folder on the server   where any logs should be stored by Joomla! or its extensions. This   folder location is set up on Joomla installation and should not normally   be changed.</div>
  </li>
  <li>
    <div align="justify"><strong>Help Server.</strong> Select the default source of the information   presented when a Help button is clicked. The purpose of this choice is   mainly to select the appropriate language variant of the Help service.   The choice of Help service may be overridden for individual registered   site users.</div>
  </li>
</ol>
<h6>Debug Settings Group </h6>
<figure class="img-polaroid">
    <p><img src="img/global-8.jpg" alt=""></p>
</figure>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Debug System.</strong> If set to &quot;Yes&quot;, Joomla will add debug   information on every page, below the normal web page area. This   information will include various forms of diagnostic information,   including the full database queries used in generating the page. The   default setting is &quot;No&quot;. The mix and format of diagnostic information   presented by the debug function may be altered by editing the parameters   of the Debug - System plug-in (Extensions &gt; Plug-in Manager).<br />
    <div class="alert alert-info">
<p align="justify"><strong>Note</strong></p>
    <div align="justify">
      <p>The debug information displayed with this parameter set to   &quot;Yes&quot; is visible to all users and thus may be a security risk if used on   a public web site. The debug information is visible even if Site   Offline is set to &quot;Yes&quot;<strong>.</strong>    </p>
    </div>
    </div>
    </div>
  </li>
  <p></p>
  <li>
    <div align="justify"><strong>Debug Language.</strong> If set to &quot;Yes&quot;, Joomla will activate   features designed to help debug language translations for a Joomla site.   This includes the addition of language translation information to page   debug information (requires Debug System also set to &quot;Yes&quot;), and markers   to show translated content within the web pages themselves. For further   information, refer to <a href="https://docs.joomla.org/Special:MyLanguage/Debugging_a_translation" title="Special:MyLanguage/Debugging a translation">Debugging a translation</a>.</div>
  </li>
</ol>
<h6>Cache Settings Group </h6>
<figure class="img-polaroid">
    <p><img src="img/global-9.jpg" alt=""></p>
</figure>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Cache</strong> This setting controls whether or not site caching is   enabled. When enabled, web pages are held for a period of time in cache   storage and are retrieved from there rather than being re-created each   time required. Caching is a strategy to reduce the loading presented by   busy web sites to a web server. The default setting is &ldquo;No&rdquo;.<br />
      <strong>Tip:</strong> When debugging a Joomla site, switch off the cache as it may   hide changes to web pages, and thus mask the effect of modifications to   web site code.</div>
  </li>
  <li>
    <div align="justify"><strong><a href="https://docs.joomla.org/Special:MyLanguage/Cache" title="Special:MyLanguage/Cache">Cache Handler</a>.</strong> This setting defines the mechanism used to manage the cache storage.</div>
  </li>
  <li>
    <div align="justify"><strong>Cache Time.</strong> This parameter defines the maximum time for which   web pages are held in the cache storage before being updated with the   current version. The default is 15 minutes.</div>
  </li>
</ol>
<h6>Session Settings Group </h6>
<figure class="img-polaroid">
    <p><img src="img/global-10.jpg" alt=""></p>
</figure>
<p>The &ldquo;session&rdquo; is the data that identifies and relates to a specific   web site user, and which persists as that user moves from page to page.</p>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Session Lifetime.</strong> This parameter determines how long it takes   until a user is automatically logged off for being inactive. The   default setting is 15 minutes, although it can be useful to temporarily   lengthen this parameter on development sites to avoid having to   repeatedly log back in.</div>
  </li>
  <li>
    <div align="justify"><strong>Session Handler.</strong> Selects the mechanism used to hold session   information between one page request and the next one from the same   user. The options are &ldquo;Database&rdquo; (the default) and &ldquo;None&rdquo;. The former   stores session information as entries in a table in the site's Joomla   database, the latter uses the session handling mechanism built in to   PHP.</div>
  </li>
</ol>
<h5>The Server Tab Options</h5>
<h6>Server Settings Group </h6>
<figure class="img-polaroid">
    <p><img src="img/global-11.jpg" alt=""></p>
</figure>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Path to Temp Folder.</strong> This is the full path to the folder on   the server that Joomla and its extensions will use for temporary file   storage. This folder location is set up on Joomla installation and   should not normally be changed.</div>
  </li>
  <li>
    <div align="justify"><strong>GZIP Page Compression.</strong> If set to &ldquo;Yes&rdquo;, the web server will   compress the content sent out from your Joomla site. This will speed-up   page load times, especially for web site users who have a low-bandwidth   connection. The default setting is &ldquo;No&rdquo;.</div>
  </li>
  <li>
    <div align="justify"><strong>Error Reporting.</strong> This parameter sets the level of error   reporting to be used by PHP on the Joomla site. It has five options:   System Default, None, Simple, Maximum and Development. &ldquo;System Default&rdquo;   leaves the level of PHP error reporting to that set up in the server   (usually in the <em>php.ini</em> file). &ldquo;None&rdquo; switches off PHP error   reporting, and &ldquo;Simple&rdquo;, &ldquo;Maximum&rdquo; and &ldquo;Development&rdquo; override the server   setting to give a basic level of reporting (for &ldquo;Simple&rdquo;) and the   reporting of all errors (&ldquo;Maximum&rdquo; and &ldquo;Development&rdquo;).<br />
      <strong>Tip:</strong> Should your Joomla site fail to the extent that it is not   possible to use the administrator page to activate error reporting, you   can switch on full PHP error reporting by editing the <em>configuration.php</em> file. Changing the <em>$error_reporting</em> parameter in that file to a value of 'maximum' is the equivalent to setting Error Reporting to &ldquo;Maximum&rdquo;.</div>
  </li>
  <li>
    <div align="justify"><strong>Force SSL.</strong> This parameter has three options: &ldquo;None&rdquo;,   &ldquo;Administrator Only&rdquo;, and &ldquo;Entire Site&rdquo;. Using the appropriate setting,   this parameter forces any web browser connections to the administrative   &ldquo;backend&rdquo;, or to the complete Joomla site, to use the secure HTTP   protocol (HTTPS). The &ldquo;Entire Site&rdquo; setting is appropriate where   security of any web transaction (e.g. e-commerce) is important. Ideally   there should also be an appropriate certificate in place to verify the   identity of your web site. The &ldquo;Administrator Only&rdquo; setting is ideal for   enhancing the security of other types of web site as it encrypts   &ldquo;backend&rdquo; content and passwords that could be put to malicious use if   intercepted.<br />
    <div class="alert alert-info">
<p align="justify"><strong>Note</strong></p>
    <div align="justify">
      <p>Before moving away from the default setting of &ldquo;None&rdquo;, it   is essential that you check the server delivering your web site is   capable of operating in HTTPS mode<strong>.</strong>    </p>
    </div>
    </div>
    </div>
  </li>
</ol>
<h6>Location Settings Group </h6>
<figure class="img-polaroid">
    <p><img src="img/global-12.jpg" alt=""></p>
</figure>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Server Time Zone.</strong> Sets the time zone for use across the web   site, based on a choice of capital cities. (default is &ldquo;London&rdquo;, UTC   00:00) Internally, Joomla stores the <a href="http://en.wikipedia.org/wiki/Coordinated_Universal_Time" class="extiw" title="wikipedia:Coordinated Universal Time">date and time of events as UTC</a>.   It then uses &ldquo;Server Time Zone&rdquo; to set the appropriate offset to   display time and date information on the web site in the server's local   time zone. <div class="alert alert-info">
<p align="justify"><strong>Note</strong></p>
    <div align="justify">
      <p>Each user also has a time zone parameter that,   by default, is the same as the Server Time Zone but which may be changed   to reflect the preferred time zone of that user.</p>
</div></div>
    </div>
  </li>
</ol>
<h6>FTP Settings Group </h6>
<figure class="img-polaroid">
    <p><img src="img/global-13.jpg" alt=""></p>
</figure>
<p align="justify">A significant problem with running scripted programs – such as Joomla   – on Linux and similar servers is that the files and folders making up   the program are not owned by the same identity as the one used to   execute the web server code. The files and folders making up the web   site will usually be put in place on the server by means of FTP, and   thus will be owned by the personal log-in identity used for FTP access.   In contrast, the web server code will be executed by a generic identity   used for automatic processes within the server.</p>
<p align="justify">Because of this difference between the FTP upload and web server   identities, automatic updates of the web site code (e.g. installing or   updating extensions) will be blocked by the security features that   prevent one user's files being altered by another user.</p>
<p align="justify">One solution to this problem is for Joomla to use FTP when installing   or deleting files, and if this is used it is essential that the FTP   log-on credentials are the same as those used when installing the Joomla   web site.</p>
<p align="justify">The FTP option is generally only needed on shared servers using Linux   and Unix-like operating systems. The problem does not arise with other   operating systems, and on dedicated servers there is the alternative   option of changing the ownership and/or permissions of the web site   files so that they may be modified by the web server processes.</p>
<p align="justify">FTP is also not necessary when the Joomla site has been set up to   operate under CGI or FastCGI as the web server process then generally   operates under the same identity as the one used for FTP access.</p>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Enable FTP.</strong> Setting this to &ldquo;Yes&rdquo; will force Joomla to use   FTP when adding, deleting, or updating web site files. This is in place   of the PHP functions which would normally be used to do this. The   default setting is &ldquo;No&rdquo;, and should not be changed unless FTP upload is   necessary (see the detail above).</div>
  </li>
  <li>
    <div align="justify"><strong>FTP Host.</strong> The URL to be used for FTP access to the Joomla web site files.</div>
  </li>
  <li>
    <div align="justify"><strong>FTP Port.</strong> Generally &ldquo;21&rdquo;. You will be advised by your web   hosting provider if a different port number needs to be used for FTP   access to your site files.</div>
  </li>
  <li>
    <div align="justify"><strong>FTP Username.</strong> The user identity that Joomla will use for FTP access. This must be the same identity as used in setting up the web site.</div>
  </li>
  <li>
    <div align="justify"><strong>FTP Password.</strong> The password for the above user identity.</div>
  </li>
  <li>
    <div align="justify"><strong>FTP Root.</strong> This is the path from the FTP log-in location to the folder that holds the Joomla site.</div>
  </li>
</ol>
<h6>Database Settings Group </h6>
<figure class="img-polaroid">
    <p><img src="img/global-14.jpg" alt=""></p>
</figure>
<p align="justify">These parameters identify the database location, the database and   tables within that database that hold configuration and content   information for your web site. It also includes the username required   for accessing the database contents, but <strong>not</strong> the password   associated with that username. Should you need to change the database   password, edit the line defining the value of <em>$password</em> in the file <em>configuration.php</em>, which you will find in the Joomla root.</p>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Database Type.</strong> This determines the type of the database being   used by this Joomla installation and also the type of interface used to   access the database. Current versions of Joomla can operate on MySQL,   MSSQL and PostgreSQL. For MySQL there are two choices:&ldquo;MySQL&rdquo; and   &ldquo;MySQLi&rdquo;. These are two different PHP interfaces to MySQL databases. The   latter should be used if possible as it should work with all modern   implementations of MySQL server, and offers a number of advantages over   the MySQL interface.<sup id="cite_ref-1" class="reference"><a href="https://docs.joomla.org/J3.x:Global_configuration#cite_note-1">[1]</a></sup> For MSSQL also two choices: &quot;MS SQL Server&quot; and &quot;MS SQL Azure&quot;.</div>
  </li>
  <li>
    <div align="justify"><strong>Host</strong> (<strong>Hostname</strong> in v1.5,x). The hostname of the   database server to be used. In most web hosting situations, the database   server is located in the same system as the web server and this   parameter should then be set to &ldquo;localhost&rdquo;. Otherwise this setting   should be the server name or IP address (e.g. &ldquo;mysql.example.com&rdquo;).</div>
  </li>
  <li>
    <div align="justify"><strong>Database Username</strong> (<strong>Username</strong> in v1.5.x). The username required to access the database carrying the Joomla site's data tables.</div>
  </li>
  <li>
    <div align="justify"><strong>Database Name</strong> (<strong>Database</strong> in v1.5.x). The name of the database carrying the Joomla site's data tables.</div>
  </li>
  <li>
    <div align="justify"><strong>Database Table Prefix.</strong> The prefix applied to the name of the   database tables used by this Joomla installation. For Joomla v1.5.x and   v1.6.x this is &ldquo;jos_&rdquo; by default, and should another Joomla site have to   share the same database, the database tables would be kept separate by   setting up this second site with a different prefix – e.g. &ldquo;jos2_&rdquo;. With   Joomla v1.7.x the same result is achieved by using a prefix that is a   randomly generated alphabetic code and underscore – e.g. &ldquo;vduea_&rdquo;.</div>
  </li>
</ol>
<h6>Mail Settings Group </h6>
<figure class="img-polaroid">
    <p><img src="img/global-15.jpg" alt=""></p>
</figure>
<p>This group is used to set up the sending of automatically generated emails from the Joomla! web site.</p>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>Mailer.</strong> This sets the mechanism to be used when sending automatically generated emails. The choice is between &ldquo;PHP Mail&rdquo; (the PHP <em>mail()</em> function), &ldquo;Sendmail&rdquo; (an email handling program available in many web   servers), or &ldquo;SMTP&rdquo; (a separate email delivery server similar to those   used by most email clients). The default setting is &ldquo;PHP Mailer&rdquo;.</div>
  </li>
  <li>
    <div align="justify"><strong>From email</strong> (<strong>Mail from</strong> in v1.5.x). The email address to be used as &ldquo;from&rdquo; address in any outgoing emails generated by the Joomla site.</div>
  </li>
  <li>
    <div align="justify"><strong>From Name.</strong> This defines the &ldquo;from&rdquo; name in any outgoing emails generated by the Joomla site.</div>
  </li>
  <li>
    <div align="justify"><strong>Disable Mass Mail.</strong> Select &quot;Yes&quot; to disable the Mass Mail   Users function, select &quot;No&quot; to make it active. Mass Mail allows to send   emails to all or to a specific group of registered users.</div>
  </li>
</ol>
<p>The remaining Mail Settings parameters need to be set up only if Mailer is set to &ldquo;SMTP&rdquo;.</p>
<ol class="marked-list">
  <li>
    <div align="justify"><strong>SMTP Authentication.</strong> Whether or not the external SMTP server requires authentication before accepting outgoing emails. The default is &ldquo;No&rdquo;.</div>
  </li>
  <li>
    <div align="justify"><strong>SMTP Security.</strong> The form of security required by the SMTP server. – &ldquo;None&rdquo;, &ldquo;SSL&rdquo; or &ldquo;TLS&rdquo;. The default is &ldquo;None&rdquo;.</div>
  </li>
  <li>
    <div align="justify"><strong>SMTP Port.</strong> The IP port to use when connecting to the SMTP server. This will usually be &ldquo;25&rdquo; for None, or &ldquo;465&rdquo; for SSL or TLS.</div>
  </li>
  <li>
    <div align="justify"><strong>SMTP Username.</strong> The username to be used when connecting to the   SMTP server in SSL or TLS mode. May be left blank if there is no SMTP   authentication.</div>
  </li>
  <li>
    <div align="justify"><strong>SMTP Password.</strong> The password to be used when connecting to the   SMTP server in SSL or TLS mode. May be left blank if there is no SMTP   authentication.</div>
  </li>
  <li>
    <div align="justify"><strong>SMTP Host.</strong> The hostname of the SMTP server (e.g. &ldquo;smtp.example.com&rdquo;).</div>
  </li>
</ol>
<h5>The Permissions Tab Options</h5>
<figure class="img-polaroid">
    <p><img src="img/global-16.jpg" alt=""></p>
</figure>
<p align="justify">This tab is only present in Joomla v1.6.x and later as it reflects   the enhanced flexibility of access control introduced with v1.6. It   provides the means to set up the default permissions for all of the   groups of users in terms their ability to edit site content and other   settings of the site, and to access administrative functions.</p>