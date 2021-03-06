<?
$mod_name="nginx";
$mod_version="1.0";
$mod_path="/usr/share/fruitywifi/www/modules/$mod_name";
$mod_logs="$log_path/$mod_name.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_logs_panel="disabled";
$mod_panel="show";
$mod_type="service";
$mod_isup="ps auxww | grep -E 'nginx.+/modules/nginx/includes/nginx.conf' | grep -v -e grep";
$mod_alias="Nginx";
# EXEC
$bin_danger = "/usr/share/fruitywifi/bin/danger";
$bin_sudo = "/usr/bin/sudo";
$bin_nginx = "/usr/sbin/nginx";
$bin_awk = "/usr/bin/awk";
$bin_grep = "/bin/grep";
$bin_sed = "/bin/sed";
$bin_cat = "/bin/cat";
$bin_echo = "/bin/echo";
$bin_ln = "/bin/ln";
$bin_killall = "/usr/bin/killall";
$php5_fpm = "/usr/sbin/php5-fpm";
?>
