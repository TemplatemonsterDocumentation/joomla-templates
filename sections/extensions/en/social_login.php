<h3>Joomla Social Login</h3>

<p align="justify"><strong>Social Login</strong>, social network authentication component allows to login to Joomla web site via following social networks: Vkontakte, Twitter, FaceBook, Odnoklassniki, LinkedIn, Yandex services, Google, and Mail.ru.</p>
<h5>Setting Slogin for the service Slogin.info</h5>
<ol class="marked-list">
  <li>After installation, go to the component settings: <strong>Components</strong> &gt;   <strong>Slogin</strong>.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-1.jpg" alt="">
  </figure>
</p>
  <li>Then you need to get an<strong> ID </strong>and<strong> password</strong>, where to get them?</li>
  <li>Go to page: <a href="http://slogin.info">http://slogin.info</a></li>
  <li>If you have not registered yet, you can simply sign in through the social network.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-2.jpg" alt="">
  </figure>
</p>
  <li>Click on the button <strong>Add site</strong>.</li>
  <li>In the <strong>Callback</strong> referenced format   http://<strong>site.ru</strong>/index.php?option=com_slogin&amp;task=check&amp;plugin=service.    </li>
     <figure class="img-polaroid">
    <img src="http://joomline.ru/images/QIP_Shot_-_Screen_215_25.12.15.png" alt="">
     </figure>
  <li><strong>Site.ru</strong> replace on your website or you can copy the link from the   field ready <strong>Callbsck URL</strong> in the settings Slogin.</li>
</br>
  Go to <strong>Components</strong> &gt; <strong>Slogin</strong>. Open any plugin settings.
<p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>Find  <strong>Callback URI </strong>option field and copy the URL path.</p>
   <figure class="img-polaroid">
      <img src="img/sociallogin-4.jpg" alt="">
  </figure>
  <li>In the <strong>Password</strong> field, enter the secret word.</li>
  <li>Click on the button <strong>Add</strong>.</li>
  <li>After adding a site gets its user <strong>ID</strong> and <strong>password</strong>, which is entered in the previous step.</li>
  <li>Select the network that you want and save the settings.</li>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <li>Now you need to publish  plugins  and the module.</li>
  <li>You can publish plugins [ 	Social Login Facebook auth, Social Login Google auth, Social Login Instagram auth, ect] via component settings window [<strong>Components</strong> &gt; <strong>Slogin</strong>].</li>
</ol>
<ol class="marked-list">
  <p>In order to this, open any plugin settings.
  </p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>And change <strong>Slogin plugin</strong> to <strong>Enable</strong>.
  </p>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-6.jpg" alt="">
    </figure>
  </p>
  <p>You will be able to see the <strong>Slogin </strong>plugin current status in the <strong>Publishing</strong> column.</p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-8.jpg" alt="">
    </figure>
  </p>
  <li>To publish the <strong>Slogin</strong> module navigate to <strong>Extensions</strong> &gt; <strong>Modules</strong>. Find the <strong>Slogin</strong> module using the filters. Select<strong> Slolin </strong>module type in the &quot;<strong>-Select Type-</strong>&quot; dropdown and you will see the <strong>Slogin</strong> module in the listing.</li>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-7.jpg" alt="">
    </figure>
  </p>
<li>Press the module title link to be brought to the module settings interface.</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-9.jpg" alt="">
    </figure>
  </p>
 <p>Let's learn more about the <strong>Slogin</strong> module settings:</p>
 <table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong>Show Login Form</strong></td>
        <td width="29">-</td>
      <td width="781"> Whether to show the <span class="col-1"> Login Form.</span></td>
  </tr>
    <tr>
        <td class="col-1"><strong>Link to the accounts merge</strong></td>
        <td>-</td>
        <td><div align="justify">Show the link to the linked profiles management of social networks. The link is displayed in the Slogin module for an authorized user.</div></td>
    </tr> <tr>
        <td class="col-1"><strong> Link to profile </strong></td>
        <td>-</td>
        <td><div align="justify">Show the profile link. The link is displayed in the Slogin module for an authorized user.</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong>Intro Text</strong></td>
        <td>-</td>
        <td>HTML text to be displayed before authorizing on social networks.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong> Pre-text </strong></td>
        <td>-</td>
        <td>This is the text or HTML that is displayed above the login form.</td>
    </tr>
    <tr>
    <td class="col-1"><strong> Post-text </strong></td>
        <td>-</td>
        <td>This is the text or HTML that is displayed below the login form.</td>
    </tr>
          <td class="col-1"><strong>Login Redirection Page</strong></td>
        <td>-</td>
        <td><div align="justify">Select the page the user will be redirected to after a successful login. Select one from the pages listed in the dropdown menu. Choosing <strong>Default</strong> will return to the same page.</div></td>
    </tr>    <td class="col-1"><strong> Logout Redirection Page </strong></td>
        <td>-</td>
        <td><div align="justify">Select the page the user will be redirected to after log out. Select one from the pages listed in the dropdown menu. Choosing <strong>Default</strong> will return to the same page.</div></td>
    </tr>
</table>
<p></p>
<li>Choose the module position. Let's select the <strong>megamenu</strong> position.</li>
<li>
  <div align="justify">Publish the module [You can puplish the module via the Modules Manager, pressing the red &quot;x&quot; button near the modul title.].</div>
</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-10.jpg" alt="">
    </figure>
  </p>
<li>Save the settings.</li>
<li>
  <div align="justify">Go back to your website and refresh the page. Now you are able to login  to your Joomla web site via numerous social networks.</div>
</li>
</ol>
<h4> Creating applications for authorization through social networks in joomla</h4>
<h5>Vkontakte </h5>
<p align="justify">Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;   plugin &quot;<strong>Social Login Vkontakte auth</strong>&quot;.</p>
<div class="alert alert-warning">
  <div align="justify"><strong>Tip: </strong>if you want to find all  <strong>slogin_auth</strong> plugins, use the filters to simplify the process. Press &quot;<strong>Search Tool</strong>&quot; button and select the &quot;<strong>slogin_auth</strong>&quot; type in the &quot;<strong>- Select Type -</strong>&quot; filter dropdown list. You will see the list of all <strong>slogin_auth</strong> plugins.</div>
 <figure class="img-polaroid">
      <img src="img/sociallogin-12.jpg" alt="">
  </figure>
</div>
<div class="alert alert-warning">
  <p>
  
    You can get plugins settings [ 	Social Login Facebook auth, Social Login Google auth, Social Login Instagram auth, ect] via component settings window [<strong>Components</strong> &gt; <strong>Slogin</strong>].</p>
<p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
</div>
<ol class="marked-list">
<li><p align="justify">Go <a href="http://vk.com/editapp?act=create" target="_blank">here</a> and create new application. </p></li>
<li>
<p align="justify">Choose Web-Site, enter name, site address   and base domain. On the next page get <strong>Application ID</strong> and <strong>Secret Key</strong> and   enter them in corresponding fields in component settings. Save settings   and enable VKontakte login.</p></li></ol>
<p><figure class="img-polaroid"><img src="http://joomline.org/images/oauth_vk2.jpg" alt=""/></figure></p>
<h5>Google</h5>
<p align="justify">Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;    plug-in &quot;<strong>Social Login Google auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Go <a href="https://code.google.com/apis/console" target="_blank">here</a> and create new project. </li>
  <li>Enter it's name and click <strong>API Access </strong>on the   next page. Hit the <strong>Create an OAuth2 client ID</strong> button, enter name [can   be the same as project] and choose <strong>Web application</strong> as type. Now click   the <strong>More options</strong> link, enter your site<strong> URL</strong> and put   http://<strong>mysite</strong>/?option=com_slogin&amp;task=check&amp;plugin=google as   Callback URI. Now you can copy <strong>Client ID</strong> and <strong>Client Secret</strong> and paste them in   corresponding fields in component settings. Save settings and enable   Google login.</li>
  <li>Create google application :
<p></p>
<figure class="img-polaroid">
  <img src="http://joomline.ru/images/QIP_Shot_-_Screen_145_12.11.15.png" alt=""/>
</figure>

  <li>Configuring application google.</li>
  <li>We pass on the name of the &quot;Application Menu&quot; &gt; &quot;APIs &amp; auth&quot; &gt; &quot;Credential&quot;.</li>
  <li>Create a new Client ID: Select oAuth 2.0 client ID and its Web application.</li>

<p>
  <figure class="img-polaroid">
<img src="http://joomline.ru/images/QIP_Shot_-_Screen_147_12.11.15.png" alt=""/></figure></p>
<li><p>Gets something like this image:</p></li>
<p><figure class="img-polaroid"><img src="http://joomline.ru/images/QIP_Shot_-_Screen_148_12.11.15.png" alt=""/></figure></p>

  <li>Get client_id [Client ID] and secret_key [Client Secret].</li>
  <li>Specify the name of the product and email:</li>

<ol class="marked list">
  <li>Tab &quot;OAuth consent screen&quot;;</li>
  <li>Fill the &quot;Product name&quot;;</li>
  <li>Select in the &quot;Email address&quot; your email.</li>
</ol></ol>
<h5>FaceBook</h5>
<p align="justify">Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;    plug-in &quot;<strong>Social Login Facebook auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Go <a href="https://developers.facebook.com/apps" target="_blank">here</a> and create new application.</li>
  <li>Click on the &quot;my Apps&quot; &gt; &quot;Add a New App&quot;. Making the settings, see screenshot.</li>
<p><figure class="img-polaroid"><img src="http://joomline.org/images/addfacebookappnewen.png" alt="" /></figure></p>
<li>In the &quot;Product Setup&quot; &gt; Facebook Login &gt; click &quot;Get Started&quot;.</li>
<figure class="img-polaroid"><img src="http://joomline.org/images/addfacebookappnewen2.png" alt="" /></figure></p>
<li>Specify site http://<strong>site.ru</strong> format. Click &quot;Save Changes&quot;.</li>
<p><figure class="img-polaroid"><img src="http://joomline.org/images/addfacebookappnewen3.png" alt="" /></figure></p>

  <li>Go to the &quot;App Review&quot; section. In the &quot;Make public?&quot;, Select &quot;YES&quot;.</li>
  <li>Go to the section &quot;Dashboard&quot; and copy settings client_id [App ID] and secret_key [App Secret] in Slogin Facebook plugin.</li>
</ol>
<p>&nbsp;</p>
<div class="alert alert-warning">
  <p>
  <strong>Attention! </strong></p>
  <p align="justify">For administrator authorization application will display a   message prompting you to pass moderation, do not necessarily will not   be displayed to your visitors such posts as the rights that we ask   Facebook does not require mandatory moderation.</p>
</div>
<h5>Twitter</h5>
<p align="justify">Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;    plug-in &quot;<strong>Social Login Twitter auth</strong>&quot;.</p>
<ol class="marked-list">
<li>Go <a href="https://apps.twitter.com/app/new" target="_blank">here</a> and create new application.</li>
  <li>
    <div align="justify">Fill only required fields and save it. On the next page click &quot;<strong>Create   my access token</strong>&quot; button and put <strong>Callback URL</strong> -   http:/<strong>/mysite</strong>.com/component/slogin/callback/twitter or   /?option=com_slogin%26task=check%26plugin=twitter [if you are not using   SEF URLs Joomla], correct the link to see the Twitter plugin field   &quot;callback URL&quot; as Callback URL. Now take <strong>Consumer Key </strong>[API key]  and   <strong>Consumer Secret </strong>[<span class="heading">API secret</span>] and enter them in corresponding fields in component settings. Save settings and enable Twitter login.</div>
  </li></ol>

<p><figure class="img-polaroid"><img src="http://joomline.org/images/oauth_twitter1.jpg" alt="" /></figure></p>
<figure class="img-polaroid"><img src="http://joomline.org/images/QIP_Shot_-_Screen_408_01.07.14.png" alt="" /></figure>


<h5>Odnoclassniki</h5>
<p align="justify">Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;    plugin &quot;<strong>Social Login Odnoclassniki auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Go <a href="http://dev.odnoklassniki.ru/wiki/pages/viewpage.action?pageId=5668937" target="_blank">here</a> and register as a developer. </li>
  <li>
    <div align="justify">Wait untill you request is approved, go <a href="http://dev.odnoklassniki.ru/wiki/pages/viewpage.action?pageId=13992188" target="_blank">here</a>, fill the <strong>OAuth access</strong> form and wait again for approval email. Now go to your main <a href="http://www.odnoklassniki.ru" target="_blank">Odnoklassniki Account</a> &gt; Games  &gt; My Downloaded &gt; Add New Application, choose   Outside Odnoklassniki &gt; Oauth Authorization and fill the form   completely [including image links!]. You'll receve email shortly. Get<strong> Application ID</strong>, <strong>Public Key</strong> and<strong> Secret Key</strong> from it and enter them in   corresponding fields in component settings. Save settings and enable   Odnoclassniki login.</div>
  </li>
</ol>
</ul>
<figure class="img-polaroid"><img src="http://joomline.org/images/oauth_ok1.jpg" alt="" /></figure>
<h5>Mail.ru</h5>
<p align="justify">Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt; plugin &quot;<strong>Social Login mail auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Go <a href="http://api.mail.ru/sites/my/add" target="_blank">here</a> and create new application. Enter name and site address and click   &quot;Continue&quot;. On the next page download receiver.html file, put it to yoursite.com/receiver.html and click Continue. Now get Application ID, Private Key and Secret Key and enter them in corresponding fields in component settings. Save   settings and enable Mail.ru login.</li>
</ol>
<p><figure class="img-polaroid"><img src="http://joomline.org/images/oauth_mailru2.jpg" alt="" /></figure></p>
<h5>Yandex</h5>
<p>Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;  group of   plug-ins &quot;slogin_auth&quot; =&gt; plugin &quot;<strong>Social Login Yandex auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Go <a href="https://oauth.yandex.ru/client/new" target="_blank" data-mce-hrefundefined="">here</a> and create new application.</li>

<p><figure class="img-polaroid"><img src="http://joomline.org/images/oauth_ya1.jpg" alt="" /></figure></p>
<li><p align="justify">We select &quot;Яндекс.Логин&quot;. We mark: Адрес электронной почты,  Дата рождения,  Имя пользователя, ФИО, пол. Callback URI: http://mysite.ru/?option=com_slogin&amp;task=plugins.check&amp;plugin=yandex.</p>
</li></ol>
<h5>LinkedIn</h5>
<p align="justify">Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;    plug-in &quot;<strong>Social Login LinkedIn   auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Go <a target="_blank" data-mce-hrefundefined="">here</a> and create <a href="https://www.linkedin.com/developer/apps">new </a>application. Click on &quot;Create Application&quot;.</li>

<p><figure class="img-polaroid"><img src="http://joomline.org/images/LinkedInnewapp.png" alt="" /></figure></p>
<li>Fill all fields marked by an asterisk. Click on &quot;Submit&quot;.</li>
<p><figure class="img-polaroid"><img src="http://joomline.org/images/LinkedInnewapp2.png" alt="" /></figure>
<li>Now get <strong>Client ID</strong> and <strong>Client secre</strong>t on the same   page and enter them in corresponding fields in plugin settings. Save   settings and enable Linledin plugin.</li></ol>
<h5>Live.com</h5>
<p align="justify">Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;  plugin &quot;<strong>Social Login Live.com auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Go <a target="_blank" data-mce-hrefundefined="">here</a> and create <a href="https://account.live.com/developers/applications/create?tou=1">new</a> application.</li>

<p><figure class="img-polaroid"><img src="http://joomline.ru/images/ScreenShot_298.png" alt="" /></figure></p>
<li><p align="justify">Callback URI:  http://mysite.ru. Save application. Now get <strong>Client ID</strong> and <strong>Client secret</strong> on the same   page and enter them in corresponding fields in plugin settings. Save   settings and enable Live.com plugin.</p></li></ol>

<h5>Yahoo</h5>
<p>Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;  plug-in &quot;Social Login Yahoo auth&quot;.</p>
<ol class="marked-list">
  <li>Go here and create <a href="https://developer.yahoo.com/apps/create">new</a> application.</li>

<p><figure class="img-polaroid"><a href="http://joomline.org/cache/joomlineruimagesyahoo-setpng_thumb_large700_0.png" style="background:none;" onclick="return hs.expand(this)" bgcolor="none"><img src="http://joomline.org/cache/joomlineruimagesyahoo-setpng_thumb_medium100_0.png" alt="" /></a></figure></p>
<li><p align="justify">Save application. Now get <strong>Application ID</strong>, <strong>Consumer Key</strong>, <strong>Consumer   Secret</strong> on the same page and enter them in corresponding fields in plugin   settings. Save settings and enable Yahoo plugin.</p></li></ol>

<h5>WordPress - настройка авторизации через сервисы WordPress</h5>
<p align="justify">Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;  plugin &quot;<strong>Social Login Wordpress auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Go here and create <a href="https://developer.wordpress.com/apps/new/" target="_blank">new</a> application.</li>
  <li>Callback URI: http://site.ru/?option=com_slogin&amp;task=check&amp;plugin=wordpress.</li>
<p><figure class="img-polaroid"><a href="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_433_220714png_thumb_large700_0.png" style="background:none;" onclick="return hs.expand(this)" bgcolor="none"><img src="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_433_220714png_thumb_medium100_0.png" alt="" /></a></figure></p>
<li><p>Copy Client ID field and Client Secret plug in the appropriate fields.</p></li></ol>
<p><figure class="img-polaroid"><a href="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_434_220714png_thumb_large700_0.png" style="background:none;" onclick="return hs.expand(this)" bgcolor="none"><img src="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_434_220714png_thumb_medium100_0.png" alt="" /></a></figure></p>

<h5>Instagram - настройка авторизации через сервисы Instagram</h5>
<p>Beforehand it is required to set up a plugin. Navigate to <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; group of plugins &quot;<strong>slogin_auth</strong>&quot; &gt;  plugin &quot;Social Login Instagram auth&quot;.</p>
<ol class="marked-list">
  <li>Go here and create <a href="http://instagram.com/developer/clients/register/" target="_blank">new</a> application.</li>
  <li>Callback URI: http://site.ru/?option=com_slogin&amp;task=check&amp;plugin=instagram.</li>
<p><figure class="img-polaroid"><a href="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_437_220714png_thumb_large700_0.png" style="background:none;" onclick="return hs.expand(this)" bgcolor="none"><img src="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_437_220714png_thumb_medium100_0.png" alt="" /></a></figure></p>
<li><p>Copy the data from the fields Client ID and Client Secret, paste the appropriate fields plugin.</p></li>
</ol>
<div class="alert alert-warning">
<p>This information was taken from the <a href="http://joomline.org/docs/slogin.html">joomline.org/docs</a> official documentation. </p></div>