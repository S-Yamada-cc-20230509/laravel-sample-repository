document.addEventListener('DOMContentLoaded', () => {
    const slide = document.getElementById('slider');
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');
    const indicators = [document.getElementById('list1'), document.getElementById('list2'), document.getElementById('list3')];
    
    let currentIndex = 0;

    // 初期表示
    updateSliderAndIndicators();

    // クリックイベント
    next.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % indicators.length;
        updateSliderAndIndicators();
    });

    prev.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + indicators.length) % indicators.length;
        updateSliderAndIndicators();
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            updateSliderAndIndicators();
        });
    });

    function updateSliderAndIndicators() {
        slide.className = `slider_content slider${currentIndex + 1}`;
        indicators.forEach((indicator, index) => {
            indicator.style.backgroundColor = index === currentIndex ? '#000' : 'transparent';
        });
    }
});