<?php
/*
 * 清博开放平台自定义
 * author sunyanyan
 * */

class Databus{
    //榜单账号
    private $app_key1 = '';
    private $app_secret1 = '';

    private $requesturl;



    /*
     *榜单自定义分组列表
     * 无
     * /myrank/weixin/group-list
     * */
    public function weixinGroupList(){
        $route = '/myrank/weixin/group-list';
        $rs = $this->request('',$route);
        return $rs;
    }

    /*
     * 查阅分组内的微信公众号
     * 无
     * /myrank/weixin/acct-list
     * */
    public function acctList($groupid){
        $params = [];
        $params['group_id'] = $groupid;
        $route = '/myrank/weixin/acct-list';
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 查阅分组内的微博号
     * 无
     * /myrank/weibo/acct-list
     * */
    public function wbacctList($groupid , $limit = 20){
        $params = [];
        $params['group_id'] = $groupid;
        $params['limit'] = $limit;
        $route = '/myrank/weibo/acct-list';
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 查阅分组内的头条号
     * 无
     * /myrank/toutiao/acct-list
     * */
    public function ttacctList($groupid){
        $params = [];
        $params['group_id'] = $groupid;
        $route = '/myrank/toutiao/acct-list';
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 微信公号最新传播指数
     * 无
     * /account/weixin/wci-latest
     * */
    public function wciLatest($wx_name){
        $params = [];
        $params['wx_name'] = $wx_name;
        $route = '/account/weixin/wci-latest';
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 微博账号最新传播指数
     * 无
     * /account/weibo/bci-latest
     * */
    public function bciLatest($weibo_uid){
        $params = [];
        $params['weibo_uid'] = $weibo_uid;
        $route = '/account/weibo/bci-latest';
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 获取用户自有分组内的榜单文章
     * 无
     * /myrank/weixin/group-article
     * */
    public function groupArticle($group_id,$day){
        $params = [];
        $params['group_id'] = $group_id;
        $params['day'] = $day;
        $route = '/myrank/weixin/group-article';
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 获取用户自有分组内的微博榜单文章
     * 无
     * /myrank/weibo/group-article
     * */
    public function wbgroupArticle($group_id,$day){
        $params = [];
        $params['group_id'] = $group_id;
        $params['day'] = $day;
        $route = '/myrank/weibo/group-article';
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 获取用户自有分组内的头条榜单文章
     * 无
     * /myrank/toutiao/group-article
     * */
    public function ttgroupArticle($group_id,$day){
        $params = [];
        $params['group_id'] = $group_id;
        $params['day'] = $day;
        $route = '/myrank/toutiao/group-article';
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     *微信最新榜单日期
     * 无
     * /myrank/weixin/latest
     * */
    public function weixinlatest(){
        $route = '/myrank/weixin/latest';
        $rs = $this->request('',$route);
        return $rs;
    }

    /*
     * 头条最新榜单日期
     * 无
     * /myrank/toutiao/latest
     * */
    public function toutiaolatest(){
        $route = '/myrank/toutiao/latest';
        $rs = $this->request('',$route);
        return $rs;
    }

    /*
     * 微信榜单
     * group_id int notnull
     * rank_date String notnull
     * /myrank/weixin/day 日榜
     * /myrank/weixin/week 周榜
     * /myrank/weixin/month 月榜
     * */
    public function weixinday($rank_date , $type , $group_id){
        if($type == 'day'){
            $route = '/myrank/weixin/day';
        }elseif ($type == 'week'){
            $route = '/myrank/weixin/week';
        }else{
            $route = '/myrank/weixin/month';
        }
        $params = [];
        $params['rank_date'] = $rank_date;
        $params['group_id'] = $group_id;
        $params['limit'] = 50;
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 头条榜单
     * group_id int notnull
     * rank_date String notnull
     * /myrank/toutiao/day 日榜
     * /myrank/toutiao/week 周榜
     * /myrank/toutiao/month 月榜
     * */
    public function toutiaoday($rank_date , $type , $group_id){
        if($type == 'day'){
            $route = '/myrank/toutiao/day';
        }elseif ($type == 'week'){
            $route = '/myrank/toutiao/week';
        }else{
            $route = '/myrank/toutiao/month';
        }
        $params = [];
        $params['rank_date'] = $rank_date;
        $params['group_id'] = $group_id;
        $params['limit'] = 50;
        $rs = $this->request($params,$route);
        return $rs;
    }


    /*
     *榜单自定义分组列表
     * 无
     * /myrank/weibo/group-list
     * */
    public function weiboGroupList(){
        $route = '/myrank/weibo/group-list';
        $rs = $this->request('',$route);
        return $rs;
    }

    /*
     *微博最新榜单日期
     * 无
     * /myrank/weibo/latest
     * */
    public function weibolatest(){
        $route = '/rank/weibo/latest';
        $rs = $this->request('',$route);
        return $rs;
    }

    /*
     * 微信榜单
     * group_id int notnull
     * rank_date String notnull
     * /myrank/weibo/day 日榜
     * /myrank/weibo/week 周榜
     * /myrank/weibo/month 月榜
     * */
    public function weiboday($rank_date , $type , $group_id){
        if($type == 'day'){
            $route = '/myrank/weibo/day';
        }elseif($type == 'week'){
            $route = '/myrank/weibo/week';
        }else{
            $route = '/myrank/weibo/month';
        }
        $params = [];
        $params['rank_date'] = $rank_date;
        $params['group_id'] = $group_id;
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 舆情统计
     * /pubsent/stats/index
     * */
    public function pubsentindex(){
        $route = '/pubsent/stats/index';
        $rs = $this->request('',$route);
        return $rs;
    }

    /*
     * 舆情走势
     * posttime_start	String	NOTNULL
     * posttime_end	    String	NOTNULL
     * /pubsent/stats/news-trend
     * */
    public function pubsentnewstrend($timestmp){
        $route = '/pubsent/stats/emotion-dist';
        $params = [];
        $params['posttime_start'] = date('Y-m-d',$timestmp);
        $params['posttime_end'] = date('Y-m-d 23:59:59',$timestmp);
        $params['media_type'] = 'wx,weibo,web,app,journal,forum,toutiao';
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 情感分布
     * posttime_start	String	NOTNULL
     * posttime_end	    String	NOTNULL
     * media_type	    String	NOTNULL
     * /pubsent/stats/emotion-dist
     * */
    public function pubsentemotiondist(){
        $route = '/pubsent/stats/emotion-dist';
        $params = [];
        $params['posttime_start'] = date('Y-m-d',time());
        $params['posttime_end'] = date('Y-m-d H:i:s',time());
        $params['media_type'] = 'wx,weibo,web,app,journal,forum,toutiao';
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 舆情方案数据检索
     * scheme_id	    Integer	NOTNULL
     * /pubsent/content/index
     * 根据方案id、文章发布及入库时间、发文媒体、提及省份、情感属性等参数筛选文章
     * */
    public function pubsentcontentindex($scheme_id){
        $route = '/pubsent/content/index';
        $params = [];
        $params['scheme_id'] = $scheme_id;
        $params['news_emotion'] = 'negative';
        $params['refer_province'] = '湖北';
        $params['limit'] = 10;
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 用户数据检索
     * /pubsent/stats/news-list
     * 根据方案id、文章发布及入库时间、发文媒体、提及省份、情感属性等参数筛选文章
     * */
    public function pubsentnewslist(){
        $route = '/pubsent/stats/news-list';
        $params = [];
        $params['media_type'] = 'wx,weibo,web,app,journal,forum,toutiao';
        $params['limit'] = 1;
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 微信公号详情
     * wx_name	String	NOTNULL
     *account/weixin/attribute
     * */
    public function attribute($wx_name){
        $route = '/account/weixin/attribute';
        $params = [];
        $params['wx_name'] = $wx_name;
        $rs = $this->request($params , $route);
        return $rs;
    }

    /*
     * 微信评论详情
     * wx_url	String	NOTNULL
     * /spread/gsdata/wx-comment-data
     * */
    public function wx_comment($wx_url){
        $route = '/spread/gsdata/wx-comment-data';
        $params = [];
        $params['wx_url'] = $wx_url;
        $rs = $this->request($params , $route);
        return $rs;
    }

    /*
     * 微信文章检索——按时间排序
     * wx_name	String	YES	---	微信号	rmrbwx
     * /weixin/article/search1
     * */
    public function wx_article($wx_name , $posttime_start , $posttime_end , $limit = 20 ,$page = 1){
        $route = '/weixin/article/search1';
        $params = [];
        $params['wx_name'] = $wx_name;
        $params['posttime_start'] = $posttime_start;
        $params['posttime_end'] = $posttime_end;
        $params['page'] = $page;
        $params['limit'] = $limit;
        $rs = $this->request($params , $route);
        return $rs;
    }

    /*
     * 微博文章检索——按发布时间排序
     * /weibo/article/search1
     * */
    public function weibo_article($weibo_uid , $posttime_start , $posttime_end , $limit = 20 ,$page = 1){
        $route = '/weibo/article/search1';
        $params = [];
        $params['weibo_uid'] = $weibo_uid;
        $params['posttime_start'] = $posttime_start;
        $params['posttime_end'] = $posttime_end;
        $params['page'] = $page;
        $params['limit'] = $limit;
        $rs = $this->request($params , $route);
        return $rs;
    }

    /*
     * 头条文章检索——按发布时间排序
     * /weibo/article/search1
     * */
    public function toutiao_article($toutiao_uid , $posttime_start , $posttime_end , $limit = 20 ,$page = 1){
        $route = '/toutiao/article/search1';
        $params = [];
        $params['toutiao_uid'] = $toutiao_uid;
        $params['posttime_start'] = $posttime_start;
        $params['posttime_end'] = $posttime_end;
        $params['page'] = $page;
        $params['limit'] = $limit;
        $rs = $this->request($params , $route);
        return $rs;
    }

    /*
     * 抖音最新榜单日期
     * 无
     * /rank/douyin/latest
     * */
    public function douyinlatest(){
        $route = '/rank/douyin/latest';
        $rs = $this->request('',$route);
        return $rs;
    }

    /*
     * 微信榜单
     * group_id int notnull
     * rank_date String notnull
     * /myrank/douyin/day 日榜
     * /myrank/douyin/week 周榜
     * /myrank/douyin/month 月榜
     * */
    public function douyinday($rank_date , $type , $group_id){
        if($type == 'day'){
            $route = '/myrank/douyin/day';
        }elseif($type == 'week'){
            $route = '/myrank/douyin/week';
        }else{
            $route = '/myrank/douyin/month';
        }
        $params = [];
        $params['rank_date'] = $rank_date;
        $params['group_id'] = $group_id;
        $params['limit'] = 50;
        $rs = $this->request($params,$route);
        return $rs;
    }

    /*
     * 查阅分组内的头条号
     * 无
     * /myrank/toutiao/acct-list
     * */
    public function douyinacctList($groupid){
        $params = [];
        $params['group_id'] = $groupid;
        $route = '/myrank/douyin/acct-list';
        $rs = $this->request($params,$route);
        return $rs;
    }



    private function request($param , $route){
        $this->requesturl = 'http://databus.gsdata.cn:8888/api/service';
        $paramStr = $this->ASCIIarr($param);

        $sign = md5($this->app_secret1.$paramStr[1].$this->app_secret1);
        $accesstoken = base64_encode($this->app_key1.':'.$sign.':'.$route);

        $headers[] = 'Content-Type:application/x-www-form-urlencoded; charset=utf-8';
        $headers[] = 'access-token: '.$accesstoken;
        if(!empty($param)){
            $this->requesturl .= '?'.$paramStr[0];
        }
        $res = $this->httpGetHeader($this->requesturl,$headers);
        return json_decode($res,1);
    }


    private function ASCIIarr($params = array()){
        if (!empty($params)) {
            $p = ksort($params);
            if ($p) {
                $str1 = '';
                $str2 = '_';
                foreach ($params as $k => $val) {
                    $str1 .= $k . '=' . $val . '&';
                }
                foreach ($params as $k => $val) {
                    $str2 .= $k . $val;
                }
                $str1 = rtrim($str1, '&');
                $str2 .= '_';
                return [$str1, $str2];
            }
        }else{
            return ['','__'];
        }
    }

    private function httpGetHeader($url,$header) {
        $oCurl = curl_init ();
        if (stripos ( $url, "https://" ) !== FALSE) {
            curl_setopt ( $oCurl, CURLOPT_SSL_VERIFYPEER, FALSE );
            curl_setopt ( $oCurl, CURLOPT_SSL_VERIFYHOST, FALSE );
        }

        curl_setopt( $oCurl, CURLOPT_NOSIGNAL,1);    //注意，毫秒超时一定要设置这个
        curl_setopt( $oCurl, CURLOPT_TIMEOUT_MS,18000);  //超时毫秒，cURL 7.16.2中被加入

        curl_setopt ( $oCurl, CURLOPT_URL, $url );
        curl_setopt ( $oCurl, CURLOPT_HTTPHEADER, $header );
        curl_setopt ( $oCurl, CURLOPT_RETURNTRANSFER, 1 );
        $sContent = curl_exec ( $oCurl );
        $aStatus = curl_getinfo ( $oCurl );
        curl_close ( $oCurl );
        if (intval ( $aStatus ["http_code"] ) == 200) {
            return $sContent;
        } else {
            return false;
        }
    }



}
