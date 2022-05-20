
    // var maxWidth = 200;
    // var maxHeight = 500;

    $('.textarea__input').on('input', function(e){
    // Если появляется скролл и его ширина больше клиентской → увеличиваем ширину клиента
    // if (this.scrollWidth > this.clientWidth)
    //     this.style.width = this.scrollWidth + 'px';

    // Если ширина больше максимально допустимой → даем словам "ломаться" и фиксируем ширину
    // if (this.clientWidth >= maxWidth) {
    //     this.style.width = maxWidth;
    //     this.style.whiteSpace = 'pre-wrap';
    // }

    // // Если высота больше максимальной → нафиг ничЁ не надо
    // if (this.clientHeight > maxHeight)
    //     return;

    // Если появляется скролл и его высота клиентской → увеличиваем высоту клиента
    if (this.scrollHeight > this.clientHeight)
    this.style.height = this.scrollHeight + 'px';
})
