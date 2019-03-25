<template>
    <div class="fly-header layui-bg-black">
        <div class="layui-container">
            <a class="fly-logo" href="/">
                <img src="../../assets/logo.png" alt="layui">
            </a>
            <ul class="layui-nav fly-nav layui-hide-xs">
                <li class="layui-nav-item layui-this">
                    <a href="//www.houjit.com" target="_blank"><i class="iconfont icon-jiaoliu"></i>官网</a>
                </li>
                <li class="layui-nav-item">
                    <a href="//www.houjit.com/pro" target="_blank"><i class="iconfont icon-iconmingxinganli"></i>产品</a>
                </li>
                <li class="layui-nav-item">
                    <a href="//www.houjit.com/service" target="_blank"><i class="iconfont icon-ui"></i>服务</a>
                </li>
            </ul>
            <ul class="layui-nav fly-nav-user">
                <li class="layui-nav-item">
                    <a class="iconfont icon-touxiang layui-hide-xs" href="/user/login/"></a>
                </li>
                <li class="layui-nav-item">
                    <a href="/user/login/">登入</a>
                </li>
                <li class="layui-nav-item">
                    <a href="/user/reg/">注册</a>
                </li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="/app/qq/" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" title="QQ登入" class="iconfont icon-qq"></a>
                </li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="/app/weibo/" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" title="微博登入" class="iconfont icon-weibo"></a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HjHeader"
    }
</script>

<style scoped>

</style>