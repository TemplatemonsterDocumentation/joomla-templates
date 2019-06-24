<h3>Custom Code Tab</h3>
<p>You can easily customize Helix Ultimate Framework with your own custom code, for example: CSS, JavaScript, Metatags, links and verification code by using the custom fields in that section of settings. Inserting custom code before your Joomla website’s </head> and/or </body> tags is a common requirement for a variety of scripts and services (e.g. Google Analytics).</p>

<h4>Before &lt; / head &gt;</h4>
<p>Any code you place here will appear in the < head > section of every page of your site. This feature is useful when you need to add verification code, extra Meta Tags, HTML Links Tags and other metadata. The head of an HTML document is the part that is not displayed in the web browser when the page is loaded.</p>

<pre><code><span><</span>link href="/templates/theme000/css/shop.css" rel="stylesheet" type="text/css" <span>/></span>
<span><</span>link href="/images/favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" <span>/></span>
<span><</span>meta name="google-site-verification" content="___" <span>/></span></code></pre>
<figure class="img-polaroid">
  <p><img src="img/helix-framework/custom-01.png" alt=""/></p>
</figure>

<h4>Before &lt; / body &gt;</h4>
<p>Any code you place here will appear at the bottom of the body section of all pages of your site. This feature is useful if you need to input a tracking code for a state counter such as Google Analytics or Clicky.</p>

<figure class="img-polaroid">
  <p><img src="img/helix-framework/custom-02.png" alt=""/></p>
</figure>

<h4>Custom CSS</h4>
<p>Using Custom CSS gives you the power to create your unique design and allow you customize the appearance of selected elements (colors, size etc.).  You can use custom CSS to add your styles (code tweaks) or overwrite default CSS from a template or extension. This option is useful for small design changes. <strong>This is only for CSS code</strong>, do not use HTML or PHP code here.</p>

<figure class="img-polaroid">
  <p><img src="img/helix-framework/custom-03.png" alt=""/></p>
</figure>

<p>For more extensive design changes (more than few lines of code) we suggest to use the custom.css file instead. By default custom.css file doesn’t exist, you have to create a new file inside /css folder of template. This is safe method, and allows you moves from template-to-template, and makes it easy to debug if something ever goes wrong.</p>

<figure class="img-polaroid">
  <p><img src="img/helix-framework/custom-04.png" alt=""/></p>
</figure>

<h4>Custom JavaScript</h4>
<p>Use this field to inject custom JavaScript to whole website. It loads your custom Javascript code after all other JavaScript files (except special hardcoded occasions), allowing you to be the last one who will affect your website.</p>

<figure class="img-polaroid">
  <p><img src="img/helix-framework/custom-05.png" alt=""/></p>
</figure>

<p>For longer custom JavaScript code we suggest to use the custom.js file instead. By default this file doesn’t exist, you have to create a new file inside /js folder of template.</p>

<figure class="img-polaroid">
  <p><img src="img/helix-framework/custom-06.png" alt=""/></p>
</figure>
