		jQuery(document).ready(function () {
jQuery('#upload_location').click(function () {
formfield = jQuery('#location_data');
tb_show('', 'media-upload.php?type=image&TB_iframe=true');
return false;
});
window.send_to_editor = function (html) {
imgurl = jQuery('img', html).attr('src');
jQuery('#location_data').val(imgurl);
tb_remove();
}
jQuery('#upload_logo').click(function () {
formfield = jQuery('#logo_data');
window.send_to_editor = window.send_to_editor_clone;
tb_show('', 'media-upload.php?type=image&TB_iframe=true');
return false;
});
window.send_to_editor_clone = function (html) {
imgurl = jQuery('img', html).attr('src');
jQuery('#logo_data').val(imgurl);
tb_remove();
}
});