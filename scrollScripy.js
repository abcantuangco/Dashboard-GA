var WebScroll = {
   sites: ['http://www.gmanetwork.com/news', 'http://www.gmanetwork.com/entertainment', 'http://www.gmanetwork.com'],
   datas: ['data1.php', 'data2.php', 'data3.php'],
   currentFrame: 0,
   loadFrame: function() {
       $('#content').html('<object width="100%" height="100%" data="' + this.sites[ this.currentFrame ] + '"></object>');
       $('#box-right').html('<object width="100%" height="100%" data="' + this.datas[ this.currentFrame ] + '"></object>');
   },
   scrollFrame: function() {
       var self = this,
           $scr = $('#scr')[0];

       (function scroll() {
           setTimeout(function(){
               if($scr.scrollTop < ($scr.scrollHeight - $scr.offsetHeight) ){
                   $scr.scrollTop = $scr.scrollTop + 1;
                   scroll();
               } else {
                   $scr.scrollTop = 0;
                   self.loopFrames();
               }
           }, 15);
       })();
   },
   loopFrames: function() {
       var siteSize = this.sites.length;

       if (this.currentFrame < (siteSize - 1)) {
           this.currentFrame++;
       } else {
           this.currentFrame = 0;
       }

       this.loadFrame();
       this.scrollFrame();
   },
   init: function() {
       this.loadFrame();
       this.scrollFrame();
   }
};

$(document).ready(function(){
   WebScroll.init();
});



