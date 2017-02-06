<h3>Configuring modules</h3>
<h6>Joomla website layout is divided into two main parts - content section and module positions (check the module positions map below for more details). Modules in Joomla are used to output content into prepared positions.</h6>
<h5>Module positions map</h5>

<p>Available module positions can vary accotding to the template. The general module positions map can be found below:</p>

<p align="justify">As you can see, the content area is marked with a green color, since you cannot display modules in this area by default. It displays only the page content.  </p>

<p>If no modules are assigned to the position the one is disabled:</p>

<figure class="img-polaroid"><img src="img/j3-modules-positions.jpg" alt=""></figure>

<h5>Modules Configuration Table</h5>

<p align="justify" class="alert alert-warning">Please note: If you installed the template sample data or used the Complete installation method, you can skip the following step as it is related to manual modules configuration.</p>

<p align="justify">The table below lists all the modules used in this template and shows how to configure them correctly. All the modules can be accessed through Joomla admin panel from the <b>Extensions > Modules</b> tab:</p>
<figure class="img-polaroid"><img src="img/modules-config-1.png" alt=""></figure>

<div class="table">
    <div class="container">
        <div class="row">
            <div class="grid_3">
                <h5>Module Name</h5>
            </div>
            <div class="grid_8">
                <h5>Settings</h5>
            </div>
        </div>
        <div class='row'>
            <div class='grid_4'><b>1 - Follow us</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> copyright-top</li>
				<li><strong>Class Suffix:</strong>  copyright-social</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 3</li>				
			</ul>
            </div>
            <div class='grid_4'>
               	<ul>
				<li><strong>Pages:</strong> -Home Landing Page</li>
				
			</ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>2 - Search</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_search</li>
				<li><strong>Position:</strong> 404-search</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All&nbsp;</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>3 - Contact form</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_tm_ajax_contact_form</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><strong>Pages:</strong> Contacts</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>4 - Detailed</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong> pricing_detailed</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 15</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b>Pricing</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>5 - Our Latest Works</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Class Suffix:</strong> works</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b>Home<br/>
                    </li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'>User Menu</div>

            <div class='grid_4'>
                <ul>
                    <li><b>Type:</b> mod_menu</li>
                    <li><b>Position:</b> header</li>
                    <li><b>Show Title:</b> no</li>
                    <li><b>Order:</b> 1</li>
                </ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>6 - Simple</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong> pricing_simple</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 23</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Pricing</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>7 - Main menu</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_icemegamenu</li>
				<li><strong>Position:</strong> top</li>
				<li><strong>Class Suffix:</strong> home_menu</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><strong>Pages:</strong> -Home Landing Page<br />-Shop</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>8 - latest from the blog</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom-5</li>
				<li><strong>Class Suffix:</strong> blog</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>9 - Contact map</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_custom</li>
				<li><strong>Position:</strong> map</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Contacts                  &nbsp;</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>10 - Counters</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong> counters</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 21</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Elements</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>11 - Progress Bars Vertical</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong> progbars_circle</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 20</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Elements</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>12 - Accordion 1</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong> custom</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 5</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Elements</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>13 - Testimonials</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong> testimonials_2</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 16</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Testimonials</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>14 - Our team</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom-4</li>
				<li><strong>Class Suffix:</strong> team_about center</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> About</li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>15 - Categories</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_articles_categories</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Class Suffix:</strong>  no_padding</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All<br/>
                  </li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>16 - What we offer</b></div>

            <div class='grid_4'>
                <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Class Suffix:</strong> list1</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 2</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All<br/>
                    </li>
                </ul>
            </div>
        </div>

        <div class='row'>
            <div class='grid_4'><b>17 - Careers accordion</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> careers-accordion-1</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div>
    <div class='row'>
            <div class='grid_4'><b>18 - Apply now</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_tm_ajax_contact_form</li>
				<li><strong>Position:</strong> aside-right</li>
				<li><strong>Class Suffix:</strong> careers_form</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Careers</li>
                </ul>
            </div>
      </div><div class='row'>
            <div class='grid_4'><b>19 - Requirements</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> careers-accordion-requirements</li>
				<li><strong>Class Suffix:</strong>  requirements</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>20 - What we Expect from you?</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> careers-accordion-expect</li>
				<li><strong>Class Suffix:</strong>  expect</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>21 - Careers accordion</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> careers-accordion-2</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>22 - Careers accordion</b></div>

            <div class='grid_4'>
             <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> careers-accordion-3</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>23 - Careers accordion</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> careers-accordion-4</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>24 - Pages</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong> site_map</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 10</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Site map</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>25 - Blog posts</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_category</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong>  site_map</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 12</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Site map</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>26 - Portfolio posts</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_category</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong>  site_map</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 14</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Site map</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>27 - User menu</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong> site_map</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 13</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Site map</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>28 - Breadcrumbs</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_breadcrumbs</li>
				<li><strong>Position:</strong> breadcrumbs</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                   <li><strong>Pages:</strong> -Home Landing Page<br />-Shop<br />-Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>29 - Our team</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong> team_about center</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 11</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Our team</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>30 - Frequently Asked Questions Type 1</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Class Suffix:</strong> custom faqs_block1</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 9</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> FAQs</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>31 - What we do</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Class Suffix:</strong> list1</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>32 - About</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Class Suffix:</strong> menu_about</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>33 - Packages</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Class Suffix:</strong> pricing pricing_simple</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>34 - TM Ajax Style Switcher</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_tm_style_switcher</li>
				<li><strong>Position:</strong> fixed-sidebar-left</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>35 - Olark</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_tm_olark_chat</li>
				<li><strong>Position:</strong> fixed-sidebar-right</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>36 - Newsletter</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_acymailing</li>
				<li><strong>Position:</strong> copyright-top</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 2</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> -Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>37 - Tabs</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_bootstraptabs</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 2</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Elements</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>38 - Accordion 2</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 4</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Elements</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>39 - Progress Bars Horizontal</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 19</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Elements</li>
                </ul>
            </div>
        </div>
        <div class='row'>
            <div class='grid_4'><b>40 - Table</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 6</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Elements</li>
                </ul>
            </div>
        </div>
          <div class='row'>
            <div class='grid_4'><b>41 - Pricing</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 7</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Elements</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><span class="col-sm-3"><b>42 - Simple</b></span></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 8</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Elements</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>43 - Accordions and Toggles</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_custom</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 3</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Elements</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>44 - Progress Bars</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_custom</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 17</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Elements</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>45 - Menu search</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_finder</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 0</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>46 - Menu search</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_search</li>
				<li><strong>Position:</strong> megamenu</li>

				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>47 - Login or register</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_socialloginandsocialshare</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>48 - Login or register</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_socialloginandsocialshare</li>
				<li><strong>Position:</strong> modal</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>49 - Skills</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> content-bottom</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 18</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Our team</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>50 - Home youtube</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_tm_bg_youtube</li>
				<li><strong>Position:</strong> maintop</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 2</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>51 - Home slider</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_swiper</li>
				<li><strong>Position:</strong> header</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>52 - let's get started</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> copyright-top</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                   <li><strong>Pages:</strong> -Home Landing Page<br />-Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>53 - Home parallax</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_tm_parallax</li>
				<li><strong>Position:</strong> showcase</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>54 - Home parallax article</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>55 - What we offer</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> navigation</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>56 - twitter Timeline</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_sw_twitterdisplay</li>
				<li><strong>Position:</strong> mainbottom-2</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 3</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Contacts</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>57 - Facebook Box</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_tm_facebook_page_plugin</li>
				<li><strong>Position:</strong> mainbottom-2</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 4</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Contacts</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>58 - Pinterest Profile Widget</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_sw_pinterestdisplay</li>
				<li><strong>Position:</strong> mainbottom-2</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 5</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Contacts</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>59 - Contact parallax</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_tm_parallax</li>
				<li><strong>Position:</strong> mainbottom</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Contacts</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>60 - What We Do - Top</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> maintop</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>61 - What We Do - Bottom</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> maintop</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 3</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>62 - How we work</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>63 - Home parallax 2</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_tm_parallax</li>
				<li><strong>Position:</strong> mainbottom</li>
				<li><strong>Class Suffix:</strong> </li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>64 - Flexible Pricing</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> mainbottom-2</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>65 - testimonials</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_owl_carousel</li>
				<li><strong>Position:</strong> mainbottom-3</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 6</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>66 - Get to know us better</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> showcase</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> About</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><span class="col-sm-3"><b>67 - About parallax</b></span></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_tm_parallax</li>
				<li><strong>Position:</strong> mainbottom</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> About</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>68 - About counters</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>About</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>69 - Template Features</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> mainbottom-2</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> About</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>70 - how we work</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> mainbottom-2</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>About</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>71 - our history</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> mainbottom-3</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 7</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> About</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>72 - Latest news</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom-5</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> About</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>73 - VM - Currencies Selector</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_virtuemart_currencies</li>
				<li><strong>Position:</strong> position-4</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 5</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>74 - VM - Featured products</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_virtuemart_product</li>
				<li><strong>Position:</strong> position-4</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 3</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>75 - VM - Search in Shop</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_virtuemart_search</li>
				<li><strong>Position:</strong> position-4</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 2</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>76 - VM - Manufacturer</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_virtuemart_manufacturer</li>
				<li><strong>Position:</strong> position-4</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 8</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>77 - VM - Shopping cart</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_virtuemart_cart</li>
				<li><strong>Position:</strong> position-4</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 0</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>78 - VM - Category</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_virtuemart_category</li>
				<li><strong>Position:</strong> position-4</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 4</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>79 - Cart</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_virtuemart_cart_tm</li>
				<li><strong>Position:</strong> top</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>80 - Search</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_search</li>
				<li><strong>Position:</strong> aside-right</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 2</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><strong>Pages:</strong> Blog Sidebar<br />Blog single Version 2</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>81 - Currency</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_virtuemart_currencies</li>
				<li><strong>Position:</strong> sup-top</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 5</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>82 - Wish list</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> sup-top</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 4</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>83 - Categories</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_categories</li>
				<li><strong>Position:</strong> aside-right</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 3</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><strong>Pages:</strong> Blog Sidebar<br />Blog single Version 2</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>84 - Popular tags</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_tags_popular</li>
				<li><strong>Position:</strong> aside-right</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 6</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><strong>Pages:</strong> Blog Sidebar<br />Blog single Version 2<br />Blog single Two sidebars</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>85 - Recent post</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> aside-right</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 5</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><strong>Pages:</strong> Blog Sidebar<br />Blog single Version 2<br />Blog single Two sidebars</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>86 - User menu</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> sup-top</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 3</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>87 - Shop top phone</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> sup-top</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 2</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>88 - Landing top subscribe</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_acymailing</li>
				<li><strong>Position:</strong> header</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><strong>Pages:</strong> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>89 - Feature-rich landing page template designed</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> showcase</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>90 - Landing feature</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> feature</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul></div>
        </div><div class='row'>
            <div class='grid_4'><b>91 - Description with video</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_tm_bg_youtube</li>
				<li><strong>Position:</strong> mainbottom</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>92 - Get to know more about business</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom-2</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>93 - Asked questions</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> mainbottom-3</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>94 - Asked questions 2</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> mainbottom-3</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 4</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>95 - Landing pricing</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom-4</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 2</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>96 - Landing contact form</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_tm_parallax</li>
				<li><strong>Position:</strong> mainbottom-5</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>97 - Contact info</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_custom</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>98 - Contact form</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_tm_ajax_contact_form</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>99 - Landing contact address</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>100 - Landing contact phones</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 0</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>101 - Landing contact email</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 0</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>102 - Landing contact social</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Home Landing Page</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>103 - Shop slider</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_swiper</li>
				<li><strong>Position:</strong> header</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>104 - Search</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_virtuemart_search</li>
				<li><strong>Position:</strong> top</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 2</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>105 - Shop Main menu</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_icemegamenu</li>
				<li><strong>Position:</strong> top</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>106 - Best Sellers</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_virtuemart_product_tm</li>
				<li><strong>Position:</strong> mainbottom-2</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>107 - Shop top articles</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>108 - Shop list</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> mainbottom-3</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 5</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>109 - Shop bottom article</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> mainbottom-3</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 2</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>110 - Shop bottom articles</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom-4</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 3</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>111 - My account</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> copyright-top</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Shop</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>112 - Our services</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> showcase</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Services</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>113 - Featured service package</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> feature</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Services</li>
                </ul></div>
        </div><div class='row'>
            <div class='grid_4'><b>114 - Solutions</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Services</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>115 - Services parallax</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_tm_parallax</li>
				<li><strong>Position:</strong> mainbottom</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Services</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>116 - How we work</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom-2</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Services</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>117 - Work process</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Process</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>118 - Work process</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom-3</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Process</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>119 - How we work</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_single</li>
				<li><strong>Position:</strong> mainbottom-4</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 4</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Process</li>
                </ul></div>
        </div><div class='row'>
            <div class='grid_4'><b>120 - Support 24/7 page</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> feature</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Support</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>121 - Middle block</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages: </b>Support</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>122 - Contact info 1</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> mainbottom-4</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 6</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Support</li>
                </ul></div>
        </div><div class='row'>
            <div class='grid_4'><b>123 - Multimedia</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_virtuemart_category</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>124 - Contact info 2</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> mainbottom-4</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 7</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Support</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>125 - Contact info 3</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_menu</li>
				<li><strong>Position:</strong> mainbottom-4</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 8</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Support</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>126 - Contact us</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_custom</li>
				<li><strong>Position:</strong> mainbottom-4</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 5</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Support</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>127 - Electronic  Components</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_virtuemart_category</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>128 - Computing &amp; home office</b></div>

            <div class='grid_4'>
              <ul>
				<li><strong>Type:</strong> mod_virtuemart_category</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>129 - Shop banner</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_banners</li>
				<li><strong>Position:</strong> megamenu</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>130 - Page Loader</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_custom</li>
				<li><strong>Position:</strong> page-loader</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> All</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>131 - Search</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_search</li>
				<li><strong>Position:</strong> aside-left</li>
				<li><strong>Show Title:</strong> no</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><strong>Pages:</strong> Blog single Two sidebars</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>132 - Categories</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_categories</li>
				<li><strong>Position:</strong> aside-left</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> Blog single Two sidebars</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>133 - Frequently Asked Questions Type 2</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_bootstrap_collapse</li>
				<li><strong>Position:</strong> mainbottom-2</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> FAQs</li>
                </ul>
            </div>
        </div><div class='row'>
            <div class='grid_4'><b>134 - Frequently Asked Questions Type 3</b></div>

            <div class='grid_4'>
               <ul>
				<li><strong>Type:</strong> mod_articles_news_adv</li>
				<li><strong>Position:</strong> mainbottom-3</li>
				<li><strong>Show Title:</strong> yes</li>
				<li><strong>Order:</strong> 1</li>				
			</ul>
            </div>
            <div class='grid_4'>
                <ul>
                    <li><b>Pages:</b> FAQs</li>
                </ul>
            </div>
        </div>
       

     
</div>