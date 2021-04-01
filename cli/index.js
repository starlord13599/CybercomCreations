#!/usr/bin/env node
const fs = require('fs').promises;
const folders = require('./folders.json');
const files = require('./files.json');
const chalk = require('chalk');

const { mkdir, writeFile } = fs;

function createFolders(folders) {
	console.log(chalk.yellow('Creating folders ....'));
	for (const folder of folders) {
		mkdir(folder.folderName).catch((err) => {
			console.log(err.message);
		});
		console.log(`Folder created - ${folder.folderName}`);
	}
	console.log(chalk.blue('Folder creation completd'));
}

function createFiles(files) {
	console.log(chalk.yellow('Creating files....'));
	for (const file of files) {
		writeFile(file.fileName, file.data).catch((err) => {
			console.log(err);
		});
		console.log(`File created - ${file.fileName}`);
	}
	console.log(chalk.blue('File creation completd'));
}

async function main() {
	return await Promise.all([ createFolders(folders), createFiles(files) ]);
}

main()
	.then(() => {
		console.log(chalk.green('setup is ready'));
	})
	.catch(() => {
		console.log(chalk.red('Something went wrong'));
	});
