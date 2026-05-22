


<? if($tip!='22' && $tip!='11') { ?>

      <script language="JavaScript">
      
     chess = {
                moveIt:false,
                moveTo:false
            };
            chess.init = function(){
                $('.cell').click(chess.onClick);
            };
            chess.onMove = function(data){
                // проверяем инфу полученую отскрипта - можно ли двигать
                // если можем - двигаем
                chess.moveTo.html(chess.moveIt.html());
                chess.moveIt.html('');
                chess.moveIt.removeClass('selected');
                chess.moveIt=false;
                chess.moveTo=false;
          };
            chess.onClick=function(e){
                e.preventDefault();
                e.stopPropagation();
                var cell = $(this);
                if (chess.moveIt===false){
                    // еще не выбрана фигура для перемещения
                    cell.addClass('selected');
                    chess.moveIt = cell;
              var  shto=chess.moveIt.attr('id'); 
       document.cookie = "hod_shto1=" + shto; 
   
           }else{
                    // если выбрана фигура
                    if(cell.html()==='<img src="picture/kletka-0.png">' | cell.html()>''){ 

 //var hod_shto1 =  document.cookie; 

        //      var  shto=chess.moveIt.attr('id'); 
      // document.cookie = "hod_shto1=" + shto; 
   
// var hod_kuda =  document.cookie; 
         
 //var  kuda=cell.attr('id');
//   document.cookie = "hod_kuda=" + kuda; 

                        // если новая клетка пустая значит можно двигать отправляем запрос
                        // отправку закоментировал, т.к. показыва функционал только на клиенте
//                      $.ajax({
//                          url:<скрипт_принимающий_информацию_о_ходе>,
//                          data:{from:chess.moveIt.attr('id'),to:cell.moveIt.attr('id')}, //передали в скрипт ячейки
//                          dataType:'json',    // формат в котором будут возвращены 
//                                              //данные от скрипта. json будет удобнее в данном случае
//                          success:chess.onMove // обработка данных поступивших от php скрипта
//   });
                        chess.moveTo=cell; // можно либо так, либо в $.ajax передать в качестве значения
                                            // параметра context, но поменять под это принимающую ф-ию
                      //  chess.onMove(); // эта строка не нужна если раскоментироватьблок выше
                                        // просто эмулирую что получен положительный ответ
 }
                    else if(cell.attr('id')===chess.moveIt.attr('id')){
                        //выбрана та же кетка - снимаем выделение
                        cell.removeClass('selected');
                        chess.moveIt = false;
                    } else {
                        // выбрана другая фигура
                      //  chess.moveIt.removeClass('selected');
                     //   chess.moveIt = false;
                     //   cell.addClass('selected');
                     //   chess.moveIt = cell;
                    };
                };
                return false;
            };
            $(document).ready(function(){
                chess.init();
            });
        </script>

<? } ?>