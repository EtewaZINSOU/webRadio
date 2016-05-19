/**
 * @package 	WordPress
 * @subpackage 	Dental Clinic
 * @version		1.0.0
 * 
 * Visual Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */
 

/* 
// For Change Fields in Shortcodes

var sc_name_new_fields = {};


for (var id in cmsmsShortcodes.sc_name.fields) {
	if (id === 'field_name') { // Delete Field
		delete cmsmsShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Delete Field Attribute
		delete cmsmsShortcodes.sc_name.fields[id]['field_attribute'];  
		
		
		sc_name_new_fields[id] = cmsmsShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Add/Change Field Attribute
		cmsmsShortcodes.sc_name.fields[id]['field_attribute'] = 'value';
		
		
		sc_name_new_fields[id] = cmsmsShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Add Field (before the field as found, add new field)
		sc_name_new_fields['field_name'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.sc_name_field_custom_bg_color, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		};
		
		
		sc_name_new_fields[id] = cmsmsShortcodes.sc_name.fields[id];
	} else { // Allways add this in the bottom
		sc_name_new_fields[id] = cmsmsShortcodes.sc_name.fields[id];
	}
}


cmsmsShortcodes.sc_name.fields = sc_name_new_fields; 
*/



/**
 * Blog Extend
 */

var blog_new_fields = {};


for (var id in cmsmsShortcodes.cmsms_blog.fields) {
	if (id === 'layout_mode') {
		cmsmsShortcodes.cmsms_blog.fields[id]['choises']['puzzle'] = composer_shortcodes_extend.blog_field_layout_mode_puzzle;
		
		
		blog_new_fields[id] = cmsmsShortcodes.cmsms_blog.fields[id];
	} else {
		blog_new_fields[id] = cmsmsShortcodes.cmsms_blog.fields[id];
	}
}


cmsmsShortcodes.cmsms_blog.fields = blog_new_fields;



/**
 * Quotes Extend
 */

var quotes_new_fields = {};


for (var id in cmsmsShortcodes.cmsms_quotes.fields) {
	if (id === 'mode') {
		quotes_new_fields[id] = cmsmsShortcodes.cmsms_quotes.fields[id];
		
		
		quotes_new_fields['type'] = { 
			type : 		'radio', 
			title : 	composer_shortcodes_extend.quotes_field_slider_type_title, 
			descr : 	composer_shortcodes_extend.quotes_field_slider_type_descr, 
			def : 		'box', 
			required : 	true, 
			width : 	'half', 
			choises : { 
						'box' : 	composer_shortcodes_extend.quotes_field_type_choice_box, 
						'center' : 	composer_shortcodes_extend.quotes_field_type_choice_center 
			}, 
			depend : 	'mode:slider' 
		};
	} else {
		quotes_new_fields[id] = cmsmsShortcodes.cmsms_quotes.fields[id];
	}
}


cmsmsShortcodes.cmsms_quotes.fields = quotes_new_fields;

