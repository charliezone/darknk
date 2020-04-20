document.addEventListener('DOMContentLoaded', () => {
    const metaList = document.querySelectorAll('.hero-section-carousel .et_pb_slide .et_pb_slide_content a[rel="category tag"]:nth-last-child(1)')
    metaList.forEach(e => {
        const postMeta = e.parentNode
        postMeta.innerHTML = '/ ' + e.textContent
        postMeta.style.display = 'block'
    })
})