<?php 

// BOF of Helpers

function var_exists( $data ) {
    if ( !isset( $data ) ) {
        return false;
    }

    if ( is_null( $data ) ) {
        return false;
    }

    if ( $data == '' ) {
        return false;
    }
    return true;
}

// EOF of Helpers
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_58f432780c84f',
	'title' => 'Section Content - Columns',
	'fields' => array (
		array (
			'key' => 'field_58f4328ac6c12',
			'label' => 'Column',
			'name' => 'cards',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Column',
			'sub_fields' => array (
				array (
					'key' => 'field_592fa1aec2731',
					'label' => 'Column Class',
					'name' => 'card_class',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_58f7f2e788a6a',
					'label' => 'Title',
					'name' => 'card_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_58f7f2f388a6b',
					'label' => 'Subtitle',
					'name' => 'card_subtitle',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_58f7f30888a6c',
					'label' => 'Graphics',
					'name' => 'card_image_or_icon',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'none' => 'None',
						'image' => 'Image',
						'icon' => 'Icon',
					),
					'default_value' => array (
						0 => 'none',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array (
					'key' => 'field_58f7d6f9713b3',
					'label' => 'Image',
					'name' => 'card_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_58f7f30888a6c',
								'operator' => '==',
								'value' => 'image',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_58f7f39d88a6e',
					'label' => 'Icon',
					'name' => 'card_icon',
					'type' => 'text',
					'instructions' => '(HTML code)',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_58f7f30888a6c',
								'operator' => '==',
								'value' => 'icon',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_58f7f3c488a6f',
					'label' => 'Text',
					'name' => 'card_text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array (
					'key' => 'field_58f7fe7090872',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'clone',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'clone' => array (
						0 => 'group_58f7feb27984f',
					),
					'display' => 'seamless',
					'layout' => 'block',
					'prefix_label' => 0,
					'prefix_name' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58f7feb27984f',
	'title' => 'Section Content - Links',
	'fields' => array (
		array (
			'key' => 'field_58f7fecf7812b',
			'label' => 'Link - Internal or External?',
			'name' => 'link_-_internal_or_external',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'internal' => 'Internal',
				'external' => 'External',
			),
			'default_value' => array (
				0 => 'internal',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_58f7ff127812c',
			'label' => 'Link',
			'name' => 'link_internal',
			'type' => 'page_link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58f7fecf7812b',
						'operator' => '==',
						'value' => 'internal',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
			),
			'taxonomy' => array (
			),
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array (
			'key' => 'field_58f7ff437812d',
			'label' => 'Link',
			'name' => 'link_external',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58f7fecf7812b',
						'operator' => '==',
						'value' => 'external',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58f318219b50f',
	'title' => 'Sections',
	'fields' => array (
		array (
			'key' => 'field_58f3d2691c9bc',
			'label' => 'Section',
			'name' => 'sections_all',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array (
				'58f3d274f38cb' => array (
					'key' => '58f3d274f38cb',
					'name' => 'general_section',
					'label' => 'General Section',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_58f3d2771c9bd',
							'label' => 'General Section',
							'name' => 'sections_general_section',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array (
								0 => 'group_58f3c226d3aa0',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 1,
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Section',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-landing.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58f3c226d3aa0',
	'title' => 'Single Section',
	'fields' => array (
		array (
			'key' => 'field_58f3cf0086fd6',
			'label' => 'Section ID',
			'name' => 'section_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_58f667da5ad39',
			'label' => 'Section Class',
			'name' => 'section_class',
			'type' => 'text',
			'instructions' => 'Optional',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_58f3ce2db04df',
			'label' => 'Background?',
			'name' => 'section_background',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'none' => 'None',
				'image' => 'Image',
				'color' => 'Color',
			),
			'default_value' => array (
				0 => 'none',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_58f3c245eadec',
			'label' => 'Backround Image',
			'name' => 'section_background_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58f3ce2db04df',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_58f3ce80045d4',
			'label' => 'Background Color',
			'name' => 'section_background_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58f3ce2db04df',
						'operator' => '==',
						'value' => 'color',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array (
			'key' => 'field_592fa79cd58af',
			'label' => 'Columns',
			'name' => 'section_columns',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array (
				0 => 'group_58f432780c84f',
			),
			'display' => 'seamless',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-landing.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

endif;