const Article = require('../models').Article;
const User = require('../models').User;

module.exports = {
    createGet: (req, res) => {
        res.render('article/create')
    },

    createPost: (req, res) => {
        let articleArgs = req.body;

        let errorMsg = '';

        if (!req.isAuthenticated()) {
            errorMsg = 'You should be logged to make articles!';
        } else if (!articleArgs.title) {
            errorMsg = 'Invalid titile!';
        } else if (!articleArgs.content) {
            errorMsg = 'Invalid contend!';
        }

        if (errorMsg) {
            res.render('article/create', {error: errorMsg});
            return;
        }
        articleArgs.authorId = req.user.id;

        Article.create(articleArgs).then(article => {
            res.redirect('/')
        }).catch(err => {
            res.render('article/create', {error: err.message});
        });
    },

    details: (req, res) => {
        let articleId = req.params.id;
        Article.findById(articleId, {
            include: [
                {
                    model: User,
                }
            ]
        }).then(article => {
            res.render('article/details', article.dataValues)
        });
    },
    editGet: (req, res) => {
        let articleId = req.params.id;
        Article
            .findById(articleId,)
            .then(article => {
            res.render('article/edit', article.dataValues)
        });
    },
    editPost: (req, res) => {
        let articleId = req.params.id;
        let articleArgs = req.body;

        Article
            .findById(articleId)
            .then(article => {
                article
                .update(articleArgs)
                    .then(() => {
                        res.redirect('/');
                    })
        });
    },
    deleteGet: (req, res) => {
        let articleId = req.params.id;
        Article
            .findById(articleId,)
            .then(article => {
                res.render('article/delete', article.dataValues)
            });
    },
    deletePost: (req, res) => {
        let articleId = req.params.id;

        Article
            .findById(articleId)
            .then(article => {
                article
                    .destroy(articleId)
                    .then(() => {
                        res.redirect('/');
                    })
            });
    },
};

