<div class="faq-sect">
    <div class="faq-sect__container">
        <div class="faq-sect__title">
            <div class="def-title">Часто задаваемые вопросы</div>
            <div class="faq-sect__text">Мы делаем более 100 проектов в год, клиенты возвращаются к нам с новыми проектами.</div>
        </div>
        <div class="faq-sect__items">
            <div class="faq-sect__item">
                <div class="faq-sect__item-title" data-ym-goal="faq-click-bh-advantages">В чем преимущества brand hub?<span></span></div>
                <div class="faq-sect__item-text">
                    <p>Brand hub — это способ создать комплексный бренд для быстрого запуска.<br>
                        Мы предоставляем:
                    <ul>
                        <li>- сильный менеджмент, арт-директора по стратегии и дизайну, готовые команды тщательно отобранных специалистов отрасли;</li>
                        <li>- два варианта пакетов услуг с фиксированными услугами, стоимостью и сроками реализации;</li>
                        <li>- подготовка документов как для физических, так и для юридических лиц, передача всех прав;</li>
                        <li>- постоянная связь с менеджером проекта, видео-встречи с арт-директором до начала работ и на презентации дизайн-проекта.</li>
                    </ul>
                    </p>
                    </li>
                </div>
            </div>
            <div class="faq-sect__item">
                <div class="faq-sect__item-title" data-ym-goal="faq-click-how-to-order">Как заказать создание бренда?<span></span></div>
                <div class="faq-sect__item-text">
                    <p>Работа с нашим сервисом начинается со смарт-брифа, который поможет поставить задачу и обозначить ваши визуальные предпочтения. Бриф состоит из трёх интерактивных шагов, после прохождения которых вы сможете выбрать подходящий пакет услуг и внести предоплату. После мы незамедлительно начинаем работу над вашим брендом!</p>
                </div>
            </div>
            <div class="faq-sect__item">
                <div class="faq-sect__item-title" data-ym-goal="faq-click-costs-and-timing">Какие условия оплаты и сколько длится проект?<span></span></div>
                <div class="faq-sect__item-text">
                    <p>Оплатить выбранный пакет можно онлайн картой или по расчетному счету. Сроки реализации услуг составляют 3-4 недели. Срок реализации не включает время на согласование результатов работ.</p>
                </div>
            </div>
            <div class="faq-sect__item">
                <div class="faq-sect__item-title" data-ym-goal="faq-click-what-the-results">Какие услуги входят в работу и какой результат я получу<span></span></div>
                <div class="faq-sect__item-text">
                    <p>Вы выбираете пакет услуг исходя из потребностей вашего бизнеса. В каждый пакет первым этапом входит определение территории позиционирования.<br><br>

                        - Пакет "Брендинг+фирменный стиль" включает разработку 2-х вариантов логотипа и фирменного стиля с демонстрацией на 3-4 бренд-носителях. После выбора одного варианта дополнительно предоставляется гайд по стилю.
                        - Пакет "Брендинг+дизайн упаковки" включает разработку 2-х вариантов логотипа и дизайна упаковки бренда. После выбора одного варианта дополнительно создается дизайн и верстка всех сторон упаковки. <br><br>

                        По завершению проекта мы передаём все исходные файлы для выбранной концепции.
                    </p>
                </div>
            </div>
            <div class="faq-sect__item">
                <div class="faq-sect__item-title" data-ym-goal="faq-click-who-will-working">Кто будет работать над моим проектом?<span></span></div>
                <div class="faq-sect__item-text">
                    <p>На каждый проект мы собираем сильную команду профессионалов:<br>
                    <ul>
                        <li>эксперт по брендингу, который будет с вами на протяжении всего проекта;</li>
                        <li>креативные специалисты(опытные стратеги, дизайнеры и копирайтеры со всего мира, прошедшие предварительный отбор в базу brand-hub);</li>
                        <li>арт-директор, курирующий все креативные разработки;</li>
                        </p>
                </div>
            </div>
            <div class="faq-sect__item">
                <div class="faq-sect__item-title" data-ym-goal="faq-click-what-if-results-awful">Что делать, если предложенные варианты не понравятся?<span></span></div>
                <div class="faq-sect__item-text">
                    <p>Перед созданием дизайна, мы определяем территорию позиционирования бренда, а перед началом работ обязательно проводим онлайн встречу с арт-директором, который курирует проект. Также, мы предоставляем выбор из двух разных дизайн-концепций. Так что шансы того, что вам «не понравится», стремятся к нулю.</p>
                    <p>Мы тщательно следим за тем, чтобы по итогам заполнения брифа и онлайн встречи ни у кого не осталось вопросов. Как правило, все наши клиенты выбирают один из предложенных вариантов, и мы дорабатываем его по итогам совместной встречи и обсуждения.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $('.faq-sect__item-title').on('click', f_acc);

    function f_acc() {
        $('.faq-sect__item-text').not($(this).next()).stop().slideUp(300);
        $('.faq-sect__item-title').not($(this)).removeClass('active');
        $(this).toggleClass('active');
        $(this).next().slideToggle(300);
    }
</script>
@endpush
