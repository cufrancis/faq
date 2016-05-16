<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("settings")->insert([
          ['key'  =>  'site_name',  'value' =>  'Cufrancis问答网'],
          ['key'  =>  'meta_description', 'value' =>  ''],
          ['key'  =>  'meta_keywords',    'value' =>  ''],
          ['key'  =>  'seo_suffix',   'value' =>  ''],
          ['key'  =>  'date_format',  'value' =>  'Y/m/d'],
          ['key'  =>  'time_format',  'value' =>  'H:i'],
          ['key'  =>  'time_offset',  'value' =>  '8'],
          ['key'  =>  'time_diff',  'value' =>  '0'],
          ['key'  =>  'site_icp',   'value' =>  ''],
          ['key'  =>  'site_statcode',  'value' =>  ''],
          ['key'  =>  'allow_register', 'value' =>  '1'],
          ['key'  =>  'access_email',   'value' =>  ''],
          ['key'  =>  'censor_username',  'value' =>  ''],
          ['key'  =>  'maildefault',  'value' =>  'admin@domain.com'],
          ['key'  =>  'mailsend', 'value' =>  '1'],
          ['key'  =>  'mailserver', 'value' =>  'smtp.domain.com'],
          ['key'  =>  'mailport', 'value' =>  '25'],
          ['key'  =>  'mailauth', 'value' =>  '0'],
          ['key'  =>  'mailfrom', 'value' =>  'admin <admin@domain.com>'],
          ['key'  =>  'mailauth_username',  'value'  =>  'admin@domain.com'],
          ['key'  =>  'mailauth_password',  'value' =>  ''],
          ['key'  =>  'maildelimiter',      'value' =>  '0'],
          ['key'  =>  'mailsilent',         'value' =>  '0'],
          // 经验 金钱
          ['key'  =>  'exp_register', 'value' =>  '20'],
          ['key'  =>  'exp_login',    'value' =>  '2'],
          ['key'  =>  'exp_ask',      'value' =>  '5'],
          ['key'  =>  'exp_answer',   'value' =>  '2'],
          ['key'  =>  'exp_adopt',    'value' =>  '5'],
          ['key'  =>  'exp_message',  'value' =>  '-1'],

          ['key'  =>  'money_register', 'value' =>  '20'],
          ['key'  =>  'money_login',    'value' =>  '0'],
          ['key'  =>  'money_ask',      'value' =>  '0'],
          ['key'  =>  'money_asnwer',   'value' =>  '0'],
          ['key'  =>  'money_adopt',    'value' =>  '2'],
          ['key'  =>  'money_message',  'value' =>  '0'],

          ['key'  =>  'list_indexnosolve',  'value' =>  '10'],
          ['key'  =>  'list_indexcommend',  'value' =>  '5'],
          ['key'  =>  'list_indexreward', 'value' =>  '8'],
          ['key'  =>  'list_indexhottag', 'value' =>  '20'],
          ['key'  =>  'list_indexexpert', 'value' =>  '3'],
          ['key'  =>  'list_indexallscore', 'value' =>  '8'],
          ['key'  =>  'list_indexweekscore',  'value' =>  '8'],
          ['key'  =>  'list_default', 'value' =>  '20'],

          ['key'  =>  'rss_ttl',        'value' =>  '60'],
          ['key'  =>  'code_register',  'value'  =>  '0'],
          ['key'  =>  'code_login',     'value' =>  '0'],
          ['key'  =>  'code_ask',       'value' =>  '0'],
          ['key'  =>  'code_message',   'value' =>  '0'],
          ['key'  =>  'overdue_days',   'value' =>  '60'],
          ['key'  =>  'seo_on',         'value' =>  '0'],
          ['key'  =>  'seo_title',      'value' =>  ''],
          ['key'  =>  'seo_keywords',   'value' =>  ''],
          ['key'  =>  'seo_description',  'value' =>  ''],
          ['key'  =>  'seo_headers',      'value' =>  ''],
          ['key'  =>  'notify_mail',      'value' =>  '0'],
          ['key'  =>  'notify_message',   'value' =>  '1'],
          ['key'  =>  'theme',  'value' =>  'default'],  //主题地址
          ['key'  =>  'verify_question',  'value' =>  '0'],
          ['key'  =>  'index_life', 'value' =>  '1'], // 系统缓存时间
          ['key'  =>  'msgtpl_new_title',   'value' =>  '您的问题{wtbt}有了新回答！'],
          ['key'  =>  'msgtpl_new_content', 'value' =>  '你在{wzmc}上的提出的问题有了新回答！'],
          ['key'  =>  'msgtpl_adopt_title', 'value' =>  '恭喜，您对问题{wtbt}的回答已经被采纳！'],
          ['key'  =>  'msgtpl_adopt_content', 'value' =>  '你在{wzmc}上的回答内容被采纳！'],
          ['key'  =>  'msgtpl_close_title',   'value' =>  '抱歉，您的问题{wtbt}由于长时间没有处理，现已过期关闭！'],
          ['key'  =>  'msgtpl_close_content', 'value' =>  '您的问题{wtbt}由于长时间没有处理，现已过期关闭！'],
          ['key'  =>  'msgtpl_score_title',   'value' =>  '您对{wtbt}的回答有了新的评分！'],
          ['key'  =>  'msgtpl_score_content', 'value' =>  '您的回答{hdnr}有了新评分！'],

          ['key'  =>  'allow_outer',  'value' =>  '0'],
          ['key'  =>  'stopcopy_on',  'value' =>  '0'],
          ['key'  =>  'stopcopy_allowagent',  'value' =>  'webkit,opera,msie,compatible,baiduspider,google,soso,sogou,gecko,mozilla'],
          ['key'  =>  'stopcopy_stopagent',   'value' =>  ''],
          ['key'  =>  'stopcopy_maxnum',      'value' =>  '60'],
          ['key'  =>  'sum_onlineuser_time',  'value' =>  '30'],
          ['key'  =>  'sum_category_time',    'value' =>  '60'],
          ['key'  =>  'apend_question_num',   'value' =>  '5'],
          ['key'  =>  'register_clause',      'value' =>  '<p>&nbsp; &nbsp; &nbsp; &nbsp;当您申请用户时，表示您已经同意遵守本规章。 <br/>欢迎您加入本站点参加交流和讨论，本站点为公共论坛，为维护网上公共秩序和社会稳定，请您自觉遵守以下条款： <br/><br/>一、不得利用本站危害国家安全、泄露国家秘密，不得侵犯国家社会集体的和公民的合法权益，不得利用本站制作、复制和传播下列信息：<br/>　 （一）煽动抗拒、破坏宪法和法律、行政法规实施的；<br/>　（二）煽动颠覆国家政权，推翻社会主义制度的；<br/>　（三）煽动分裂国家、破坏国家统一的；<br/>　（四）煽动民族仇恨、民族歧视，破坏民族团结的；<br/>　（五）捏造或者歪曲事实，散布谣言，扰乱社会秩序的；<br/>　（六）宣扬封建迷信、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；<br/>　（七）公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；<br/>　（八）损害国家机关信誉的；<br/>　（九）其他违反宪法和法律行政法规的；<br/>　（十）进行商业广告行为的。<br/><br/>二、互相尊重，对自己的言论和行为负责。<br/>三、禁止在申请用户时使用相关本站的词汇，或是带有侮辱、毁谤、造谣类的或是有其含义的各种语言进行注册用户，否则我们会将其删除。<br/>四、禁止以任何方式对本站进行各种破坏行为。<br/>五、如果您有违反国家相关法律法规的行为，本站概不负责，您的登录论坛信息均被记录无疑，必要时，我们会向相关的国家管理部门提供此类信息。</p><p><br/></p><p><br/> </p><p><br/></p>'],
        ]);
    }
}
