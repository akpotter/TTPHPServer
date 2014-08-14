<?php

// this contains the application parameters that can be maintained via GUI
return array(
	// this is displayed in the header section
	'title'=>'TT Open Source',
	// this is used in error pages
	'adminEmail'=>'mingxin@mogujie.com',
	// number of posts displayed per page
	'postsPerPage'=>10,
	// maximum number of comments that can be displayed in recent comments portlet
	'recentCommentCount'=>10,
	// maximum number of tags that can be displayed in tag cloud portlet
	'tagCloudCount'=>20,
	// whether post comments need to be approved before published
	'commentNeedApproval'=>true,
    //列表页面每页显示10条
    'perPage' => 10,
    'uploadPath' => dirname(Yii::app()->BasePath).'uploadImage',
    'site' => 'www.tt.tt',
    //创建群组时跟server端通信,发送群组内容
    'sendGroupInfodomain' => 'http://122.225.68.125:9800/query/createNormalGroup',


);
