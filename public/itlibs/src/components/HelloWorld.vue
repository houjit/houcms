<template>
  <div class="hello">
    <hj-header></hj-header>
    <hj-column></hj-column>
    <div class="layui-container">
      <div class="layui-row layui-col-space15">
        <div class="layui-col-md8">
          <div class="fly-panel">
            <div class="fly-panel-title fly-filter">
              <a>置顶</a>
              <a href="#signin" class="layui-hide-sm layui-show-xs-block fly-right" id="LAY_goSignin" style="color: #FF5722;">去签到</a>
            </div>
            <hj-list></hj-list>
          </div>

          <div class="fly-panel" style="margin-bottom: 0;">
            <hj-filter></hj-filter>
            <hj-list></hj-list>
            <div style="text-align: center">
              <div class="laypage-main">
                <a href="/column/all/page/2/" class="laypage-next">更多求解</a>
              </div>
            </div>

          </div>
        </div>
        <div class="layui-col-md4">
          <hj-list-static></hj-list-static>
          <div class="fly-panel fly-signin">
            <div class="fly-panel-title">
              签到
              <i class="fly-mid"></i>
              <a href="javascript:;" class="fly-link" id="LAY_signinHelp">说明</a>
              <i class="fly-mid"></i>
              <a href="javascript:;" class="fly-link" id="LAY_signinTop">活跃榜<span class="layui-badge-dot"></span></a>
              <span class="fly-signin-days"></span>
            </div>
            <div class="fly-panel-main fly-signin-main">
              <button class="layui-btn layui-btn-danger" id="LAY_signin">今日签到</button>
              <span>可获得<cite>5</cite>飞吻</span>
              <!-- 已签到状态 -->
              <!--
              <button class="layui-btn layui-btn-disabled">今日已签到</button>
              <span>获得了<cite>20</cite>飞吻</span>
              -->
            </div>
          </div>
          <hj-ad-all></hj-ad-all>
          <div class="fly-panel fly-rank fly-rank-reply" id="LAY_replyRank">
            <h3 class="fly-panel-title">回贴周榜</h3>
            <h3 class="fly-panel-title">回贴周榜</h3>
            <dl>
              <!--<i class="layui-icon fly-loading">&#xe63d;</i>-->
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
              <dd>
                <a href="user/home.html">
                  <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><cite>贤心</cite><i>106次回答</i>
                </a>
              </dd>
            </dl>
          </div>
          <hj-list-hot></hj-list-hot>
          <hj-ad-ours></hj-ad-ours>
          <div class="fly-panel" style="padding: 20px 0; text-align: center;">
            <img src="//cdn.layui.com/upload/2017_8/168_1501894831075_19619.jpg" style="max-width: 100%;" alt="layui">
            <p style="position: relative; color: #666;">微信扫码关注 layui 公众号</p>
          </div>
          <hj-flink></hj-flink>
        </div>
      </div>
    </div>
    <hj-footer></hj-footer>
  </div>
</template>

<script>
import HjHeader from '@/components/common/HjHeader'
import HjFooter from '@/components/common/HjFooter'
import HjColumn from '@/components/common/HjColumn'
import HjList from '@/components/common/HjList'
import HjFilter from '@/components/common/HjFilter'
import HjListStatic from '@/components/common/HjListStatic'
import HjAdAll from '@/components/common/HjAdAll'
import HjListHot from '@/components/common/HjListHot'
import HjAdOurs from '@/components/common/HjAdOurs'
import HjFlink from '@/components/common/HjFlink'
export default {
  name: 'HelloWorld',
  components:{
    HjHeader,HjFooter,HjColumn,HjList,HjFilter,HjListStatic,HjAdAll,HjListHot,HjAdOurs,HjFlink
  },
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
