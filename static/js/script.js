// function setEqualHeight(columns){
//     var tallestcolumn = 0;
//     columns.each(
//         function(){
//             currentHeight = $(this).height();
//             if(currentHeight > tallestcolumn){
//                 tallestcolumn = currentHeight;
//             }
//         }
//     );
//     columns.attr('style','height:' + tallestcolumn + 'px');
// }
// $(document).ready(function() {
//     setEqualHeight($(".portfolio_item img"));
// });

$(document).ready(function () {
    $('.header_burger').click(function (event) {
        $('.header_burger,.header_menu').toggleClass('active');
        $('body').toggleClass('lock')
    });
});

                        // определить глобальные переменные
var moveX = 5; // Расстояние, перемещаемое в направлении оси X
var moveY = 5; // расстояние в направлении оси Y
var stepX = 5; // Скорость перемещения по оси X изображения
var stepY = 6; // скорость перемещения по оси Y
var directionX = 1; // Установить направление перемещения изображения в направлении оси X 0: вправо 1: влево
var directionY = 1; // Установить направление перемещения изображения в направлении оси Y 0: вниз 1: вверх

function changePos() {
    var img = document.getElementById ("left_side_icons"); // Получить идентификатор слоя, где находится изображение
    var height = document.documentElement.clientHeight; // Высота браузера
    var width = document.documentElement.clientWidth; // ширина браузера
    var floatIcons = document.getElementsByClassName("float_icon");
    floatIcons.forEach(element => {
        var imgHeight = element.height; // Высота плавающего изображения
        var imgWidth = element.width; // ширина изображения
        // Установить плавающее изображение слева от браузера
        img.style.left = parseInt(moveX + document.documentElement.scrollLeft) + "px";
        // Установить плавающее изображение справа от браузера
        img.style.top = parseInt(moveY + document.documentElement.scrollTop) + "px";

        // Установить правило перемещения изображения по оси Y
        if(directionY == 0) {
                // Плавающая картинка движется вниз в направлении оси Y
            moveY += stepY;
        } else {
                // Плавающая картинка движется вверх в направлении оси Y
            moveY -= stepY;
        }
        if(moveY < 0) {
                // Если плавающее изображение всплывает наверх, устанавливаем, что изображение перемещается вниз в направлении оси Y
            directionY = 0;
            moveY = 0;
        }
        if(moveY > (height - imgHeight)) {
                // Если плавающая картинка плавает в нижней части браузера, установите изображение, чтобы двигаться вверх в направлении оси Y
            directionY = 1;
            moveY = (height - imgHeight);
        }

            // Установить правило перемещения изображения по оси X
        if(directionX == 0) {
            moveX += stepX;
        } else {
            moveX -= stepX;
        }
        if(moveX < 0) {
                // Если плавающее изображение плавает слева от браузера, установите изображение вправо в направлении оси X
            directionX = 0;
            moveX = 0;
        }
        if(moveX > (width - imgWidth)) {
                // Если плавающее изображение плавает в правой части браузера, установите изображение влево в направлении оси X
            directionX = 1;
            moveX = (width - imgWidth);
        }
    });
    
}
setInterval(changePos(), 50);
                       