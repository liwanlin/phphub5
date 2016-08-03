<footer class="footer">
      <div class="container">
        <div class="row footer-top">

          <div class="col-sm-5 col-lg-5">
              <h4>
                  IT零二三
                  {{--<img src="https://dn-phphub.qbox.me/assets/images/banner_transparent.png" alt="" width="160"/>--}}
                  {{--<span class="pull-right text-md padding-top-lg" style="padding-top: 18px;">--}}
                      {{--<a class="popover-with-html" data-content="查看源代码" target="_blank" style="padding-right:8px" href="https://github.com/summerblue/phphub5"><i class="fa fa-github-alt" aria-hidden="true"></i></a>--}}
                      {{--<a class="popover-with-html" data-content="关注 PHPHub 微博账号" target="_blank" style="padding-right:8px" href="http://weibo.com/phphub"><i class="fa fa-weibo" aria-hidden="true"></i></a>--}}
                      {{--<a class="popover-with-html" data-content="扫码关注微信订阅号：PHPHub" target="_blank" style="padding-right:8px" href="https://dn-phphub.qbox.me/uploads/images/201607/19/1/5KAh3F8EhD.jpg"><i class="fa fa-weixin" aria-hidden="true"></i></a>--}}
                      {{--<a class="popover-with-html" data-content="下载 Chrome 消息通知插件" target="_blank" style="padding-right:8px" href="https://chrome.google.com/webstore/detail/phphub-notifier/fcopfkdgikhodlcjkjdppdfkbhmehdon"><i class="fa fa-chrome" aria-hidden="true"></i></a>--}}
                  {{--</span>--}}
              </h4>
              <p class="padding-top-xsm">以重庆最专业互联网专业平台为目标，努力打造一个以技术分享，协同发展的社区。</p>
              <span style="font-size:0.9em"></span>
          </div>

          <div class="col-sm-6 col-lg-6 col-lg-offset-1">

              <div class="row">
                <div class="col-sm-3">
                  <h4>鸣谢</h4>
                  <ul class="list-unstyled">
                    <a href="http://phphub.org" target="_blank"><img src="https://dn-phphub.qbox.me/assets/images/banner_transparent.png" class="popover-with-html" width="98" data-placement="top" data-content="本站主要源码由 PHPhub 贡献"></a>
                  </ul>
                </div>

                  <div class="col-sm-3">
                    <h4>{{ lang('Site Status') }}</h4>
                    <ul class="list-unstyled">
                        <li>{{ lang('Total User') }}: {{ $siteStat->user_count }} </li>
                        <li>{{ lang('Total Topic') }}: {{ $siteStat->topic_count }} </li>
                        <li>{{ lang('Total Reply') }}: {{ $siteStat->reply_count }} </li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h4>其他信息</h4>
                    <ul class="list-unstyled">
                        <li><a href="/about">关于我们</a></li>
                        <li class="hide"><a href="/links">站点推荐</a></li>
                        {{--<li><a href="http://weibo.com/u/5963322692" target="_blank">微博账号</a></li>--}}
                        <li class="popover-with-html" data-content="重庆PHPQQ群">Q 群：53220527</li>
                    </ul>
                  </div>
                  {{--<div class="col-sm-3">--}}
                      {{--<h4>微信订阅号</h4>--}}
                    {{--<img class="image-border popover-with-html" data-content="扫码，或者搜索微信订阅号：PHPHub" src="https://dn-phphub.qbox.me/uploads/images/201607/19/1/5KAh3F8EhD.jpg" style="width:100px;height:100px;">--}}
                  {{--</div>--}}

                </div>

          </div>
        </div>
        <br>
        <br>
      </div>
    </footer>
