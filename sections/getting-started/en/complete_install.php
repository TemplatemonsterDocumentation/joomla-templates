<h3>Complete installation</h3>
<p class="alert alert-info custom">If you don't want to spend your time installing the template, don't hesitate to <span class="label label-warning opener" onclick="showChat()">order</span> installation service using our live-chat.</p>
<p align="justify">If you don’t have a Joomla website and want to install Joomla from scratch, this guide is for you. </p>

<p align="justify">This method lets you install <strong>Joomla CMS engine</strong>, <strong>Joomla template</strong>,<strong> sample data</strong> and all the necessary <strong>extensions</strong>.</p>

<!-- Creating database -->

<h3>Creating a database</h3>

<p align="justify">Once you've completed uploading the files to a hosting-server, you should prepare an empty database for your Joomla website. It should be created with the help of the database management tool in Hosting CPanel
 [<i>the PhpMyAdmin</i> typically].
</p>

<h6> Follow the simple instructions to create a new database through the phpMyAdmin [check the slides below]:</h6>

<ol class="index-list">
<li>In order to access  the list of databases, press the “Database” button in the top navigation menu.</li>

    <li>Input the database name in the "Create new database" field. </li>

    <li>Press the “Create” button.</li>
</ol>

<p>You will see the new database in the listing. Click on the database name link in order to get access to the one.</p>
<p>Check the instruction accompanied by the illustrations [click on switches to move on]:</p>

<div class="owl-carousel">
<div class="item">
        <p>1. Open the “Database” tab in order to access the database listing:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Enter the database name:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Press the “Create” button:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. You will see the database in the list. Click on the database name link to access the one:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">Check out the video-tutorial:
    <a href="/help/how-to-create-a-database.html" target="_blank">How to create a database</a>.
</p>

<p>Should there be any  issues when database creating, please contact your hosting provider to assist.</p>

<!-- Uploading files -->

<h3>Uploading and Unzipping</h3>

<p align="justify"> To start working with Joomla, you  need  to upload files to your hosting server first. This can be accomplished  either by your Hosting CPanel File Manager or  FTP-client.</p>
<p align="justify">Follow the simple instruction:</p>

<ol class="index-list">
<li>Open the template and access to 'joomla' folder.</li>

    <li>Select the  'unzip.php' and 'fullpackage.zip' files and upload them to your server [for more information check <a href="/help/how-upload-files-server-2.html" target="_blank">How to upload files to the server</a>].
    </li>
    <li>
      <div align="justify">Enter the pass to 'unzip.php' file on the server [<i class="muted">http://your_domain_name/unzip.php</i>] in the  address bar<abbr
            title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari, etc."></abbr>.
      </div>
  </li>

    <li>
    <p>You will see the following window:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>
    </li>
    <li>In the field 'Choose your zip file’ select the uploadedfullpackage.zip file . </li>

    <li>In the field 'Unzip to’ choose the folder to unzip files. </li>

    <li>Press the 'Unzip’ button to unzip files.</li>
</ol>

<p align="justify" class="alert alert-info">Make sure you've set the correct  permissions type for the unzipping files folder. The permissions should be CHMOD 755 or 777, depending on the sever configuration.</p>


<!-- Joomla CMS installation -->


<h3>Joomla CMS Installation</h3>

<h6>Please, complete all the preparation steps and install all the necessary software.</h6>

<p align="justify">Open your browser and enter the path to Joomla folder in the browser address bar [<i>for example, http://your_domain_name/joomla</i>]. You will see the Joomla CMS Installation window.</p>
<h4>Website configuration</h4>

<p>In the “Select Language” dropdown menu , select the language of your Joomla installation-master.</p>

<p>
    <span class="label">Attention:</span>
    in the “Select Language” dropdown menu  you have an option choose  the language of the Joomla installation process only. You not select your website language.</p>

<p align="justify">Fill in all the form fields of the “Main Configuration” section. Be sure to complete all fields that are marked with an asterisk [ mandatory field].</p>

<p align="justify">Please fill in the fields: &quot;Admin Email&quot;, &quot;Admin Username&quot; and &quot;Admin Password&quot; in the right column in order to create a new Joomla website user with admin rights.</p>

<p align="justify" class="alert alert-danger">&quot;Admin Email&quot;, &quot;Admin Username&quot; and &quot;Admin  Password&quot; each, is necessary for accessing Joomla website admin panel. Please  keep the data confidential.</p>

<p>Once you've entered all the data, press the 
    <strong>Next</strong> button in the upper right corner:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>Database configuration</h4>


<p> Then you need to input your database details. Please, contact your hosting provider to  get the correct details.</p>

<p align="justify">  Installing Joomla from scratch, you should just enter "Host Name", "Username", "Database Name" and "Password". You can normally leave other options set to Default. However, there can be some differences depending on your hosting provider. </p>

<p>Once you've entered all  the details, press the 
    <strong>Install</strong> button:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<h4>Overview</h4>

<p align="justify">Joomla CMS installation is almost complete now. At the “Overview” stage you need to select, whether you want to install Joomla Sample data or not.</p>

<p align="justify" class="alert alert-warning">Attention: Sample Data are necessary to make your website  similar to the template Live Demo: with all the sample images, texts and saved module settings. To import sample data, please choose Sample Data with the title "sample_theme###", where ### is the theme number.</p>

<p align="justify">Please select sample data in case you want to install them or press "None", if you no  sample data to be on your Joomla website:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p>You can check, whether the database configuration and admin panel access details are valid, and  e-mail it:</p>

<p>
  <figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
  </figure>
</p>
<p align="justify"> You can verify your hosting server conformity with the Joomla requirement and check your installation settings once again. Should warning  notification boxes are displayed on the "Recommended settings" section,  please contact your hosting provider for further assistance:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<p> Click the
    <strong>Install</strong>
    button  to proceed.
</p>

<h4>Installation Complete</h4>


<p> Congratulations! You have successfully installed Joomla CMS.</p>
<p>As you see, it is not that complicated.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p class="alert alert-danger"> To enhance security level, please delete the "Installation" folder from your Joomla root directory.</p>

<p class="alert alert-info">Tip:
    You can check the detailed video tutorial on <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">How to install Joomla 3 engine</a>.</p>

<p align="justify" class="alert alert-warning">Please note: In case you have performed the Complete installation, you can skip the  "Template Installation", "Sample Data Installation" and "Extensions Installation" sections as you have all these elements already installed.</p>


<p align="justify">Now you are ready to proceed to your Joomla CMS based website configuring. Click the “<b>Site</b>” button, in order to open your website or press
 “<b>Administrator</b>" to access your Joomla admin panel.
</p>
