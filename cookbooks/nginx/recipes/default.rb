#
# Cookbook:: nginx
# Recipe:: default
#
# Copyright:: 2017, The Authors, All Rights Reserved.

include_recipe "apt"

package 'nginx' do
  action :install
end

service 'nginx' do
  action [ :enable, :start ]
end

# Default index
cookbook_file "/var/www/html/index.php" do
  source "index.php"
  mode "0644"

end

# html/css style sheet
cookbook_file "/var/www/html/stylebl.php" do
	source "stylebl.php"
	mode "744"
end

# Nginx default config
cookbook_file "/etc/nginx/sites-available/default" do
	source "default"
	mode "664"
end

# PHP-fpm configuration file, changes listner
cookbook_file "/etc/php5/fpm/pool.d/www.conf" do
	source "www.conf"
	mode "0644"
end
