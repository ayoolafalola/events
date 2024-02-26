<?php
/**
* PageCarton Page Generator
*
* LICENSE
*
* @category PageCarton
* @package /post-viewer-event
* @generated Ayoola_Page_Editor_Layout
* @copyright  Copyright (c) PageCarton. (http://www.PageCarton.com)
* @license    http://www.PageCarton.com/license.txt
* @version $Id: post-viewer-event.php	Friday 23rd of February 2024 10:42:18 AM	ayoola@ayoo.la $ 
*/
//	Page Include Content

							
$_ba00c417392f313d085c334b01d34745 = null;

							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Image' ) )
							{
								
$_ba00c417392f313d085c334b01d34745 = new Ayoola_Page_Editor_Image( array (
  'editable' => '<p><img alt="Image" src="{{{document_url_uri}}}" title="Double-click this picture to change it."></p>
',
  'preserved_content' => '<p><img alt="Image" src="{{{document_url_uri}}}" title="Double-click this picture to change it."></p>
',
  'url_prefix' => '/events',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
  ),
  'pagewidget_id' => '',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
  ),
  'includes' => 
  array (
  ),
  'content' => '<p><img alt="Image" src="{{{document_url_uri}}}" title="Double-click this picture to change it."></p>
',
) );

							}
							
							
$_b2b60cf4e282e825565571169235ed74 = null;

							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_b2b60cf4e282e825565571169235ed74 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<h1>{{{article_title}}}</h1><div><br></div>

<p>{{{article_content}}}</p><p><span style="color: inherit;"><br></span></p><p><span style="color: inherit;">Starts: {{{article_date_d}}} {{{article_date_M}}}, {{{article_date_Y}}} {{{datetime_time}}}&nbsp;</span><span style="color: inherit;">({{{article_creation_date_filtered}}})</span></p><div>Ends: {{{event_end}}}</div><div><br></div><div><br></div><div>Venue: {{{address}}}</div>',
  'preserved_content' => '<h1>{{{article_title}}}</h1><div><br></div>

<p>{{{article_content}}}</p><p><span style="color: inherit;"><br></span></p><p><span style="color: inherit;">Starts: {{{article_date_d}}} {{{article_date_M}}}, {{{article_date_Y}}} {{{datetime_time}}}&nbsp;</span><span style="color: inherit;">({{{article_creation_date_filtered}}})</span></p><div>Ends: {{{event_end}}}</div><div><br></div><div><br></div><div>Venue: {{{address}}}</div>',
  'url_prefix' => '/events',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
    1 => 'wrappers',
    2 => 'parameters',
  ),
  'pagewidget_id' => '1559325389-0-29',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '1',
  ),
  'wrapper_name' => 'dark',
  'insert_id' => '1559325389-0-29',
  'use_datetime[0]' => '1',
  'includes' => 
  array (
  ),
  'content' => '<h1>{{{article_title}}}</h1><div><br></div>

<p>{{{article_content}}}</p><p><span style="color: inherit;"><br></span></p><p><span style="color: inherit;">Starts: {{{article_date_d}}} {{{article_date_M}}}, {{{article_date_Y}}} {{{datetime_time}}}&nbsp;</span><span style="color: inherit;">({{{article_creation_date_filtered}}})</span></p><div>Ends: {{{event_end}}}</div><div><br></div><div><br></div><div>Venue: {{{address}}}</div>',
) );

							}
							
							
$_f54fa8e8f94665b5170db9c91cc00b8a = null;

							if( Ayoola_Page::hasPriviledge( array (
  0 => '98',
  1 => '99',
), array( 'strict' => true ) ) )
							{
								if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
								{
									
$_f54fa8e8f94665b5170db9c91cc00b8a = new Ayoola_Page_Editor_Text( array (
  'editable' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/events/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/events/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
  'preserved_content' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/events/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/events/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
  'url_prefix' => '/events',
  'pagewidget_id' => '1559325389-0-30',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => 'Application_Article_View',
    1 => 'pc_give_space_top_bottom',
  ),
  'object_access_level' => 
  array (
    0 => '98',
    1 => '99',
  ),
  'wrapper_name' => 'well',
  'insert_id' => '1559325389-0-30',
  'object_class' => 'pc_give_space_top_bottom',
  'includes' => 
  array (
  ),
  'content' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/events/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/events/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
) );

								}
							}    
							
							
$_f6c2bfae36b95c212f171e148c0f17a6 = null;

							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_f6c2bfae36b95c212f171e148c0f17a6 = new Ayoola_Page_Editor_Text( array (
  'editable' => '
			
			<h3><br></h3><div><br></div>
			',
  'preserved_content' => '			
			<h3><br></h3><div><br></div>
			',
  'url_prefix' => '/events',
  'pagewidget_id' => '',
  'advanced_parameter_value' => 
  array (
  ),
  'includes' => 
  array (
  ),
  'content' => '
			
			<h3><br></h3><div><br></div>
			',
) );

							}
							
							
$_07aeba3f690e6326ffc951b549a3e44a = null;

							if( Ayoola_Loader::loadClass( 'Application_Slideshow_View' ) )
							{
								
$_07aeba3f690e6326ffc951b549a3e44a = new Application_Slideshow_View( array (
  'slideshow_name' => 'pc_page_images',
  'template_name' => 'NivoSlider',
  'widget_options' => 
  array (
    0 => 'wrappers',
  ),
  'pagewidget_id' => '1559325389-0-31',
  'wrapper_name' => '',
  'insert_id' => '1559325389-0-31',
  'advanced_parameter_value' => 
  array (
  ),
) );

							}
							
							
$_ec25c77f96077473238bd27a0724136c = null;

							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_ec25c77f96077473238bd27a0724136c = new Ayoola_Page_Editor_Text( array (
  'editable' => '<div class="container">
<h3>&nbsp;More {Organization Name} Events</h3>
</div>
',
  'preserved_content' => '<div class="container">
<h3>&nbsp;More {Organization Name} Events</h3>
</div>
',
  'url_prefix' => '/events',
  'widget_options' => 
  array (
    0 => 'wrappers',
  ),
  'pagewidget_id' => '1559325389-0-32',
  'wrapper_name' => 'well',
  'insert_id' => '1559325389-0-32',
  'advanced_parameter_value' => 
  array (
  ),
  'includes' => 
  array (
  ),
  'content' => '<div class="container">
<h3>&nbsp;More {Organization Name} Events</h3>
</div>
',
) );

							}
							
							
$_3ef7c7f3e1884a3e12bc40f1264ebf29 = null;

							if( Ayoola_Loader::loadClass( 'Application_Article_ShowAll' ) )
							{
								
$_3ef7c7f3e1884a3e12bc40f1264ebf29 = new Application_Article_ShowAll( array (
  'option' => '5',
  'category_name' => '',
  'article_types' => '',
  'template_name' => 'ProductsforSale',
  'widget_options' => 
  array (
    0 => 'parameters',
  ),
  'pagewidget_id' => '1559325389-0-33',
  'advanced_parameter_value' => 
  array (
    0 => '1',
    1 => 'container',
  ),
  'insert_id' => '1559325389-0-33',
  'post_with_same_true_post_type' => '1',
  'object_class' => 'container',
) );

							}
							