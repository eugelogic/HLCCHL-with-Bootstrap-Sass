<?php
// This is the ACF version control file
// Every time I change something to the acf, I paste here the code I get from the "php export" feature.

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_hall-hire',
		'title' => 'Hall Hire',
		'fields' => array (
			array (
				'key' => 'field_59367859ee204',
				'label' => 'Top Section',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_593677c3ee201',
				'label' => 'Copy',
				'name' => 'hall_hire_copy',
				'type' => 'wysiwyg',
				'instructions' => 'Add copy to the main area.',
				'required' => 1,
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_593677eeee202',
				'label' => 'Map',
				'name' => 'hall_hire_map',
				'type' => 'text',
				'instructions' => 'Add the iframe tag with the following attributes:<br>
	<ul>
	<li>- width</li>
	<li>- height</li>
	<li>- frameborder</li>
	<li>- style</li>
	<li>- src</li>
	<li>- allowfullscreen</li>
	</ul>',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_593684592b6ac',
				'label' => 'Gallery',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5936875b38459',
				'label' => 'Gallery title',
				'name' => 'gallery_title',
				'type' => 'text',
				'instructions' => 'Add the title for the gallery.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5936846b2b6ad',
				'label' => 'Image gallery',
				'name' => 'image_gallery',
				'type' => 'wysiwyg',
				'instructions' => 'Select image for the gallery.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_59368c7cae630',
				'label' => 'CTA',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_59368c89ae631',
				'label' => 'CTA message',
				'name' => 'cta_message',
				'type' => 'text',
				'instructions' => 'Add message to cta.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59368cbdae632',
				'label' => 'CTA button text',
				'name' => 'cta_button_text',
				'type' => 'text',
				'instructions' => 'Add text to be shown within the button.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59368cdbae633',
				'label' => 'CTA button link',
				'name' => 'cta_button_link',
				'type' => 'page_link',
				'instructions' => 'Select a page you want the button to lead to.',
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '40',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'slug',
				6 => 'author',
				7 => 'format',
				8 => 'featured_image',
				9 => 'categories',
				10 => 'tags',
				11 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_homepage-hero-section',
		'title' => 'Homepage Hero Section',
		'fields' => array (
			array (
				'key' => 'field_5935675bab3f4',
				'label' => 'Image background',
				'name' => 'img_background',
				'type' => 'image',
				'instructions' => 'Select the background image for the hero section.<br>
	The image should be at least 1490 × 590.<br>
	Please do not use png but jpg of jpeg files as they are much lighter.',
				'save_format' => 'url',
				'preview_size' => 'large',
				'library' => 'all',
			),
			array (
				'key' => 'field_59356d4fbed21',
				'label' => 'Hero section title',
				'name' => 'hero_title',
				'type' => 'text',
				'instructions' => 'Add the title of the hero section.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59356da0bed22',
				'label' => 'Copy under the title',
				'name' => 'hero_copy',
				'type' => 'textarea',
				'instructions' => 'Add the copy to be shown under the title.',
				'default_value' => 'The Holly Lodge Community Centre offers a whole range of activities in a friendly,
	relaxed environment. We also offer space to hire for events.',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_59356f56bed27',
				'label' => 'Left button',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_59356dd0bed23',
				'label' => 'Left button text',
				'name' => 'left_btn_text',
				'type' => 'text',
				'instructions' => 'Text to be displayed inside the left button.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59356eb1bed25',
				'label' => 'Left button url',
				'name' => 'left_btn_url',
				'type' => 'page_link',
				'instructions' => 'Select the page you want the button to lead to.',
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_59356f6bbed28',
				'label' => 'Right button',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_59356e05bed24',
				'label' => 'Right button text',
				'name' => 'right_btn_text',
				'type' => 'text',
				'instructions' => 'Text to be displayed inside the right button.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59356f14bed26',
				'label' => 'Right button url',
				'name' => 'right_btn_url',
				'type' => 'text',
				'instructions' => 'Add the full url of the page you want the button to lead to.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '5',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'slug',
				7 => 'author',
				8 => 'format',
				9 => 'featured_image',
				10 => 'categories',
				11 => 'tags',
				12 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_nursery',
		'title' => 'Nursery',
		'fields' => array (
			array (
				'key' => 'field_59383ca3e0d15',
				'label' => 'Nursery copy',
				'name' => 'nursery_copy',
				'type' => 'wysiwyg',
				'instructions' => 'Add content to the Nursery page.',
				'required' => 1,
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_59383ccbe0d16',
				'label' => 'Nursery image',
				'name' => 'nursery_image',
				'type' => 'image',
				'instructions' => 'Select an image to be shown next to the copy.',
				'save_format' => 'object',
				'preview_size' => 'medium',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '56',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'slug',
				6 => 'author',
				7 => 'format',
				8 => 'featured_image',
				9 => 'categories',
				10 => 'tags',
				11 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_homepage-latest-news-section',
		'title' => 'Homepage Latest News Section',
		'fields' => array (
			array (
				'key' => 'field_593580daf2b9d',
				'label' => '"Latest News" top part',
				'name' => 'latest_top_part',
				'type' => 'wysiwyg',
				'instructions' => 'Add here below the latest news.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_59358117f2b9e',
				'label' => '"Latest News" bottom part',
				'name' => 'latest_bottom_part',
				'type' => 'wysiwyg',
				'instructions' => 'Add here below some more news.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '5',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_homepage-widgets',
		'title' => 'Homepage Widgets',
		'fields' => array (
			array (
				'key' => 'field_59358ebb6b47e',
				'label' => 'Left Widget',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_593588aa6bcf1',
				'label' => 'Left widget image',
				'name' => 'left_widget_image',
				'type' => 'image',
				'instructions' => 'Select the image for the left hand side widget.<br>
	Make sure that the image has a 1.3 ratio(width/height), ie (340 x 255)px.',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_5935895d6bcf2',
				'label' => 'Left widget title',
				'name' => 'left_widget_title',
				'type' => 'text',
				'instructions' => 'Add the title for the left hand side widget.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5935899c6bcf3',
				'label' => 'Left widget copy',
				'name' => 'left_widget_copy',
				'type' => 'textarea',
				'instructions' => 'Add the copy for the left hand side widget.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'none',
			),
			array (
				'key' => 'field_59358d98e22d6',
				'label' => 'Left widget button text',
				'name' => 'left_widget_button_text',
				'type' => 'text',
				'instructions' => 'Text to be displayed inside the button.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59358df6e22d7',
				'label' => 'Left widget link',
				'name' => 'left_widget_link',
				'type' => 'page_link',
				'instructions' => 'Select the page you want the button to lead to.',
				'required' => 1,
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_59358ed96b47f',
				'label' => 'Central Widget',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_59359180c7ecf',
				'label' => 'Central widget image',
				'name' => 'central_widget_image',
				'type' => 'image',
				'instructions' => 'Select the image for the central widget.<br>
	Make sure that the image has a 1.3 ratio(width/height), ie (340 x 255)px.',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_593591e5c7ed0',
				'label' => 'Central widget title',
				'name' => 'central_widget_title',
				'type' => 'text',
				'instructions' => 'Add the title for the central widget.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5935920dc7ed1',
				'label' => 'Central widget copy',
				'name' => 'central_widget_copy',
				'type' => 'textarea',
				'instructions' => 'Add the copy for the central widget.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'none',
			),
			array (
				'key' => 'field_59359247c7ed2',
				'label' => 'Central widget button text',
				'name' => 'central_widget_button_text',
				'type' => 'text',
				'instructions' => 'Text to be displayed inside the button.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59359273c7ed3',
				'label' => 'Central widget link',
				'name' => 'central_widget_link',
				'type' => 'page_link',
				'instructions' => 'Select the page you want the button to lead to.',
				'required' => 1,
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_59358ef26b480',
				'label' => 'Right Widget',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_593594d2f037b',
				'label' => 'Right widget image',
				'name' => 'right_widget_image',
				'type' => 'image',
				'instructions' => 'Select the image for the right hand side widget.<br>
	Make sure that the image has a 1.3 ratio(width/height), ie (340 x 255)px.',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_5935950af037c',
				'label' => 'Right widget title',
				'name' => 'right_widget_title',
				'type' => 'text',
				'instructions' => 'Add the title for the right hand side widget.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59359524f037d',
				'label' => 'Right widget copy',
				'name' => 'right_widget_copy',
				'type' => 'textarea',
				'instructions' => 'Add the copy for the right hand side widget.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'none',
			),
			array (
				'key' => 'field_5935953ff037e',
				'label' => 'Right widget button text',
				'name' => 'right_widget_button_text',
				'type' => 'text',
				'instructions' => 'Text to be displayed inside the button.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59359552f037f',
				'label' => 'Right widget link',
				'name' => 'right_widget_link',
				'type' => 'page_link',
				'instructions' => 'Select the page you want the button to lead to.',
				'required' => 1,
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '5',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
}
