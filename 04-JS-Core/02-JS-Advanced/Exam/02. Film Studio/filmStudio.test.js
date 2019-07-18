const FilmStudio = require('./filmStudio');
const assert = require('chai').assert;

describe('Film Studio tests', function () {
    let film;

    beforeEach(function(){
        film = new FilmStudio('SoftUni Pictures');
    });

    describe('Function makeMovie() tests', function () {
        it('should throw without parameters passed', function () {

            assert.throw(() => film.makeMovie(), 'Invalid arguments count')
        });

        it('should throw with one parameter passed', function () {

            assert.throw(() => film.makeMovie('asd'), 'Invalid arguments count')
        });

        it('should throw with wrong parameters types passed 2 strings', function () {

            assert.throw(() => film.makeMovie('Asd', 'Pesho'), 'Invalid arguments')
        });

        it('should throw with wrong parameters types passed 2 arrays', function () {

            assert.throw(() => film.makeMovie(['Asd'], ['Pesho', 'asd']), 'Invalid arguments')
        });

        it('should throw with wrong parameters types passed 2 numbers', function () {

            assert.throw(() => film.makeMovie(2, 2), 'Invalid arguments')
        });

        it('should create movie with correct data given', function () {
            assert.isObject(film.makeMovie('It', ['It', 'Me']));
        });

    });

    describe('Function casting() tests ', function () {
        it('test without a move inserted', function () {
            let test = film.casting('Me', 'It');
            assert.equal(test, `There are no films yet in ${film.name}.`);
        });

        it('test with a move inserted', function () {
            film.makeMovie('It', ['Alien', 'Me']);
            assert.equal(film.casting('Me', 'Alien'), `You got the job! Mr. Me you are next Alien in the It. Congratz!`);
        });

        it('test with a movie and no role ', function () {
            film.makeMovie('It', ['Alien', 'Me']);
            assert.equal(film.casting('Me', 'It'), `Me, we cannot find a It role...`);
        });

        it('Test with one parameter passed', function () {
            film.makeMovie('It', ['Alien', 'Human']);
            assert.equal(film.casting('Alien'), 'Alien, we cannot find a undefined role...');
        });

        it('Test with no parameter passed', function () {
            film.makeMovie('It', ['Alien', 'Human']);
            assert.equal(film.casting(), 'undefined, we cannot find a undefined role...');
        });
    });

    describe('Function lookForProducer() tests', function () {
        it('should throw error if the passed movie does not exists', function () {
            assert.throw(() => film.lookForProducer('It'));
        });

        it('should print info if the passed movie exists', function () {
            film.makeMovie('It', ['Alien', 'Human']);
            film.casting('Plamen','Alien');
            film.casting('Ivan','Human');
            let test = film.lookForProducer('It');
            assert.equal(test, 'Film name: It\nCast:\nPlamen as Alien\nIvan as Human\n');
        });
    });
});