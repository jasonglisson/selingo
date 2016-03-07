var swerve_related_internal_type		= jQuery('#swerve_related_internal_type');
var swerve_related_internal 			= jQuery('#swerve_related_internal');
var swerve_related_external 			= jQuery('#swerve_related_external');
var swerve_related_opens_in_new_window 	= jQuery('#swerve_related_opens_in_new_window');
var swerve_link_type_none				= jQuery('#swerve_link_type_none');
var swerve_link_type_internal			= jQuery('#swerve_link_type_internal');
var swerve_link_type_external			= jQuery('#swerve_link_type_external');
var swerve_related_internal_clone		= swerve_related_internal.clone();

swerve_related_internal_type.prop('disabled', true).addClass('disabled');
swerve_related_internal.prop('disabled', true).addClass('disabled');
swerve_related_external.prop('disabled', true).addClass('disabled');
swerve_related_opens_in_new_window.prop('disabled', true).addClass('disabled');

if( !swerve_link_type_none.prop('checked') ) 
{
	swerve_related_opens_in_new_window.prop('disabled', false).removeClass('disabled');

	if( swerve_link_type_internal.prop('checked') )
	{
		swerve_related_internal_type.prop('disabled', false).removeClass('disabled');
		swerve_related_internal.prop('disabled', false).removeClass('disabled');
	}
	else if( swerve_link_type_external.prop('checked') )
	{
		swerve_related_external.prop('disabled', false).removeClass('disabled');
	}
}

selected_post_type = swerve_related_internal.find('option:selected').data('post-type');
swerve_related_internal_type.find('option').each(function(){
	if( jQuery(this).val() == selected_post_type )
	{
		jQuery(this).prop('selected', true);
	}
	else
	{
		jQuery(this).prop('selected', false);
	}
});
swerve_related_internal.find('option').each(function(){
	if( jQuery(this).data('post-type') == selected_post_type )
	{
		jQuery(this).show();
	}
	else
	{
		jQuery(this).remove();
	}
});

swerve_link_type_none.bind('click', function(){
	swerve_related_internal_type.prop('disabled', true).addClass('disabled');
	swerve_related_internal.prop('disabled', true).addClass('disabled');
	swerve_related_external.prop('disabled', true).addClass('disabled');
	swerve_related_opens_in_new_window.prop('disabled', true).addClass('disabled');
});

swerve_link_type_internal.bind('click', function(){
	swerve_related_opens_in_new_window.prop('disabled', false).removeClass('disabled');
	swerve_related_internal_type.prop('disabled', false).removeClass('disabled');
	swerve_related_internal.prop('disabled', false).removeClass('disabled');
	swerve_related_external.prop('disabled', true).addClass('disabled');
});

swerve_link_type_external.bind('click', function(){
	swerve_related_opens_in_new_window.prop('disabled', false).removeClass('disabled');
	swerve_related_internal_type.prop('disabled', true).addClass('disabled');
	swerve_related_internal.prop('disabled', true).addClass('disabled');
	swerve_related_external.prop('disabled', false).removeClass('disabled');
});

swerve_related_internal_type.change(function(){
	var post_type = jQuery(this).val();
	swerve_related_internal.replaceWith( swerve_related_internal_clone.clone() );
	swerve_related_internal = jQuery('#swerve_related_internal');
	swerve_related_internal.find('option').each(function(){
		if( jQuery(this).data('post-type') != post_type && jQuery(this).val() != '' )
		{
			jQuery(this).remove();
		}
	});
});