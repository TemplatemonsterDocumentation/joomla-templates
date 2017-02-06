<h3>Sample Data Installation</h3>

<p align="justify">Sample data are used to make your Joomla website look similar to our Live Demo. It contains sample articles, images, module settings, website settings, etc. </p>
<p align="justify">In case, you do not want to use sample images or any other sample content, please skip this step.</p>

<p>Sample Data installation can be achieved in two simple steps:</p>

<h4>Uploading sample images</h4>

<p align="justify">In order to upload sample images, please open the template package and go to "sources" folder. Here you will find "to_root_folder". It contains files that need be uploaded to the root directory of your Joomla engine. </p>
<p align="justify">In order to upload files to your server, please use File Manager of your Hosting cPanel. </p>

<h4>SQL file import</h4>

<p align="justify">The last and the most important step of installing Sample Data is SQL file importing.
    SQL file is the database dump file that contains all the Joomla website data. SQL file (dump.sql) can be imported with the help of database management tool (phpMyAdmin).
    The template SQL file "dump.sql" is in the "sources" folder. See the instruction below.</p>


<p align="justify" class="alert alert-danger">Please <b>DO NOT</b> import the SQL file (dump.sql) to the database if you have a live website as it will completely replace your database contents, and all your website data will be lost.</p>

<p align="justify" class="alert alert-danger">Please note: before the SQL file (dump.sql) import, please make sure that your database table prefix matches the table prefix. Check this information in the SQL file.</p>

<p align="justify">You can check the table prefix directly in the database with the help of a database management tool. Please pay attention to table names. Prefix is a set of symbols before the table names (<i>for instance, in the table "jos_assets" the prefix is "jos_"</i>).
    You can also find out the table prefix in the "configuration.php" file in the website root folder.
    Line 19: </p><code>public $dbprefix = 'jos_';</code> <p>(<i>where the prefix is "jos_"</i>).
</p>

<p align="justify">If the table prefix differ, please open the "dump.sql" file in any code editor. With the help of 
&quot;Find and replace&quot; button (or CTRL+F) replace the table prefix "jos_" (<i>it’s used in the SQL
file</i>) with your database prefix (the prefix you've set, when installing the Joomla engine). </p>
<p align="justify">You can also check the detailed video-tutorial that will show you <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">How to change database prefix in the SQL file</a>.
</p>

<h6><br>
In order to import sample content (dump.sql ) to the database, please follow the next steps (please check out the slides below):</h6>

<ol class="index-list">
  <li><p>Select your database from the database list in the left column in the phpMyAdmin tool:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
  </li>
    <li><p>Click the "Import" button in the top navigation menu:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Click "Choose file" and browse for the dump.sql file in the template package "sources" directory:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Press "Go" to start importing sample data:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">You can also check the detailed video-tutorial on <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file.html"
        target="_blank">how to import SQL file using phpMyAdmin tool</a>.
</p>
