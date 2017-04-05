<h3>GoogleMap Plugin</h3>

<p><strong>GoogleMap</strong> is a plugin that allows you to display Google map on your website:</p>

<figure class="img-polaroid">
  <img src="img/googlemap-1.jpg" alt="">
</figure>

<p align="justify">To customize the plugin go to <strong>Extensions &gt; Plugins</strong> section. This will bring you to the <strong>Plugins Manager</strong>. Type &quot;Google&quot; into the search field and click the <strong>System - Google Maps</strong> title link.</p>
<figure class="img-polaroid">
  <img src="img/googlemap-3.jpg" alt="">
</figure>
<p>This will take you to the main configuration page of the GoogleMap plugin. Feel free to check more details at the <a
    href="http://tech.reumer.net/Google-Maps/Documentation-of-plugin-Googlemap/"
    target="_blank" rel="nofollow">official website</a>.</p>
<p>
 <figure class="img-polaroid">
  <img src="img/googlemap-2.jpg" alt="">
 </figure>
</p>
<p>Let's review the configuration options:</p>
<table width="980" class="options-table">
 <tr>
    <td width="154" class="col-1"><strong>Published</strong></td>
    <td width="29">-</td>
    <td width="781">If not all the maps will disappear.</td>
 </tr>
  <tr>
    <td class="col-1"><div align="justify"><strong>Debug?</strong></div></td>
    <td>-</td>
    <td><div align="justify">If the map shows debug messages [as comments] in the html-page. The comments can be shown by looking at the page source.</div></td>
  </tr> <tr>
    <td class="col-1"><strong>Plugin code</strong></td>
    <td>-</td>
    <td>The code which is used to be placed in the article between {} to trigger plugin. Default is mosmap.</td>
  </tr>
  <tr>
    <td class="col-1"><strong>Brackets</strong></td>
    <td>-</td>
    <td><div align="justify">What brackets should be used around the plugin code: {} [default with [] for multiple kml], [] [with () for multiple kml] or both.</div></td>
  </tr>
  
  <tr>
    <td class="col-1"><strong>Google API version </strong></td>
    <td>-</td>
    <td><div align="justify">The version of the Google API that has to be used [3.exp latest developed version, 3.number for specific version and 3 for stable version (default)].</div></td>
  </tr>
  <tr>
  <td class="col-1"><strong>Visual Refresh</strong></td>
    <td>-</td>
    <td>Show new refreshed tiles in Google Maps.</td>
  </tr>
    <td class="col-1"><strong>Signed In</strong></td>
    <td>-</td>
    <td> The visitor is recognized as a Google user and they will see the map customized by Google.</td>
  </tr><td class="col-1"><div align="justify"><strong>Show map?</strong></div></td>
    <td>-</td>
    <td>Show the map or hide it. Can be used to only show a lightbox link or streetview, or directions on a page.</td>
  </tr>  <td class="col-1"><strong>Print button</strong></td>
    <td>-</td>
    <td><div align="justify">Show a print button or link to print a map, streetview and its direction [none (default), icon, text, both or your own text/image as link].</div></td>
  </tr> <td height="26" class="col-1"><strong>CSS Class name</strong></td>
   <td>-</td>
    <td>CSS class name for a map to use for styling of the map. Default is empty.</td>
  </tr>
  <tr>
    <td class="col-1"><strong>CSS for Map</strong></td>
    <td>-</td>
    <td><div align="justify">CSS definition for the plugin to show the map and its related object correct. If Map class is changed then also change the class in the css.</div></td>
  </tr>
   <td class="col-1"><strong>Load with mootools?</strong></td>
    <td>-</td>
    <td>If mootools [default] should be used to load the map or a timeinterval.</td>
  </tr><td class="col-1"><strong>Timeinterval</strong></td>
    <td>-</td>
    <td><div align="justify">To show the map a timeinterval in ms is done to wait for the page is loaded correctly [default 500ms]. Especially for IE this can prevent a fatal error.</div></td>
  </tr><td class="col-1"><strong>Googlemaps API Key</strong></td>
    <td>-</td>
    <td>Google API key for Google Maps 3 for Usage and billing.</td>
  </tr> <td class="col-1"><div align="justify">
    <p><strong>Googlemaps Multi </strong><strong>API Key</strong></p>
</div></td>
    <td>-</td>
    <td><div align="justify">The optional Google API key[s] for Google Maps version 3 for Usage and billing. With multi you can add  multi domains for your site and behind it the key. The next domain goes on a new line.</div></td>
  </tr>
  <td class="col-1"><strong>URL variable</strong></td>
    <td>-</td>
    <td>Use HTTP_HOST [default] or Joomla setting.</td>
  </tr> <td class="col-1"><strong>Google website</strong></td>
    <td>-</td>
    <td>What Google website should be used for geocoding and directions.</td>
  </tr><td class="col-1"><strong>Styled Map</strong></td>
    <td>-</td>
    <td><p>The JSON string to style the map; you can change your Map style. Check the more styles <a
    href="https://snazzymaps.com/"
    target="_blank" rel="nofollow">here</a>.</p>
      <div class="alert alert-info"><p>Copy the code and paste it into the <strong>Styled Map</strong> option field:</p>
       <p>
        <figure class="img-polaroid">
         <img src="img/map.jpg" alt="">
        </figure>
       </p>
     </div><p></p></td>
  </tr><td class="col-1"><strong>Align</strong></td>
    <td>-</td>
    <td> How the map should be aligned within the content [parent html object].</td>
  </tr><td class="col-1"><strong>Language option</strong></td>
    <td>-</td>
    <td><div align="justify">If the language of maps [buttons, tooltips] should be determined by: site — language of site; user — so browser language/location.</div></td>
  </tr><td class="col-1"><strong>Language</strong></td>
    <td>-</td>
    <td>When language is determined by config then set language here.</td>
  </tr><td class="col-1"><strong>Width</strong></td>
    <td>-</td>
    <td>Width of the map. You must put the units behind the number like 100% or 400px.</td>
  </tr><td class="col-1"><strong>Height</strong></td>
    <td>-</td>
    <td>Height of the map. You must put the units behind the number like 100% or 400px.</td>
  </tr><td class="col-1"><strong>Effect on Map</strong></td>
    <td>-</td>
    <td>What effect has to be used on the Map [Horizontal uses absolute width!].</td>
  </tr>
</table>