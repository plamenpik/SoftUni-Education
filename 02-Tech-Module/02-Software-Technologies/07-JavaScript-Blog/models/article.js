const Sequelize = require('sequelize');

module.exports = function (sequelize) {
    const Article = sequelize.define('Article', {
        title: {
            type: Sequelize.STRING,
            allowNull: false,
            require: true,
        },
        image: {
            type: Sequelize.TEXT,
            allowNull: true,
            require: true,
        },
        content: {
            type: Sequelize.TEXT,
            allowNull: false,
            require: true,
        },
        date: {
            type: Sequelize.DATE,
            allowNull: false,
            require: true,
            defaultValue: Sequelize.NOW,
        },
    }, {
        timestamps: false
    });

    Article.associate = function (models) {
        Article.belongsTo(models.User, {
            foreignKey: 'authorId',
            targetKey: 'id',
        });
    };

    return Article;
};
