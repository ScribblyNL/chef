#
# Cookbook:: logrotate
# Recipe:: default
#
# Copyright:: 2017, The Authors, All Rights Reserved.

package 'logrotate' do
  action :install
end

# Logrotate
cookbook_file '/etc/cron.daily/logrotate.sh' do
	source 'logrotate.sh'
	mode "744"
end


