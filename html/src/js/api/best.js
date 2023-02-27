const numOfBest = 10;

/**
 * Get Top articles
 */
async function getTopArticle (n) {
    try {
        const response = await fetch(
            'https://hacker-news.firebaseio.com/v0/beststories.json'
        )
        const ids = await response.json()
        return ids[n]
    } catch (e) {
        console.error(e)
    }
}

/**
 * Get article data
 */
async function getArticleData (id) {
    try {
        const url = `https://hacker-news.firebaseio.com/v0/item/${id}.json`
        const response = await fetch(url)
        const articleData = await response.json()
        return articleData
    } catch (e) {
        console.error(e)
    }
}

/**
 * Add class-name & <a> to child of id identified
 */
function addLink (targetId, articleData) {
    const target = document.getElementById(targetId)

    if (target) {
        const link = document.createElement('a')
        link.href = articleData.url
        link.target = '_blank'
        link.innerText = articleData.title
        link.className = 'news__articles'
        target.appendChild(link)
    }
}

/**
 * init
 */
async function init () {
    for (let n = 0; n < numOfBest; n++) {
        const id = await getTopArticle(n)
        const article = await getArticleData(id)
        addLink('best', article)
    }
}


init()
