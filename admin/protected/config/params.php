<?php

// this contains the application parameters that can be maintained via GUI
return array(
	'storage'=>array(
		'root'=>'storage/',
		'avatars'=>'storage/avatars/',
	),
	// this is displayed in the header section
	'title'=>'Arakiri',
	// this is used in error pages
	'adminEmail'=>'admin@gamerbreed.com',
	// number of posts displayed per page
	'itemPerPage'=>10,
	'pageSize'=>5,
	'profilePageSize'=>15,
	// maximum number of tags that can be displayed in tag cloud portlet
	'tagCloudCount'=>20,
	// whether post comments need to be approved before published
	'commentNeedApproval'=>true,
	// the copyright information displayed in the footer section
	'copyrightInfo'=>'Copyright &copy; 2012 by Arakiri - Gamerbreed.',
);
