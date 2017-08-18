#
# Cookbook:: pdnsd
# Recipe:: default
#
# Copyright:: 2017, The Authors, All Rights Reserved


package 'pdnsd' do
  action :install
end

# PDNSD default config
cookbook_file "/etc/pdnsd.conf" do
	source "pdnsd.conf"
	mode "664"
end

# Start PDNSD service config
cookbook_file "/etc/default/pdnsd" do
        source "pdnsd"
        mode "664"
end

service 'pdnsd' do
  action [ :enable, :start ]
end
