<!DOCTYPE html>
<html>
    <!--{eval global $starttime,$querynum;$mtime = explode(' ', microtime());$runtime=number_format($mtime[1] + $mtime[0] - $starttime,6); $setting=$this->setting;$user=$this->user;$headernavlist=$this->nav;$regular=$this->regular;$toolbars="'".str_replace(",", "','", $setting['editor_toolbars'])."'";}-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset={TIPASK_CHARSET}"/>
        @if($setting['seo_title'] != '')
        <title>{{ $setting('seo_title') }}</title>
        @else
        <title><!--{if $navtitle}-->{$navtitle} - <!--{/if}-->{{ $setting['site_name'] }}</title>
        @endif
        <!--{/if}-->
        <!--{if isset($seo_description)}-->
        <meta name="description" content="{eval echo cutstr($seo_description,160,'')}" />
        <!--{else}-->
        <meta name="description" content="{$setting['site_name']}" />
        <!--{/if}-->
        <meta name="keywords" content="{$seo_keywords}" />
        <meta name="generator" content="Tipask {TIPASK_VERSION} {TIPASK_RELEASE}" />
        <meta name="author" content="Tipask Team" />
        <meta name="copyright" content="2014 tipask.com" />
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow" />
        <meta property="qc:admins" content="1157543261064101336375" />
        <meta property="wb:webmaster" content="21013a86963dbbe5" />
        <link rel="stylesheet" type="text/css" href="{SITE_URL}css/default/main.css" />
        <link rel="stylesheet" type="text/css" href="{SITE_URL}js/jquery-ui/jquery-ui.css" />
        <script type="text/javascript" src="{SITE_URL}js/jquery.js"></script>
        <script type="text/javascript">var g_site_url = "{SITE_URL}";
            var g_site_name = "{$setting['site_name']}";
            var g_prefix = "{$setting['seo_prefix']}";
            var g_suffix = "{$setting['seo_suffix']}";
            var g_uid = {$user['uid']};</script>
    </head>
    <body>
        <div class="js-fixed">
            <div class="top-bar">
                <div class="wrapper clearfix">
                    <ul class="tnav">
                        <!--{eval $headernavlist = $this->fromcache("headernavlist");}-->
                        <!--{loop $headernavlist $nav}-->
                        <!--{if $nav['type']==2 && $nav['available']}-->
                        <li>
                            <a title="{$nav['title']}" href="{$nav['url']}"  {if $nav['target']}target="_blank"{/if}><span text="hd-home" >{$nav['name']}</span></a>
                        </li>
                        <!--{/if}-->
                        <!--{/loop}-->
                    </ul>
                    <div class="tuser-top-inner">
                        <!--{if 0!=$user['uid']}-->
                        <ul class="tuser-login">
                            <li class="tuser-bar"><a href="{url user/default}">{$user['username']}</a></li>
                            <li id="myqa" class="tuser_menu">
                                <span class="ismore"><a target="_blank" href="{url user/ask/2}">我的问答</a><i class="ar-ico"></i></span>
                                <div class="tuser-more-list">
                                    <a target="_blank" href="{url user/ask/2}">我的提问</a>
                                    <a target="_blank" href="{url user/answer/1}">我的回答</a>
                                </div>
                            </li>
                            <li id="mymessage" class="tuser_menu">
                                <!-- 如果没有短消息的话 msg-ico 后面有个 msg-null -->
                                <!--{if ($user['msg_system']+$user['msg_personal'])>0}-->
                                <span class="ismore" id="mymessage_status"><a target="_self" href="{url message/personal}" class="msg-ico"></a><i class="ar-ico"></i></span>
                                <!--{else}-->
                                <span class="ismore" id="mymessage_status"><a target="_self" href="{url message/personal}" class="msg-ico msg-null"></a><i class="ar-ico"></i></span>
                                <!--{/if}-->
                                <div class="tuser-more-list tuser_msg">
                                    <a onclick="msgClear();" target="_blank" href="{url message/personal}">私人消息<span class="msg-num"  id="mymessage_personal"></span></a>
                                    <a onclick="msgClear();" target="_blank" href="{url message/system}">系统消息<span class="msg-num"  id="mymessage_system"></span></a>
                                    <a target="_blank" href="{url user/recommend}">为我推荐<span class="msg-num"  id="mymessage_recommend"></span></a>
                                </div>
                            </li>
                            <li class="tuser_menu">
                                <span class="ismore"><a target="_blank" href="{url user/profile}">账号</a><i class="ar-ico"></i></span>
                                <div class="tuser-more-list">
                                    <!--{if $user['groupid']<=3}-->
                                    <a href="{SITE_URL}index.php?admin_main">系统设置</a>
                                    <!--{/if}-->
                                    <a target="_blank" href="{url user/profile}">修改资料</a>
                                    <a href="{url user/logout}" class="tuser_logout">退出</a>
                                </div>
                            </li>
                        </ul>
                        <!--{else}-->
                        <ul class="tuser-login">
                            <li class="tuser-bar">
                                <span>您好，欢迎来到{$setting['site_name']}!&nbsp;&nbsp;[<a  href="javascript:void(0);" onclick="login();">请登录</a>]</span>|<span>[<a href="{url user/register}">免费注册</a>]</span>
                                <p style="display:none;" class="pub-login-tips">登录体验更流畅的互动沟通 <i></i><span class="top-close"></span></p>
                            </li>
                        </ul>
                        <!--{/if}-->
                    </div>
                </div>
            </div>
            <div class="search_mod">
                <div class="header clearfix">
                    <div class="logo">
                        <a href="{SITE_URL}">{$setting['site_name']}</a>
                    </div>
                    <div class="searchbox">
                        <form name="searchform"  action="{url question/search}" method="post">
                            <span class="round"><input autocomplete="off" maxlength="100" placeholder="{$setting['search_placeholder']}" class="js-sh-ipt input_key" tabindex="1" name="word" id="search-kw" value="{$word}" /></span>
                            <span class="button"><input type="button" id="search_btn" class="js-search-bt s_btn" value="搜索答案" /></span>
                            <span class="button"><input type="button" id="ask_btn" class="js-ask-bt s_btn" value="我要提问" /></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:92px;"></div>
        <div id="navbox">
            <div class="main-nav clearfix">
                <ul class="navlist">
                    <!--{loop $headernavlist $headernav}-->
                    <!--{if $headernav['type']==1 && $headernav['available']}-->
                    <li  <!--{if strstr($headernav['url'],$regular)}-->class="on"<!--{/if}-->>
                        <a title="{$headernav['title']}" href="{$headernav['format_url']}"><span text="hd-home" >{$headernav['name']}</span></a>
                    </li>
                    <!--{/if}-->
                    <!--{/loop}-->
                </ul>
                <p class="total">&nbsp;</p>
            </div>
        </div>
@yield('content')

<div class="wrapper">
    <div class="footer">
        <div class="bottom">
            <a href="{SITE_URL}" target="_blank">{$setting['site_name']}</a><span class="span-line">|</span>
            <a href="mailto:{$setting['admin_email']}" target="_blank">联系我们</a><span class="span-line">|</span>
            <a href="{url index/help}" target="_blank">使用帮助</a>
            <!--{if $setting['site_icp']}-->
            <span class="span-line">|</span><a href="http://www.miibeian.gov.cn" target="_blank">{$setting['site_icp']}</a>
            <!--{/if}-->
            <!--{if $setting['site_statcode']}-->
            {$setting['site_statcode']}
            <!--{/if}-->
        </div>
        <p>Powered by <a rel="nofollow" target="_blank" href="http://www.tipask.com/">Tipask v{TIPASK_VERSION}</a> &copy;2009-2014 <a rel="nofollow" target="_blank" href="http://www.tipask.com">tipask.com</a>，Processed in {$runtime} second(s), {$querynum} queries.</p>
    </div>
</div>
<a id="scrollUp" href="#top" title="" style="position: fixed; z-index: 2147483647; display: block;"></a>
<div class="usercard" id="usercard"><div class="usercard_in clearfix"><div class="loading"><img src='{SITE_URL}css/default/loading.gif' align='absmiddle' />&nbsp;加载中...</div></div></div>
<script type="text/javascript" src="{SITE_URL}js/jquery-ui/jquery-ui.js"></script>
<script type="text/javascript" src="{SITE_URL}js/jquery.scrollup.js"></script>
<script type="text/javascript" src="{SITE_URL}js/common.js"></script>
<script type="text/javascript">
                $.scrollUp({
                scrollName: 'scrollUp', // Element ID
                topDistance: '260', // Distance from top before showing element (px)
                topSpeed: 300, // Speed back to top (ms)
                animation: 'fade', // Fade, slide, none
                animationInSpeed: 200, // Animation in speed (ms)
                animationOutSpeed: 200, // Animation out speed (ms)
                scrollText: '', // Text for element
                activeOverlay: false  // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            });
</script>
</body>
</html>
