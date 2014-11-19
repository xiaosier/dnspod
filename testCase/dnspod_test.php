<?php
require('dnspod.class.php');
$email = '****************';
$password = '****************';
$instance = new DNSPod($email, $password);
$user_info = $instance->userInfo();
//var_dump($user_info);
//get domain list
$domain_list = $instance->domainList();
//var_dump($domain_list);
$domain_id = $domain_list['domains'][0]['id'];
//Add record
$ret = $instance->createRecord($domain_id, 'testlazy', 'CNAME', 'skirt.sinaapp.com.', 600);
var_dump($ret);