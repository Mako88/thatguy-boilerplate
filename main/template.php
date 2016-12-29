<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Under Construction' />
<cms:embed 'header1.html' />

    <title><cms:editable name='page_title' type='text' label='Page Title'>Under Construction</cms:editable> | <cms:get_custom_field 'site_name' masterpage='globals.php' /></title>
    <meta name="description" content="Under Construction" />

<cms:embed 'header2.html' />
            
<div class="content">
    <h1><cms:show page_title /></h1>
    <cms:editable name='main_content' type='richtext' label='Main Content'>
        <p>We're sorry, but this page is currently under construction. Please check back later.</p>
    </cms:editable>
</div>

<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>
