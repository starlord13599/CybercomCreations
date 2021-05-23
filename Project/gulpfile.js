const nodemon = require('gulp-nodemon');
const { exec } = require('child_process');
const { series } = require('gulp');
const { Input } = require('enquirer');

//A demo task
async function hello(done) {
	console.log('Hello,User');
	done();
}

//task for apidoc generation
async function genDoc(done) {
	return exec('apidoc -i ./apidocs/src -e ./apidocs/dest -o ./apidocs/dest');
}

//task for nodemon server
async function runServer(done) {
	return nodemon({
		script: 'app.js',
		ignore: [ 'apidocs/dest/*' ],
		// tasks: [ 'genDoc' ],
		done: done
	});
}

//git add --all command
async function gitAdd() {
	return exec('git add --all');
}

// git commit -m `message` command
async function gitCommit() {
	const commitMessage = await new Input({
		message: 'Please enter the commit you want to create'
	}).run();
	return exec(`git commit -m "${commitMessage}"`);
}

//git push
async function gitPush() {
	return exec('git push');
}

module.exports = {
	hello,
	genDoc,
	runServer,
	run: series(genDoc, runServer),
	gitSubmit: series(gitAdd, gitCommit, gitPush)
};
