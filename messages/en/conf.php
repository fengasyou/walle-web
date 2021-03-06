<?php

return [

    'detection' => 'Project Configuration Detection',
    'detecting' => 'detecting ...',

    'you are not active' => 'you ara not allowed to do this until you are passed by other manger ：）',
    'copy failed' => 'copy failed',
    'relation not exists' => 'the relation is not exists：(',
    'unknown relation type' => 'unknown relation type：(',
    'project not exists' => 'project not exists：(',

    'edit' => 'Project Configuration',
    'name' => 'Name:',
    'env' => 'Env:',
    'url' => 'Repo Url:',
    'username' => 'Username:',
    'password' => 'Password:',
    'deploy from' => 'Checkout Path',
    'excludes' => 'Excludes',
    'host' => 'Host',
    'targets' => 'Target Servers',
    'target user' => 'Executive User',
    'webroot' => 'webroot',
    'releases' => 'Release Path',
    'keep version' => 'Max Version',
    'servers' => 'Servers',
    'tasks' => 'Advanced Tasks',
    'branch/tag' => 'Branch/Tag:',
    'enable audit' => 'Audit:',
    'enable ansible' => 'Ansible: ',
    'enable open' => 'Enable:',
    'repo url tip' => 'git/svn. git url format:ssh-url, the ssh-key of the user of hosted server\'s php process should be add to git',
    'deploy from tip' => 'path for code in hosted server',
    'excludes tip' => 'Excluded files would be synchronized. one file/dir per line',
    'target user tip' => 'the operator of deployment. it should be the user of service, such as www of php process',
    'webroot tip' => 'the path is the remote directory where the application is gonna be copied. Don\'t create this directory, it would be a soft link auto made by walle, but you should make sure it\'s parent directory is right',
    'releases tip' => 'path of the directory where the releases are stored.',
    'keep version tip' => 'indicates how many releases will be saved, exceeding releases are deleted after the deployment is done, also it can\'t be rollback anymore',
    'servers tip' => 'servers section we configure a list of hosts (IPs or hostnames) to where the rsync will run against. one host per line,if host\'s ssh port is not 22, ip:port',
    'task help' => 'Built-in Vars is convenient while dealing with path:{WORKSPACE}：hosted server\'s deployment workspace or target servers\'s webroot.    {VERSION}：the current version of target servers',
    'task help head' => 'Assistant Vars',
    'pre_deploy tip' => 'job before checkout for preparation. one command per line',
    'post_deploy tip' => 'job for compile or adaptation after checkoutgit. java\'s compile，php\'s vendor, change config（mv config-test.php config.php). one command per line',
    'pre_release tip' => 'job between synchronize and switching version. such as a task of stop java\'s service(Double quotes will be escaped as \")',
    'post_release tip' => 'do some jobs for cleaning after deployment. such as clean cache, restart service(nginx、php、task).one command per line(Double quotes will be escaped as \")',
    'branch tip' => 'Recommended options of test，maybe you would chose branch+commit',
    'tag tip' => 'Recommended options of production',
    'audit tip' => 'development bill should be audited before deploying',
    'ansible tip' => 'use ansible to accelerate the speed of deploying, you need to have installed ansible on "Hosted Server"',
    'ansible hosts save error' => 'Unable to save ansible hosts file: "{path}"',
    'open tip' => "developer can't see this project while it is close",

    'group' => "Project's users",
    'relation' => 'Group of users',
    'search' => 'Find user by email',
    'add' => 'Add',
    'audit manager' => 'audit manager can audit deployment bill',
    'audit manager tip' => 'audit manager can audit deployment bill',
    'add audit manager' => 'Set audit manager',
    'cancel audit manager' => 'Cancel audit manger',
    'js set audit manager failed' => 'Set Failed: ',

    'index' => 'Project Configuration',
    'index search placeholder' => 'project name',
    'create project' => 'Configure A Project',
    'p_name' => 'Name',
    'p_env' => 'Env',
    'p_mode' => 'Mode',
    'p_audit' => 'Audit',
    'p_status' => 'Status',
    'p_opera' => 'Operation',
    'p_preview' => 'Preview',
    'p_detection' => 'Detection',
    'p_copy' => 'Copy',
    'p_member' => 'Members',
    'p_edit' => 'Edit',
    'p_delete' => 'Delete',
    'js delete project' => 'Sure to remove this project？',
    'js copy failed' => 'copy failed: ',
    'js copy project confirm' => 'Sure to copy this Project？',

];
