$(function() {
     // 入力できる行数の最大値
     let MAX_LINE_NUM = 10;
 
     // テキストエリアの取得
     let textarea = document.getElementById("message");
    
     // 入力ごとに呼び出されるイベントを設定
     textarea.addEventListener("input", function() {
    
       // 各行を配列の要素に分ける
       let lines = textarea.value.split("\n");
    
       // 入力行数が制限を超えた場合
       if (lines.length > MAX_LINE_NUM) {
    
         var result = "";
    
         for (var i = 0; i < MAX_LINE_NUM; i++) {
           result += lines[i] + "\n";
         }
    
         textarea.value = result;
       }
     }, false);

    });

         // 評価投稿の星
    $(function() {
      $('.range-group').each(function() {
        for (var i = 0; i < 5; i ++) {
          $(this).append('<a>');
        }
      });
      $('.range-group>a').on('click', function() {
         var index = $(this).index();
        $(this).siblings().removeClass('on');
         for (var i = 0; i < index; i++) {
            $(this).parent().find('a').eq(i).addClass('on'); 
         }
        $(this).parent().find('.input-range').attr('value', index);
      });
    });

    
     // 評価投稿の難しさ
    $(function() {
      $('.range-group-d').each(function() {
        for (var i = 0; i < 5; i ++) {
          $(this).append('<a>');
        }
      }); 
      $('.range-group-d>a').on('click', function() {
         var index = $(this).index();
        $(this).siblings().removeClass('on');
         for (var i = 0; i < index; i++) {
            $(this).parent().find('a').eq(i).addClass('on'); 
         }
        $(this).parent().find('.input-range-d').attr('value', index);
      });
    });

