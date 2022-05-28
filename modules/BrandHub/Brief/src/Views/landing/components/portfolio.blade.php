<div class="proj-sect">
    <div class="proj-sect__container">
        <div class="proj-sect__title">
            <div class="proj-sect__title-desc">Уже создано:</div>114 брендов в <span>47 сферах</span>
        </div>
        <div class="proj-sect__items">
            @foreach($portfolioProjects as $portfolioProject)
                <a
                    class="proj-sect__item @if(in_array($loop->index, [0, 3, 4])) proj-sect__item_big @endif"
                    href="{{ $portfolioProject->link }}"
                    target="_blank"
                    data-ym-goal="{{ $portfolioProject->ymGoalKey }}"
                >
                    <img class="lazy" data-src="{{ $portfolioProject->imagePath }}" alt=""/>
                </a>
            @endforeach
        </div>
        <div class="proj-sect__more">
            <a class="def-btn" href="/projects/" target="_blank" data-ym-goal="portfolio-click-all-list">
                <span>Все проекты</span>
            </a>
        </div>
    </div>
</div>
