var aj_ajax_demo = {"ajax_url":"http:\/\/localhost\/wooapp\/wp-admin\/admin-ajax.php","aj_demo_nonce":"fdc11f9d83"};


jQuery(document).ready( function(){
    jQuery('#add_trainer').on('click', function(e) {
        var complaintinput1=jQuery('#complaintinput1').val();
        var complaintinput2=jQuery('#complaintinput2').val();
        var complaintinput3=jQuery('#complaintinput3').val();
        var userplan=jQuery('#userplan').val();
        var pack=jQuery('#pack').val();
        var multi=jQuery('#multi').val();
        var complaintinput5=jQuery('#complaintinput5').val();
        // var switchery1=jQuery('#switchery1').val();
        // var switc=jQuery('#switc').val();
        // var switc1=jQuery('#switc1').val();
        var subscription=jQuery('#subscription').val();
        var level_one=jQuery('#level_one').val();
        var level_two=jQuery('#level_two').val();
        var level_three=jQuery('#level_three').val();
        var level_four=jQuery('#level_four').val();



        var show_trainer=jQuery('#show_trainer').val();
        alert(
                'Name:' + complaintinput1 + 
            ' , ' + 'Email:' + complaintinput2 + 
            ' , ' + 'Password:' + complaintinput3 +
            ' , ' + 'User Plan:' + userplan +
            ' , ' + 'Pack Type:' + pack +
            ' , ' + 'MultiChoice:' + multi + 
            ' , ' + 'Bio:' + complaintinput5 +
            ' , ' + 'Trainer:' + show_trainer +
            ' , ' + 'No Subscription:' + subscription +
            ' , ' + 'Level 1%:' + level_one +
            ' , ' + 'Level 1%:' + level_two +
            ' , ' + 'Level 1%:' + level_one +
            ' , ' + 'Level 1%:' + level_one +
            // ' , ' + 'Personal Link:' + switchery1 +
            // ' , ' + 'Online Coaching:' + switc +
            // ' , ' + 'All Privileges:' + switc1 +
        ); 
        
        // var post_type = jQuery(this).data( 'type' );  // Get post type via the 'data-type' attribute of the button.

        
        
        jQuery('#'+post_type+'_count').html('?');  // Clear existing value.

        e.preventDefault();

        jQuery.ajax({
            url : aj_ajax_demo.ajax_url, // Note that 'aj_ajax_demo' is from the wp_localize_script() call.
            type : 'post',
            data : {
                action : 'aj_ajax_demo_get_count',  // Note that this is part of the add_action() call.
                nonce : aj_ajax_demo.aj_demo_nonce,  // Note that 'aj_demo_nonce' is from the wp_localize_script() call.
                post_type : post_type
            },
            success : function( response ) {
                jQuery('#'+post_type+'_count').html(response);  // Change the div's contents to the result.
            },
            error : function( response ) {
                alert('Error retrieving the information: ' + response.status + ' ' + response.statusText);
                console.log(response);
            }
        });
    });
});