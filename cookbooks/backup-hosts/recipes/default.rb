#
# Cookbook:: backup-hosts
# Recipe:: default
#
# Copyright:: 2017, The Authors, All Rights Reserved.

include_recipe "apt"

package 'cron' do
  action :install
end

service 'cron' do
  action [ :enable, :start ]
end

package 'rsync' do
  action :install
end


cookbook_file "/etc/cron.daily/rsync.backup.sh" do
  source "rsync-backup.sh"
  mode "0744"
end
