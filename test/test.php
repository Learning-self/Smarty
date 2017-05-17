<?php 
	// 引入smarty文件
	require ('../smarty/Smarty.class.php');
	// 实例化Smarty
	$smarty = new Smarty();
	/*关于Smarty的五配置两方法*/
	// 五配置
	$smarty->left_delimiter = '{';//左定界符
	$smarty->right_delimiter = '}';//右定界符
	$smarty->template_dir = 'tpl';//html模板的地址
	$smarty->compile_dir = 'template_c';//模板编译生成的文件
	$smarty->cache_dir = 'cache';//缓存文件
	// 以下是开启缓存的另两个配置，因为通常不用smarty的缓存机制，所以此项为了解
	$smarty->caching = true;//开启缓存
	$smarty->cache_lifetime = 120;//缓存时间


	$smarty->assign('title','hello,world');
	$smarty->display('test.tpl');

?>