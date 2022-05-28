$(document).on('click', (e) => {
    const ymGoal = e.target.getAttribute('data-ym-goal')
        ?? e.target.parentNode.getAttribute('data-ym-goal')
        ?? e.target.parentNode.parentNode.getAttribute('data-ym-goal');

    if (ymGoal === null) {
        return;
    }

    ym(51242554, 'reachGoal', ymGoal);
});
