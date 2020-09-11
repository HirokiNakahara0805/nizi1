$(function(){
    $('.section').hide();
    $('.mon12345').hide();
    $('.tue12345').hide();
    $('.wed12345').hide();
    $('.thu12345').hide();
    $('.fri12345').hide();




    $('.secList').on('click',function(){
      $('.section').not($($(this).attr('href'))).hide();

      //曜日が押された時に、他の曜日の授業を隠す
      $('.mon12345').not($($(this).attr('href'))).hide();
      $('.tue12345').not($($(this).attr('href'))).hide();
      $('.wed12345').not($($(this).attr('href'))).hide();
      $('.thu12345').not($($(this).attr('href'))).hide();
      $('.fri12345').not($($(this).attr('href'))).hide();
      // フェードイン・アウトのアニメーション付で、表示・非表示を交互に実行する
      $($(this).attr('href')).fadeToggle(1000);

      // show を使うと、表示するだけ （ 同じボタンを何回押しても変わらない ）
      // $($(this).attr('href')).show();
    });

    $('.periodList').on('click',function(){
      //授業が押された時に、他の授業を隠す
      $('.mon12345').not($($(this).attr('href'))).hide();
      $('.tue12345').not($($(this).attr('href'))).hide();
      $('.wed12345').not($($(this).attr('href'))).hide();
      $('.thu12345').not($($(this).attr('href'))).hide();
      $('.fri12345').not($($(this).attr('href'))).hide();
   
    
      


      // フェーイン・アウトのアニメーション付で、表示・非表示を交互に実行する
      $($(this).attr('href')).fadeToggle(1000);
 

  });

});