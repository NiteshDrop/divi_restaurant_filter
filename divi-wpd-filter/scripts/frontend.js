// This script is loaded both on the frontend page and in the Visual Builder.
jQuery(document).ready(function($) {
	$('#wpd-filter-list').on('change', function() {
			var acfFilterValue = $(this).val();

			$.ajax({
					type: 'POST',
					url: ajaxurl, // Use WordPress' built-in AJAX URL
					data: {
							action: 'wpd-filter-list',
							acf_filter: acfFilterValue
					},
					beforeSend: function() {
							$('#custom-acf-filter-results').html('<p>Loading...</p>');
					},
					success: function(response) {
							$('#custom-acf-filter-results').html(response); // Update the results container with the filtered posts
					},
					error: function() {
							$('#custom-acf-filter-results').html('<p>An error occurred. Please try again.</p>');
					}
			});
	});
});