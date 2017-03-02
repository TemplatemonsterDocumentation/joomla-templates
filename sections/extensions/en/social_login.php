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
