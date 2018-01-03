<?php
//对整个应用有效

return [
    'url_route_on' => true,
    'trace' => [
        'type' => 'html', // 支持 socket trace file
    ],
    //各模块公用配置
    'extra_config_list' => ['database', 'route', 'validate'],
    //临时关闭日志写入
    'log' => [
        'type' => 'test',
    ],

    'app_debug' => true,

     // | 会话设置
     'session'                => [
        // SESSION 前缀
        'prefix'         => 'think',
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true,
        
    ],
     // | 模板设置
     'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 视图基础目录，配置目录为所有模块的视图起始目录
        'view_base'    => '',
        // 当前模板的视图目录 留空为自动获取
        'view_path'    => '',
        // 模板后缀
        'view_suffix'  => 'html',
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '{',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end'   => '}',
    ],
 // 视图输出字符串内容替换
    'view_replace_str'       => [
      //  '__123__' => '一二三',
        //通过替换__CSS__来更改了css文件的路径
       // '__CSS__' => '/front/'
       // '__PUBLIC__'    =>'/public/static'
    ],
   
     'SHOW_PAGE_TRACE' =>true, //开启页面Trace
    
];
