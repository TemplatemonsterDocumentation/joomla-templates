<h3>Complete installation</h3>

<p>If you don’t have a Joomla website and want to install it from scratch, this guide is for you. </p>

<p>This method lets you install Joomla CMS engine, Joomla template, sample data and all the necessary extensions.</p>

<!-- Creating database -->

<h3>Creating a database</h3>

<p>When you are done uploading files to hosting-server, you should prepare a new database for your Joomla website. It should be created with the help of the database management tool in Hosting CPanel
 (<i>as a rule, it is PhpMyAdmin</i>).
</p>

<h6>With the help of phpMyAdmin, you can create a new database in a 3 simple steps (please, check the following slides):</h6>

<ol class="index-list">
    <li>In order to access  the list of databases, press the “Database” button in the top navigation menu.</li>

    <li>Input the database name in the field "Create new database". </li>

    <li>Press the “Create” button on the right.</li>
</ol>

<p>You will see the database in the listing. Click on the database name in order to get access.</p>

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
        <p>4. You will see the database in the list. Click on the database name to access it:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">You can also check the video-tutorial:
    <a href="/help/how-to-create-a-database.html" target="_blank">How to create a database</a>.
</p>

<p>If you have any issues creating a database, contact your hosting provider for support.</p>

<!-- Uploading files -->

<h3>Uploading and Unzipping</h3>

<p>To start working with Joomla, should upload files to your hosting server. This can be done with the help of File Manager of your Hosting CPanel or with the help of your FTP client.</p>

<ol class="index-list">
    <li>Open the template and access 'joomla' folder.</li>

    <li>Select the files 'unzip.php' and 'fullpackage.zip' and upload them to your server (<a href="/help/how-upload-files-server-2.html" target="_blank">How to upload files to the server</a>).
    </li>
    <li>Enter the pass to 'unzip.php' file on the server (<i class="muted">http://your_domain_name/unzip.php</i>) in the template address bar <abbr
            title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari, etc."></abbr>.
    </li>

    <li>
        <p>You will see the following window:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>
    </li>
    <li>In the field 'Choose your zip file’ select the uploaded file fullpackage.zip. </li>

    <li>In the field 'Unzip to’ choose the folder to unzip files. </li>

    <li>Press the 'Unzip’ button to unzip files.</li>
</ol>

<p class="alert alert-info">Set the correct permissions for the folder, to which you will unzip files. The permissions should be CHMOD 755 and 777, depending on sever configuration.</p>


<!-- Joomla CMS installation -->


<h3>Joomla CMS Installation</h3>

<h6>Please make sure that you have completed all the preparation steps and installed all the necessary software.</h6>

<p>Open your browser and enter the path to Joomla folder in the browser address bar (<i>for example, http://your_domain_name/joomla</i>). You will see the Joomla CMS Installation window:
</p>


<h4>Website configuration</h4>

<p>In the dropdown menu “Select Language”, select the language of your Joomla installation.</p>

<p>
    <span class="label">Attention:</span>
    in the dropdown menu “Select Language” you can choose just the language of Joomla installation process. This setting will not apply to website language.</p>

<p>You should fill in all the form fields of the “Main Configuration” section. Required fields are marked with an asterisk (*) symbol.</p>

<p>Please fill in the fields: “Admin Email”, “Admin Username” and “Admin Password” in the right column in order to create a new Joomla website user with admin rights.</p>

<p class="alert alert-danger">”Admin Email”, “Admin Username” and “Admin  Password” are necessary for accessing Joomla website admin panel. Please save them in a secure place. </p>

<p>Having entered all the data, press the 
    <strong>Next</strong> button on the top right:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>Database configuration</h4>


<p> On the second step of Joomla CMS installation, you need to input your database details. If you are not sure, please contact your hosting provider to get the correct details.</p>

<p>As you’re installing Joomla from scratch, you should just enter "Host Name", "Username", "Database Name" and "Password". You can leave other options with default values. However, there can be some differences depending on your hosting provider. </p>

<p>Having entered the details, press the 
    <strong>Install</strong> button:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<h4>Overview</h4>

<p>Joomla CMS installation is almost complete now. At “Overview” stage you need to select, whether you want to install Joomla Sample data or not.</p>

<p class="alert alert-warning">Attention: Sample Data are necessary to make your website look exactly like the template Live Demo: with all the sample images, texts and module settings. To import sample data, please choose Sample Data with the title "sample_theme###", where ### is the theme number.</p>

<p>Please select sample data for installation or press "None", if you don’t want to install sample data for your Joomla website:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p>Below you can check, whether the database configuration and admin panel access details are valid, and send them to your e-mail:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p>Moreover, you can check your installation settings and check whether your hosting server matches Joomla requirements. If you have any red notification boxes in the "Recommended settings" section, please contact your hosting provider for further assistance:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<p> When you are done click the
    <strong>Install</strong>
    button in the top-right corner to proceed.
</p>

<h4>Installation Complete</h4>


<p> Congratulations! You have successfully installed Joomla CMS:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p class="alert alert-danger"> For security reasons, please delete the "Installation" directory from your Joomla root directory.</p>

<p class="alert alert-info">Hint:
    You can check the detailed video tutorial on <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">How to install Joomla 3 engine</a>
</p>

<p class="alert alert-warning">Please note: If you have performed the Complete installation, you can skip the next "Template Installation", "Sample Data Installation" and "Extensions Installation" sections as you have all these elements already installed.</p>


<p>Now you are ready to proceed to configuring your Joomla CMS based website. Click the “<b>Site</b>” button, in order to open your website or press
 “<b>Administrator</b>", in order to access your Joomla admin panel.
</p>
