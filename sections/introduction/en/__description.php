<h2 class="item1">Introduction
</h2>
<h5 align="justify">Congratulations on your purchase of a Joomla template! This documentation consists of several parts and describes the installation, creating and setting up a Joomla website process. </h5>
<h5 align="justify">We did our best to make this manual information to be presented in a simple, straightforward manner. For ease of reference, the text the manual provides has been restructured in different chapters. You can see them in the left-side menu. You are able to navigate to any part of the documentation using the active content headers' links.</h5>
<h5 align="justify">We recommend that you start reading the documentation at the first section.</h5>
<h3>What is Joomla CMS?</h3>

<p align="justify">JJoomla CMS is an open-source solution for creating websites. Wide functionalities of the system allow you to build both websites and powerful online applications. Joomla CMS would not need any additional skills and training to be operated. All the necessary theory and basic required skills description can be found in this documentation.</p>
<p align="justify"> With these advantages, ease of use and its scalability, Joomla CMS became the most popular website software available. <a href="http://www.joomla.org/about-joomla.html" target="_blank">Learn More!</a> </p>
<h3>What is Joomla Template?</h3>
<p align="justify">Joomla Template is a theme for your website based on the Joomla CMS platform. In other words, you can easily change your Joomla website appearance by installing a new template. The whole installation process is carried out by a few easy to deal with steps. While simple, the Joomla template comes with all the necessary source files which you are free to edit. </p>
<div class="alert alert-info">
  <div align="justify">
    <p>There are often many different settings that are available with a new Template, and as this is an open-source software, it isn't always the same for each developer. Make sure to read through this documentation available for the Template that you are installing so that you know what features are available for you.</p>
  </div>
</div>

<h3>Template Structure</h3>

<h6>The theme package you have downloaded consists of several folders. Let's see what each folder contains:</h6>

<ul class="files_structure">
  <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Documentation</b></dt>
            <dd> contains documentation files;</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> this is the main documentation file you are reading at the moment;</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Joomla</b></dt>
            <dd> contains an archive with Joomla theme, quick install package and a file with unzip script;</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd>
                      <div align="justify"> a theme archive. Stored all the theme files. Should be installed <a href="#template-installation">with the help of Joomla extension manager</a>;</div>
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        fullpackage.zip
                    </dt>
                    <dd>
                      <div align="justify"> contains
                        <a href="#complete_install">
                           Complete Joomla installation package</a>
                        with engine files, themes and sample content [database dump file and sample images];</div>
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> the file which is used for unpacking the fullpackage.zip after uploading it to a hosting server;
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Screenshots</b>
            <dd> contains theme screenshots;</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Sources</b>
            <dd> contains theme sample content files;</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> template source files for Adobe Photoshop [.psd];</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd>
                      <div align="justify"> a folder with  sample data required to make the website  look identical to the  template Live Demo. The entire contents of the folder  should be uploaded to the Joomla root folder;</div>
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> database dump file. Contains theme sample data;
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> contains additional theme extensions;</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                fonts_info.txt
            </dt>
            <dd> contains links for downloading the theme fonts;</dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> a guide for unzipping sample content files.</dd>
        </dl>
    </li>
</ul>
